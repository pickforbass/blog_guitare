<?php
session_start();
$id = $_SESSION['id'];
include '../page_structure/header.php';
include '../page_structure/conn_DB.php';

$list = "SELECT article_title, article_id FROM article WHERE 1";
$res = $conn->query($list);

?>

<menu id="user-options">
    <ul>
        <?php if($_SESSION['rank']==1){
            ?>
            <li><p class="menu_item" id="create">Ecrire un article</p></li>
        <?php } ?>
        <li><p class="menu_item" id="list">Liste des articles<p class="menu_item"></p></li>
        <li><p class="menu_item" id="my-comms">Mes commentaires</p></li>
    </ul>
</menu>

<section id="container">

    <div id="c-create" class="hide">

        <form action="#" method="post">
            <p><label for="art_title">Titre </label><input type="text" id="art_title" name="art_title"></p>
            <p><label for="art_incipit">Incipit </label><input type="textarea" id="art_incipit" name ="art_incipit"></p>
            <p><label for="art_content">Contenu </label><input type="textarea" id="art_content" name ="art_content"></p>
            <input type = "submit">
        </form>

    </div>


    <div id="c-list">

        <form action="#" method="post">
            <select name="articlelist" id="articlelist">
                <?php
                while($row = $res->fetch_assoc()){?>
                <option value="<?= $row['article_id']?>"><?= $row['article_title'] ?></option>
                ?>
                <?php } ?>
            </select>
            <select name="action" id="action">
                <option type="submit" value="delete">Effacer</option>
                <option type="submit" value="update">Modifier</option>
            </select>
            <input type="submit">
        </form>

    </div>

    <div id="c-my-comms" class="hide">
        <div class="comment">
            <div class="esb">
                <div class="author">Auteur</div>
                <div class="comment-date">date</div>
            </div>
            <div class="cont">
                contenu
            </div>
        </div>
    </div>

    <div id="c-logout" class="hide">
    </div>
</section>

<script src="../../JS/app.js"></script>
</body>
</html>

<?php
// --- Send new article

if (isset($_POST['art_title']) || isset($_POST['art_content']))
{
    $title = $_POST['art_title'];
    $incipit = $_POST['art_incipit'];
    $content =  $_POST['art_content'];
    $timestamp = date('Y-m-d H:i:s', time());
    $pic = 'ratV2.jpg';
    $insert = "INSERT INTO article VALUES
                (NULL,
                '$title',
                '$incipit',
                '$content',
                '$pic',
                '$timestamp',
                '$id')";
    if($conn->query($insert)){
        echo "L'article a bien été envoyé.";
    }
}

// Update Articles

if (isset($_POST['articlelist']))
{
    $art_id = $_POST['articlelist'];
    $action = $_POST['action'];

    switch ($action){

        case"delete":
            $delete = "DELETE FROM article WHERE article_id=$art_id";
            $conn->query($delete);
            break;

        case"update": ?>
            <form action="#" method="post">
                <label for="art_title">Titre </label><input type="text" id="art_title" name="newtitle">
                <label for="art_content">Titre </label><input type="art_content" name="newcontent">
                <input type = "submit" value="Modifier">
            </form>
            <?php
            if (isset($_POST['newtitle'])){
                $newtitle = $_POST['newtitle'];
                $newcontent = $_POST['newcontent'];
                $update = "UPDATE `article`
                    SET 
                        article_title = $newtitle,
                        article_content = $newcontent,
                        user_user_id = $id,
                    WHERE
                        article_id = $art_id";

                $conn->query($update);
            }
            break;
    }
}




?>
