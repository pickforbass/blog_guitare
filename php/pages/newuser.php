<?php
require "../page_structure/header.php";
require_once "../page_structure/conn_DB.php";
global $conn;

if (isset($_POST['c_username']) && isset($_POST['c_password'])){
    $username = $_POST['c_username'];
    $password = password_hash($_POST['c_password'], PASSWORD_BCRYPT);
    $send = $conn->query("INSERT INTO user VALUES (NULL, '$username', '$password', '3')");
}
?>

<html>

<p>Félicitations vous êtes inscrits à Gin-Fuzz & Mojito-verdrive</p>


<a href="index.php">Accueil</a>

</html>





