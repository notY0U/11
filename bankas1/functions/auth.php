<?php

function auth(...$role)
{
    if (!isset($_SESSION['user'])) {
        header('Location: '.URL.'?action=login');
        die();
    }
    if (!empty($role)) {
        if (empty(array_intersect($role, $_SESSION['user']['role']))) {
            set_msg('Vartotojas neturi teisių', 'warning');
            header('Location: '.URL);
            die();
        }
    }
}

function logout()
{
    if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
        set_msg('Viso gero', 'success');
        header('Location: '.URL.'?action=login');
        die();
    } 
}

function is_auth()
{
    if (isset($_SESSION['user'])) {
       return $_SESSION['user']['name'];
    }
    return false;
}

function do_auth()
{
    
    
    $users = require DIR. 'db/user.php';
    $email = $_POST['email'];


    if (!isset($users[$email])) {
        set_msg('Vartotojo nėra arba prastas slaptažodis', 'warning');
        flash();
        return 'Location: '.URL.'?action=login';
    }

    $user_psw = md5($_POST['pass']);
    if ($users[$email]['pass'] !== $user_psw) {
        set_msg('Vartotojo nėra arba prastas slaptažodis', 'warning');
        flash();
        return 'Location: '.URL.'?action=login';
    }

    $_SESSION['user'] = $users[$email];
    $_SESSION['user']['email'] = $email;
    set_msg('Sveiki atvykę, '.$_SESSION['user']['name'], 'success');
    return 'Location: '.URL;
    
    
    

}

function make_csrf()
{
    $salt = 'jedfiej9230743kjsdah';
    return md5($_SERVER['HTTP_USER_AGENT'].$salt);
}

function check_csrf($csrf)
{
    return ($csrf === make_csrf());
}