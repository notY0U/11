<?php


function name_validator($name)
{
    return preg_match('/^[a-zA-ZąčęėįšųūžĄČĘĖĮŠŲŪŽ]{3,}$/', $name);
}