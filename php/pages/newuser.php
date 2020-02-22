<?php
require "../page_structure/header.php";
require_once "../page_structure/conn_DB.php";
global $conn;


$username = $_POST['c_username'];
$password = $_POST['c_password'];

$send = $conn->query("INSERT INTO user VALUES (NULL, '$username', '$password', '3')");
?>

<html>

<p>Félicitations vous êtes inscrits à Gin-Fuzz & Mojito-verdrive</p>


<a href="/php/pages/index.php">Accueil</a>

</html>





