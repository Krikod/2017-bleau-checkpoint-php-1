<?php

if (!empty($_GET['id']) && is_numeric($_GET['id'])) {
		include_once 'model/connexion_bdd.php';
    	include_once 'model/citation_model.php';

    	//On supprime une citation
    delete_citation($bdd);
    header('Location: index.php');
	}
	


/*

if {
	$id = 
	$author = htmlspecialchars($_GET['author']);
    $content = htmlspecialchars($_GET['content']);
    $chapter = htmlspecialchars($_GET['chapter']);
    $date = htmlspecialchars($_GET['date']);
    //On supprime une citation
    delete_citation($id, $author, $content, $chapter, $date);
    header('Location: index.php');
	} else {
    	echo 'Erreur de suppression';
    }












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

    

    
} */

?>