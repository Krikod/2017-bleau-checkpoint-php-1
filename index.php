<?php

// Connexion à MySQL
include 'model/connexion_bdd.php';

// Inclusion du contrôleur s'il existe et s'il est spécifié
if (!empty($_GET['page']) && is_file('controller/'.$_GET['page'].'.php')) {
        include 'controller/'.$_GET['page'].'.php';
	} else {
        include 'controller/show_citation_action.php';
	}


