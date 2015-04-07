<?php
	// Déclaration variable
	$nom = "";
	$prenom="";
	$IdCivilite="";
	$Age="";
	$Ville="";
	$CP="";
	$Tel="";
	$Mail="";
	$nom= $_GET['nom'];
	$prenom = $_GET['prenom'];
	$IdCivilite = $_GET['civilite'];
	$Age = $_GET['Age'];
	$Ville = $_GET['Ville'];
	$CP = $_GET['CP'];
	$Tel= $_GET['Tel'];
	$Mail = $_GET['Mail'];
	$db = mysqli_connect('localhost', 'root', '');
	// Récupération des données
	mysqli_select_db($db,'sarltetra');
	// Traitement
	$sql = "UPDATE clients
	SET Nom='".$nom."'
	AND prenom ='".$prenom."'
	AND IdCivilite ='".$IdCivilite."'
	AND Age ='".$Age."'
	AND Ville ='".$Ville."'
	AND Cp='".$Cp."'
	AND Tel='".$Tel."'
	AND Mail='".$Mail."';	
	ECHO $sql;
	// on envoie la requête
	$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error($db));

	// on ferme la connexion à mysql
	mysqli_close($db);
	
	header('Location: index.php')
?>