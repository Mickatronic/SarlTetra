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
							<div class="panel panel-default">
								  <!-- Default panel contents -->
								  <div class="panel-heading">Liste de type documents</div>

								  <!-- Table -->
								<table class="table">
									<tr>
									
									</tr>								  							
									<?php
										$db = mysqli_connect('localhost', 'root', '');

										// on sélectionne la base
										mysqli_select_db($db,'sarltetra');

										// on crée la requête SQL
										$sql = "SELECT *
										FROM  typedocuments td";
										// on envoie la requête
										$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error($db));

										while($data = mysqli_fetch_assoc($req))
										{
												
                               				echo "<div class=\"form-horizontal\">";
											  // on affiche les informations de l'enregistrement en cours
												echo "<form method=\"GET\" action=\"modifierTypeDoc-Validation.php\">";
												echo "<div class=\"col-sm-1\">";
												echo "<input type=\"hidden\" name=\"Id\" value=\"".$data["Id"]."\"/>";
												echo  "Id:".$data["Id"];
												echo "</div>";
												
												echo "<div class=\"col-sm-2\">";
												echo  "<input type=\"text\" name=\"Libelle\" id==\"".$data["Id"]."\" value=\"".$data["Libelle"]."\" />";
												echo "</div>";
												//echo "<div class=\"col-sm-3\">";
												echo "<input class=\"btn btn-sm btn-success\" type=\"submit\" value=\"modifier\"/>";
												//echo "</div>";
												echo "</form>";
												echo "</div>";											
										} 
									?>														
								
								</table>
								
							</div>
								
			</div>
     </body>
</html>
