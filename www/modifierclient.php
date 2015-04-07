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
				<div class="col-sm-10">
				<form method="GET" action="ModifierClients-Validation.php" class="form-horizontal">
				<div class="container">
				<div class="row">
				<legend>Formulaire de modification</legend>
				<div class="form-group">
				<label class="col-md-4 control-label" for="Selectioner"></label>
				<div class="col-md-8">
				<table>
					<tr>
						<td>
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
							echo $data["Nom"]." ".$data["Prenom"]."</br>";
							} 
							?>
						</td>	
					</tr>	
				</table>
								</div>
								</div>
								<fieldset>
								<div class="row">
								<div class="col-md-6">
							  <div class="form-horizntale">
								<div class="container">
								<div class="row">
								<div class="col-sm-2">
								<form class="form-horizontal">
								<fieldset>
								<form class="form-horizontal">
								<div class="form-group">
								  <label class="control-label" for="">Id:</label>  
								  <div class="controls">
								  <input id="" name="Id" type="text" placeholder="" class="form-control input-md">								
								  </div>
								</div>
								<div class="form-group">
									<label class="control-label" for="">Nom:</label>
								<div class="controls">
								<input id="Nom" name="" type="text" placeholder="" class="form-control input-small">
								</div>
								</div>
								<div class="form-group">
				<label class="control-label" for="">Prenom:</label>
					<div class="controls">
						<input id="Prenom" name="" type="text" placeholder="" class="form-control input-small">
						</div>
															</div>
																
															<div class="form-group">
																<label class="control-label" for="">IdCivilite:</label>
																	<div class="controls">
																		<input id="IdCivilite" name="" type="text" placeholder="" class="form-control input-small">
																	</div>
															</div>

															<div class="form-group">
																<label class="control-label" for="">Age:</label>
																	<div class="controls">
																		<input id="Age" name="" type="text" placeholder="" class="form-control input-small">
																	
																	</div>
															</div>
													
															<div class="form-group">
																<label class="control-label" for="">Ville:</label>
																	<div class="controls">
																		<input id="Ville" name="" type="text" placeholder="" class="form-control input-small">
																		
																	</div>
															</div>

															<div class="form-group">
																<label class="control-label" for="">CP:</label>
																	<div class="controls">
																		<input id=CP"" name="" type="text" placeholder="" class="form-control input-small">
																		
																	</div>
															</div>

															<div class="form-group">
																<label class="control-label" for="">Telephone:</label>
																	<div class="controls">
																		<input id="Telephone" name="" type="text" placeholder="" class="form-control input-small">
																		
																	</div>
															</div>

															<div class="form-group">
																<label class="control-label" for="">Mail:</label>
																	<div class="controls">
																		<input id="Mail" name="" type="text" placeholder="" class="form-control input-small">
																		
																	</div>
															</div>
														</fieldset>
															<div class="form-group">
																	<div class="col-md-8">
																		<input type="submit" id="" name="envoyer" value="envoyer" class="btn btn-success"/>																		
																	</div>
																	
												            </div>
			</div>											
		</div>	
	</body>
	<footer>
	</footer>
</html>