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
				
				  <label class="col-md-4 control-label" for="">civilite</label>
				  <div class="col-md-4"> 
					<ul>
				  <?php
				  		$db = mysqli_connect('localhost', 'root', '');

						// on sélectionne la base
						mysqli_select_db($db,'sarltetra');

						// on crée la requête SQL
						$sql = "SELECT * FROM Civilites;";

						// on envoie la requête
						$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error());
					
					  while($data = mysqli_fetch_assoc($req))
					  {
					  // on affiche les informations de l'enregistrement en cours
						echo  "<label class=\"radio-inline\" for=\"-".$data["IdCivilite"]."\">";
						echo  "<li type=\"radio\" id==\"".$data["IdCivilite"]."\" value=\"".$data["Abreviation"]."\" />";
						echo $data["Libelle"];
						echo "</label>";
					  } 
				  ?>
				  </ul>
				  </div>
				</div>

			</fieldset>
		</div>
	</body>
</html>		