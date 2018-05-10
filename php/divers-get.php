<?php

require '../bdd/connect.php';
$req = $bdd -> prepare("SELECT * FROM idees ORDER BY id DESC");
$req -> execute();

echo		'<tr>';
echo			'<th>Idée</th>';
echo			'<th>Description</th>';
echo			'<th>Image</th>';
echo			'<th style="width: 12%;">Controle</th>';
echo		'</tr>';

while($data = $req -> fetch()){

	if($data['image'] == "" && $data['idee'] != ""){

		echo '<tr>';
		echo '<td>'.$data['idee'].'</td>';
		echo '<td>'.$data['description'].'</td>';
		echo '<td></td>';
		echo '<td>';
		echo '<a href="php/divers-delete.php?id='.$data['id'].'"> Supprimer</a>';
		echo '</td>';
		echo '</tr>';

	}elseif ($data['image'] != "" && $data['idee'] != "") {

		echo '<tr>';
		echo '<td>'.$data['idee'].'</td>';
		echo '<td>'.$data['description'].'</td>';
		echo '<td><a target="_blank" href="upload/'.$data['newname'].'"><img class="imgdivers" src="upload/'.$data['newname'].'"></a></td>';
		echo '<td>';
		echo '<a href="php/divers-delete.php?id='.$data['id'].'"> Supprimer</a>';
		echo '</td>';
		echo '</tr>';
	}else
	{
		echo '<tr>';
		echo '<td colspan=3">';
			echo '<a target="_blank" href="upload/'.$data['newname'].'"><img class="imgdiversupload" src="upload/'.$data['newname'].'"></a>';
		echo '</td>';
		echo '<td>';
		echo '<a href="php/divers-delete.php?id='.$data['id'].'"> Supprimer</a>';
		echo '</td>';
		echo '</tr>';
	}



}


$req -> closeCursor();