<?php

session_start();

require '../bdd/connect.php';

$id 			= $_GET['id'];
$intitule 		= $_GET['intitule'];
$proprietaire 	= $_SESSION['login'];
$today 			= date("Y-m-d");

$req = $bdd -> prepare("UPDATE cloud SET affichage = 'no' WHERE id = :id");
$req -> execute(array('id' => $id));

$req -> closeCursor();


$req = $bdd -> prepare("INSERT INTO cloud VALUES('', :intitule, :proprietaire, 'supprimé', :today, 'yes') ");
$req -> execute(array(
	'intitule' => $intitule,
	'proprietaire' => $proprietaire,
	'today' => $today
));

$req -> closeCursor();









header('Location: ../accueil.php#!/cloud');