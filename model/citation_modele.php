<?php

function get_all_citations($bdd)
{
	$req = $bdd->query('SELECT * FROM citation ORDER BY id DESC');
	$citations = $req->fetchAll();
	return $citations;
}

function add_citation($bdd, $author, $content, $chapter, $date, $image) {
	// Requete d'ajout en base de donnée
	// La requete préparer permet d'executer une action en deux temps, écriture de la requete puis ajout des varibles et execution
	// Permet d'executer une requete plusieurs fois mais avec des valeurs différents, sécurise également la requete
	// http://php.net/manual/fr/pdo.prepare.php
	$query = $bdd->prepare('INSERT INTO citation (author, content, chapter, date, image) VALUES (?, ?, ?, ?)');
	// Execution de la requete avec la donnée
	$query->execute(array(
		$author,
		$content,
		$chapter,
		$date
		$image
		));
	// On met fin à la requete (http://php.net/manual/fr/pdostatement.closecursor.php)
	$query->closeCursor();
}