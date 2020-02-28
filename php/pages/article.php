<?php
session_start();
$uid= $_SESSION['id'];
require "../page_structure/header.php";
require "../page_structure/conn_DB.php";

$id= $_GET['id'];
$select = "SELECT * FROM article WHERE article_id = $id";
$selres =$conn->query($select);
$row = $selres->fetch_assoc();

?>

<h2>
    <?= $row ['article_title']; ?>
</h2>

<div>
    <p class="article_content">
        <img src="../../IMG/<?= $row ['article_pic']; ?>" alt="" class="article_pic">
        <?= $row ['article_content']; ?>
    </p>
</div>

<form action="#" method="post" id="commentzone" <?php if(!isset($_SESSION['id'])){echo "style: display=none;";}?> >

    <input type="textearea" id="comment" name="comment" placeholder="Ton avis">
    <input type="submit">

</form>

<section class="comments">
<?php
include "../page_structure/comments.php";
?>
</section>

<?php

if (isset($_POST['comment'])){
    $comment = $_POST['comment'];
    $ts = date('Y-m-d H:i:s', time());
    $insert = "INSERT INTO comment VALUES (NULL,
        '$comment',
        '$ts',
        '$uid',
        '$id')";
    $conn->query($insert);
}





