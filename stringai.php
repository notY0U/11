<?php

$str1 = 'lapai';
$str2 = 'ezys';
$str3 = 'ezys_';

if(strlen($str1) > strlen($str2)) {
    echo 'ilgesni lapai';
}
else {
    echo 'ilgesnis ezys';
}
echo '<br>';
echo md5('123');
echo '<br>';
echo md5('469cd8cec4de20c7149fc372f91e9064');
echo '<br>';
echo password_hash($str2, 1);
echo '<br>';
echo password_hash($str2, 1);
echo '<br>';
echo password_hash($str2, 1);
echo '<br>';
var_dump(password_verify($str3, '$2y$10$hFKNHk7c0NjFko8j4JgtO.4MDU1sNtXdaPFWc.mSPYGzU08NOP.vO'));

