<?php
	// Déclaration variable
	$NomFichier = "";
	$LienQRcode="";
	$NomDocument="";
	$Typededocument="";
	$NomFichier = $_GET['NomFichier'];
	$LienQRcode = $_GET['LienQRcode'];
	$NomDocument = $_GET['NomDocument'];
	$Typededocument = $_GET['Typededocument'];
	$db = mysqli_connect('localhost', 'root', '');
	// Récupération des données
	mysqli_select_db($db,'sarltetra');
	// Traitement
	
	$sql = "INSERT INTO typedocuments() VALUES();";
	
	ECHO $sql;
	// on envoie la requête
	$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error($db));

	// on ferme la connexion à mysql
	mysqli_close($db);
	
	header('Location: index.php')
?>