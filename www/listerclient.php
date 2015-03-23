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
						<label class="col-md-4 control-label" for="">Lister tout les clients</label>
						    <div class="col-md-4">
								<select id="" name="" class="form-control">
									<option value="1">Laetitia</option>
									<option value="2">Benedicte</option>
									<option value="">Natacha</option>
								    <option value="">Aissata</option>
									<option value="">Maxime</option>
									<option value="">Julien</option>
									<option value="">Marie</option>
								    <option value="">Option two</option>
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
								$sql = "SELECT * FROM Clients;";

								// on envoie la requête
								$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

							    while($data = mysqli_fetch_assoc($req))
							    {
									echo $data["Nom"]." ".$data["Prenom"]."</br>";
								} 
						    ?>														
								<button id="Selectioner" name="Selectioner" class="btn btn-success"><a href="listefichier.php">selectioner</a></button>
								<button id="" name="" class="btn btn-danger">annuler</button>
							</div>
					</div>
			</fieldset>
		</form>
	</body>
</html>