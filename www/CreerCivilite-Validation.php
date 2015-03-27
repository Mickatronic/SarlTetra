 <?php
	$Nom= "";
	$Chemin= "";
	$IdTypeDocuments= "";
	$Nom = $_GET['Nom'];
	$Chemin= $_GET['Chemin'];
	$IdTypeDocuments= $_GET['IdTypeDocuments'];
	$db = mysqli_connect('localhost', 'root', '');

	// on sélectionne la base
	mysqli_select_db($db,'sarltetra');

	// on crée la requête SQL
	$sql = "INSERT INTO documents(Nom,Chemin,IdTypeDocuments) VALUES('".$Nom."','".$Chemin."','".$IdTypeDocuments."');";

	// on envoie la requête
	$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error());

	// on ferme la connexion à mysql
	mysqli_close($db);
	
	header('Location: index.php')
 ?>