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
			<form class="form-horizontal">
				<fieldset>
				<div class="form-group">
				  <label class="col-md-4 control-label" for="">Lister Type Document</label>
				  <div class="col-md-4">
				  <?php
								$db = mysqli_connect('localhost', 'root', '');

								// on sélectionne la base
								mysqli_select_db($db,'sarltetra');

								// on crée la requête SQL
								$sql = "SELECT * FROM typedocuments;";

								// on envoie la requête
								$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

							    while($data = mysqli_fetch_assoc($req))
							    {
									echo $data["Nom"]."</br>";
								} 
						    ?>	
					<P> Facture<br/>
					    Devis<br/>
						Schéma</p>
					</select>
				  </div>
				</div>
				</fieldset>
			</form>
     </body>
</html>
