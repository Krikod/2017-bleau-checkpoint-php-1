<?php

/* Librairie contenant toutes les fonctions de traitement liées à la base de données. */

/* Fonction qui permet de RECUPERER toutes les citations de la base. */
function get_all_citations($bdd)
{
	// Il faut penser à stocker les données dans un tableau avant de les afficher.
	$citations = array();

	// Requête qui récupère toutes les citations
	$req = $bdd->query('SELECT * FROM citation ORDER BY id DESC');

	// Traitement du resultat retourné par la requête
	$citations = $req->fetchAll();

	// Renvoi du tableau contenant toutes les citations
	return $citations;
}

// Fonction qui permet d'AJOUTER une citation
function add_citation($bdd, $author, $content, $chapter, $date) {
	// Requête d'ajout en base de données
	// La requête préparer permet d'executer une action en deux temps:
	//		- écriture de la requête, puis
	//		- ajout des variables et exécution
	// Permet d'exécuter une requête plusieurs fois mais avec des valeurs différentes, sécurise également la requête
	// http://php.net/manual/fr/pdo.prepare.php
	$query = $bdd->prepare('INSERT INTO citation (author, content, chapter, date) VALUES (?, ?, ?, ?)');
	// Execution de la requête avec la donnée
	$query->execute(array(
		$author,
		$content,
		$chapter,
		$date
		));
	// On met fin à la requête (http://php.net/manual/fr/pdostatement.closecursor.php)
	$query->closeCursor();
}

// Fonction qui permet de SUPPRIMER une citation
function delete_citation($bdd) {

	$query = $bdd->prepare('DELETE FROM citation WHERE id = ?');
	// Execution de la requête avec la donnée
	$query->execute(array($_GET['id']));
	// On met fin à la requête (http://php.net/manual/fr/pdostatement.closecursor.php)
	$query->closeCursor();
}

// Fonction qui permet de récupérer une citation
function get_one_citation($bdd, $id) {

	// Requête qui récupère la citation
	$query = $bdd->prepare('SELECT * FROM citation WHERE id = :id');
	$query->execute(array(
		'id' => $id
		));

	// Renvoi du tableau contenant la citation
	$citation = $query->fetch();
	return $citation;
}

// Fonction qui permet d'EDITER une citation
function update_citation($bdd, $id, $author, $content, $chapter, $date) {



	$query = $bdd->prepare('UPDATE citation SET author = :author, content = :content, chapter = :chapter, date = :date WHERE id = :id');
	
		// Execution de la requête avec la donnée
	$query->execute(
		array(
			'id' => $id,
			'author' => $author,
			'content' => $content,
			'chapter' => $chapter,
			'date' => $date
			));
	$query->closeCursor();
		
}