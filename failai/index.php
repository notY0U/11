<?php

$file = __DIR__.'/labas.txt';
if (file_exists($file)) {
    $homepage = file_get_contents($file);
    echo $homepage;
}
else {
    echo 'FAILO NERA ir NEBUS';
}

$file = __DIR__.'/visogero.txt';
file_put_contents($file, 'Viso gero!'.time(), FILE_APPEND);



$file = __DIR__.'/db.json';
$file2 = __DIR__.'/db.txt';
// $db =  [
//     ['Petras', 'Petraitis'],
//     ['Jonas', 'Jonaitis'],
//     ['Vardinis', 'Pats Tu Toks'],
// ];

// _dc($db);

// $json = json_encode($db);
// file_put_contents($file, $json);
$json = file_get_contents($file);
$db = json_decode($json);

_dc($db);

// $db[1][0] = 'Janina';
// $db[1][1] = 'Jone';
// $json = json_encode($db);
// file_put_contents($file, $json);

// $ser = serialize($db);

// _dc($ser);

// file_put_contents($file2, $ser);
// $ser = file_get_contents($file2);
// $db = unserialize($ser);


// _dc($db);

define('LEMPA', []);

var_dump(defined('LIUSTRA'));

echo FILE_APPEND;


