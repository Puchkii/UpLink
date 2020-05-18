
<?php
   include 'block.php';
   $username = $_POST['username'];
   $password = $_POST['password'];
   $true = 0;

   if(isset($_POST['login'])){
       $sql = "SELECT password FROM `users` WHERE username = '$username';";
       $result = $conn->query($sql);
       if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) {
              $passwordCheck = $row['password'];

              if($password == $passwordCheck){
                  $_SESSION['current'] = $username;
                  $_SESSION['wachtwoordCheck'] = "false";
                  header('Location: feed.php');
              }
              else{
                  $_SESSION['wachtwoordCheck'] = "true";//voor de fout melding
              }
           }
       }
       reloadPost();
   }

 ?>
