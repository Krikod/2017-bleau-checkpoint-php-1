<?php

/* Librairie contenant toutes les fonctions de traitement liées à la base de données. */

/* Permet de RECUPERER toutes les citations de la base. */
function get_all_citations($bdd)
{
	// Il faut penser à stocker les données dans un tableau avant de les afficher.
	$citations = array();

	// Requête qui récupère toutes les citations
	$req = $bdd->query('SELECT * FROM citation ORDER BY id DESC');

	// Traitement du resultat retourné par la requête
	$citations = $req->fetchAll(); // Dans l'exemple: while ($data = mysql_fetch_assoc($req)){ $news[] = $data; }

	// Renvoi du tableau contenant toutes les citations
	return $citations;
}





// Permet d'AJOUTER une citation
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