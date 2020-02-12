<?php
require __DIR__ . '/header.php';
?>
<h1 style="color:yellow;">Bankas. Atimti pinigų.</h1>

<form action="<?= URL.'?action=remove_save&user='.($_GET['user'] ?? 0) ?>" method="POST">
    Pinigų suma:<br>
    <input type="text" name="amount" value="">
    <br><br>
    <input type="submit" value="Atimti">
</form>

<?php
require __DIR__ . '/footer.php';