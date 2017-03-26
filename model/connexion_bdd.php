<?php

global $id_bdd;
global $mdp_bdd;
global $name_bdd;

// Connection base de donnée
// Permet de renvoyer les messages d'erreur sql
try {
	$bdd = new PDO('mysql:host=localhost;dbname=' . $name_bdd, $id_bdd, $mdp_bdd,
	array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
}
catch (PDOException $e){
	echo "Echec de connexion: " . $e->getMessage();
}
