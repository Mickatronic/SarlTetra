<?php

	$IdCivilite = $_GET['IdCivilite'];
	$Libelle= $_GET['Libelle'];
	$Abreviation= $_GET['Abreviation'];
	
	$db = mysqli_connect('localhost', 'root', '');
	
	// on s�lectionne la base
	mysqli_select_db($db,'sarltetra');
	
	$sql = "DELETE FROM Civilites WHERE IdCivilite = ".$IdCivilite." ;";
		
	$resultat = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());	
	
	//on ferme la connexion � mysql
	mysqli_close($db) ;
	
	header ('Location: index.php');
	

?>