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
				  <label class="col-md-4 control-label" for="">civilite</label>
				  <div class="col-md-4"> 
					<label class="radio-inline" for="-0">
					  <input type="radio" name="" id="-0" value="Mm" checked="checked">
					  M
					</label> 
					<label class="radio-inline" for="-1">
					  <input type="radio" name="" id="-1" value="">
					  Mm
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
					<button id="" name="" class="btn btn-primary">update</button>
				  </div>
				</div>
			</fieldset>
		</form>
	</body>
</html>		