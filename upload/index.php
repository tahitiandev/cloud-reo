<?php

function ScanDirectory($Directory){

  $MyDirectory = opendir($Directory) or die('Erreur');


  while($datafile = @readdir($MyDirectory)) {

    if(!is_dir($Directory.'/'.$datafile) && $datafile != '.' && $datafile != '..' && $datafile != 'index.php') {

      $datafile = utf8_encode($datafile);

      $extension = substr($datafile, -3, 3);

      if($extension == 'png' or $extension == 'jpg'or $extension == 'peg'){

        echo '<a class="col-md-4" href="upload/'.$datafile.'"><img class="imgupload" src="upload/'.$datafile.'">'.$datafile.'</a>';

      }elseif ($extension == 'doc' or $extension == 'ocx') {

        echo '<a class="col-md-4" href="upload/'.$datafile.'"><img class="imgupload" src="img/word.png">'.$datafile.'</a>';
        
      }elseif ($extension == 'xls' or $extension == 'lsx') {

        echo '<a class="col-md-4" href="upload/'.$datafile.'"><img class="imgupload" src="img/excel.png">'.$datafile.'</a>';
        
      }elseif ($extension == 'pdf') {

        echo '<a class="col-md-4" href="upload/'.$datafile.'"><img class="imgupload" src="img/pdf.png">'.$datafile.'</a>';
        
      }else{

        echo '<a class="col-md-4" href="upload/'.$datafile.'">'.$datafile.' et extension: '.$extension.'</a>';

      }


    }

  }// while

    closedir($MyDirectory);
}

ScanDirectory('.');