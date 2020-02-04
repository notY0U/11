<?php

function sudeti($vienas, $du = 23)
   {
      $rezultatas = $vienas + $du;
      return $rezultatas;
   }
  
   //Norint iškviesti šią funkciją, reikia paduoti du parametrus:
   echo sudeti(5);


   function vidurkis($r, ...$skaiciai)
   {
    // _dd($skaiciai); 
    $sudetis = 0;
      foreach ($skaiciai as $val)
    {
      $sudetis += $val;
    }
    $vidurkis = $sudetis / count($skaiciai);
    return $vidurkis;
   }
//    echo vidurkis([],1,2,3);


$kintamasis = 'Labas';
function labas($kintamasis)
{
    // global $kintamasis;
    echo $kintamasis;
}
 
labas($kintamasis);


function A()
{
    static $skaicius = 1;

    return ++$skaicius;
}



echo A();
echo A();
echo A();
echo A();
echo A();


echo '<br><br><br><br>';

function recursive($num)
{
    echo $num, '<br>';
    if($num < 10){
        //Kviečiame save. Padidiname numerį vienetu.
        return recursive($num + 1);
    }
    // echo "<br>Pabaiga $num";
}
$startNum = 1;
recursive($startNum);


$masyvas = [
    ['a','d'],
    ['v','e'],
    ['a','c'],
    ['s','r'],
];
usort($masyvas, function($a, $b){return $a[0] <=> $b[0];});
    
usort($masyvas, 'lyginimas');

function lyginimas($a, $b){
    return $a[0] <=> $b[0];
}

$greet = function($name)
{
    printf("Hello %s %s", $name, 'lala');
};
$greet('World');
$greet('PHP');


$valio = [];

$valio['rus'] = include __DIR__.'/rus.php';
$valio['fr'] = include __DIR__.'/fr.php';
$valio['en'] = include __DIR__.'/en.php';

_dc($valio);

foreach ($valio as $func){
    $func();
}


$result = 0;

$one = function()
{ var_dump($result); };
 
$two = function() use ($result)
{ var_dump($result); };
 
$three = function() use (&$result)
{ var_dump($result); };
 

 
$one();    // NULL: $result nepasiekiamas
$two();    // int(0): $result nukopijuojamas
$result++;$result++;
$three();    // int(1)


echo '<br>----------------<br><br><br>';

unset($func);

$func = function ($limit = NULL) use (&$func) { 
    static $current = 3; 
     
    // tikrinam eigą
    if ($current <= 0) { 
        //išeinam 
        return FALSE;
    } 
     
    // spausdinam reikšmę.
    echo "$current<br>"; 
     
    $current--; 
     
    $func(); 
 }; 
  //  Kviečiam funkciją
 $func();
 

echo '<br>REKURSIJA<br><br><br>';

function add($arr, $flag = 0)
{
    $arr[] = ($flag) ? add([], --$flag) : 'A';
    return $arr;
}
function makeArray($counter, $arr = [])
{
    return ($counter) ? add(makeArray(--$counter, $arr), $counter) : $arr;
}
$mas = [];
$mas = makeArray(10);
_dc($mas);













