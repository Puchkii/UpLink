<div class="container">


<div class='row'><div class='col-sm-4'><div class='card' style='width: 18rem;'>
<img src='img/profileImage/$profileFOL' class='card-img-top' alt='Profile Image'>
<div class='card-body'>
  <h5 class='card-title'>$aboutFOL</h5>
  <button typ='submit' value='$i' class='btn btn-outline-secondary' name='unfollow'>Unfollow</button>
</div></div></div></div><br>

<?php
    for($i=0; $i<Count($followersProfileBE); $i++){
      echo "<button name='bezoek' class='btn btn-outline-secondary' type='submit' value='$followersProfileBE[$i]' onclick='resetCookie()'>".$followersProfileBE[$i]."</button><br><br>";//zo dat je ze ook kan bezoeken
    }
?>
</div>