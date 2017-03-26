<?php

function getAllCitations(){
    // On récupère l'objet bdd
    global $bdd;

    // Requete qui récupère toutes les citations
    $req = $bdd->query('SELECT * FROM citation ORDER BY id DESC');
    // Traitement du resultat retourné par la requete
    $pupils = $req->fetchAll();
    // Renvoie du tableau contenant toutes les citations

    // On met fin à la requete (http://php.net/manual/fr/pdostatement.closecursor.php)
	$req->closeCursor();

    return $pupils;
}

function getCitation($id){
    // On récupère l'objet bdd
    global $bdd;

    $req = $bdd->prepare('SELECT * FROM citation WHERE id = :id');
    $req->execute(array('id' => $id));

    $article = $req->fetch();

    // On met fin à la requete (http://php.net/manual/fr/pdostatement.closecursor.php)
    $req->closeCursor();

    return $article;
}

// Permet d'ajouter un élèves
function addCitation($author, $chapter, $content, $date, $image){
    // On récupère l'objet bdd
    global $bdd;

	// Requete d'ajout en base de donnée
	// La requete préparer permet d'executer une action en deux temps, écriture de la requete puis ajout des varibles et execution
	// Permet d'executer une requete plusieurs fois mais avec des valeurs différents, sécurise également la requete
	// http://php.net/manual/fr/pdo.prepare.php
	$req = $bdd->prepare('INSERT INTO citation (author, chapter, content, date, image) VALUES (?, ?, ?, ?, ?)');
	// Execution de la requete avec la donnée
	$req->execute(array(
		$author,
		$chapter,
		$content,
		$date,
        $image
		));

	// On met fin à la requete (http://php.net/manual/fr/pdostatement.closecursor.php)
	$req->closeCursor();

    return ;
}

function updateCitation($id, $author, $chapter, $content, $date, $image){
    global $bdd;

	$req = $bdd->prepare('UPDATE citation SET author = :author, chapter = :chapter, date = :date, image = :image WHERE id = :id');
	$req->execute(array(
		'author' => $author,
		'chapter' => $chapter,
		'date' => $date,
        'image' => $image,
        'id' => $id
		));

    // On met fin à la requete (http://php.net/manual/fr/pdostatement.closecursor.php)
    $req->closeCursor();
}

function deleteCitation($id){
    global $bdd;

    $req = $bdd->prepare('DELETE FROM citation WHERE id = :id');
	$req->execute(array('id' => $id));

    // On met fin à la requete (http://php.net/manual/fr/pdostatement.closecursor.php)
	$req->closeCursor();

    return ;
}
