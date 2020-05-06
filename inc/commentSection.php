<?php

  $removeButton = $_POST['removeComment'];

  if($_POST['Post']){//post
      if(!empty($comment)){
          $sql = "SELECT Comments FROM `information` WHERE User = '$bezoek';";//zo dat die de laatste versie pakt
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
                 $commentBE = unserialize($row['Comments']);
             }
          }

          if(empty($commentBE)){
              $commentBE = [$comment,$current];
          }else{
              array_push($commentBE,$comment);
              array_push($commentBE,$current);
          }

          $compressedComment = serialize($commentBE);

          $sql = "UPDATE `information` SET `Comments` = '$compressedComment' WHERE User = '$bezoek';";
          if ($conn->query($sql) === true) {}
      }
      reloadPost();
  }

  if(isset($removeButton))//remove Comment
  {
      $sql = "SELECT Comments FROM `information` WHERE User = '$bezoek';";//zo dat die de laatste versie pakt
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
             $commentBE = unserialize($row['Comments']);
         }
      }
      if($commentBE[$removeButton+1] == $current){//als de comment van de current is
        unset($commentBE[$removeButton]);
        unset($commentBE[$removeButton+1]);

        $compressedComment = serialize($commentBE);

        $sql = "UPDATE `information` SET `Comments` = '$compressedJobs' WHERE User = '$bezoek';";
        if ($conn->query($sql) === true) {}
      }
      reloadPost();
  }
 ?>
