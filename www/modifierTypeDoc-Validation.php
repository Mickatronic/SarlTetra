<?php

	$Id = $_GET['Id'];
	$Libelle= $_GET['Libelle'];
	
	$db = mysqli_connect('localhost', 'root', '');
	
	// on sélectionne la base
	mysqli_select_db($db,'sarltetra');
	
	$sql = "UPDATE typedocuments SET Id = \"".$Id."\", Libelle = \"".$Libelle."\" WHERE Id = ".$Id." ;";
		
	$resultat = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());	
	
	//on ferme la connexion à mysql
	mysqli_close($db) ;
	
	header ('Location: index.php');
	

?>