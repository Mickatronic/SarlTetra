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
									  <label class="col-sm-2 control-label" for="textinput">Abréviation:</label>  
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
				  <label class="col-md-4 control-label" for="">Civilité</label>
				  <div class="col-md-4"> 
					<label class="radio-inline" for="-0">
					  <input type="radio" name="" id="-0" value="Mm" checked="checked">
					  Mr
					</label> 
					<label class="radio-inline" for="-1">
					  <input type="radio" name="" id="-1" value="">
					  Mme
					</label> 
					<label class="radio-inline" for="-2">
					  <input type="radio" name="" id="-2" value="">
					  Mlle
					</label>
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-md-4 control-label" for=""></label>
				  <div class="col-md-4">
					<button id="" name="" class="btn btn-primary">Sélectionner</button>
				  </div>
				</div>
			</fieldset>
		</div>
	</body>
</html>		