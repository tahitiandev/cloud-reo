<?php

session_start();

if(isset($_POST['idee'])){

	require '../bdd/connect.php';

	$idee 			= $_POST['idee'];
	$description 	= $_POST['description'];
	$proprietaire 	= $_SESSION['login'];

	$identifiant = $bdd -> prepare("SELECT id FROM idees ORDER BY id DESC LIMIT 1");
	$identifiant -> execute();
	$id = $identifiant -> fetch();
	$data = $id['id'] + 1;


	if (isset($_FILES['file']) AND $_FILES['file']['error'] == 0)
	{

		$anciennom = $_FILES['file']['name'];
		$extention = '.'.pathinfo($anciennom, PATHINFO_EXTENSION);
		$debut = "idees-";

		$idees   = $debut;
		$idees  .= $data;
		$idees  .= $extention;

	    move_uploaded_file($_FILES['file']['tmp_name'], '../upload/' .$idees);

	    $image = $_FILES['file']['name'];
	    $newname = $idees;

	}else{
		$image = "";
	    $newname = "";
	}


	$req = $bdd -> prepare("INSERT INTO idees VALUES('', :idee, :description, :proprietaire, :image, :newname)");
	$req -> execute(array(
		'idee' 			=> $idee,
		'description' 	=> $description,
		'proprietaire' 	=> $proprietaire,
		'image' 		=> $image,
		'newname' 		=> $newname
	));
	$req -> closeCursor();

	header('Location: ../accueil.php#!/divers');
}