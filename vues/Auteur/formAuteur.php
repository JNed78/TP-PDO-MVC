<div class="container mt-5">
        <h2 class="pt-4 text-center"> <?php echo $mode ?> un Auteur</h2>

       <form action="index.php?uc=auteur&action=valideForm" method="post">

       <div class="form-group col-md-6 offset-md-3 border border-primary p-3 round">

            <div class="form-group">
                    <label for="libelle">Libellé</label>
                    <input type="text" class="form-control" id="libelle" placeholder="Saisir le libellé" name="libelle" value="<?php if($mode == 'Modifier') {echo $auteur->getlibelle();}?>">
            </div>
            <input type="hidden" id="num" name="num" value="<?php if($mode == 'Modifier') {echo $auteur->getnum();} ?>">

            <div class="form-group">
                    <label for="continent">Continent</label>
                    <select name="continent" class="form-control btn btn-light btn-block" >
                        <?php 
                        foreach($lesContinents as $continent)
                        {
                            $selection="";

                            if($mode == 'Modifier') {
                                $selection=$continent->getNum() == $auteur->getNumContinent()->getNum() ? 'selected' : '';
                            }
                            echo "<option value='". $continent->getNum(). "' $selection >". $continent->getLibelle()."</option>";
                        }
                        ?>
                    </select>
            </div>

            <div class="row mt-2">
                <div class="col"><a href="index.php?uc=auteur&action=list" class="btn btn-warning btn-block">Revenir a la liste</a></div>

                <div class="col"><button type="submit" class="btn btn-success btn-block"><?php echo $mode ?></button></div>
            </div>
       </div>
       
    </form>
    </div>