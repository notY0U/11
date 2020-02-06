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

_dc($masyvas);