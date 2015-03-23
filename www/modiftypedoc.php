<html>
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
		
			<form class="form-horizontal">
				<fieldset>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textinput">Nom</label>  
					  <div class="col-md-4">
					  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
					  </div>
					</div>
						<div class="form-group">
						  <label class="col-md-4 control-label" for="">Chemin</label>  
						  <div class="col-md-4">
						  <input id="" name="" type="text" placeholder="" class="form-control input-md">
						  </div>
						</div>
							<div class="form-group">
							  <label class="col-md-4 control-label" for="">Type Document</label>
							  <div class="col-md-4">
								<select id="" name="" class="form-control">
								</select>
							  </div>
							</div>
								<div class="form-group">
								  <label class="col-md-4 control-label" for=""></label>
								  <div class="col-md-4">
									<button id="" name="" class="btn btn-primary">Update</button>
								  </div>
								</div>
				</fieldset>
			</form>

</html>