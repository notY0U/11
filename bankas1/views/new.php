<?php
require __DIR__ . '/header.php';
extract(get_flash());
?>
<h1 style="color:yellow;">Bankas. Naujas klientas.</h1>

<form action="<?= URL.'?action=save_user' ?>" method="POST">
    Vardas:<br>
    <input type="text" name="firstname" value="<?= $firstname ?? '' ?>">
    <br>
    Pavardė:<br>
    <input type="text" name="lastname" value="<?= $lastname ?? '' ?>">
    <br>
    Asmens Kodas:<br>
    <input type="text" name="pc" value="">
    <br><br>
    <input type="submit" value="Sukurti">
</form>

<?php
require __DIR__ . '/footer.php';