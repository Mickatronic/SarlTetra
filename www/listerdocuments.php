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
				<div class="form-group">
					<div class="row">
						<label class="col-md-4 control-label" for="">Lister tout les clients</label>
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
							<div class="row">
							<div class="panel panel-default">
								  <!-- Default panel contents -->
								  <div class="panel-heading">Liste de documents</div>

								  <!-- Table -->
								  <table class="table">
									<tr>
										<td> Nom </td>
										<td> CheminQRcode</td>
										<td> CheminDoc</td>
										<td> typesdocuments</td>
										
									</tr>								  							
							<?php
								$db = mysqli_connect('localhost', 'root', '');

								// on sélectionne la base
								mysqli_select_db($db,'sarltetra');

								// on crée la requête SQL
								$sql = "SELECT c.Nom,d.CheminQRcode,td.Libelle,d.CheminDoc
									   FROM Clients c, clientsdocuments cd, 
										documents d, typedocuments td
										WHERE d.id = cd.idDocument
										AND cd.idClient = c.id
										AND td.id = d.IdTypeDocuments";
										
								// on envoie la requête
								$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error($db));

							    while($data = mysqli_fetch_assoc($req))
							    {
									echo "<tr>";
									echo "<td>".$data["Nom"]."</td>";
									echo "<td>".$data["CheminQRcode"]." </td>";
									echo "<td>".$data["CheminDoc"]." </td>";
									echo "<td>".$data["Libelle"]." </td>";
                                    echo "</tr>";									
								} 
						    ?>														
								
								</table>
								
								</div>
								<button id="Selectioner" name="Selectioner" class="btn btn-success"><a href="listefichier.php">Ajouter</a></button>	
								</div>
				</div>				
			</div>
		</div>
	</body>
</html>