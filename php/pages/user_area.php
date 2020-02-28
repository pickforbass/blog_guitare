<?php
session_start();
include '../page_structure/header.php';
include '../page_structure/conn_DB.php';

?>

<menu id="user-options">
    <ul>
        <?php if($_SESSION['rank']==1){
            ?>
            <li><p class="menu_item" id="create">Ecrire un article</p></li>
        <?php } ?>
        <?php if($_SESSION['rank'] <= 2){
            ?>
            <li><p class="menu_item" id="moderate">Gérer les commentaires</p></li>
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
<!--            <p><label for="art_img">Image </label><input type="art_img"></p>-->
            <input type = "submit">
        </form>

    </div>


    <div id="c-list" class="hide">

        <form action="#" method="get">
            <select name="articlelist" id="articlelist">
                <option value="1">Article 1</option>
                <option value="2">Article 2</option>
            </select>
            <select name="action" id="action">
                <option value="DELETE">Effacer</option>
                <option value="DELETE">Modifier</option>
            </select>
            <input type="submit">
        </form>
        <form action="#" method="get">
            <label for="art_title">Titre </label><input type="text" id="art_title">
            <label for="art_content">Titre </label><input type="art_content">
            <input type="text">
            <input type = "submit">
        </form>

    </div>


    <div id="c-moderate" class="hide">
        <form action="#" method="get">
            <select name="articlelist" id="articlelist">
                <option value="1">Article 1</option>
                <option value="2">Article 2</option>
            </select>
            <input type = "submit">
        </form>
        <div class="comment">
            <div class="esb">
                <div class="author">Auteur</div>
                <div class="comment-date">TS</div>
            </div>

            <div class="cont">
                Contenu
            </div>

        </div>
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
    echo $title;
    $incipit = $_POST['art_incipit'];
    $content =  $_POST['art_content'];
    $timestamp = date('Y-m-d H:i:s', time());
    $pic = 'ratV2.jpg';
    $id = $_SESSION['id'];
    echo $timestamp;
    $insert = "INSERT INTO article VALUES
                (NULL,
                '$title',
                '$incipit',
                '$content',
                '$pic',
                '$timestamp',
                '$id')";
    echo$insert;

    if($conn->query($insert)){
        echo "L'article a bien été envoyé.";
    }
} ?>
