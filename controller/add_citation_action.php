<?php

if (
    empty($_POST['author']) ||
    empty($_POST['content']) || 
    empty($_POST['chapter']) || 
    empty($_POST['date'])
    ) {
    include_once'view/add_citation_view.php';
}

else {
    include_once 'model/connexion_bdd.php';
    include_once 'model/citation_model.php';

    $author = htmlspecialchars($_POST['author']);
    $content = htmlspecialchars($_POST['content']);
    $chapter = htmlspecialchars($_POST['chapter']);
    $date = htmlspecialchars($_POST['date']);

    //On ajoute une citation
    add_citation($bdd, $author, $content, $chapter, $date);

    header('Location: index.php');
}