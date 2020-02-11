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
}

function add()
{
    $db = getData();
    if (isset($db[$_GET['user']])) {
        $db[$_GET['user']]['amount'] += ($_POST['amount'] ?? 0);
        setData($db);
    }

}

function deleteUser()
{
    $db = getData();
    if (isset($db[$_GET['user']])) {
        unset($db[$_GET['user']]);
        setData($db);
    }
}