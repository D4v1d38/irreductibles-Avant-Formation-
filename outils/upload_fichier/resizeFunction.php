<section>

<?php
 
 function ResizeAndUpload($maxW, $maxH, $dossierSource,$nomFichierSource,$extensionSource, $dossierDestination){
 	global $erreur;
 	//$maxW = largeur voulue 
	//$maxH = hauteur voulue  
	//$dossierSource = dossier de l'image a redimensionner
	//$nomFichierSource = le nom du fichier  de l'image a redimensionner
	//$extensionSource = extension du fichier a redimesionner
	//$dossier_destination = Nom du dossier de destination
 	//------------------------------------------------------------------------------------------

	$size = getimagesize($dossierSource); // on recupere les infos de l'image grace a la fonctin getimagesize
	$imgW = $size[0]; // on stock la largeur
	$imgH = $size[1]; // on stock la hauteur


	$ratioHeight = round($maxH / $imgH, 3); //arrondi a 3 chiffres apres la virgule
	$ratioWidth = round($maxW / $imgW, 3); //arrondi a 3 chiffres apres la virgule

	$test_imageW = $imgW * $ratioHeight;

	if($test_imageW > $maxW)
	{
		$new_imageH = round(($imgH * $ratioWidth),0);
		$new_imageW = round(($imgW * $ratioWidth),0);
	}else
	{
		$new_imageH = round(($imgH * $ratioHeight),0);
		$new_imageW = round(($imgW * $ratioHeight),0);
	}

	$posX = ($maxW == $new_imageW)?0:round(($maxW-$new_imageW)/2);
	$posY = ($maxH == $new_imageH)?0:round(($maxH-$new_imageH)/2);

	//creation de l'image en php
	$extensionJpeg = array('.jpeg', '.JPEG', '.jpg', '.JPG'); //on definit les extensions que l'on souhaite

	$destination = imagecreatetruecolor($maxW, $maxH); // on definit une image "vide"
	$blanc = imagecolorallocate($destination, 255, 255, 255); // on definit un fond blanc 
	imagefill($destination, 0, 0, $blanc); // on rempli l'image avec le fond voulu

		
	if(in_array($extensionSource, $extensionJpeg)){  
		$source = imagecreatefromjpeg($dossierSource);  // on choisi l'image que l'on souhaite redimensionné et uploadé et on crer un image jpeg
		$info= "boucle jpg";
	}else{
		$source = imagecreatefrompng($dossierSource);
		$info= "boucle png";
	}

	
	imagecopyresampled($destination, $source, $posX, $posY, 0, 0, $new_imageW, $new_imageH,$imgW, $imgH); // Etape de redimensionnement 

	//formatage du texte avant upload
				$nomFichierSource = strtr($nomFichierSource, 'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
				$nomFichierSource = preg_replace('/([^.a-z0-9]+)/i', '_', $nomFichierSource);

	//Upload et renomination du fichier si deja existant

	if(is_file($dossierDestination.$nomFichierSource.$extensionSource)){

		$renom = substr($nomFichierSource, 0,5);
		$renom = $renom.'_'.time().$extensionSource;

		if(in_array($extensionSource, $extensionJpeg)){
			imagejpeg($destination,$dossierDestination.$renom); //upload
			$erreur='Le fichier jpeg de meme nom existant deja, il a été enregistré sous le nom : '.$renom;
			
		}else{
			imagepng($destination,$dossierDestination.$renom); //upload
			$erreur='fichier png de meme nom existant deja, il a été enregistré sous le nom : '.$renom;
			}
	}else{
		if(in_array($extensionSource, $extensionJpeg)){
			imagejpeg($destination,$dossierDestination.$nomFichierSource.$extensionSource); //upload
			//$erreur='le Fichier jpeg a été enregistré'; 		
		}else{
			imagepng($destination,$dossierDestination.$nomFichierSource.$extensionSource); //upload
			//$erreur='fichier png a été enregistré';
			}
	}


	/* 
	if(in_array($extensionSource, $extensionJpeg)){

		imagejpeg($destination,$dossierDestination.$nomFichierSource.$extensionSource); //upload		
	}else{
		imagepng($destination,$dossierDestination.$nomFichierSource.$extensionSource);
	}
	*/
	
	imagedestroy($destination);
		
} 

?>

</section>