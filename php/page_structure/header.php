<?php

require"conn_DB.php";
global $conn;

if (isset ($_SESSION['username'])){
    if (isset($_POST['username'])){
        $_SESSION['username'] = $_POST['username'];
    }
}

if (isset($_POST['password'])){
    $pw = $_POST['password'];

}
$testlogin = $conn->query("SELECT * FROM `user` WHERE 1");


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
    <h1>Gin Fuzz &</br> Mojito-verdrive</h1>

    <?php
    if (!isset($SESSION['username'])){
        include "login_area.php";
    }
    ?>
</header>

