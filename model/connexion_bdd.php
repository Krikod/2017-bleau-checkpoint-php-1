<?php 
// Connexion à la base de données
// Permet de renvoyer les messages d'erreur sql
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=kaamelott_1_2017', 'root', 'root', 
			array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
	}
	catch (PDOException $e){
		die('Erreur : '.$e->getMessage());
	}

