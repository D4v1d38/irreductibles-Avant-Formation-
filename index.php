<!--PHP-->
<?php

$page=array(
'home'		=> "page/home.php",
'effectif'	=> "page/effectif.php",
'article'	=> "page/article_developpe.php",
'CA'		=> "page/CA_presentation.php",
);

/* Connexion à la base de donnees*/

try
{
  $bdd = new PDO('mysql:host=localhost;dbname=irreductibles;charset=utf8',"root", ""); 
}
catch (exception $e)
{
  die ('erreur : ' .$e->getMessage());
}

?>

<!--HTML-->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    
    <title> Les Irréductibles - Supporters des Brûleurs de Loups </title>
	  <link rel="stylesheet" href="css/style.css" /> 
    <script type="text/javascript" src="js/script1-0.js"></script>
  
  </head>
  
  <body>

    <?php
    
      //banniere dans le dossier includes 
       include ("includes/banniere.php"); 
      //menu principal dans le dossier includes -->
        include ("includes/menus.php"); 

      //corps du site, gestion des pages a afficher -->
      if(empty($_REQUEST['page'])) include ("page/home.php"); 
	    elseif(!array_key_exists($_REQUEST['page'], $page)) include ("page/home.php");
	    else include ($page[$_REQUEST['page']]);
   
      //bas de page dans le dossier includes -->
      include ("includes/bas_de_page.php"); 

   ?>

  </body>
</html>