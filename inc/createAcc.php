
<?php
  include 'block.php';
  //mysql_real_escape_string werkt niet voor jouw kevin ik weet niet waarom.
  $usernameForm = mysqli_real_escape_string($conn,strip_tags($_POST['username']));
  $emailForm = mysqli_real_escape_string($conn,strip_tags($_POST['email']));
  $dateForm = mysqli_real_escape_string($conn,strip_tags($_POST['birthDate']));
  $password1Form = mysqli_real_escape_string($conn,strip_tags($_POST['password']));
  $password2Form = mysqli_real_escape_string($conn,strip_tags($_POST['passwordRepeat']));
  $foutmeldingen = ["Username is already in use","Email is already in use","No username","Not everything has been completed",
                    "The passwords arent the same","Password has to be 8 chars long and using a special char/num"];
  $melding = "<br>";
  $checkArray = [$usernameForm,$emailForm,$dateForm,$password1Form,$password2Form];

  $fouten = [0,0,0,0,0,0];//fouten check voor later bij de fout meldingen
  $falseCheck = true;//voor als alles goed is ingevult kan mischien anders

  $reg1 = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{6,}$/i";//wachtwoord check.

  if(isset($_POST['register'])){
      $_SESSION['test'] = $checkArray;
      $sql = "SELECT username FROM `users` WHERE username = '$usernameForm';";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              $checkUsername = $row['username'];
          }
      }

      $sql = "SELECT Email FROM `users` WHERE Email = '$emailForm';";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              $checkMail = $row['Email'];
          }
      }

      if(strlen($checkUsername) != 0){
          $fouten[0] = 1;//als de username all in gebruik is
      }
      if(strlen($checkMail) != 0){
          $fouten[1] = 1;//als email all de database zit
      }
      if(strlen($usernameForm) <= 1){//moet langer dan 1 letter
          $fouten[2] = 1;//als de username tekort is
      }

      for($i=1; $i<=Count($checkArray)-1; $i++){//checkt niet de username die is all gecheckt
          if(empty($checkArray[$i])) {
              $fouten[3] = 1; //moet nog aangepast worden//als de input leeg is
          }
      }

      if(preg_match($reg1,$password1Form)){
          if(!$password1Form == $password2Form){
              $fouten[4] = 1;//als de wachtwoorden niet het zelfde zijn
          }
      }
      else{
          $fouten[5] = 1;//als het wachtwoord niet goed  is
      }

      for($i=0; $i<=Count($fouten)-1; $i++){//kan waarschijnlijk anders
          if($fouten[$i]){
              $falseCheck = false;
          }
      }

      if($falseCheck){//gelukt
          $sql = "INSERT INTO `users` (`username`,`password`,`Email`,`Birth_Date`,`ProfileImage`) VALUES ('$usernameForm','$password1Form','$emailForm','$dateForm','$usernameForm');";
          if ($conn->query($sql) === true) {
              $sql = "INSERT INTO `information` (`User`,`About`) VALUES ('$usernameForm','No user information');";
              if ($conn->query($sql) === true) {
                  $_SESSION['fout'] = true;
                  $_SESSION['current'] = $usernameForm;
                  $_SESSION['wachtwoordCheck'] = "false";
                  header('Location: index.php');//ga naar index
              }
          }
      }
      else{//mislukt
          for($i=0; $i<=Count($foutmeldingen)-1; $i++){
              if($fouten[$i]){
                  $melding .= "<br>".$foutmeldingen[$i];
              }
          }
          $_SESSION['fouten'] = $melding;
          $_SESSION['fout'] = $falseCheck;
          reloadPost();//stopt POST  on refresh
      }
  }
 ?>
