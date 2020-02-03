<!-- Kartu sprendžiamas uždavinys.

Jonas ir Petras žaidžiai šaškėm. Petras surenka taškų kiekį nuo 10 iki 20, Jonas surenka taškų kiekį nuo 5 iki 25. Išvesti žaidėjų vardus su taškų kiekiu ir
 “Laimėjo: laimėtojo vardas”;
Taškų kiekį generuokite funkcija rand(); -->

<?php



do
{
    $Petras = rand(10, 20);
    $Jonas = rand(5, 25);

    if ($Jonas > $Petras) {
        continue;
    }

    echo "<h1> Petras: $Petras Jonas: $Jonas<h1>";

    if ($Petras >  $Jonas) {
        echo '<h2>Laimėjo Petras</h2>';
    }
    elseif ($Petras <  $Jonas) {
        echo '<h2>Laimėjo Jonas</h2>';
    }
    else {
        echo '<h2>Niekas NELaimėjo</h2>';
    }
} while($Petras !=  $Jonas);





