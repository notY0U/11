<?php

define('DIR', __DIR__.'/');


require DIR.'functions/bootstrap.php';


if (!isset($_GET['action'])) {
    require DIR.'views/home.php';
}
elseif ($_GET['action'] == 'new_user') {
    require DIR.'views/new.php';
}
elseif ($_GET['action'] == 'save_user') {
    saveUser();
    header('Location: '.URL);
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

elseif ($_GET['action'] == 'remove') {
    remove();
    header('Location: '.URL);
    die();
}

elseif ($_GET['action'] == 'delete') {
    deleteUser();
    header('Location: '.URL);
    die();
}

