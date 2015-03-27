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
		<div class="form-horizontal">
			<fieldset>
				<div class="form-group">
				<form method="GET" action="CreerCivilite-Validation.php" class="col-sm-12 jumbotron">
					<div class="row">
						<div class="col-sm-6">
							<div class="row">
								<div class="form-horizontal">
									
									<div class="form-group">
									  <label class="col-sm-2 control-label" for="textinput">Abreviation:</label>  
									  <div class="col-sm-8 input-group">
										<span class="input-group-addon"> <span class="glyphicon glyphicon-user"></span></span>
										<input id="Abreviation" name="Abreviation" placeholder="ex : Mr" class="form-control input-md" type="text"/>
									  </div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-horizontal">
									
									<div class="form-group">
									  <label class="col-sm-2 control-label" for="textinput">Libelle:</label>  
									  <div class="col-sm-8 input-group">
										<span class="input-group-addon"> <span class="glyphicon glyphicon-user"></span></span>
										<input id="Libelle" name="Libelle" placeholder="ex : Monsieur" class="form-control input-md" type="text"/>
									  </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				    <div class="col-md-4">
						<input type="submit" name="Envoyer" value="Créer Civilité" class="btn btn-primary" />
					</div>
				</div>
				</form>
				  
				</div>
				
			</fieldset>
		</div>
	</body>
</html>		