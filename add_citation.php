<?php include 'includes/header.php'; ?>

	<div class="container">
		<div class="row">
			<h1 class="center">Ajouter une citation</h1>
		</div>
		<div class="row">
			<form class="col s12" action="add_citation_action.php" method="POST">
				<div class="row">
					<div class="input-field">
						<label for="author">Auteur</label>
						<input id="author" type="text" name="author" required="">	
					</div>
				</div>
				<div class="row">
					<div class="input-field">
						<label for="content">Citation</label>
						<input id="content" type="text" name="content">	
					</div>
				</div>
				<div class="row">
					<div class="input-field">
						<label for="chapter">Episode</label>
						<input id="chapter" type="text" name="chapter">	
					</div>
				</div>
				<div class="row">
					<div class="input-field">
						<label for="date">Date d'ajout</label>
						<input id="date" type="date" name="date">	
					</div>	
				</div>
				<div class="row">
					<div class="input-field">
						<label for="image">Ajouter une image</label>
						<input id="image" type="image" name="image">	
					</div>	
				</div>
				<div class="row center">
					<input class="waves-effect waves-light btn" type="submit" value="Envoyer">
				</div>
			</form>
		</div>
	</div>

<?php include 'includes/footer.php'; ?>