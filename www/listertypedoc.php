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
										<td> <b>Id</b></td>
										<td> <b>Nom</b></td>
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
								
			</div>
     </body>
</html>
