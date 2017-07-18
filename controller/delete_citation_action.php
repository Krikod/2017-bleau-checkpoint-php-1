<?php

if (!empty($_GET['id']) && is_numeric($_GET['id'])) {
		include_once 'model/connexion_bdd.php';
    	include_once 'model/citation_model.php';

    	//On supprime une citation
    delete_citation($bdd);
    header('Location: index.php');
	}