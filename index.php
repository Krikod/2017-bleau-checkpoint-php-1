<?php

// Controllers frontal, point d'accès

include_once 'parameters.php';
include_once 'model/connexion_bdd.php';
include_once 'model/kaamelottModel.php';
include_once 'controlers/kaamelottControler.php';


// Si les aucun parametres n'est défini dans l'url, on appel le controlleurs permettant de renvoyer la page d'accueil avec toutes les citations
if (empty($_GET)){
    indexAction();
}
elseif ($_GET['section'] == 'add'){
    addCitationAction();
}
elseif ($_GET['section'] == 'edit') {
    $id = $_GET['id'];
    editCitationAction($id);
}
elseif ($_GET['section'] == 'delete') {
    $id = $_GET['id'];
    deleteCitationAction($id);
}
else{
    indexAction();
}
