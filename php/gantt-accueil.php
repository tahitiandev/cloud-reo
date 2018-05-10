<?php

require '../bdd/connect.php';
$req = $bdd -> prepare("SELECT * FROM gantt ORDER BY debut ASC LIMIT 10");
$req -> execute();


echo json_encode($req -> fetchAll());


$req -> closeCursor();