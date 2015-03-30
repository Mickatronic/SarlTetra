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
		<form action="CreerDocuments-Validation.php" method="post" enctype="multipart/form-data" class="form-horizontal">
			<fieldset>
				<!-- Select Basic -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="">Choisir un client</label>
					<div class="col-md-4">
						<select id="ClientId" name="ClientId" class="form-control">
						<?php
							$db = mysqli_connect('localhost', 'root', '');

							// on sélectionne la base
							mysqli_select_db($db,'sarltetra');

							// on crée la requête SQL
							$sql = "SELECT * FROM Clients";

							// on envoie la requête
							$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error());

							while($data = mysqli_fetch_assoc($req))
							{
								echo "<option value=\"".$data["Id"]."\">".$data["Nom"]." ".$data["Prenom"]."</option>";
							} 
					  
							// on ferme la connexion à mysql
							mysqli_close($db);
						?>
						</select>
					</div>
				</div>
			</fieldset>
			
			<div class="form-horizontal">
				<fieldset>
					<div class="form-group">
						<label class="col-md-4 control-label" for="">Choisir un type de document </label>
						<div class="col-md-4">
							<select id="TypeDocumentId" name="TypeDocumentId" class="form-control">
							<?php
								$db = mysqli_connect('localhost', 'root', '');

								// on sélectionne la base
								mysqli_select_db($db,'sarltetra');

								// on crée la requête SQL
								$sql = "SELECT * FROM TypeDocuments";

								// on envoie la requête
								$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error());

								while($data = mysqli_fetch_assoc($req))
								{
									echo "<option value=\"".$data["Id"]."\">".$data["Libelle"]."</option>";
								} 
						  
								// on ferme la connexion à mysql
								mysqli_close($db);
							?>
								<!-- 
								<option value="1">Laetitia</option>
								<option value="2">Bénédicte</option>
								<option value="">Natacha</option>
								<option value="">Aissata</option>
								<option value="">Maxime</option>
								<option value="">Julien</option>
								<option value="">Felicité</option>
								-->
			
							</select>
						</div>
					</div>
				</fieldset>
			</div>
			<div class="form-horizontal">
				<fieldset>
					<div class="form-group">
						<label class="col-md-4 control-label" for="AddSchema">Ajouter un Plan</label>	
						  <input type="file" name="uploadFile">
						  <input type="submit" class="input-file btn btn-success col-md-1 " value="Upload File">
						
					</div>

				</fieldset>
			</div>	
		</form>
	</body>
	<footer>
	</footer>
</html>