<?php
      error_reporting(0);
      session_start();
      include 'db.php';
      include 'block.php';

      $current = $_SESSION['current'];
      $bezoek = $_SESSION['bezoekPagina'];
      $following = false;

      $sql = "SELECT id,username,password,created_at,following,followers,ProfileImage FROM `users` WHERE username = '$current';";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
             $idDB = $row['id'];
             $usernameDB = $row['username'];
             $passwordDB = $row['password'];
             $createdDB = $row['created_at'];
             $followingProfile = unserialize($row['following']);
             $followersProfile = unserialize($row['followers']);
             $profileImg = $row['ProfileImage'];
         }
     }

     $sql = "SELECT About FROM `information` WHERE User = '$current';";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $aboutDB = $row['About'];
        }
     }

   if($bezoek){
       if(in_array($bezoek,$followingProfile)){
          $following = true;
       }
       $sql = "SELECT created_at,following,followers,ProfileImage FROM `users` WHERE username = '$bezoek';";
       $result = $conn->query($sql);
       if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              $createdDBBE = $row['created_at'];
              $followingProfileBE = unserialize($row['following']);
              $followersProfileBE = unserialize($row['followers']);
              $followingAmmount = Count($followersProfileBE);
              $profileImgBE = $row['ProfileImage'];
          }
      }

      $sql = "SELECT About,Comments FROM `information` WHERE User = '$bezoek';";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
             $aboutBE = $row['About'];
             $commentBE = unserialize($row['Comments']);
         }
      }

   }

   function reloadPost(){
        echo "<script>
                  if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href);
                    location.reload(true);
                  }
              </script>";
  }

 ?>
