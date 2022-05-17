<div class="container mt-5">
    <div class="row pt-4">
        <div class="col-9"><h2>Liste des Auteurs</h2></div>
        <div class="col-3 mt-2"><a href="index.php?uc=auteur&action=add" class='btn btn-success'><i class="fas fa-plus-circle"></i> Ajouter un Auteur</a></div>
    </div>
<?php 

?>

<form action="index.php?uc=auteur&action=list" method="post" class="border border-primary rounded p-3 mt-1 mb-3">
        <div class="row">
            <div class="col">
            <input type="text" class='form-control' id='nom' placeholder='Saisir le nom' name='nom' value="<?php echo $nom; ?>">
            </div>
            <div class="col">
            <input type="text" class='form-control' id='prenom' placeholder='Saisir le prenom' name='prenom' value="<?php echo $prenom; ?>">
            </div>
            <div class="col">
                <select name="continent" class="form-control btn btn-light btn-block" >
                        <?php 
                        echo "<option value='Tous'>Tous les continent</option>";
                        foreach($lesNationalites as $nationalite)
                        {
                            $selection=$nationalite->getNum() == $nationaliteSel ? 'selected' : '';
                            echo "<option value='". $nationalite->getNum() ."'". $selection.">". $nationalite->getLibelle()."</option>";
                        }
                        ?>
                </select>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-success btn-block" >Rechercher</button>
            </div>
        </div>
    </form>

    
<table class="table table-hover table-striped">
    <thead>
        <tr class="d-flex">
            <th scope='col' class='col-md-2'>Numéro</th>
            <th scope='col' class='col-md-3'>Nom</th>
            <th scope='col' class='col-md-3'>Prénom</th>
            <th scope='col' class='col-md-3'>Continent</th>
            <th scope='col' class='col-md-1'>Action</th>
        </tr>    
    </thead>
    <tbody>
        <?php foreach($lesAuteurs as $auteur) {
            echo "<tr class='d-flex'>";
            echo "<td class='col-md-2'>$auteur->num</td>";
            echo "<td class='col-md-3'>$auteur->nom</td>";
            echo "<td class='col-md-3'>$auteur->prenom</td>";
            echo "<td class='col-md-3'>$auteur->libContinent</td>";
            echo "<td class='col-md-2'>
                      <a href='index.php?uc=auteur&action=update&num=".$auteur->num."' class='btn btn-primary'><i class='fas fa-pen'></i></a>
                      <a href='#modalsuppr' data-toggle='modal' data-message='Êtes vous sur de  vouloir supprimer' data-suppression='index.php?uc=auteur&action=delete&num=".$auteur->num."' class='btn btn-danger'><i class='fas fa-trash'></i></a></td>";
            echo "</tr>";

        }

        ?>
    </tbody>
</table>
</div>