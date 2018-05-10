<?php

require '../bdd/connect.php';
$req = $bdd -> prepare("SELECT * FROM cloud WHERE affichage = 'yes' ORDER BY id DESC LIMIT 10");
$req -> execute();


echo json_encode($req -> fetchAll());


$req -> closeCursor();