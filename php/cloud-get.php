<?php

require '../bdd/connect.php';
$req = $bdd -> prepare("SELECT * FROM cloud WHERE action = 'ajouté' AND affichage = 'yes' ORDER BY id DESC");
$req -> execute();

while($data = $req -> fetch()){

    $datafile = $data['intitule'];
	  $newname = $data['newname'];

      $extension = substr($datafile, -3, 3);

      if($extension == 'png' or $extension == 'jpg'or $extension == 'peg'){

        echo '<a class="col-md-4" href="upload/'.$newname.'"><img class="imgupload" src="upload/'.$newname.'">'.$datafile.'</a><a class="btn-supprimer" href="php/cloud-supprimer.php?id='.$data['id'].'&intitule='.$data['intitule'].'">X</a>';


      }elseif ($extension == 'doc' or $extension == 'ocx') {

        echo '<a class="col-md-4" href="upload/'.$newname.'"><img class="imgupload" src="img/word.png">'.$datafile.'</a><a class="btn-supprimer" href="php/cloud-supprimer.php?id='.$data['id'].'&intitule='.$data['intitule'].'">X</a>';
        
      }elseif ($extension == 'xls' or $extension == 'lsx') {

        echo '<a class="col-md-4" href="upload/'.$newname.'"><img class="imgupload" src="img/excel.png">'.$datafile.'</a><a class="btn-supprimer" href="php/cloud-supprimer.php?id='.$data['id'].'&intitule='.$data['intitule'].'">X</a>';

      }elseif ($extension == 'pdf') {

        echo '<a class="col-md-4" href="upload/'.$newname.'"><img class="imgupload" src="img/pdf.png">'.$datafile.'</a><a class="btn-supprimer" href="php/cloud-supprimer.php?id='.$data['id'].'&intitule='.$data['intitule'].'">X</a>';

      }else{

        echo '<a class="col-md-4" href="upload/'.$newname.'"><img class="imgupload" src="img/word.png">'.$datafile.'</a><a class="btn-supprimer" href="php/cloud-supprimer.php?id='.$data['id'].'&intitule='.$data['intitule'].'">X</a>';

      }
}

$req -> closeCursor();