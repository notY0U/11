<?php


$masyvas = [];
$masyvas['kojinės'] = [];
$masyvas['kojinės']['zalios'] = 'visos žalios kojinės';
$masyvas['kojinės']['juodos'] = 'visos juodos kojinės';
$masyvas['kojinės']['margos'] = 'visos margos kojinės';
$masyvas['pirstines'] = [];
$masyvas['pirstines']['kailines'] = 'mano kailinės pirštinės';
$masyvas['pirstines']['odines'] = 'mano odinės pirštinės';
$masyvas['nosines'] = 'visos mano nosinės';

echo '<pre>';
print_r($masyvas);

$colors = ['red', 'green', 'blue', 'yellow'];
foreach ($colors as $value) {
   echo 'Reikšmė: ' . $value .'<br>';
}

for ($i=5; $i<9; $i++) {
    echo $i;
}

foreach(range('A','Z') as $val){
    echo $val;
}



print_r(range('A','G')[3]);


$mas = [];
$c = 0;
foreach(range(1, 10) as $val1) {
    foreach(range(1, 5) as $val2) {
        $mas[$val1][$val2] = $c++;
    }
}




_dc($mas);

$m1 = [];
foreach(range(1, 10) as $val1) {
    do {
        $reiksme = rand(1, 10);
    } while(in_array($reiksme, $m1));
    $m1[] = $reiksme;
}

_dc($m1);

$v = 'Summer';
$p =  'Glau';

if (strlen($v) > strlen($p)) {
    echo $p;
}
else {
    echo $v;
}
