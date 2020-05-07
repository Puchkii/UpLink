<?php
    //kevin dit moet nog in een table met vakjes waar een image(profileImage) instaat met de naam er naast
    for($i=0; $i<Count($followersProfileBE); $i++){
      echo "<button name='bezoek' type='submit' value='$followersProfileBE[$i]' onclick='resetCookie()'>".$followersProfileBE[$i]."</button><br>";//zo dat je ze ook kan bezoeken
    }
?>
