<?php 
  
    include_once 'model/connexion_bd.php';
    include_once 'model/utilisateur.php';
    include_once 'model/emprunt.php';
    include_once 'model/categorie.php';
    include_once 'model/livre.php';

?>

<html>
<head>
<meta charset="UTF-8">
<title>Résam</title>
<link rel="stylesheet" href="lib/css/bootstrap.css">
<link href="lib/js/bootstrap.js">

</head>
<body>
<div class="container-fluid">
	<h1>RESAM</h1> <button type="button" class="btn btn-primary btn-sm" onclick="location.href='connexion.php'">Connexion</button>

	<div class="btn-group" role="group" aria-label="Basic example">
	<button type="button" class="btn btn-secondary" onclick="location.href='index.php'">Accueil</button>
    <button type="button" class="btn btn-secondary" onclick="location.href='connexion.php'">Connexion</button>
      <button type="button" class="btn btn-secondary" onclick="location.href='creeCompte.php'">Créer un  compte</button>
	</div>