<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= css('style') ?>">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-light bg-light">

<ul class="navbar-nav">
<li class="nav-item"><a href="<?= URL ?>">Pradinis</a></li>
<li class="nav-item"><a href="<?= URL.'?action=new_user' ?>">Pridėti naują vartotoją</a></li>
</ul>

</nav>
<?php
if (is_msg()) {
    require __DIR__ . '/msg.php';
}

