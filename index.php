<?php

// Démarrage de la session
session_start();

// Connexion à MySQL
try {
	$bdd = new PDO('mysql:host=localhost;dbname=kaamelott_1_2017;charset=utf8', 'root', 'root');
	}

catch(Exception $e) {
	die('Erreur : '.$e->getMessage());
	}

// Inclusion du contrôleur s'il existe et s'il est spécifié
if (!empty($_GET['page']) && is_file('controleurs/'.$_GET['page'].'.php')) {
        include 'controleurs/'.$_GET['page'].'.php';
	}
else {
        include 'controleurs/accueil.php';
	}











<?php include 'model/connexion_bdd.php' ?>
<?php include 'model/citation_model.php' ?>
<?php include 'view/includes/header.php'; ?>

<div class="col-sm-12 col-md-12">
	<nav>
		<a href="index.php" class="kaamelott-font">Cestpasfaux.com</a>
		<p class="item-actions">
			<a href="view/add_citation_view.php" class="btn btn-kaamelott" role="button">Ajouter</a>
		</p>
	</nav>
</div>
<div class="container">
	<div class="kaamelott-banner jumbotron kaamelott-underline">
		<h1>C'EST PAS FAUX !</h1>
		<p>Les meilleures citations de la série-TV Kaamelott</p>
	</div>
	<div class="row">

		<?php $citations = get_all_citations($bdd); ?>		
		<?php foreach ($citations as $citation) { ?>

		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<div class="img-box">
					<img class="kaamelott-underline" src="assets/img/livre-1-ambidextrie.jpg" alt="<?php echo $citation['chapter']; ?>">
				</div>
				<div class="quote">
					<blockquote>"<?php echo $citation['content']; ?>"</blockquote>
					<p class="source">
						<?php echo $citation['author']; ?>,
						<i><?php echo $citation['chapter']; ?></i>
					</p>
					<span class="hider"></span>
				</div>
				<p class="item-actions">
				<!--On envoie en paramètre de l'url l'id de la citation -->
					<a href="controller/delete_citation_action.php?id=<?php echo $citation['id']; ?>" class="btn btn-danger" role="button">Supprimer</a>
					<a href="#" class="btn btn-kaamelott" role="button" data-toggle="modal" data-target="#<?php echo $citation['id']; ?>">Voir plus</a>
					<a href="view/update_citation_view.php?id=<?php echo $citation['id']; ?>" class="btn btn-kaamelott" role="button">Editer</a>
				</p>
			</div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="<?php echo $citation['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<blockquote>"<?php echo $citation['content']; ?>"</blockquote>
						<p class="source">
							<?php echo $citation['author']; ?>, <i><?php echo $citation['chapter']; ?></i>
						</p>
						<span class="hider"></span>
					</div>
				</div>
			</div>
		</div> <?php } ?>
	</div>
</div>

<?php include 'view/includes/footer.php';?>















<?php
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