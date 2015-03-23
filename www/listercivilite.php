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
		
		<?php

		?>
		<div class="container">
		<div class="form-horizontal">
			<fieldset>
				<div class="form-group">
				<form method="GET" action="CreerCivilite-Validation.php" class="col-sm-12 jumbotron">
					<div class="row">
						<div class="col-sm-6">
							<div class="row">
								<div class="form-horizontal">
									
									<div class="form-group">
									  <label class="col-sm-2 control-label" for="textinput">Abreviation:</label>  
									  <div class="col-sm-8 input-group">
										<span class="input-group-addon"> <span class="glyphicon glyphicon-user"></span></span>
										<input id="Abreviation" name="Abreviation" placeholder="ex : Mr" class="form-control input-md" type="text"/>
									  </div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-horizontal">
									
									<div class="form-group">
									  <label class="col-sm-2 control-label" for="textinput">Libelle:</label>  
									  <div class="col-sm-8 input-group">
										<span class="input-group-addon"> <span class="glyphicon glyphicon-user"></span></span>
										<input id="Libelle" name="Libelle" placeholder="ex : Monsieur" class="form-control input-md" type="text"/>
									  </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				    <div class="col-md-4">
						<input type="submit" name="Envoyer" value="Créer Civilité" class="btn btn-primary" />
					</div>
				</div>
				</form>
				  <label class="col-md-4 control-label" for="">civilite</label>
				  <div class="col-md-4"> 
				  <?php
				  		$db = mysqli_connect('localhost', 'root', '');

						// on sélectionne la base
						mysqli_select_db($db,'sarltetra');

						// on crée la requête SQL
						$sql = "SELECT * FROM Civilites;";

						// on envoie la requête
						$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

					  while($data = mysqli_fetch_assoc($req))
					  {
					  // on affiche les informations de l'enregistrement en cours
						echo  "<label class=\"radio-inline\" for=\"-".$data["IdCivilite"]."\">";
						echo  "<input type=\"radio\" id==\"".$data["IdCivilite"]."\" value=\"".$data["Abreviation"]."\" />";
						echo $data["Libelle"];
						echo "</label>";
					  } 
				  ?>
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-md-4 control-label" for=""></label>
				  <div class="col-md-4">
					<button id="" name="" class="btn btn-primary">selectionner</button>
				  </div>
				</div>
			</fieldset>
		</div>
	</body>
</html>		