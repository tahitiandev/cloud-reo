<?php

if(isset($_POST['force'])){

	require '../bdd/connect.php';

	$force = $_POST['force'];

	$req = $bdd -> prepare("INSERT INTO ffom VALUES('', 'force', :force)");
	$req -> execute(array(
		'force' => $force
	));
	$req -> closeCursor();
}
if(isset($_POST['faiblesse'])){

	require '../bdd/connect.php';

	$faiblesse = $_POST['faiblesse'];

	$req = $bdd -> prepare("INSERT INTO ffom VALUES('', 'faiblesse', :faiblesse)");
	$req -> execute(array(
		'faiblesse' => $faiblesse
	));
	$req -> closeCursor();

}
if(isset($_POST['opportunite'])){

	require '../bdd/connect.php';

	$opportunite = $_POST['opportunite'];

	$req = $bdd -> prepare("INSERT INTO ffom VALUES('', 'opportunite', :opportunite)");
	$req -> execute(array(
		'opportunite' => $opportunite
	));
	$req -> closeCursor();

}
if(isset($_POST['menace'])){

	require '../bdd/connect.php';

	$menace = $_POST['menace'];

	$req = $bdd -> prepare("INSERT INTO ffom VALUES('', 'menace', :menace)");
	$req -> execute(array(
		'menace' => $menace
	));
	$req -> closeCursor();

}