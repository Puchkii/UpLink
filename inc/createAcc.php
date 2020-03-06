
<?php
  include 'block.php';
  //mysql_real_escape_string werkt niet voor jouw kevin ik weet niet waarom.
  $usernameForm = mysql_real_escape_string(strip_tags($_POST['username']));
  $emailForm = mysql_real_escape_string(strip_tags($_POST['email']));
  $dateForm = mysql_real_escape_string(strip_tags($_POST['birthDate']));
  $password1Form = mysql_real_escape_string(strip_tags($_POST['password']));
  $password2Form = mysql_real_escape_string(strip_tags($_POST['passwordRepeat']));

  $checkArray= [$usernameForm,$emailForm,$dateForm,$password1Form,$password2Form];

  $fouten = [0,0,0,0,0,0,0,0,0,0];//fouten check voor later bij de fout meldingen
  $falseCheck = true;//voor als alles goed is ingevult kan mischien anders

  $reg1 = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{6,}$/i";//wachtwoord check.

  if(isset($_POST['register'])){

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
      if(strlen($usernameForm) <= 1){//moet langer dan 1 letter //kan weg denkt
          $fouten[2] = 1;//als de username tekort is
      }

      for($i=1; $i<=count($checkArray)-1; $i++){//checkt niet de username die is all gecheckt
          if (empty($checkArray[$i])) {
              $fouten[4] = 1; //als de input leeg is
          }
      }

      if(preg_match($reg1,$password1Form)){
          if(!$password1Form == $password2Form){
              $fouten[5] = 1;//als de wachtwoorden niet het zelfde zijn
          }
      }
      else{
          $fouten[6] = 1;//als het wachtwoord niet goed  is
      }

      for($i=0; $i<=count($fouten)-1; $i++){//kan waarschijnlijk anders
          if($fouten[$i]){
              $falseCheck = false;
          }
      }

      if($falseCheck){//gelukt
          $sql = "INSERT INTO `users` (`username`,`password`,`Email`,`Birth_Date`) VALUES ('$usernameForm','$password1Form','$emailForm','$dateForm');";
          if ($conn->query($sql) === true) {
              $sql = "INSERT INTO `information` (`User`,`About`) VALUES ('$usernameForm','No user information');";
              if ($conn->query($sql) === true) {
                  header('Location: index.php');//ga naar index
              }
          }
      }
      else{//mislukt
          reloadPost();//stopt POST  on refresh
      }
      $_SESSION['fouten'] = $fouten;
  }
 ?>
