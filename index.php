<?php ob_start();
session_start();
include ("vues/header.php");
include ("modeles/Continent.php");
include ("modeles/Nationalite.php");
include ("modeles/monPdo.php");
include ("vues/messageflash.php");


$uc =empty($_GET['uc']) ? "accueil" : $_GET['uc'];

switch($uc){
    case 'accueil' :
        include('vues/accueil.php');
        break;
    case 'continents' :
        include('Controllers/continentController.php');
        break;   
        case 'nationalites' :
            include('Controllers/nationaliteController.php');
            break;   
}
include "vues/footer.php";
?>