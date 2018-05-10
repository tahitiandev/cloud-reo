<?php

if(isset($_POST['activite'])){

	require '../bdd/connect.php';

	$activite 		= $_POST['activite'];
	$debut 			= $_POST['debut'];
	$fin	 		= $_POST['fin'];
	$description 	= $_POST['description'];

	$req = $bdd -> prepare("INSERT INTO gantt VALUES('', :activite, :debut, :fin, :description)");
	$req -> execute(array(
		'activite' 		=> $activite,
		'debut' 		=> $debut,
		'fin' 			=> $fin,
		'description' 	=> $description
	));
	$req -> closeCursor();
}