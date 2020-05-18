<div class="container">
  <?php
      for($i=0; $i<Count($followersProfileBE); $i++){
            if(!empty($followersProfileBE[$i])){
               $sql = "SELECT ProfileImage FROM `users` WHERE username = '$followersProfileBE[$i]';";
               $result = $conn->query($sql);
               if ($result->num_rows > 0) {
                   while($row = $result->fetch_assoc()) {
                       $profileFOL = $row['ProfileImage'];
                   }
               }
               $sql = "SELECT About FROM `information` WHERE User = '$followersProfileBE[$i]';";
               $result = $conn->query($sql);
               if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                      $aboutFOL = $row['About'];
                  }
               }

               echo "<div class='row'>
                       <div class='col-sm-4'>
                         <div class='card' style='width: 18rem;'>
                           <button name='bezoek' class='btn btn-outline-secondary' type='submit' value='$followersProfileBE[$i]' onclick='resetCookie()'>".$followersProfileBE[$i]."</button>";
                           if($profileFOL != $followersProfileBE[$i]){//als er een profile image is
                               echo "<img src='img/profileImage/$profileFOL' class='card-img-top' alt='Profile Image'>";
                           }
                  echo "<h5 class='card-title'>$aboutFOL</h5>
                        </div>
                       </div>
                     </div>";
            }
      }
  ?>
</div>
