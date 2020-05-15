<form class="" method="post">
    <?php
      echo "<div class='row'>";
      if($current || $bezoek){
          if($profileImgBE != $bezoek){
              echo "<img src='img/profileImage/$profileImgBE' class='img-rounded img-thumbnail' alt='profileImage'>";//kevin dit is de profile picture deze code moet je aan passen
          }
          echo "<h1 class='center col m-4 '>$bezoek</h1> <h2 class='m-4'>Followers : $followingAmmount</h2>";
          if($bezoek != $current && $current){ //zo dat je niet je zelf kan volgen
              if($following){
                  echo "<button type='submit' name='unfollow' class='btn btn-outline-secondary'>Unfollow</button>";
              }else{
                  echo "<button type='submit' name='follow' class='btn btn-outline-secondary'>Follow</button>";
              }
          }
      }
      echo "</div>";
    ?>
 </form>
