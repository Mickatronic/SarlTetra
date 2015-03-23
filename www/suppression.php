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
				<div class="col-sm-2">
					Menu
				</div>
				<div class="col-sm-10">
					<div class="row">
	<body>
		 <div class="container">
		   <div class="row">
				<legend>Formulaire de suppression d'un client</legend>
				<form class="form-horizontal">
				<div class="col-md-6">
					<div class="form-group">
					  <label class="col-md-4 control-label" for="">Liste des clients</label>
					  <div class="col-md-4">
						<select id="" name="" class="form-control" multiple="multiple">
						  <option value="1">Natacha Lefèvre</option>
						  <option value="2">Laetitia Tchouani</option>
						  <option value="">Bénédicte Kaleba</option>
						  <option value="">Aissata Sall</option>
						  <option value="">Maxime Bouzid</option>
						</select>
					  </div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
							<div class="col-md-2">
								<button id="" name="" class="btn btn-primary">Delete</button>
							</div>
					</div>
				</div>	
				</form>
			</div>
		</div>
	</body>
</html>