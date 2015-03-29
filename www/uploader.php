<?php
include('Bib/phpqrcode/qrlib.php');
session_start();
$target_dir = "Documents/Schema/";
$target_dirQR = "Documents/QR/";
$Adresse = "http://localhost:81/CR/".$target_dir;

$Fichier = basename($_FILES["uploadFile"]["name"]);
$Societe = $_POST["societe"];
$DateLivraison = $_POST["DateLivraison"];
$Commentaire = $_POST["commentaire"];
$DateCreation = date("y-m-d");

if(!file_exists ($target_dir.$Societe))
{
	mkdir($target_dir.$Societe, 0777);
}

if(!file_exists ($target_dirQR.$Societe))
{
	mkdir($target_dirQR.$Societe, 0777);
}


if((!file_exists ($target_dir.$Societe."/".$Fichier)) && (!file_exists ($target_dirQR.$Societe."/".$Fichier) ))
{
	$target_dir = $target_dir.$Societe."/".$Fichier;
	$uploadOk=1;
	if (move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $target_dir)) 
	{
		$urlQRCode = $Adresse.$Societe."/".$Fichier;
		//$FichierQrCode = str_replace(".jpg","","$Fichier");
		$index = strripos($Fichier, ".") ;

		$FichierQrCode = substr( $Fichier , 0,$index);

		$cheminQrCode = $target_dirQR.$Societe."/".$FichierQrCode."-QRCode.jpg"; 
		QRcode::png($urlQRCode,$cheminQrCode);
		
		// Record en base
		$link = mysql_connect("localhost", "root", "");
		mysql_select_db("Sarltetra", $link) or die(mysql_error());
		$query = "INSERT INTO Clients(Societe,DateCreation,DateLivraison,Commentaire) VALUES ('$Societe','$DateCreation','$DateLivraison','$Commentaire');";
		
		$result = mysql_query($query, $link) or die($query . " - " . mysql_error());
		
		if($result ==1)
		{
			$query = "INSERT INTO Documents(TypeDocumentId,DateCreation,PathImage,PathQRCode,Commentaire) VALUES (1,'$DateCreation','$target_dir','$cheminQrCode','')";
			
			$result = mysql_query($query, $link) or die($query . " - " . mysql_error());
			if($result ==1)
			{
				$query = "SELECT ClientId FROM Clients WHERE Societe = '$Societe';";
				
				$result = mysql_query($query, $link) or die($query . " - " . mysql_error());
				
				$array = mysql_fetch_assoc($result);
				$ClientId = $array["ClientId"];
				
				$query = "SELECT DocumentId FROM Documents WHERE PathImage = '$target_dir';";
				$result = mysql_query($query, $link) or die($query . " - " . mysql_error());
				$array = mysql_fetch_assoc($result);
				$DocumentId = $array["DocumentId"];
				echo $DocumentId;
				
				$query = "INSERT INTO DocumentsClient(DocumentId,ClientId) VALUES ($DocumentId,$ClientId)";
				$result = mysql_query($query, $link) or die($query . " - " . mysql_error());
				
				if($result ==1)
				{
					$_SESSION['PathQRCode'] = $cheminQrCode;
					//echo $cheminQrCode;
					echo "<center>Tout c'est parfaitement déroulé. \r\nVotre QR va ce télécharger dans quelques instants.</center>";
					echo "<a href='$cheminQrCode'>Download</a>";
					echo "<a href='Admin.php'>Revenir à la page admin</a>";
					
					//	echo "<button type=\"button\" onclick=\"location.href='download.php'\">Download All Your Keys On A .txt</button>";
				}
				
			}
		}
	}
	else 
	{
		echo "Sorry, there was an error uploading your file.";
	}
}
else
{
	echo "ERREUR Fichier existant";
}
?> 