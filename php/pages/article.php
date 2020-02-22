<?php
require "../page_structure/header.php";
require "../page_structure/conn_DB.php";
global $conn;
$id= $_GET['id'];

$res =$conn->query("SELECT * FROM article WHERE article_id = $id");

$row = $res->fetch_assoc();
?>

<h2>
    <?= $row ['article_title']; ?>
</h2>

<div>
    <img src="../../IMG/<?= $row ['article_pic']; ?>" alt="" class="article_pic">
    <p class="article_content">
        <?= $row ['article_content']; ?>
    </p>
</div>

<?php
include "../page_structure/comments.php";
//print_r($row);
?>




