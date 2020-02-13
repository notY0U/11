<?php

function css($name)
{
    return URL.'css/'.$name.'.css';
}

function flash()
{
    $_SESSION['flash'] = $_POST;
}

function get_flash()
{
    $flash = $_SESSION['flash'] ?? [];
    unset($_SESSION['flash']);
    return $flash;
}