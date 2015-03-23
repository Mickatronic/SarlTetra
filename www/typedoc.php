<html>
	<head>
		<?php 
		include 'includes.html';
		?>
	</head>
	<body>
		<?php
			session_start();
			include 'navbar.php';
		?>
		<div class="container">
			<div class="row">
				<div class="col-sm-10">
					<div class="row">
		<form class="form-horizontal">
			<fieldset>
				<div class="form-group">
				  <label class="col-md-4 control-label" for="">Type Document</label>
				  <div class="col-md-4">
					<select id="" name="" class="form-control">
					  <option value="1">Devis</option>
					  <option value="2">Facture</option>
					  <option value="">Schéma</option>
					</select>
				  </div>
				</div>

				<!-- Button -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for=""></label>
					  <div class="col-md-4">
						<button id="" name="" class="btn btn-primary">Ajouter</button>
					  </div>
					</div>
			</fieldset>
			</form>
	</body>
	
	<footer>
	</footer>
</html>