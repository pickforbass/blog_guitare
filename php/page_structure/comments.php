<?php

$sql = "SELECT c.*,u.user_name 
FROM comment as c
    LEFT JOIN user as u
    ON (c.user_user_id = u.user_id)
    WHERE c.article_article_id = $id";
$res = $conn->query($sql);

$crg = $res->fetch_assoc();

while ($row = $res->fetch_assoc()){
    $date = date('d-m-Y', strtotime($row['comment_timestamp']));
    ?>
<div class="comment">
    <div class="esb">
        <div class="author"><?= $row['user_name'] ?></div>
        <div class="comment-date"><?= $date ?></div>
    </div>

    <div class="cont">
        <?= $row['comment_content'] ?>
    </div>

</div>
  <?php
}
?>
</section>
<!--<div class="comment">-->
<!--    <div class="esb">-->
<!--        <div class="author">Auteur</div>-->
<!--        <div class="comment-date">Date</div>-->
<!--    </div>-->
<!---->
<!--    <div class="cont">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam asperiores corporis-->
<!--        distinctio dolore dolores eos et facilis, id illo incidunt iste itaque, molestiae nisi officiis-->
<!--        perferendis quibusdam ratione recusandae.-->
<!--    </div>-->
<!---->
<!--</div>-->
