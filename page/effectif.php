<?php 


$reponse = $bdd->query('SELECT * FROM effectifs ORDER BY  poste DESC, numero ');

?>


    <section>

      <div class="effectif_page">
        <div class="bandeau_titre">
           <h1 class="h1_bandeau_titre"> EFFECTIF</h1>


            <label>Filtrer : </label> 
              <select name="choix_poste">
                <option>Tous</option>
                <option>Gardiens</option>
                <option>Defenseurs</option>
                <option>Attaquants</option>
              </select>

        </div>
     

       
          <?php
            while ($donnees=$reponse->fetch())
            {
          ?>

               <section class="effectif_block">
                <div class="effectif_photo"><img src="images/design/tete_loup.png"></div>
                <div class="effectif_nom"> <?php echo htmlspecialchars($donnees['nom'])." ".htmlspecialchars($donnees['prenom']) ; ?> </div>
                <div class="effectif_numero"><?php echo htmlspecialchars($donnees['numero']); ?></div>
                <div class="effectif_statut"><?php echo htmlspecialchars($donnees['poste']); ?> </div>
                <div class="effectif_taille"> <?php echo htmlspecialchars($donnees['taille']). " " .'Cm'; ?> </div>
                <div class="effectif_poids"> <?php echo htmlspecialchars($donnees['poids']). " " .'Kg'; ?> </div>
                <div class="effectif_date_naissance"> <?php echo htmlspecialchars($donnees['date_de_naissance']); ?> </div>
               </section>

          <?php
            }
            $reponse->closecursor();
          ?>

      </div>

    </section>



