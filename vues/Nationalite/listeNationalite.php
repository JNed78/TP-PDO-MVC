<div class="container mt-5"> 
    <div class="row pt-3">
     <div class="col-9"><h2>Liste des Nationalités</h2></div>  
     <div class="col-3"><a href="formNation.php?action=Ajouter" class='btn btn-success'><i class="fas fa-plus-circle"></i> Créer une nationalité</a></div>    
        
    </div>
   <form action="" method="get" class="border border-primary rounded p-3">
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
    
    <table class="table table-hover table-striped">
    <thead>
      <tr class="d-flex">
      <th scope="col" class="col-md-2">Numéro</th>
      <th scope="col"class="col-md-5">Libellé</th>
      <th scope="col"class="col-md-3">Continent</th>
      <th scope="col"class="col-md-2">Actions</th>
     </tr>
     </thead>
    <tbody>
        <?php
        foreach($lesNationalites as $nationalite){
           echo "<tr class='d-flex'>";
           echo "<td class='col-md-2'>$nationalite->num</td>";
           echo "<td class='col-md-5'>$nationalite->libNation</td>";
           echo "<td class='col-md-3'>$nationalite->libContinent</td>";
           echo "<td class='col-md-2'>
                 <a href='formNation.php?action=Modifier&num=$nationalite->num' class='btn btn-primary'><i class='fas fa-pen'></i></a>
           
                 <a href='#modalSupression' data-toggle='modal'  data-message='Voulez vous supprimer cette nationalité ?' data-suppression='supprimerNationalite.php?num=$nationalite->num' class='btn btn-danger'><i class='far fa-trash-alt'></i></a>
           </td>";

           echo "</tr>";
        }
        ?>     
</tr>
     </tbody>
    </table>



</div>