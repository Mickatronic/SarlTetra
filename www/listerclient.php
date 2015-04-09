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
					    <div class="panel-heading">Liste de Clients</div>
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
											} 
									    ?>	  
							</table>									
				</div>
			</div>
		</div>   
	  
	</body>
</html>