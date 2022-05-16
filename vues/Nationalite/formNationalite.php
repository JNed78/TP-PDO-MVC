<div class="container mt-5"> 
    <div class="row pt-3">
     <div class="col-9"><h2>Liste des Nationalités</h2></div>  
     <div class="col-3"><a href="formNation.php?action=Ajouter" class='btn btn-success'><i class="fas fa-plus-circle"></i> Créer une nationalité</a></div>    
        
    </div>
   <form action="index.php?uc=nationalites&action=list" method="post" class="border border-primary rounded p-3">
      <div class="row">
         <div class="col">
         <input type="text" class='form-control' id='libele' placeholder='Saisir le libellé' name='libelle' value="<?php echo $libelle; ?>">
         </div>

         <div class="col">
         <select name="continent" class="form-control">
      <?php
      echo "<option value='Tous'>Tous les continents</option>";
           foreach($lesContinents as $continent){
           $selection=$continent->num == $continentSel ? 'selected' : '';
          echo "<option value='$continent->num' $selection >$continent->libelle</option>";
      }
       ?>
       </select>
         </div>

         <div class="col">
             <button type="submit" class="btn btn-success btn-block"> Rechercher </button>
         </div>
      </div>
</form>