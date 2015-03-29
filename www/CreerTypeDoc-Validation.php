<?php
	// Déclaration variable
	$Libelle = "";
	$Id = "";
	$Libelle= $_GET['Libelle'];
	$Id= $_GET['Id'];
	$db = mysqli_connect('localhost', 'root', '');
	// Récupération des données
	mysqli_select_db($db,'sarltetra');
	// Traitement
	$sql = "INSERT INTO typedocuments(Libelle,Id) VALUES('".$Libelle."','".$Id."');";
	
	ECHO $sql;
	// on envoie la requête
	$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error($db));

	// on ferme la connexion à mysql
	mysqli_close($db);
	
	header('Location: index.php')
?>