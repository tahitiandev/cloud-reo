<?php

require '../bdd/connect.php';

$id = $_GET['id'];

$req = $bdd -> prepare("DELETE FROM gantt WHERE id = :id");
$req -> execute(array('id' => $id));

$req -> closeCursor();

header('Location: ../accueil.php#!/gantt');