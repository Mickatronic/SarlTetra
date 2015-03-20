 <?php
	$Abreviation = "";
	$Libelle = "";
	$Abreviation = $_GET['Abreviation'];
	$Libelle = $_GET['Libelle'];
	$db = mysqli_connect('localhost', 'root', '');

	// on sélectionne la base
	mysqli_select_db($db,'sarltetra');

	// on crée la requête SQL
	$sql = "INSERT INTO civilites(Abreviation,Libelle) VALUES('".$Abreviation."','".$Libelle."');";

	// on envoie la requête
	$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

	// on ferme la connexion à mysql
	mysqli_close($db);
	
	header('Location: index.php')
 ?>