<?php

if (
    empty($_POST['author']) |
    empty($_POST['content']) || 
    empty($_POST['chapter']) || 
    empty($_POST['date'])
    ){
    echo "Merci de remplir tous les champs";
}
else{
    include_once '../model/connexion_bdd.php';

    $author = htmlspecialchars($_POST['author']);
    $content = htmlspecialchars($_POST['content']);
    $chapter = htmlspecialchars($_POST['chapter']);
    $date = htmlspecialchars($_POST['date']);

    $query = $bdd->prepare('INSERT INTO citation (author, content, chapter, date) VALUES (?, ?, ?, ?)');
    $query->execute(array(
        $author,
        $content,
        $chapter,
        $date,
        ));
    $query->closeCursor();
}

header('Location: ../index.php');