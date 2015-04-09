<?php

	$Nom= $_GET['Nom'];
	$Prenom= $_GET['Prenom'];
	$db = mysqli_connect('localhost', 'root', '');
	
	// on sélectionne la base
	mysqli_select_db($db,'sarltetra');
	
	$sql = "UPDATE Clients SET Nom = \"".$Nom."\", Prenom = \"".$Prenom."\" WHERE Id = ".$Id." ;";
			
	$resultat = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error());
	
	//on ferme la connexion à mysql
	mysqli_close($db) ;
	
	header ('Location: index.php');
	

?>