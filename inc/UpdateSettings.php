<?php

  include 'Images.php';

  $foto = $_FILES["profileImage"]["name"];

  $passwordOld = mysqli_real_escape_string($conn,strip_tags($_POST['oudwachtwoord']));//oude wachtwoord
  $passwordNew1 = mysqli_real_escape_string($conn,strip_tags($_POST['password1']));//nieuwe wachtwoord
  $passwordNew2 = mysqli_real_escape_string($conn,strip_tags($_POST['password2']));//nieuwe wachtwoord double check

  $aboutMe = mysqli_real_escape_string($conn,strip_tags($_POST['aboutme']));//about me update

  $reg1 = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{6,}$/i";//wachtwoord check.

  $jobDEL = $_POST['deleteJob'];

  //password change
  if($current){//als er ingelogt is
      if($_POST['ChangePassword']){
          if($passwordOld == $passwordDB){//als het oude wachtwoord goed is ingevult
              if($passwordNew1 == $passwordNew2){//wachtwoord double check
                  if(preg_match($reg1,$passwordNew1)){//regex check
                      $sql = "UPDATE `users` SET `password` = '$passwordNew1' WHERE username = '$current';";
                      if ($conn->query($sql) === true) {}
                  }
              }
          }
          reloadPost();
      }

      if(isset($_POST['ChangePicture'])){
          if(!empty($foto)){
              echo "test";
              $loc = "img/profileImage/";
              $IMG = "profileImage";
              UploadIMG($loc,$IMG);//foto function
              rename("img/profileImage/$foto","img/profileImage/$current$foto");

              if($profileImg != $current){//als er een bug is
                  if(empty($profileImg)){//als dit de eerste keer is dat er een profile Image word gezet
                      unlink("img/profileImage/".$profileImg);
                  }
              }

              $sql = "UPDATE `users` SET `ProfileImage` = '$current$foto' WHERE username = '$current';";
              if ($conn->query($sql) === true) {}
          }
          reloadPost();
      }

      if($_POST['Submit']){//about me
          if($aboutMe != $aboutDB){//hoeft geen fout melding denk ik
              $sql = "UPDATE `information` SET `About` = '$aboutMe' WHERE User = '$current';";
              if ($conn->query($sql) === true) {}
          }
          reloadPost();
      }
  }



 ?>
