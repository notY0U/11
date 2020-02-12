<?php

function is_msg()
{
    return (isset($_SESSION['msg']));
}

function get_msg()
{
    $msg = $_SESSION['msg'];
    unset($_SESSION['msg']);
    return $msg;
}

function set_msg($msg, $type)
{
    $_SESSION['msg']['message'] = $msg;
    $_SESSION['msg']['type'] = $type;
}