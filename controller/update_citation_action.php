<?php 
if (!empty($_GET['id']) && is_numeric($_GET['id'])) {
    
    include_once 'model/connexion_bdd.php';
    include_once 'model/citation_model.php';
    
    if (
        empty($_POST['author']) &&
        empty($_POST['content']) && 
        empty($_POST['chapter']) && 
        empty($_POST['date'])
        ) {
       
        $id = $_GET['id'];
        $citation = get_one_citation($bdd, $id);

        include_once 'view/update_citation_view.php';
        
        } 
        else {

            $id = $_GET['id'];
            $author = htmlspecialchars($_POST['author']);
            $content = htmlspecialchars($_POST['content']);
            $chapter = htmlspecialchars($_POST['chapter']);
            $date = htmlspecialchars($_POST['date']);

            update_citation($bdd, $id, $author, $content, $chapter, $date);

            header('Location: index.php');
    } 
}