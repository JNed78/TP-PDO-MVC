<?php
$action=$_GET['action'];
switch ($action) {
case 'list':
        $lesContinents=Continent::findAll();
        include('vues/Continent/listeContinents.php');
        break;

 case 'add':
        $mode="Ajouter";
        include('vues/Continent/formContinent.php');            
        break;

case 'update':
        $mode="Modifier";
        $continent=Continent::findById($_GET['num']);
        include('vues/Continent/formContinent.php');   
        break;
case 'delete':
        $continent=Continent::findById($_GET['num']);
        $nb=Continent::delete($continent);
        if($nb==1){
                $_SESSION['message']=["success"=>"Le continent a bien été supprimé"];
        }else{
                $_SESSION['message']=["danger"=>"Le continent n'a bien été supprimé"];
        }
        header('location: index.php?uc=continents&action=list');
        exit();
        break;

 case 'valideForm':
                $continent= new Continent();
                if(empty($_POST['num'])){
                        $continent->setLibelle($_POST['libelle']);
                        $nb=Continent::add($continent);
                        $message = "ajouté";
                }else{
                        $continent->setLibelle($_POST['libelle']);
                        $continent->setNum($_POST['num']);
                        $nb=Continent::update($continent);
                        $message = "modifié";
                }  
                if($nb==1){
                        $_SESSION['message']=["success"=>"Le continent a bien été $message"];
                }else{
                        $_SESSION['message']=["danger"=>"Le continent a bien été $message"];
                }
                header('location: index.php?uc=continents&action=list');
                exit();
                break;
        }
