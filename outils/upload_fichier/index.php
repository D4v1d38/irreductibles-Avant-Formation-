
	<!-- zone php -->
	<?php
		$extension1 = array('.jpg','.JPG','.jpeg','.JPEG','.png','.PNG');
		$extension2 = array('.jpg','.JPG','.jpeg','.JPEG');
		include('resizeFunction.php');


		if(isset($_FILES['monfichier']) && !empty($_FILES['monfichier']['name'])) 
		{
			$dossier = $host.'/outils/upload_fichier/upload/'; //nom du dossier de destination
			$dossier_tmp = $_FILES['monfichier']['tmp_name']; // on recupere le chemin du dossier temporaire
			$fichier = basename($_FILES['monfichier']['name']); // on recupere le nom du fichier avec l'extension
			$fichierNom = strstr($fichier,'.',true); // on recupere le nom du fichier sans l'extension			
			$fichierExtension = strrchr($fichier, '.'); // on recupere l'extension
			$extensionsAutorisees = ($extension1); // tableau avec les extensions que l'on souhaite autoriser
			
			$taille_maxi = 1000000;
			$taille = filesize($dossier_tmp);


			// Verification de l'extension
			if(!in_array($fichierExtension, $extensionsAutorisees)){ //si l'extension du fichier n'est pas dans le tableau
				$erreur = "l'extension n'est pas autorisée !";
			}

			//Verification de la taille
			if($taille > $taille_maxi){
				$erreur = 'Le fichier est trop volumineux';
			}

			// Etape de l'upload
			if(!isset($erreur)){ // si pas d'erreur , on upload

			
				ResizeAndUpload (220, 110, $dossier_tmp, $fichierNom,$fichierExtension, $dossier); //fonction redimensionnement

			}
			else{
				echo $erreur;
			}
		}else{
			echo 'Veuillez choisir une image';
		}

	
	?>
