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
					<form method="GET" action="CreerTypeDoc-Validation.php" class="form-horizontal">
						<div class="form-horizontal">
							<fieldset>							
								<div class="form-group">
									  <label class="col-md-4 control-label" for="">Libelle</label>  
									  <div class="col-md-4">
									  <input id="Libelle" name="" type="text" placeholder="" class="form-control input-md">								
									  </div>
								</div>
							</fieldset>
						</div>
						<div class="form-horizontal">
							<fieldset>						
								<div class="form-group">
								  <label class="col-md-4 control-label" for="">Id</label>  
								  <div class="col-md-4">
								  <input id="Id" name="" type="text" placeholder="" class="form-control input-md">								
								  </div>
								</div>
							</fieldset>
						</div>

						<div class="form-horizontal">
							<fieldset>						
								<div class="form-group">
								  <label class="col-md-4 control-label" for=""></label>
								  <div class="col-md-4">
								  <input type="submit" id="" name="envoyer" value="envoyer" class="btn btn-success"/>
								  </div>
								</div>
							</fieldset>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
