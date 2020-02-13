<?php
require __DIR__ . '/header.php';
?>
<h1 style="color:yellow;">Bankas. Prisijungti.</h1>

<form action="<?= URL.'?action=do_login' ?>" method="POST">
    Prisijungimo vardas:<br>
    <input type="text" name="email" value="">
    <br>
    Slaptažodis:<br>
    <input type="password" name="pass">
    <br><br>
    <input type="submit" value="Prisijungti">
</form>

<?php
require __DIR__ . '/footer.php';