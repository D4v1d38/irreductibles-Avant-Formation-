<?php 
  $page_admin= array (
    'accueil'=>"page/home_admin.php",
    'Formulaire_joueurs'=>"page/formulaire_effectifs.php",
    'formulaire_flashdeplacement'=>"page/formulaire_flashdeplacement.php",
    'formulaire_article'=>"page/formulaire_article.php",
    'formulaire_valide_article'=>"actions/formulaire_article.php"
  );

  //Adresse du site
  $host='c:/wamp/www/irreductibles';

?>

<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8" />
    	<title>LES IRREDUCTIBLES - ADMINISTRATION</title>
    	<link rel="stylesheet" type="text/css" href="../css/style.css">
    	<script type="text/javascript" src="../js/script1-0.js"></script>

      <!-- Script et link de l'editeur de texte -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <link href="../outils/editeur/summernote-lite.min.css" rel="stylesheet">
      <script src="../outils/editeur/summernote-lite.min.js"></script>
      <!-- Fin editeur de texte -->
    </head>

    <body>

    		<?php

    	   include ('includes/banniere_admin.php');
         include ('includes/menu.php');
    	 
         if (empty($_REQUEST['page_admin'])) include ($page_admin['accueil']);
         elseif (!array_key_exists($_REQUEST['page_admin'], $page_admin)) include ($page_admin['accueil']);
          else include ($page_admin[$_REQUEST['page_admin']]);

        ?>

    </body>
  </html>