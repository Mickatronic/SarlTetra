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
										<td> Id</td>
										<td> Nom</td>
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
											echo "<tr>";
											echo "<td>".$data["Id"]."</td>";
											echo "<td>".$data["Libelle"]." </td>";
											echo "</td>";							
										} 
									?>														
								
								</table>
								
							</div>
								<button id="Selectioner" name="Selectioner" class="btn btn-success"><a href="listefichier.php">Ajouter</a></button>	
			</div>
     </body>
</html>
