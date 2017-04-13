<?php 
if (!empty($_GET['id']) && is_numeric($_GET['id'])) {
    if (
        empty($_POST['author']) &&
        empty($_POST['content']) && 
        empty($_POST['chapter']) && 
        empty($_POST['date'])
        ) {
        include_once 'model/connexion_bdd.php';
        include_once 'model/citation_model.php';
        $id = $_GET['id'];
        get_one_citation($bdd, $id);
        include_once 'view/update_citation_view.php';
    } else {
        update_citation($bdd, $author, $content, $chapter, $date);

        $author = htmlspecialchars($_POST['author']);
        $content = htmlspecialchars($_POST['content']);
        $chapter = htmlspecialchars($_POST['chapter']);
        $date = htmlspecialchars($_POST['date']);

        header('Location: index.php');
    } 
}







/*

 $author = htmlspecialchars($_POST['author']);
    $content = htmlspecialchars($_POST['content']);
    $chapter = htmlspecialchars($_POST['chapter']);
    $date = htmlspecialchars($_POST['date']);
if (
    !empty($_GET['author']) ||
    !empty($_GET['content']) || 
    !empty($_GET['chapter']) || 
    !empty($_GET['date'])
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

    //On édite une citation
    update_citation($bdd, $author, $content, $chapter, $date);

    header('Location: index.php');
}
*/