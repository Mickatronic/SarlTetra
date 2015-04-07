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
					<div class="row">
										<div class="col-sm-2">
											<form method="GET" action="CreerClient-Validation.php" class="form-horizontal">
												<fieldset>
													
													<div class="form-group">
														<label class="control-label" for="">Nom:</label>
															<div class="controls">
																<input id="" name="nom" type="text" placeholder="" class="form-control input-small">
															</div>
													</div>
													
													<div class="form-group">
														<label class="control-label" for="">Prenom:</label>
															<div class="controls">
																<input id="" name="prenom" type="text" placeholder="" class="form-control input-small">
															</div>
													</div>
														
													<div class="form-group">
														<label class="control-label" for="">IdCivilite:</label>
															<div class="controls">
																<input id="" name="civilite" type="text" placeholder="" class="form-control input-small">
															</div>
													</div>

													<div class="form-group">
														<label class="control-label" for="">Age:</label>
															<div class="controls">
																<input id="" name="Age" type="text" placeholder="" class="form-control input-small">
															
															</div>
													</div>
											
													<div class="form-group">
														<label class="control-label" for="">Ville:</label>
															<div class="controls">
																<input id="" name="Ville" type="text" placeholder="" class="form-control input-small">
																
															</div>
													</div>

													<div class="form-group">
													  <label class="control-label" for="">Adresse</label>  
													  <div class="controls">
													  <input id="" name="Adresse" type="text" placeholder=" " class="form-control input-md">
														
													  </div>
													</div>
													<div class="form-group">
														<label class="control-label" for="">CP:</label>
															<div class="controls">
																<input id="" name="CP" type="text" placeholder="" class="form-control input-small">
																
															</div>
													</div>

													<div class="form-group">
														<label class="control-label" for="">Tel:</label>
															<div class="controls">
																<input id="" name="Tel" type="text" placeholder="" class="form-control input-small">
																
															</div>
													</div>

													<div class="form-group">
														<label class="control-label" for="">Email:</label>
															<div class="controls">
																<input id="" name="Email" type="text" placeholder="" class="form-control input-small">
																
															</div>
													</div>
												</fieldset>
												    <div class="form-group">
														<label class="col-md-4 control-label" for="">Créer</label>
															<div class="col-md-8">
																<input type="submit" id="" name="envoyer" value="envoyer" class="btn btn-success"/>
																<button id="" name="" class="btn btn-danger">annuler</button>
															</div>
													</div>
											</form>
										</div>
									</div>
					
					
				</div>
			</div>
		</div>
	</body>
	<footer>
	</footer>
</html>
