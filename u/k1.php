<?php
session_start();

if (isset($_POST['color'])) {
    $_SESSION['color'] = $_POST['color'];
    $_SESSION['kitas'] = [[['ha']]];
    header('Location: http://localhost/11/u/k1.php');
    die();
}

if (isset($_SESSION['color'])) { 
?>
    <style>
    body {
        background: <?= $_SESSION['color'] ?>;
    }
    </style>
<?php
}
?>

<form action="" method="post">
<input type="radio" name="color" value="red">red
<input type="radio" name="color" value="blue">blue
<input type="radio" name="color" value="yellow">yellow
<button type="submit">SET</button>
</form>


