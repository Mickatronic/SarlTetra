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
		<table class="table table-hover">
				<caption> Titde du tableau </caption>
				<colgroup>
					<col width="150px;"/>
					<col width="200px;"/>
				</colgroup>
				<thead>
					<tr>
						<th>Idfichier</th>
						<th>Nom Fichier</th>
						<th>Lien QRcode</th>
						<th>Nom Client</th>
						<th>Type de document</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>monCHemin.pdf</td>
						<td>MonCheminVersQRCode</td>
						<td>Devis</td>
							<td>Devis</td>
					</tr>
					
					<tr>
						<td>1</td>
						<td>monCHemin.pdf</td>
						<td>MonCheminVersQRCode</td>
						<td>Facture</td>
							<td>Devis</td>
					</tr>
					
					<tr>
						<td>1</td>
						<td>monCHemin.pdf</td>
						<td>MonCheminVersQRCode</td>
						<td>Schéma</td>
							<td>Devis</td>
					</tr>
					
				</tbody>	
			</table>
		</div>
		<!--
		<form class="form-horizontal">
			<div class="form-group">
			  <label class="col-md-4 control-label" for="">clients</label>
				<div class="col-md-4">
					<select id="" name="" class="form-control">
					  <option value="1">1</option>
					  <option value="2">2</option>
					  <option value="">3</option>
					  <option value="">4</option>
					  <option value="">5</option>
					  <option value="">6</option>
					</select>
				</div>
			</div>
		</form>
		<form class="form-horizontal">
			<div class="form-group">
			    <label class="col-md-4 control-label" for="">Fichier</label>
			    <div class="col-md-4">
				   <button id="" name="" class="btn btn-primary"><a href="parcourir.html">parcourir</a></button>
			    </div>
			</div>
		</form>
		-->
    </body>	
</html>