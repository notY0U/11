<?php

$count = rand(3, 10);

if(!empty($_POST)) {
    echo "Viso: ".$_POST['count'].", pazymeta: ".count($_POST['checkai'])." Pabaiga.";
}


?>

<form action="" method="post">

<?php
foreach(range(1, $count) as $val):
?>
<input type="checkbox" name="checkai[]"><?= range('A','Z')[--$val] ?>
<?php
endforeach;
?>
<input type="hidden" name="count" value="<?= ++$val?>">

<button type="submit">Daryt</button>


</form>


<?= ++$val ?>
<?php echo ++$val ?>