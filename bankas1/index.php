<?php

define('DIR', __DIR__.'/');


require DIR.'functions/bootstrap.php';


if (!isset($_GET['action'])) {
    make_csrf();
    auth();
    require DIR.'views/home.php';
}
elseif ($_GET['action'] == 'new_user') {
    auth('supervisor','admin');
    require DIR.'views/new.php';
}
elseif ($_GET['action'] == 'save_user') {
    auth('supervisor','admin');
    header(saveUser());
    die();
}

elseif ($_GET['action'] == 'add_save') {
    auth('supervisor','admin');
    add();
    header('Location: '.URL);
    die();
}

elseif ($_GET['action'] == 'add') {
    auth('supervisor','admin');
    require DIR.'views/add.php';
}

elseif ($_GET['action'] == 'remove_save') {
    auth('supervisor','admin');
    remove();
    header('Location: '.URL);
    die();
}

elseif ($_GET['action'] == 'remove') {
    auth('supervisor','admin');
    require DIR.'views/remove.php';
}

elseif ($_GET['action'] == 'delete') {
    auth('supervisor','admin');
    deleteUser();
    header('Location: '.URL);
    die();
}

elseif ($_GET['action'] == 'login') {
    if (is_auth()) {
        header('Location: '.URL); 
    }
    require DIR.'views/login.php';
}

elseif ($_GET['action'] == 'do_login') {
    header(do_auth());
    die();
}

elseif ($_GET['action'] == 'logout') {
    auth();
    header(logout());
    die();
}

