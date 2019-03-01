<?php

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
	header('Access-Control-Allow-Origin : *');
	header('Access-Control-Allow-Methods : POST, GET, OPTIONS, PUT, DELETE');
	header('Access-Control-Allow-Headers : *');
	exit;
}
use Tuto\framework\Routeur;

// Contrôleur frontal : instancie un routeur pour traiter la requête entrante

require_once "../bootstrap.php";
require '../src/framework/Routeur.php';

$routeur = new Routeur();
$routeur->routerRequete($entityManager);

