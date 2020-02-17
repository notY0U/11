<?php
require __DIR__ . '/header.php';
?>
<h1 style="color:yellow;">Bankas. Pridėti pinigų.</h1>

<form action="<?= URL.'?action=add_save&user='.($_GET['user'] ?? 0) ?>" method="POST">
    Pinigų suma:<br>
    <input type="text" name="amount" value="">
    <br><br>
    <input type="hidden" name="csrf" value="<?= make_csrf() ?>">
    <input type="submit" value="Pridėti">
</form>

<?php
require __DIR__ . '/footer.php';