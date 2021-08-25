<section>

<?php
 
	$size = getimagesize($dossier_tmp); // on recupere les infos de l'image
	$imgW = $size[0]; // on stock la largeur
	$imgH = $size[1]; // on stock la hauteur
	$maxW = 220 ;
	$maxH = 110 ;


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
	
	$destination = imagecreatetruecolor(220, 110);
	$blanc = imagecolorallocate($destination, 255, 255, 255);
	imagefill($destination, 0, 0, $blanc);

		
	if(in_array($fichierExtension, $extension2)){
		$source = @imagecreatefromjpeg($dossier_tmp); //le @ permet de passer l'alerte car le fichier temporaire n'affiche pas l'extension
		$info= "boucle jpg";
	}else{
		$source = @imagecreatefrompng($dossier_tmp);
		$info= "boucle png";
	}

	
	imagecopyresampled($destination, $source, $posX, $posY, 0, 0, $new_imageW, $new_imageH,$imgW, $imgH);
	

	if(in_array($fichierExtension, $extension2)){

		imagejpeg($destination,$dossier.$fichier.'.jpeg');		
	}else{
		imagepng($destination,$dossier.$fichier.'.png');
	}
		
	
	imagedestroy($destination);
	


	echo "largeur = " .$imgW.'<br/>'. " hauteur = " .$imgH.'<br/>' .' ratioW = '. $ratioWidth.'<br/>' .' ratioH =  ' .$ratioHeight.'<br/>' . ' test_image = '. $test_imageW.'<br/>' .' new_imageW = ' .$new_imageW .'<br/>'. ' new_imageH = ' .$new_imageH .'<br/>'.'position de X = ' .$posX .'<br/>'.'position de Y = '. $posY.'<br/><br/>'.'$dossier_tmp = '. $dossier_tmp. '<br/>' . '$fichier ='  . $fichier . '<br/>' . '$dossier ='  . $dossier . '<br/>' . '$fichierNom = ' .$fichierNom .'<br/>' . '$fichierextension = ' .$fichierExtension . '<br/> '. 'source = ' . $source. '<br/> '. 'info = ' . $info  ;


?>

</section>