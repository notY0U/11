<?php

define('DIR', __DIR__.'/');


require DIR.'functions/bootstrap.php';


if (!isset($_GET['action'])) {
    auth();
    require DIR.'views/home.php';
}
elseif ($_GET['action'] == 'new_user') {
    auth();
    require DIR.'views/new.php';
}
elseif ($_GET['action'] == 'save_user') {
    header(saveUser());
    die();
}

elseif ($_GET['action'] == 'add_save') {
    add();
    header('Location: '.URL);
    die();
}

elseif ($_GET['action'] == 'add') {
    require DIR.'views/add.php';
}

elseif ($_GET['action'] == 'remove_save') {
    remove();
    header('Location: '.URL);
    die();
}

elseif ($_GET['action'] == 'remove') {
    require DIR.'views/remove.php';
}

elseif ($_GET['action'] == 'delete') {
    deleteUser();
    header('Location: '.URL);
    die();
}

elseif ($_GET['action'] == 'login') {
    require DIR.'views/login.php';
}

elseif ($_GET['action'] == 'do_login') {
    header(do_auth());
    die();
}

elseif ($_GET['action'] == 'logout') {
    header(logout());
    die();
}

