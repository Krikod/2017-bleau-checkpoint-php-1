<?php
/* Le controller inclut le modèle, récupère les citations et appelle la view.

C'est en tout début de fichier que l'on vérifie les autorisations. Les citations sont visibles par tous, mais si on veut en restreindre l'accès, on le fait ici. */

//On inclut le modèle
include_once 'model/citation_model.php'; // include(dirname(__FILE__).'/../vues/news.php'); ???

//On récupère les citations
$citations = get_all_citations($bdd);

// On inclut la view
include_once 'view/show_citations_view.php';

?>