<?php

  if(isset($_POST['follow'])){
      if($bezoek != $current){
          $sql = "SELECT following FROM `users` WHERE username = '$current';";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
                 $followingDB = unserialize($row['following']);
             }
          }
          if(empty($followingDB)){
              $followingDB = [$bezoek];
          }else{
              if(!in_array($bezoek,$followingDB)){//als je hem niet volgt
                  array_push($followingDB,$bezoek);
              }
          }

          $sql = "SELECT followers FROM `users` WHERE username = '$bezoek';";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
                 $followersDB = unserialize($row['followers']);
             }
         }
         if(empty($followersDB)){
             $followersDB = [$current];
         }else{
             if(!in_array($current,$followersDB)){//als je hem niet volgt
                 array_push($followersDB,$current);
             }
         }
         $compressedFollowers = serialize($followersDB);
         $compressedFollowing = serialize($followingDB);

         $sql = "UPDATE `users` SET `followers` = '$compressedFollowers' WHERE username = '$bezoek';";
         if ($conn->query($sql) === true) {
             $sql = "UPDATE `users` SET `following` = '$compressedFollowing' WHERE username = '$current';";
             if ($conn->query($sql) === true) {
               //volgt nu de persoon en de persoon heeft er nu een nieuwe volger bij
             }
         }
      }
      reloadPost();
  }


  if(isset($_POST['unfollow'])){
      if($bezoek != $current){
          $sql = "SELECT followers FROM `users` WHERE username = '$bezoek';";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
                 $followersDB = unserialize($row['followers']);
             }
         }
         $sql = "SELECT following FROM `users` WHERE username = '$current';";
         $result = $conn->query($sql);
         if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $followingDB = unserialize($row['following']);
            }
         }
         if(in_array($current,$followersDB)){
             $key1 = array_search($current, $followersDB);
             unset($followersDB[$key1]);
         }
         if(in_array($bezoek,$followingDB)){
             $key2 = array_search($bezoek, $followingDB);
             unset($followingDB[$key2]);
         }

         $compressedFollowers = serialize($followersDB);
         $compressedFollowing = serialize($followingDB);

         $sql = "UPDATE `users` SET `followers` = '$compressedFollowers' WHERE username = '$bezoek';";
         if ($conn->query($sql) === true) {
             $sql = "UPDATE `users` SET `following` = '$compressedFollowing' WHERE username = '$current';";
             if ($conn->query($sql) === true) {
               //je ontvolgt het account nu
             }
         }
     }
     reloadPost();
  }

 ?>
