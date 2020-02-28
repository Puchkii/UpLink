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
   if($bezoek){
       if(in_array($bezoek,$followigProfile)){
          $following = true;
       }
   }

   $nu = time();
   $date = strtotime($createdDB);
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
