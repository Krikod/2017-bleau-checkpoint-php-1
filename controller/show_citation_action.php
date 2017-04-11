<?php

include_once '../model/citation_model.php';

$citations = get_all_citations($bdd);

include_once '../view/show_citations_view.php';