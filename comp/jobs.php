<?php
  for($i=0; $i < 12; $i+=2){
      if($i < 12){
          if($i < count($jobsBE)){
              echo "<p>".$jobsBE[$i]."</p>";//kevin hier moet nog iets voor komen dat je de informatie er bij kan zien
              // $jobsDB[$i+1] //dat is de informatie die bij iedere job zit
          }else{
              echo "<p>...</p>";
          }
      }
  }
 ?>
