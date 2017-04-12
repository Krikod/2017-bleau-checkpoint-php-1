<?php

if (
    empty($_POST['author']) |
    empty($_POST['content']) || 
    empty($_POST['chapter']) || 
    empty($_POST['date'])
    ) {
    include_once'../view/add_citation_view.php';
}

else {
    include_once '../model/connexion_bdd.php';

    $author = htmlspecialchars($_POST['author']);
    $content = htmlspecialchars($_POST['content']);
    $chapter = htmlspecialchars($_POST['chapter']);
    $date = htmlspecialchars($_POST['date']);
}

include_once '../model/citation_model.php'; // include(dirname(__FILE__).'/../vues/news.php'); ???

//On ajoute une citation
add_citation($bdd, $author, $content, $chapter, $date);
//compléter

// On inclut la view
header('Location: ../index.php');
