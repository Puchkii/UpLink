<?php
    for($i=0; $i<Count($followersProfileBE); $i++){
      echo "<button name='bezoek' type='submit' value='$followersProfileBE[$i]' onclick='resetCookie()'>".$followersProfileBE[$i]."</button><br>";//zo dat je ze ook kan bezoeken
    }
?>
