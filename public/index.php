<?php

    require_once '../vendor/autoload.php';
    // use App\Users\Connection;
    // $connection = new Connection('', '' ,'');

    $hello_World = "Salut les amis";













?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> <?= $hello_World ?></h1>
    <?php require_once "../src/users/index.php" ?>
</body>
</html>