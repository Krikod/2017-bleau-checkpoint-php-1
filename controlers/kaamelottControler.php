<?php

// Page d'accueil
function indexAction(){
    $citations = getAllCitations();
    include_once('views/home.php');
    return ;
}

function addCitationAction(){
    // Si aucun champs du formulaire n'est renseigné ou encore si le formulaire n'est pas validé
    if (empty($_POST)){
    	// On renvoie l'affichage du formulaire
    	include_once 'views/addCitation.php';
        return ;
    }
    // Sinon,on est dans le cas ou le formulaire est envoyé
    else{
    	// Vérification que tous les champs du formumaire sont bien renseignés, sinon on renvoie un message d'erreur
    	if (
    		empty($_POST['author']) ||
    		empty($_POST['chapter']) ||
    		empty($_POST['content']) ||
    		empty($_POST['date']) ||
    		empty($_POST['image'])
    		){
    		echo "Merci de remplir tous les champs";
            header('Location: index.php?section=add');
    	}
    	else{
    		// Sécurité, htmlspecialchars permet de remplacer les caractères spéciaux par leur équivalent HTML
    		// Exemple: < passé dans la fonction htmlspecialchars renvoie &lt;
    		// http://php.net/manual/fr/function.htmlspecialchars.php
    		$author = htmlspecialchars($_POST['author']);
    		$chapter = htmlspecialchars($_POST['chapter']);
    		$content = htmlspecialchars($_POST['content']);
    		$date = htmlspecialchars($_POST['date']);
    		$image = htmlspecialchars($_POST['image']);

    		// Appel du modele ==> execution de la requete d'enregistrement en base de donné
    		addCitation($author, $chapter, $content, $date, $image);
            header('Location: index.php');
    	}
    }
    // Redirection vers le controllers frontal index.php
    return ;
}

function editCitationAction($id){
    if (is_numeric($id)){
        // La condition permet de vérifier si le formulaire est à envoyer ou à afficher, si $_POST est vide, cela veut dire que l'utilisateur n'a pas encore saisi d'information, donc le formulaire doit etre affiché
        if (empty($_POST)){

        	// On récupère la citation ciblé grâce à son id et a la fonction définit dans le modèle
        	$citation = getCitation($id);

        	// On renvoie la vue du formulaire de modification
            include_once 'views/editCitation.php';
        }
        else{
        	// On récupère les informations du formulaire
        	$author = htmlspecialchars($_POST['author']);
        	$chapter = htmlspecialchars($_POST['chapter']);
        	$content = htmlspecialchars($_POST['content']);
        	$date = $_POST['date'];
        	$image = htmlspecialchars($_POST['image']);

        	// On les ajoute à la base de donnée grace à la fonction définit dans notre modèle
        	updateCitation($id, $author, $chapter, $content, $date, $image);

        	// On redirige vers la page d'accueil
        	header('Location: index.php');
        }
    }
    else{
        // On redirige vers la page d'accueil
        header('Location: index.php');
    }
}

function deleteCitationAction($id){
    if (is_numeric($id)){
        deleteCitation($id);

        // On redirige vers la page d'accueil
    	header('Location: index.php');
    }
    else{
        // On redirige vers la page d'accueil
    	header('Location: index.php');
    }
}
