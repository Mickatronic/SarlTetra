<html>
	<head>
		<?php 
		include 'includes.html';
		?>
	</head>
	<body>
		<?php
			session_start();
			include 'navbar.php';
		?>
		<?php
			include('Bib/phpqrcode/qrlib.php');

			$ClientId = $_POST['ClientId'];
			$TypeDocumentId = $_POST['TypeDocumentId'];
			
			$ImgPathSrv = "";
			$ImgPathQRCode = "";

			$target_dir = "Documents/".$TypeDocumentId."/";
			$target_dirQR = "Documents/QR/";

			$Adresse = "http://192.168.1.39:81/SarlTetra/www/".$target_dir;

			$Fichier = basename($_FILES["uploadFile"]["name"]);

			if(!file_exists ($target_dir.$ClientId))
			{
				mkdir($target_dir.$ClientId, 0777,true);
			}

			if(!file_exists ($target_dirQR.$ClientId))
			{
				mkdir($target_dirQR.$ClientId, 0777,true);
			}
			
			if((!file_exists ($target_dir.$ClientId."/".$Fichier)) && (!file_exists ($target_dirQR.$ClientId."/".$Fichier) ))
			{
				$target_dir = $target_dir.$ClientId."/".$Fichier;
				$uploadOk=1;
				if (move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $target_dir)) 
				{
					$urlQRCode = $Adresse.$ClientId."/".$Fichier;
					//$FichierQrCode = str_replace(".jpg","","$Fichier");
					$index = strripos($Fichier, ".") ;

					$FichierQrCode = substr( $Fichier , 0,$index);

					$cheminQrCode = $target_dirQR.$ClientId."/".$FichierQrCode."-QRCode.jpg"; 
					QRcode::png($urlQRCode,$cheminQrCode);
					
					// Record en base
					$link = mysql_connect("localhost", "root", "");
					mysql_select_db("sarltetra", $link) or die(mysql_error());
				

					$query = "INSERT INTO Documents(IdTypeDocuments,CheminDoc,CheminQRCode) VALUES ($TypeDocumentId,'$target_dir','$cheminQrCode')";
				
					$result = mysql_query($query, $link) or die($query . " - " . mysql_error());
					if($result ==1)
					{
						$query = "SELECT Id FROM Documents WHERE CheminDoc = '$target_dir';";
						$result = mysql_query($query, $link) or die($query . " - " . mysql_error());
						$array = mysql_fetch_assoc($result);
						$DocumentId = $array["Id"];
						echo $DocumentId;
						
						$query = "INSERT INTO ClientsDocuments(IdDocument,IdClient,date) VALUES ($DocumentId,$ClientId,NOW())";
						$result = mysql_query($query, $link) or die($query . " - " . mysql_error());
						
						if($result ==1)
						{
							$_SESSION['PathQRCode'] = $cheminQrCode;
							//echo $cheminQrCode;
							echo "<center>Tout c'est parfaitement déroulé. \r\nVotre QR va ce télécharger dans quelques instants.</center>";
							echo "<a class=\"btn btn-info\" href='$cheminQrCode'>Download</a>";
							echo "<a class=\"btn btn-success\" href='Admin.php'>Revenir à la page admin</a>";
							
							//	echo "<button type=\"button\" onclick=\"location.href='download.php'\">Download All Your Keys On A .txt</button>";
						}
					}
				}	
			}
			else
			{
				echo "Le fichier que vous essayez d'envoyer existe déjà !";
			}
			
		 ?>
	</body>
</html>