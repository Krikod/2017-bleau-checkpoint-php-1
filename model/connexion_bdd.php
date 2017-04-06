<?php 

	try {
		$bdd = new PDO('mysql:host=localhost;dbname=kaamelott_1_2017', 'root', 'root');
	}
	catch (PDOException $e){
		echo "Echec de connexion: " . $e->getMessage();
	}