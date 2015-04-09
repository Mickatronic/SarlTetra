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
						<label class="col-md-1 control-label" for="">clients</label>
					</div>
							<table class="table">
								<tr>
									<td><b> Nom</b></td>
									<td> <b>Prenom</b></td>
								</tr>	
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
												echo "<tr>";
												echo "<td>".$data["Nom"]."</td>";
												echo "<td>".$data["Prenom"]." </td>";
												echo "</td>";
                                                echo "<div class=\"form-horizontal\">";
											 // on affiche les informations de l'enregistrement en cours
												echo "<form method=\"GET\" action=\"supprimerClients-Validation.php\">";												
												echo "<div class=\"col-sm-1\">";
												echo "<input type=\"hidden\" name=\"Nom\" value=\"".$data["Id"]."\"/>";
												echo  "Id:".$data["Id"];
												echo "</div>";
                                                echo "<div class=\"col-sm-2\">";
												echo  "<input type=\"text\" name=\"Nom\" id==\"".$data["Id"]."\" value=\"".$data["Nom"]."\" />";
												echo "</div>";	
                                                echo "<div class=\"col-sm-2\">";
												echo  "<input type=\"text\" name=\"Prenom\" id==\"".$data["Id"]."\" value=\"".$data["Prenom"]."\" />";
												echo "</div>";		
												//echo "<div class=\"col-sm-3\">";
												echo "<input class=\"btn btn-sm btn-danger\" type=\"submit\" value=\"supprimer\"/>";
												//echo "</div>";
												echo "</form>";
												echo "</div>";
											} 
									    ?>	  
							</table>									
				</div>
			</fieldset>
		</div>
	</body>
</html>