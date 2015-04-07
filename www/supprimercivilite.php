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
	
			<fieldset>
				<div class="row">
					<div class="row">
						<label class="col-md-1 control-label" for="">civilite</label>
					</div>
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
						echo "<div class=\"form-horizontal\">";
					  // on affiche les informations de l'enregistrement en cours
						echo "<form method=\"GET\" action=\"supprimercivilite-validation.php\">";
						echo "<div class=\"col-sm-1\">";
						echo "<input type=\"hidden\" name=\"IdCivilite\" value=\"".$data["IdCivilite"]."\"/>";
						echo  "IdCivilité:".$data["IdCivilite"];
						echo "</div>";
						echo "<div class=\"col-sm-2\">";
						echo  "<input type=\"text\" name=\"Abreviation\" id==\"".$data["IdCivilite"]."\" value=\"".$data["Abreviation"]."\" />";
						echo "</div>";
						echo "<div class=\"col-sm-2\">";
						echo  "<input type=\"text\" name=\"Libelle\" id==\"".$data["IdCivilite"]."\" value=\"".$data["Libelle"]."\" />";
						echo "</div>";
						//echo "<div class=\"col-sm-3\">";
						echo "<input class=\"btn btn-sm btn-danger\" type=\"submit\" value=\"supprimer\"/>";
						//echo "</div>";
						echo "</form>";
						echo "</div>";
					  } 
				  ?>
				</div>

			</fieldset>

	</body>
</html>		