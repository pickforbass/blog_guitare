<?php
session_start();

require "../page_structure/conn_DB.php";
require "../page_structure/header.php";
global $conn;
$res = $conn->query("SELECT * FROM `article` WHERE 1");?>
<section>


<?php

while ($row = $res->fetch_assoc()){
    ?>
    <a href="article.php?id=<?= $row['article_id'] ?>">
        <div class="articles">
            <img src="../../IMG/<?= $row['article_pic'] ?>" alt="procoRAT" class="icon-art">
            <a href="article.php"></a>
            <div class="preview">
                <p class="title"><?= $row['article_title'] ?></p>
                <p class="content"><?= $row['article_incipit'] ?></p>
                <a href="article.php"><span>voir plus</span></a>
            </div>
        </div>
    </a>
<?php }; ?>
</section>

<?php
include "../page_structure/footer.php";
?>
