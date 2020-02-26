<?php

require"conn_DB.php";
global $conn;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, user-scalable=0">
    <title>Gin-fuzz & Mojito--verdrive</title>
    <link rel="stylesheet" href="../../style/styles.css">
</head>
<body>

<header>
    <a href="php/pages/index.php" id="maintitle"><h1>Gin Fuzz &</br> Mojito-verdrive</h1></a>

    <?php
    if (empty($SESSION['id'])){
        include "login_area.php";
    }
    ?>
</header>

