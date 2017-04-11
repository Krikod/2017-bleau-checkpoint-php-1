<!-- Formulaire d'ajout de citation -->

<?php include 'includes/header.php'; ?>

	<div class="container">
		<div class="row">
			<h1 class="center">Ajouter une citation</h1>
		</div>
		<div class="row">
			<!-- Action: fichier vers lequel les infos saisies par l'utilisateur vont être envoyées -->
			<!-- Méthode: comment elles vont être envoyées -->
			<form class="col s12" action="../controller/add_citation_action.php" method="POST">
				
				<div class="row">
					<div class="input-field">
						<label for="author">Auteur</label>
						<input id="author" type="text" name="author" required="">	
					</div>
				</div>

				<div class="row">
					<div class="input-field">
						<label for="content">Citation</label>
						<input id="content" type="text" name="content" required="">	
					</div>
				</div>
				
				<div class="row">
					<div class="input-field">
						<label for="chapter">Episode</label>
						<input id="chapter" type="text" name="chapter" required="">	
					</div>
				</div>

				<div class="row">
 					<div class="input-field">
						<label for="date">Date d'ajout</label>
						<input id="date" type="date" name="date" required="">
					</div>	
				</div>
				
				<div class="row">
					<div class="file-field input-field">
			      		<div class="btn">
					        <span>Ajouter une image</span>
					        <input type="file">
			      		</div>
				      	<div class="file-path-wrapper">
				        	<input class="file-path validate" type="text">
				      	</div>
					</div>
				</div>

				<div class="row center">
					<input class="waves-effect waves-light btn" type="submit" value="Envoyer">
				</div>

			</form>
		</div>
	</div>

<?php include 'includes/footer.php'; ?>