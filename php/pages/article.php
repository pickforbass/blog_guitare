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
    <p class="article_content">
        <img src="../../IMG/<?= $row ['article_pic']; ?>" alt="" class="article_pic">
        <?= $row ['article_content']; ?>
    </p>
</div>

<form action="#" method="post" id="commentzone"<?php
if(!isset($_SESSION['user_id'])){
    echo "style: display=none;";
}
?>
>
    <p><label for="comment">Ton avis ? </label></p>
    <input type="textearea" id="comment">
    <input type="submit">

</form>

<section class="comments">
<?php
include "../page_structure/comments.php";
//print_r($row);
?>
</section>



