<?php
require __DIR__ . '/header.php';
?>
<h1 style="color:yellow;">Bankas. Klientų sąrašas.</h1>
<table class="table">
<tr>
<th>Vardas</th>
<th>Pavardė</th>
<th>Asmens Kodas</th>
<th>Sąskaitos numeris</th>
<th>Likutis</th>
<th>Pridėti pinigų</th>
<th>Atimti pinigų</th>
<th>Ištrinti šitą klientą</th>
</tr>


<?php
foreach(getData() as $pc => $data)
{
    ?><tr><?php

    echo '<td>'.$data['name'].'</td>';
    echo '<td>'.$data['lastname'].'</td>';
    echo '<td>'.$pc.'</td>';
    echo '<td>'.$data['acc'].'</td>';
    echo '<td>'.$data['amount'].'</td>';
    echo '<td><a href="'.URL.'?action=add&user='.$pc.'">Pridėti Pinigų</a></td>';
    echo '<td><a href="'.URL.'?action=remove&user='.$pc.'">Atimti Pinigų</a></td>';
    echo '<td><a href="'.URL.'?action=delete&user='.$pc.'">Ištrinti Klientą</a></td>';

    ?></tr><?php
}
?>

</table>

<?php
require __DIR__ . '/footer.php';