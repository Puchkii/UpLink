<?php
    if(!empty($followersProfileBE)){//als het profiel volgers heeft
        shuffle($followersProfileBE);//zorgt er voor dat er iedere keer random namen worden laaten zien
        for($i=0; $i<=6; $i++){
            if($i < count($followersProfileBE)){
                // echo "<p>$followersProfileBE[$i]</p>";//hoe het standaard is
                echo "<button name='bezoek' type='submit' value='$followersProfileBE[$i]' onclick='resetCookie()'>".$followersProfileBE[$i]."</button><br>";//zo dat je ze ook kan bezoeken
            }
            else{
                echo "<p>....</p>";
            }
        }
    }
    else{//als het profiel geen volgers heeft
        for($i=0; $i<=6; $i++){
            echo "<p>....</p>";
        }
    }
 ?>
