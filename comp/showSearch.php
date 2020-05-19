<?php
    $zoek = $_SESSION['zoekWoord'];
    echo "<br><h1 class='m-5' style='text-align: center;'>Searched : ".$zoek."</h1>";
    echo "<tbody>";
    if($zoek){
        $sql = "SELECT username FROM `users` WHERE username LIKE '%$zoek%';";//moet nog profile image bij als dat werkent is
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) {
              $usernameZoek = $row['username'];

              $sql2 = "SELECT ProfileImage FROM `users` WHERE username = '$usernameZoek';";
              $result2 = $conn->query($sql2);
              if ($result2->num_rows > 0) {
                  while($row = $result2->fetch_assoc()) {
                      $profileFOL = $row['ProfileImage'];
                  }
              }
              $sql3 = "SELECT About FROM `information` WHERE User = '$usernameZoek';";
              $result3 = $conn->query($sql3);
              if ($result3->num_rows > 0) {
                 while($row = $result3->fetch_assoc()) {
                     $aboutFOL = $row['About'];
                 }
              }

              echo "<div class='vak'>
                      <div class='card' style='width: 18rem;'>
                        <button name='bezoek' type='submit' value='$usernameZoek' style='border:none; background:inherit;' onclick='resetCookie()'><h3>".$usernameZoek."</h3></button>";
              if($profileFOL != $usernameZoek){//als er een profile image is
                echo "  <img src='img/profileImage/$profileFOL' class='card-img-top' alt='Profile Image'>";
              }
              echo "    <div class='card-body'>
                          <h5 class='card-title'>Bio : $aboutFOL</h5>
                        </div>
                      </div>
                    </div>";
           }
        }
    }
 ?>
 </tbody>
