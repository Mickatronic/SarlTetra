<?php
	// Déclaration variable
	$nom = "";
	$prenom="";
	$civilite="";
	$Age="";
	$Ville="";
	$CP="";
	$Tel="";
	$Email="";
	$nom= $_GET['nom'];
	$prenom = $_GET['prenom'];
	$civilite = $_GET['civilite'];
	$Age = $_GET['Age'];
	$Ville = $_GET['Ville'];
	$CP = $_GET['CP'];
	$Tel= $_GET['Tel'];
	$Email = $_GET['Email'];
	$db = mysqli_connect('localhost', 'root', '');
	// Récupération des données
	mysqli_select_db($db,'sarltetra');
	// Traitement
	$sql = "UPDATE clients
	(nom,prenom,idcivilite,Age,Ville,CP,Telephone,mail) 
	VALUES('".$nom."','".$prenom."','".$civilite."','".$Age."','".$Ville."','".$CP."','".$Tel."','".$Email."');";
	
	ECHO $sql;
	// on envoie la requête
	$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error($db));

	// on ferme la connexion à mysql
	mysqli_close($db);
	
	header('Location: index.php')
?>