<?php include 'includes/header.php'; ?>

<div class="col-sm-12 col-md-12">
	<nav>
		<a href="index.php" class="kaamelott-font">Cestpasfaux.com</a>
		<p class="item-actions">
			<a href="index.php?page=add_citation_action" class="btn btn-kaamelott" role="button">Ajouter</a>
		</p>
	</nav>
</div>
<div class="container">
	<div class="kaamelott-banner jumbotron kaamelott-underline">
		<h1>C'EST PAS FAUX !</h1>
		<p>Les meilleures citations de la série-TV Kaamelott</p>
	</div>
	<div class="row">
		<?php // La vue parcourt le tableau et affiche les infos.
		foreach ($citations as $citation) { ?>

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
					<a href="index.php?page=delete_citation_action&id=<?php echo $citation['id'];?>" class="btn btn-danger" role="button">Supprimer</a>
					<a href="#" class="btn btn-kaamelott" role="button" data-toggle="modal" data-target="#<?php echo $citation['id']; ?>">Voir plus</a>
					<a href="index.php?page=update_citation_action&id=<?php echo $citation['id']; ?>" class="btn btn-kaamelott" role="button">Editer</a>
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

<?php include 'includes/footer.php';?>








<?php /*include 'includes/header.php'; ?>

	<div class="container">
		<div class="row">
			<h1 class="center">Liste de toutes les citations</h1>
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

					<?php foreach ($citations as $citation) { ?>
					<tr>
						<td><?php echo $citation['id']; ?></td>
						<td><?php echo $citation['author']; ?></td>
						<td><?php echo $citation['content']; ?></td>
						<td><?php echo $citation['chapter']; ?></td>
						<td><?php echo $citation['date']; ?></td>
						<td><?php echo $citation['image']; ?></td>
						<td>
							<!-- On envoie en paramètre de l'url l'id de la citation -->
							<a href="../controller/delete_citation_action.php?id=<?php echo $citation['id']; ?>">Supprimer</a>
							<a href="update_citation_view.php?id=<?php echo $citation['id']; ?>">Editer</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<div class="row center">
			<a href="../index.php?section=add" class="waves-effect waves-light btn">Ajouter une citation</a>
		</div>
	</div>

<?php include 'includes/footer.php'; */?>
