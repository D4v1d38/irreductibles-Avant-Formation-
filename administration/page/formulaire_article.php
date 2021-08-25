<section>

	<div class="formulaire_administration" id="formulaire_article">

        <div class="bandeau_titre">
        	<h1 class="h1_bandeau_titre"> Nouvel Article</h1>
        </div>

        <form method="post" action="index.php?page_admin=formulaire_valide_article" enctype="multipart/form-data">
          <fieldset class="fieldset_informations" >
				  <legend>Saisi d'un article </legend>


       			<label class="label2" for="titrearticle">Titre de l'article :</label> <br />
      			<input class="input_titre" type="text" name="titre" id="titrearticle" placeholder="Titre"> <br /><br />

        
        <!-- section insertion image-->
            <label class="label2">Souhaitez-vous inserer une image personnalisée en page d'accueil? si non, une image par défaut sera publiée selon la catégorie</label> <br />

            <select class="bouton_statut_publication" name="choix_image_home"  onchange="if(this.selectedIndex==0)
            {
              Affichage('image_article_home','off');
            }else{
              Affichage('image_article_home','on');
            }">

            <option>Non</option>
            <option>Oui</option>
            </select>


            <!-- zone formulaire -->
	
					<!-- Limitation de la taille du fichier -->
					<input type="hidden" name="MAX_FILE_SIZE" value="1000000">

					<input id="image_article_home" type="file" name="monfichier">
					

				<!-- fin section insertion image-->


				<!-- section introduction du formulaire-->
      			<label class="label2" for="introarticle">Introduction de l'article (facultatif) :</label> <br />

      			<select class="bouton_statut_publication" name="choix_intro" onchange="if(this.selectedIndex==0)
      			{
      				Affichage('introarticle','off');
      			}else{
      				Affichage('introarticle','on');
      			}">
      				
      			<option>Non</option>
      			<option>Oui</option>
      			</select>

      				<!-- Textarea intro-->
      			<textarea class="textarea2" type="text" name="introarticle" id="introarticle" placeholder="facultatif, en cas d'absence d'introduction le début de l'article fera guise d'intro sur la page d'accueil"  rows="4"></textarea> <br /><br />
		
				<!-- FIN section introduction du formulaire-->

				    <label class="label2" for="summernote">Contenu de l'article :</label> <br />
        		  <?php
        				include ("../outils/editeur.html"); 
        			?>

        		<br />

        		<label  class="label2" for="auteur">Auteur: </label> 
        		<input  type="text" name="auteur" id="auteur"> 
        		<label  class="label2"  for="categorie_article">Categorie: </label>
        		<input  type="text" name="categorie_article" id="categorie_article">

    		</fieldset>

    		<fieldset class="fieldset_publication">
				<legend>Paramètres de Publication</legend>
					<label class="label_formulaire" for="date_creation">Date de création : </label> 
				    <input type="date" name="date_creation" id ="date_creation">  
				    <input type="time" name="heure_creation"> <br> <br>

				    <label class="label_formulaire" for="date_debut_publication">Début de publication : </label> 
				    <input type="date" name="date_debut_publication" id ="date_debut_publication">
				    <input type="time" name="heure_debut_publication"> <br> <br>  

				    <label class="label_formulaire" for="date_fin_publication">Fin de publication : </label>
				    <input type="date" name="date_fin_publication" id="date_fin_publication" >
				    <input type="time" name="heure_fin_publication"> <br> <br>  
				
				    <label class="label_formulaire" for="statut">Statut de la publication : </label> 
				    <select class="bouton_statut_publication" name="statut" id ="statut" >
				    	<option value="désactivé">desactivé</option>
				    	<option value="programmé" selected>programmé</option>
				      	<option value="actif">actif</option>
				    </select> <br> <br> 
			</fieldset>

			
      <button class="input_bouton" type="button" name="Apercu" onclick="Affichage('apercu_article','on');Affichage('formulaire_article','off'); Elementsapercu()"> Apercu </button> 

      <input class="input_bouton_valider" type="submit" name="Valider" value="Valider">

      
		</form>

	</div>

<!-- Fenetre Apercu de l'article-->

  <div id="apercu_article" >

    <button class="input_bouton" type="button" name="btn_formulaire_article" onclick="Affichage('apercu_article','off');Affichage('formulaire_article','on')">Retour</button>

    <h4>Apercu dans la page article developpé</h4>
    <div class="boxarticle_page_article">
      <h1 class="h1_bandeau_titre" id="apercu_article_titre"> Titre de l'article selectionné</h1>
      <p class="p_publication" id="apercu_article_publication">publié le: </p>
      <p class="p_publication" id="apercu_article_auteur">par: </p>
      <p class="p_intro" id="apercu_article_intro"> texte d'introduction (facultatif). </p> 
      <p class="p_article_developpe" id="apercu_article_article"> texte de l'article.  </p>
    </div>

    <br />

    <h4>Apercu en page d'accueil (page Home)</h4>
    <div class="boxarticleniveau" id="apercu_home"> 
      <img class="art_img_categ" src="images/design/cages_70x70.png" alt="logo_article" id="apercu_home_logo">
      <h1 class="titre_article_alaune" id="apercu_home_titre"> Titre du dernier article créé </h1>
      <p class="p_publication" id="apercu_home_publicaton">publié le: </p>
      <img class="image_articleenune" src="images/images_articles/article_irreductibles.jpg" alt="article" id="apercu_home_image">
      <div class="article_home">
        <p class="p_article_en_une" id="apercu_home_contenu">  Je met une ligne pour dire que le site est en construction.</p>
        <a class="bouton_lire" href="#"> Lire l'article </a> 
      </div>
    </div>

  </div> <!-- fin du Div apercu -->



</section>

