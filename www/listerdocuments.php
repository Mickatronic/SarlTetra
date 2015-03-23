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
	<body>
		<form class="form-horizontal">
			<fieldset>
				<!-- Form Name -->
				<!-- Select Basic -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="">Lister tout les documents</label>
						    <div class="col-md-4">
								<select id="" name="" class="form-control">
									<option value="1">Image</option>
									<option value="2">Pdf</option>
									<option value="">Shema</option>							  								 
								</select>
						    </div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="Selectioner"></label>
							<div class="col-md-8">
							<?php
								$db = mysqli_connect('localhost', 'root', '');

								// on sélectionne la base
								mysqli_select_db($db,'sarltetra');

								// on crée la requête SQL
								$sql = "SELECT * FROM documents;";

								// on envoie la requête
								$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

							    while($data = mysqli_fetch_assoc($req))
							    {
									echo $data["Nom"]."</br>";
								} 
						    ?>														
								<button id="Selectioner" name="Selectioner" class="btn btn-success"><a href="listefichier.php">Ajouter</a></button>								
							</div>
					</div>
			</fieldset>
		</form>
	</body>
</html>