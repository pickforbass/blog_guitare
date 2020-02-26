<?php
include '../page_structure/header.php';
include '../page_structure/conn_DB.php';

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<menu id="user-options">
    <ul>
        <li id="create">Ecrire un article</li>
        <li id="list">Liste des articles</li>
        <li id="moderate">Gérer les commentaires</li>
        <li id="my-comms">Mes commentaires</li>
        <li id = 'logout'>Déconnexion</li>
    </ul>
</menu>

<section id="container">

    <div id="c-create" class="hide">

        <form action="#" method="get">
            <p><label for="art_title">Titre </label><input type="text" id="art_title"></p>
            <p><label for="art_content">Contenu </label><input type="art_content"></p>
            <p><label for="art_img">Image </label><input type="art_img"></p>
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