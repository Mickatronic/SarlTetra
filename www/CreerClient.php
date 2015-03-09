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
				<div class="col-sm-2">
					Menu
				</div>
				<div class="col-sm-10">
					Section
					<form class="form-horizontal">
					<fieldset>

					<!-- Form Name -->
					<legend>Form Name</legend>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textinput">Text Input</label>  
					  <div class="col-md-4">
					  <input id="textinput" name="textinput" placeholder="placeholder" class="form-control input-md" type="text">
					  <span class="help-block">help</span>  
					  </div>
					</div>

					<!-- Button -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
					  <div class="col-md-4">
						<button id="singlebutton" name="singlebutton" class="btn btn-primary">Button</button>
					  </div>
					</div>

					</fieldset>
					</form>

					
				</div>
			</div>
		</div>
	</body>
	<footer>
	</footer>
</html>
