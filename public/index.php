<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/index.css"/>
    <link rel="stylesheet" href="assets/css/list.css"/>
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/navBar.css"/>
    <title>Ma banque</title>
</head>
<body>

<nav>
    <a href="/">Accueil</a>
    <a href="?page=addClient">Ajouter un client</a>
    <a href="?page=listClient">Liste des clients</a>
</nav>

<?php
    require '../core/router.php';

?>

<footer>
    <p>Copyright 2021 Banque XYZ</p>
</footer>
</body>
</html>