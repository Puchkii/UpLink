
<?php
   $username = $_POST['username'];
   $password = $_POST['password'];

   $sql = "SELECT username,password FROM `users` WHERE username = '$username';";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
          $usernameDB = $row['username'];
          $passwordDB = $row['password'];
       }
   }
   echo $passwordDB;
   if(isset($_POST['login'])){
       if($password == $passwordDB){
          $_SESSION['current'] = $username;
       }
       // reloadPost();
   }

 ?>
