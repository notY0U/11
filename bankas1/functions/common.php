<?php

function getData() : array
{
    if (!file_exists(DB)) {
        return [];
    }
    return json_decode(file_get_contents(DB), 1);
}

function setData(array $arr)
{
    file_put_contents(DB, json_encode($arr));
}

function saveUser()
{
    $db = getData();

    $pc = $_POST['pc'] ?? 0;

    $db[$pc]['name'] = $_POST['firstname'] ?? '';
    $db[$pc]['lastname'] = $_POST['lastname'] ?? '';
    $db[$pc]['acc'] = 12345678;

    if (isset($db[$pc]['amount'])) {
        $db[$pc]['amount'] = $_POST['amount'] ?? 0;
    }
    else {
        $db[$pc]['amount'] = 0;
    }
    setData($db);
    set_msg('Userio duomenys įrašyti', 'success');
}

function add()
{
    $db = getData();
    if (isset($db[$_GET['user']])) {
        $db[$_GET['user']]['amount'] += ($_POST['amount'] ?? 0);
        setData($db);
    }
    set_msg('Vartotojui <b>'. $db[$_GET['user']]['name'].'</b> pridėta '.$_POST['amount'].' pinigų', 'success');

}



function remove()
{
    $db = getData();
    if (isset($db[$_GET['user']])) {
        if ($db[$_GET['user']]['amount'] >= ($_POST['amount'] ?? 0)) {
            $db[$_GET['user']]['amount'] -= ($_POST['amount'] ?? 0);
            setData($db);
            set_msg('Iš Vartotojo <b>'. $db[$_GET['user']]['name'].'</b> atimta '.$_POST['amount'].' pinigų', 'success');
        }
        else {
            set_msg('Vartotojas <b>'. $db[$_GET['user']]['name'].'</b> neturi pakankamai pinigų. Neatimta '.$_POST['amount'].' pinigų', 'error');
        }


    }
    

}



function deleteUser()
{
    $db = getData();
    if (isset($db[$_GET['user']])) {
        if ($db[$_GET['user']]['amount'] > 0) {
            set_msg('Vartotojas <b>'. $db[$_GET['user']]['name'].'</b> Turi pinigų. Negalim trinti', 'error');
        }
        else {
            set_msg('Vartotojas <b>'. $db[$_GET['user']]['name'].'</b> sėkmingai ištrintas', 'success');
            unset($db[$_GET['user']]);
            setData($db);
        }
    }
}