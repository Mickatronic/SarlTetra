<?php
	// Déclaration variable
	$Nom = "";
	$Chemin="";
	$TypeDoc="";
	$Nom= $_GET['Nom'];
	$Chemin = $_GET['Chemin'];
	$TypeDoc = $_GET['TypeDoc'];
	$db = mysqli_connect('localhost', 'root', '');
	// Récupération des données
	mysqli_select_db($db,'sarltetra');
	// Traitement
	
	$sql = "INSERT INTO documents(Nom,Chemin,IdTypeDocuments) VALUES('".$Nom."','".$Chemin."','".$TypeDoc."');";
	
	ECHO $sql;
	// on envoie la requête
	$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error($db));

	// on ferme la connexion à mysql
	mysqli_close($db);
	
	header('Location: index.php')
?>