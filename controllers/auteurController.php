<?php 
$action=$_GET['action'];
switch($action)
{
    case 'list' : 
        // traitement du formulaire de recherche
        $nom ="";
        $prenom="";
        $continentSel = "Tous";
        if(!empty($_POST['nom']) || !empty($_POST['prenom']) || !empty ($_POST['continent']) )
        {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $continentSel = $_POST['continent'];
        }
        $lesContinents=Continent::findAll();
        $lesAuteurs=Auteur::findAll($nom,$prenom, $continentSel);
        include ('vues/Auteur/listeAuteur.php'); 
    break;
    case 'add' :
        $lesContinents = Continent::findAll();
        $mode="Ajouter";
        include ('vues/Auteur/formAuteur.php');
    break;
    case 'update' :
        $mode="Modifier";
        $lesContinents = Continent::findAll();
        $nationalite = Nationalite::findById($_GET['num']);
        include ('vues/Auteur/formAuteur.php');
    break;
    case 'delete' :
        $nationalite = Nationalite::findById($_GET['num']);
        $nb=Nationalite::delete($nationaltei);

        if($nb==1)
        {
            $_SESSION['message']=["success"=>"L'Auteur a bien été supprimé"];
        }else{
            $_SESSION['message']=["danger"=>"L'Auteur n'a pas été supprimé"];
        }
        header('location:index.php?uc=auteurs&action=list');
        exit();
    break;
    case 'valideForm' :
        $nationalite = new Nationalite();

        if(empty($_POST['num'])) // cas d'une création
        {
            $continent = Continent::findById($_POST['continent']);
            $nationalite->setLibelle($_POST['libelle']);
            $nationalite->setNumContinent($continent);
            $nb=Nationalite::add($nationalite);
            $numcontinent=$_POST['continent'];
            $continent=Continent::findById(intval($numcontinent));
            $message = "ajouté";
        }else // cas d'une modification
        {
            $nationalite->setNum($_POST['num']);
            $nationalite->setLibelle($_POST['libelle']);
            $numcontinent=$_POST['continent'];
            $continent=Continent::findById($numcontinent);
            $nationalite->setNumContinent($continent);
            $nb=Nationalite::update($nationalite);
            $message = "modifier";
        }
        if($nb==1)
        {
            $_SESSION['message']=["success"=>"Le continent a bien été $message"];
        }else{
            $_SESSION['message']=["danger"=>"Le continent n'a pas été $message"];
        }
        header('location:index.php?uc=auteurs&action=list');
        exit();
    break;

}