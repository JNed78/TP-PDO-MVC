<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Jumbotron Template · Bootstrap v4.6</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/jumbotron/">

    

    <!-- Bootstrap core CSS -->


    <link rel="stylesheet" href="https://bootswatch.com/4/sketchy/bootstrap.css">
    <script src="https://kit.fontawesome.com/0a64ec8774.js" crossorigin="anonymous"></script>
    

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.6/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.6/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.6/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>
  <body>
    
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">Ma Bibliothèque</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-book"></i> Gestion des genres</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Liste des Genres</a>
          <a class="dropdown-item" href="#">Ajouter un Genre</a>
          <a class="dropdown-item" href="#">Rechercher un Genre</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-user"></i> Gestion des Auteurs</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="index.php?uc=auteurs&action=list">Liste des Auteurs</a>
          <a class="dropdown-item" href="index.php?uc=auteurs&action=add">Ajouter un Auteur</a>
          <a class="dropdown-item" href="#">Rechercher un Auteur</a>
        </div> 
    </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-expanded="false"><i class="far fa-flag"></i> Gestion des Nationalités</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="index.php?uc=nationalites&action=list">Liste des Nationalités</a>
          <a class="dropdown-item" href="index.php?uc=nationalites&action=add">Ajouter une Nationanlité</a>
          <a class="dropdown-item" href="#">Rechercher une Nationalité</a>
        </div>
        </li>
          <li class="nav-item dropdown"> 
             <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-globe" aria-hidden="true"></i>
 Gestion des Continents</a>
               <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="index.php?uc=continents&action=list">Liste des Continents</a>
              <a class="dropdown-item" href="index.php?uc=continents&action=add">Ajouter un Continent</a>
        </div> 
    </li>
    </ul>
  </div>
</nav>