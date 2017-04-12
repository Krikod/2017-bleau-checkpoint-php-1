<?php

// Démarrage de la session
session_start();

// Connexion à MySQL
include 'model/connexion_bdd.php';

// Inclusion du contrôleur s'il existe et s'il est spécifié
if (!empty($_GET['page']) && is_file('controller/'.$_GET['page'].'.php')) {
        include 'controller/'.$_GET['page'].'.php';
	} else {
        include 'controller/show_citation_action.php';
	}





/* ANCIEN index_admin.php


	include 'view/includes/header.php'; 
	include_once 'modele/connexion_bdd.php';

	$result = $bdd->query('SELECT * FROM citation ORDER BY id DESC');

?>
	
	<div class="container">
		<div class="row">
			<h1 class="center">Liste des citations</h1>
		</div>
		<div class="row">
			<table class="centered highlight">
				<thead>
					<tr>
						<th>id</th>
						<th>Auteur</th>
						<th>Citation</th>
						<th>Episode</th>
						<th>Date</th>
						<th>Image</th>
					</tr>
				</thead>

				<tbody>
					<?php while ($donnee = $result->fetch()) { ?>
					<tr>
						<td><?php echo $donnee['id']; ?></td>
						<td><?php echo $donnee['author']; ?></td>
						<td><?php echo $donnee['content']; ?></td>
						<td><?php echo $donnee['chapter']; ?></td>
						<td><?php echo $donnee['date']; ?></td>
						<td><?php echo $donnee['image']; ?></td>
						<td>
							<a href="controller/delete_citation_action.php?id=<?php echo $donnee['id']; ?>">Supprimer</a>
							<a href="view/update_citation_view.php?id=<?php echo $donnee['id']; ?>">Editer</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<div class="row center">
			<a href="view/add_citation_view.php" class="waves-effect waves-light btn">Ajouter une citation</a>	
		</div>
	</div>
		
<?php include 'view/includes/footer.php'; ?>
*/