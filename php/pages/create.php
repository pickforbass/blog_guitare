<?php
session_start();

require_once "../page_structure/conn_DB.php";
global $conn;

require "../page_structure/header.php";
?>

<section>
    <p>S'inscrire</p>
    <form action="newuser.php" method="post">
        <p><label for="c_username">Votre nom d'utilisateur </label><input type="text" id="c_username" name="c_username"></p>
        <p><label for="c_pwd">Votre mot de passe </label><input type="password" id="c_pwd" name= "c_password"></p>
        <input type="submit" value = "S'inscrire">
    </form>
</section>


