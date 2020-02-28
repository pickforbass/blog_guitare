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
    <title>Gin-fuzz & Mojito-verdrive</title>
    <link rel="stylesheet" href="../../style/styles.css">
</head>
<body>

<header>
    <a href="../pages/index.php" id="maintitle"><h1>Gin Fuzz &</br> Mojito-verdrive</h1></a>

    <?php
    if (empty($_SESSION['id'])){
        include "login_area.php";
    }else{?>
        <div id="userarea">
            <a href="../pages/user_area.php"><p>Mon espace utilisateur</p></a>
            <p>Se déconnecter</p>
        </div>
    <?php
    $result = $conn->query("SELECT user_name, user_rank
                            FROM user
                            WHERE user_id =".$_SESSION['id']);
    $userdata = $result->fetch_assoc();
    $_SESSION['rank']= $userdata['user_rank'];
    $_SESSION['name'] = $userdata['user_name'];
    } ?>
</header>

