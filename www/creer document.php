<html>
	<head>
		<?php 
		include 'includes.html';
		?>
	</head>
	<body>
	<div class="container">
		<div class="row">
		</div>
	</div>
	<form method="GET" action="CreerDocuments-Validation.php" class="form-horizontal">
			<div class="form-horizontal">
		<fieldset>
		<div class="form-group">
		  <label class="col-md-4 control-label" for="">Nom</label>  
		  <div class="col-md-4">
		  <input id="" name="Nom" type="text" placeholder="" class="form-control input-md">		
		  </div>
		</div>
		</fieldset>
		</div>
		<div class="form-horizontal">
			<fieldset>
			<div class="form-group">
			  <label class="col-md-4 control-label" for="Chemin">Chemin</label>
			  <div class="col-md-4">
				<input id="Chemin" name="Chemin" class="input-file" type="file">
			  </div>
			</div>

			</fieldset>
			</div>
        <div class="form-horizontal">
		<fieldset>
		<div class="form-group">
		  <label class="col-md-4 control-label" for="">Id type documents</label>  
		  <div class="col-md-4">
		  <input id="" name="TypeDoc" type="text" placeholder="" class="form-control input-md">
			
		  </div>
		</div>
		</fieldset>
		</div>
		<div class="form-horizontal">
		<fieldset>
		<div class="form-group">
		  <label class="col-md-4 control-label" for=""></label>
		  <div class="col-md-4">
			<input type="submit" name="Envoyer" value="Ajouter" class="btn btn-primary" />
			
		  </div>
		</div>
		</fieldset>
		</div>
		</form>
	</body>
	<footer>
	</footer>
</html>