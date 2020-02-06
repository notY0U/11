<?php

function add($mas) 
{
    $m = [];
    foreach(range(1, rand(10, 20)) as $val) {
        $m[] = rand(0, 10);
    }

    if (empty($mas)) {
        $last_key = count($m);
        $m[$last_key] = 0;
        return $m;
    }

    $last_key = count($m);
    $m[$last_key] = $mas;
    return $m;
}

$masyvas = [];
foreach(range(1, rand(2, 5)) as $val) {

    $masyvas = add($masyvas);
}

// _dc($masyvas);








function rand_arr()
{
    $m = [];
    foreach(range(0, rand(2, 3)) as $val) {
        $m[] = rand(0, 10);
    }
    $m[count($m)-1] = 0;
    return $m;
}


function re(&$arr)
{
    static $flag;
    $flag = 1;
    foreach($arr as $key => &$val) {
        if (is_array($val)) {
            re($val);
        }
    }
    if (!$flag) {
        return;
    }
    $flag = 0;
    $val = rand_arr();
}


$masyvas = rand_arr();
foreach(range(1, rand(5, 5)) as $val) {
    re($masyvas);
}


_dc($masyvas);

