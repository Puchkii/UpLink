<?php

  /*Mischien meer dingen zo als...*/

  $passwordOld = mysql_real_escape_string(strip_tags($_POST['oudwachtwoord']));//oude wachtwoord
  $passwordNew1 = mysql_real_escape_string(strip_tags($_POST['password1']));//nieuwe wachtwoord
  $passwordNew2 = mysql_real_escape_string(strip_tags($_POST['password2']));//nieuwe wachtwoord double check

  $newUsername = mysql_real_escape_string(strip_tags($_POST['username']));//nieuwe username
  $aboutMe = mysql_real_escape_string(strip_tags($_POST['aboutme']));//about me update

  //moet in een array de jobs moeten weg kunnen er moet ook een bescrijving bij die er bij hoort. als je dan op de baan klikt of
  //hovert dan moet die text komen met de informatie er bij
  $jobs = mysql_real_escape_string(strip_tags($_POST['jobTitle']));
  $jobInfo = mysql_real_escape_string(strip_tags($_POST['jobInfo']));

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
      //fout meldingen moeten er nog komen van bv de naam is all ingebruik
      //denk niet dat de optie van je naam veranderen er komt om dat moet je echt heel veel dingen updaten:
      //je naam in alle tables de naam bij alle mensen die je volgen en andersom
      if($_POST['Submit']){//about me
          if(!empty($newUsername)){
              $sql = "SELECT username FROM `users` WHERE username = '$newUsername';";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                //fout melding bestaat all
              }else{//als username nog niet bestaat
                  if(strlen($newUsername) <= 30){
                      $sql = "UPDATE `users` SET `username` = '$newUsername' WHERE username = '$current';";
                      if ($conn->query($sql) === true) {}
                  }
              }
          }
          if($aboutMe != $aboutDB){//hoeft geen fout melding denk ik
              $sql = "UPDATE `information` SET `About` = '$aboutMe' WHERE User = '$current';";
              if ($conn->query($sql) === true) {}
          }
          reloadPost();
      }
      //jobs
      if($_POST['AddJob']){
          if(!empty($jobs)){
               if(empty($jobsDB)){
                   $jobsDB = [$jobs,$jobInfo];
               }else{
                   array_push($jobsDB,$jobs);
                   array_push($jobsDB,$jobInfo);
               }
               $compressedJobs = serialize($jobsDB);

               $sql = "UPDATE `information` SET `jobs` = '$compressedJobs' WHERE User = '$current';";
               if ($conn->query($sql) === true) {}
          }
          reloadPost();
      }

      if(isset($jobDEL)){//delete job
          unset($jobsDB[$jobDEL]);
          unset($jobsDB[$jobDEL+1]);

          $compressedJobs = serialize($jobsDB);

          $sql = "UPDATE `information` SET `jobs` = '$compressedJobs' WHERE User = '$current';";
          if ($conn->query($sql) === true) {}
        	reloadPost();
      }
  }



 ?>
