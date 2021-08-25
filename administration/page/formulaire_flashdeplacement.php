<section>
	<div class="formulaire_administration">
        <div class="bandeau_titre">
        	<h1 class="h1_bandeau_titre"> Flash infos déplacement</h1>
        </div>

		<form method="post" action="">
			

			<fieldset class="fieldset_informations" >
					<legend>Formulaire Flash déplacement</legend>		    
					    
					    <label class="label_formulaire" for="Lieu">Lieu : </label> 
					    <input class="input_formulaire" type="text" name="Lieu" id ="Lieu" placeholder="Lieu"/> <br /> <br />

					    <label class="label_formulaire" for="date_depart">Départ :</label> 
					    <input class="input_formulaire" type="date" name="date_depart" id ="date_depart" > 
					    <input type="time" name="heure_depart" > <br /> <br />

					    <label class="label_formulaire" for="lieu_rdv">Rendez-vous : </label>
					    <input class="input_formulaire" type="text" name="lieu_rdv" id="rdv" placeholder="lieu de rendez-vous">
					    <input type="time" name="heure_rdv"> <br/><br>

					    <label class="label_formulaire" for="heure_retour">heure retour estimé</label> 
					    <input class="input_formulaire" type="time" name="heure_retour" id="heure_retour"> <br> <br>

					    <label class="label_formulaire" for="tarifs_irrés">Tarifs estimés adhérents : </label> 
					    <input class="input_formulaire" type="number" name="tarifs" id ="tarifs_irrés" placeholder="tarifs irrés"> <br /> <br />

					    <label class="label_formulaire" for="tarifs_non_irrés">Tarifs estimés NON-adhérents : </label> 
					    <input class="input_formulaire" type="number" name="tarifs_non_irrés" id ="tarifs_non_irrés" placeholder="tarifs non irrés"> <br /> <br />

					    <label class="label_formulaire" for="date_limite_inscription">Date limite d'inscription : </label> 
					    <input class="input_formulaire" type="date" name="date_limite_inscription" id ="date_limite_inscription" placeholder="jj/mm/aa"> <br /> <br />

					    <label class="label_formulaire" for="condition">Condition validation déplacement : </label> 
					    <input class="input_formulaire" type="text" name="condition" id ="condition" placeholder="condition de validation"> <br /> <br />

					    <label class="label_textarea" for="lieu_inscription">Où s'inscrire : </label> 
					    <textarea type="textarea" name="lieu_inscription" id ="lieu_inscription" rows="5" cols="30">A la table des supporters derrière la tribune I. </textarea> <br /> <br />

					    <label class="label_textarea" for="infos_divers_deplacement">Divers : </label> 
					    <textarea type="textarea" name="infos_divers_deplacement" id ="infos_divers_deplacement" rows="5" cols="50">Un accompte sera demandé pour les non irrés au moment de l'inscription. </textarea> <br /> <br />
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

			    <input class="input_bouton_valider" type="submit" name="Valider">

		</form>
		
	</div>
<section>



