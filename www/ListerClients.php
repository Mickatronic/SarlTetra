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
				<!-- Form Name -->
				<!-- Select Basic -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="">Lister tous les clients</label>
						    <div class="col-md-4">
								<select id="" name="" class="form-control">
									<option value="1">Laetitia</option>
									<option value="2">Bénédicte</option>
									<option value="">Natacha</option>
								    <option value="">Aissata</option>
									<option value="">Maxime</option>
									<option value="">Julien</option>
									<option value="">Felicité</option>
				
								</select>
						    </div>
					</div>
						<!-- Button (Double) -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="Selectioner"></label>
							<div class="col-md-8">
								<button id="Selectioner" name="Selectioner" class="btn btn-success">Sélectionner</button>
								<button id="" name="" class="btn btn-danger">Annuler</button>
							</div>
					</div>
			</fieldset>
		</form>
	</body>
</html>