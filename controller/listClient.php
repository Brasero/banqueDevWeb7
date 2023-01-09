<?php
require_once '../model/CompteBancaire.php';
require_once '../model/Personne.php';

session_start();

$clients = $_SESSION['client'] ?? null;

require_once '../view/listClient.php';

