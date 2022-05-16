<?php
$action=$_GET['action'];
switch ($action) {
case 'list':
    // traitement du formulaire de recherche
        $libelle="";
        $nationaliteSel="Tous";
        if(!empty($_POST['libelle'])|| !empty($_POST['nationalite'])){
            $libelle= $_POST['libelle'];
            $nationaliteSel=$_POST['nationalite'];                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
        }
        $lesNationalites=Nationalite::findAll();
        $lesNationalites=Nationalite::findAll($libelle, $nationaliteSel);
        include('vues/Nationalite/listeNationalites.php');
        break;

 case 'add':
        $mode="Ajouter";
        include('vues/Nationalite/formNationalite.php');            
        break;

case 'update':
        $mode="Modifier";
        $nationalite=Nationalite::findById($_GET['num']);
        include('vues/Nationalite/formNationalite.php');   
        break;
case 'delete':
        $nationalite=Nationalite::findById($_GET['num']);
        $nb=Nationalite::delete($nationalite);
        if($nb==1){
                $_SESSION['message']=["success"=>"Le nationalite a bien été supprimé"];
        }else{
                $_SESSION['message']=["danger"=>"Le nationalite n'a bien été supprimé"];
        }
        header('location: index.php?uc=nationalites&action=list');
        exit();
        break;

 case 'valideForm':
                $nationalite= new Nationalite();
                if(empty($_POST['num'])){
                        $nationalite->setLibelle($_POST['libelle']);
                        $nb=Nationalite::add($nationalite);
                        $message = "ajouté";
                }else{
                        $nationalite->setLibelle($_POST['libelle']);
                        $nationalite->setNum($_POST['num']);
                        $nb=Nationalite::update($nationalite);
                        $message = "modifié";
                }  
                if($nb==1){
                        $_SESSION['message']=["success"=>"Le nationalite a bien été $message"];
                }else{
                        $_SESSION['message']=["danger"=>"Le nationalite a bien été $message"];
                }
                header('location: index.php?uc=nationalites&action=list');
                exit();
                break;
        }
