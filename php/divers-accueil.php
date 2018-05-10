<?php

require '../bdd/connect.php';
$req = $bdd -> prepare("SELECT * FROM idees ORDER BY id DESC LIMIT 10");
$req -> execute();


echo json_encode($req -> fetchAll());


$req -> closeCursor();