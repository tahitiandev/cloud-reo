<?php

require '../bdd/connect.php';
$req = $bdd -> prepare("SELECT * FROM ffom WHERE type = 'force'");
$req -> execute();

while($data = $req -> fetch()){
	echo '<li class="list-group-item">';
	echo 	$data['contenu'];
	echo '<a style="float:right;" href="php/ffom-supprimer.php?id='.$data['id'].'"> Supprimer</a>';
	echo '</li>';
}

$req -> closeCursor();