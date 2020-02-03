<?php


$str = 
'2478sjdhfkjsd
2678sdfsdfds
25014sdfsdf
2778 jdhfkjsd
skjfhgkjsd 2999sdjkhfkjsdhfkja
';

preg_match_all('/(2\d{3})\D/m', $str, $matches);

// _d($matches);
//  _dc($matches);

// foreach($matches[1] as $key => $val) {
//     $matches[1][$key] = 'AAA';
// }


foreach($matches[1] as &$val) {
    $val = 'AAA';
}

// _dc($matches);

$color = ['red', 'green', 'blue', 'orange'];

foreach ($color as &$c) {
    // _dc($c);
}
unset($c);
echo "<br><br><br><br>";

foreach ($color as $c) {
    // _dc($color);
    // _dc($c);
}

_dc($color);

$masyvas = [
    ['a','d'],
    ['v','e'],
    ['a','c'],
    ['s','r'],
];

_dc($masyvas);

usort($masyvas, function($jonas, $petras){
    return -1*($jonas[0] <=> $petras[0]);
});

_dc($masyvas);








