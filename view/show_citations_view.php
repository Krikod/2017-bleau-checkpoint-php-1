<?php include 'includes/header.php'; ?>

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

<?php include 'includes/footer.php'; ?>