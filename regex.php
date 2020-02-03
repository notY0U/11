<?php


$str = 
'2478sjdhfkjsd
1678sdfsdfds
25014sdfsdf
2478 jdhfkjsd
';

preg_match_all('/(2\d{3})(\D)/m', $str, $matches);

_dc($matches);




