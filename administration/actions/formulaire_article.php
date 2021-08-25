<?php
include('../outils/upload_fichier/index.php');


//une erreur est intervenu, affiche erreur et forumulaire article
if(!empty($erreur)){
	echo 'Erreur: '.$erreur;
	include('page/formulaire_article.php');
}
else {
//Aucune erreur continu le script
	echo 'Article ajouté.';


} 	

?>				
