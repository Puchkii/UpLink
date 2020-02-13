
<?php
   $username = $_POST['username'];
   $password = $_POST['password'];
   $true = 0;

   if(isset($_POST['login'])){
       $sql = "SELECT username,password FROM `users` WHERE username = '$username';";
       $result = $conn->query($sql);
       if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) {
              $usernameCheck = $row['username'];
              $passwordCheck = $row['password'];

              if($password == $passwordCheck){
                  $_SESSION['current'] = $username;
                  header('Location: index.php');
              }
              else{
                  $_SESSION['wachtwoordCheck'] = "false";
              }
           }
       }
       reloadPost();
   }

 ?>
