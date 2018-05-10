<?php
session_start();
require '../bdd/connect.php';

if(isset($_POST['login'])){

	$login 		= $_POST['login'];
	$password 	= $_POST['password'];

	$req = $bdd -> prepare("
			SELECT *
			FROM users
			WHERE login = :login
			AND password = :password
		");
	$req -> execute(array(
		'login' => $login,
		'password' => $password
	));

	$resultat = $req -> fetch();

	if($resultat){

		$_SESSION['login'] = $_POST['login'];
		echo 'success';

	}else{
		echo '<div class="alert alert-danger">
			  <strong>Erreur!</strong> Les données saisies sont erronées.
			</div>';
	}
}