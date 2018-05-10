<?php

require '../bdd/connect.php';
$req = $bdd -> prepare("SELECT * FROM gantt ORDER BY debut ASC");
$req -> execute();

echo		'<tr>';
echo			'<th>Tache</th>';
echo			'<th style="width: 15%;">Début</th>';
echo			'<th style="width: 15%;">Fin</th>';
echo			'<th style="width: 15%;">Durée</th>';
echo			'<th>Description</th>';
echo			'<th>Controle</th>';
echo		'</tr>';

while($data = $req -> fetch()){

	$debut 	= $data['debut'];
	$annee 	= substr($debut, 0, 4);
	$mois 	= substr($debut, 5, 2);
	$jours 	= substr($debut, 8, 2);
	$debut = $jours.'/'.$mois.'/'.$annee;

	$fin 	= $data['fin'];
	$annee 	= substr($fin, 0, 4);
	$mois 	= substr($fin, 5, 2);
	$jours 	= substr($fin, 8, 2);
	$fin 	= $jours.'/'.$mois.'/'.$annee;

	$duree = $fin - $debut;

	echo '<tr>';
	echo '<td>'.$data['activite'].'</td>';
	echo '<td>'.$debut.'</td>';
	echo '<td>'.$fin.'</td>';
	echo '<td>'.$duree.'</td>';
	echo '<td>'.$data['description'].'</td>';
	echo '<td>';
	echo '<a href="php/gantt-delete.php?id='.$data['id'].'"> Supprimer</a>';
	echo '</td>';
	echo '</tr>';
}


$req -> closeCursor();