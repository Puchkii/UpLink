<?php
    $current = "Dylanspin";

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

 ?>
