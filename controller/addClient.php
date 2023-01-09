<?php

require dirname(__DIR__). '/model/CompteBancaire.php';
require dirname(__DIR__). '/model/Personne.php';
session_start();

if (isset($_POST['first-name'], $_POST['last-name'], $_POST['age'], $_POST['account-balance'])) {
    $first = $_POST['first-name'];
    $last = $_POST['last-name'];
    $age = $_POST['age'];
    $balance = $_POST['account-balance'];

    $personne = new Personne($last, $first, $age);
    $compte = new CompteBancaire($balance);
    $personne->setCompteBancaire($compte);

    $session = $_SESSION['client'] ?? [];
    $session[] = $personne;
    $_SESSION['client'] = $session;

    header('Location: index.php?page=listClient');
}