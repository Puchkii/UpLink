<?php
    // error_reporting(0);
    session_start();
    include 'db.php';
    include 'block.php';

    $current = $_SESSION['current'];
    $bezoek = $_SESSION['bezoekPagina'];

    $sql = "SELECT id,username,password,created_at FROM `users` WHERE username = '$current';";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
           $idDB = $row['id'];
           $usernameDB = $row['username'];
           $passwordDB = $row['password'];
           $createdDB = $row['created_at'];
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
