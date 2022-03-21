if($action =="Modifier"){
   
   $num=$_GET['num'];
   $req=$monPdo->prepare("select * from nationalite where num= :num");
   $req->setFetchMode(PDO::FETCH_OBJ);
   $req->bindParam(':num', $num);
   $req->execute();
   $laNationalite=$req->fetch();
   
}
$reqContinent=$monPdo->prepare("select * from continent");
$reqContinent->setFetchMode(PDO::FETCH_OBJ);
$reqContinent->execute();
$lesContinents=$reqContinent->fetchAll();
?>


<div class="container mt-5"> 
    <h2 class='pt-3 text-center'><?php echo $action ?> un continent</h2>
 <form action="valideFormNation.php?action=<?php echo $action ?>" method="post" class="col-md-8 offset-md-3 border border-primary p-3 rounded"> 
 <div class="form-group">
     <label for='libelle'> Libellé </label>
     <input type="text" class='form-controle col-md-12' id='libele' placeholder='Saisir le libellé' name='libelle'
      value="<?php if($action == "Modifier"){echo $continent->getLibelle() ;} ?>">
 </div>
  <input type="hidden" id="num" name="num"value= "<?php if($action == "Modifier") {echo  $continent->getNum() ;}?>">
   <div class="row">
     <div class="col"> <a href ="listeNationalites.php" class='btn btn-warning btn-block'> Revenir à la liste </a> </div>
     <div class="col"><button type='submit' class='btn btn-success btn-block'> <?php echo $action ?> </button></div>   
   </div>
 </form> 

</div>