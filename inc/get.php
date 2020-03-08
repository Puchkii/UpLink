<?php
      error_reporting(0);
      session_start();
      include 'db.php';
      include 'block.php';

      $current = $_SESSION['current'];
      $bezoek = $_SESSION['bezoekPagina'];
      $following = false;

      $sql = "SELECT id,username,password,created_at,following,followers FROM `users` WHERE username = '$current';";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
             $idDB = $row['id'];
             $usernameDB = $row['username'];
             $passwordDB = $row['password'];
             $createdDB = $row['created_at'];
             $followigProfile = unserialize($row['following']);
             $followersProfile = unserialize($row['followers']);
         }
     }

     $sql = "SELECT About,jobs FROM `information` WHERE User = '$current';";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $aboutDB = $row['About'];
            $jobsDB = unserialize($row['jobs']);
        }
     }

   if($bezoek){
       if(in_array($bezoek,$followigProfile)){
          $following = true;
       }
       $sql = "SELECT created_at,following,followers FROM `users` WHERE username = '$bezoek';";
       $result = $conn->query($sql);
       if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              $createdDBBE = $row['created_at'];
              $followigProfileBE = unserialize($row['following']);
              $followersProfileBE = unserialize($row['followers']);
          }
      }

      $sql = "SELECT About,jobs FROM `information` WHERE User = '$bezoek';";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
             $aboutBE = $row['About'];
             $jobsBE = unserialize($row['jobs']);
         }
      }

   }

   $nu = time();
   $date = strtotime($createdDBBE);
   $datediff = $nu - $date;

   $dagen = round($datediff / (60 * 60 * 24));

   function reloadPost(){
        echo "<script>
                  if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href);
                    location.reload(true);
                  }
              </script>";
  }

 ?>
