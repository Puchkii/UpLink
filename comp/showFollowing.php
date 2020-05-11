
<form class="" method="post">
    <?php
        for($i=0; $i<=6; $i++){
            if(!empty($followingProfile[$i])){

               $sql = "SELECT ProfileImage FROM `users` WHERE username = '$followingProfile[$i]';";
               $result = $conn->query($sql);
               if ($result->num_rows > 0) {
                   while($row = $result->fetch_assoc()) {
                       $profileFOL = $row['ProfileImage'];
                   }
               }
               $sql = "SELECT About FROM `information` WHERE User = '$followingProfile[$i]';";
               $result = $conn->query($sql);
               if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                      $aboutFOL = $row['About'];
                  }
               }

               echo "<div class='card' style='width: 18rem;'>
                      $followingProfile[$i]";
              if($profileFOL != $followingProfile[$i]){//als er een profile image is
                  echo "<img src='img/profileImage/$profileFOL' class='card-img-top' alt='Profile Image'>";
              }
                echo "<div class='card-body'>
                        <h5 class='card-title'>$aboutFOL</h5>
                        <button typ='submit' value='$i' class='btn btn-outline-secondary' name='unfollow'>Unfollow</button>
                      </div>
                    </div><br>";
            }
        }
     ?>
</form>
