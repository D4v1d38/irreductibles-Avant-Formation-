<section>
	<div class="formulaire_administration">
        <div class="bandeau_titre">
           <h1 class="h1_bandeau_titre"> Saisi d'un nouveau joueur</h1>
        </div>

			<form method="post" action="">
			  	<fieldset class="fieldset_informations">
			  		<legend>Formulaire de saisi joueur</legend>

					    <label class="label_formulaire" for="Saison">Saison :</label> 
					    <input class="input_formulaire" type="text" name="saison" id ="saison" value="2020/21"/>  <br /> <br />
					    
					    <label class="label_formulaire" for="numero">Numero du joueur :</label> 
					    <input class="input_formulaire" type="number" name="numero" min="01" max="99" id ="numero" placeholder="numero"/> <br /> <br />

					    <label class="label_formulaire" for="prenom">Prénom du joueur :</label> 
					    <input class="input_formulaire" type="text" name="prenom" id ="prenom" placeholder="prenom"/> <br /> <br />

					    <label class="label_formulaire" for="nom">Nom du joueur :</label> 
					    <input class="input_formulaire" type="text" name="nom"  id ="nom" placeholder="nom"/> <br /> <br />

					    <label class="label_formulaire" for="nom">Nationalité :</label> 
					    <input class="input_formulaire" type="text" name="nationalité"  id ="nationalité" placeholder="Nationalité"/> <br /> <br />

					    <label class="label_formulaire" for="taille">Taille en cm :</label> 
					    <input class="input_formulaire" type="number" name="taille" id ="taille" placeholder="taille en cm"/> <br /> <br />

					    <label class="label_formulaire" for="poids">Poids en Kg :</label> 
					    <input class="input_formulaire" type="number" name="poids" id ="poids" placeholder="poids en Kg"/> <br /> <br />

					    <label class="label_formulaire" for="date_de_naissance">Date de naissance :</label> 
					    <input class="input_formulaire" type="date" name="date_de_naissance" id ="date_de_naissance" placeholder="jj/mm/aa"/> <br /> <br />

					    <label class="label_formulaire" for="poste">Poste :</label> 
					    <select class="select_choix_poste" name="poste" id ="poste" placeholder="Poste">
					      <option>Attaquant</option>
					      <option>Defenseur</option>
					      <option>Gardien</option>
					    </select><br /> <br />
				</fieldset>

			    <input class="input_bouton_valider" type="submit" name="Valider"/>
			</form>
	</div>
<section>



<?php


if (isset($_POST['saison']) and isset($_POST['prenom']) and isset($_POST['nom']) and isset($_POST['nationalite']) and isset($_POST['taille']) and isset($_POST['poids']) and isset($_POST['date_de_naissance']) and isset($_POST['poste']) and isset($_POST['numero']))
{

  // securisation des donnees envoyer par le bais du formulaire

    $FORMdonnees=array(
    'saison' => htmlspecialchars($_POST['saison']),
    'prenom' => htmlspecialchars($_POST['prenom']),
    'nom'  => htmlspecialchars($_POST['nom']),
    'nationalite' => htmlspecialchars($_POST['nationalite']),
    'taille' => htmlspecialchars($_POST['taille']),
    'poids'  => htmlspecialchars($_POST['poids']),
    'date_de_naissance' => htmlspecialchars($_POST['date_de_naissance']),
    'poste'  => htmlspecialchars($_POST['poste']),
    'numero' => htmlspecialchars($_POST['numero']),
  );

  //insertion des elements à l'aide d'une requete preparee 

  $req = $bdd->prepare('INSERT INTO effectifs(saison, prenom, nom, nationalite, taille, poids, date_de_naissance, poste, numero) VALUES (:saison, :prenom, :nom,:nationalite, :taille, :poids, :date_de_naissance, :poste, :numero)');

  $req->execute($FORMdonnees) or die('erreur données');
}

?>