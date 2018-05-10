<?php
session_start();


if (isset($_FILES['fileupload']) AND $_FILES['fileupload']['error'] == 0)
{
	require '../bdd/connect.php';

	$checkid = $bdd -> prepare("SELECT id FROM cloud ORDER BY id DESC LIMIT 1");
	$checkid -> execute();
	$data = $checkid -> fetch();
	$myid = $data['id'] + 1;

	$anciennom = $_FILES['fileupload']['name'];
	$extention = '.'.pathinfo($anciennom, PATHINFO_EXTENSION);
	$debut = "cloud-";

	$newname   = $debut;
	$newname  .= $myid;
	$newname  .= $extention;

    move_uploaded_file($_FILES['fileupload']['tmp_name'], '../upload/' . $newname);

    $intitule 		= $_FILES['fileupload']['name'];
    $proprietaire 	= $_SESSION['login'];
    $today = date("Y-m-d");

	$req = $bdd -> prepare("INSERT INTO cloud VALUES('', :intitule, :newname, :proprietaire, 'ajouté', :today, 'yes')");
	$req -> execute(array(
		'intitule' => $intitule,
		'newname' => $newname,
		'proprietaire' => $proprietaire,
		'today' => $today
	));
	$req -> closeCursor();

 	header('Location: ../accueil.php#!/cloud');
   
}