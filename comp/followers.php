<?php
    $gebruikte;
    for($i=0; $i<=6; $i++){
        if($i < count($followersProfileBE)){
            $random = rand(0,count($followersProfileBE)-1);
            $gebruikte[$i] = $followersProfileBE[$random];
            // while(in_array($followersProfileBE[$random],$gebruikte)){
            //     $random = rand(0,count($followersProfileBE)-1);
            //     $gebruikte[$i] = $followersProfileBE[$random];
            // }
            // echo "<button name='bezoek' type='submit' value='$gebruikte[$i]'>".$gebruikte[$i]."</button><br>";
            echo "<p>$gebruikte[$i]</p>";
        }
        else{
          echo "<p>....</p>";
        }
    }


 ?>
