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
				  <label class="col-md-4 control-label" for="">Lister Type Document</label>
				  <div class="col-md-4">
					<select id="" name="" class="form-control">
					  <option value="1">Facture</option>
					  <option value="2">Devis</option>
					  <option value="">Sch�ma</option>
					  <option value="">Autre</option>
					</select>
				  </div>
				</div>
				</fieldset>
				<form class="form-horizontal">
					<fieldset>
					<div class="form-group">
					  <label class="col-md-4 control-label" for=""></label>
					  <div class="col-md-4">
						<button id="" name="" class="btn btn-primary">S�lectionner</button>
					  </div>
					</div>
					</fieldset>
					</form>
			</form>
     </body>
</html>
