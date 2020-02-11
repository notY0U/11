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












//Refraktorintas 67 variantas. Funkcinio programavimo PVZ

function re(&$arr, $count, $range)
{
    static $flag, $rand_arr;
    $rand_arr = function() use ($range) {
        $m = [];
        foreach(range(1, rand(1, $range)) as $val) {
            $m[$val] = rand(0, 10);
        }
        $m[count($m)] = 0;
        return $m;
    };
    $flag = 1;
    if (!is_array($arr)) {
        $arr = $rand_arr();
    }
    foreach($arr as &$val) {
        if (is_array($val)) {
            re($val, $count, $range);
        }
    }
    if (!$flag) {
        return;
    }
    $flag = 0;
    $val = $rand_arr();
    if(--$count) {
        re($arr, $count, $range);
    }
}


// 5 -> masyvu skaicius
// 4 -> masyvo dydis

$masyvas=null;
re($masyvas, 5, 4);
_dc($masyvas);

