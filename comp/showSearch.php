<?php

    $zoek = $_SESSION['zoekWoord'];
    echo $_SESSION['zoekWoord'];//waar op gezocht is
    if($zoek){
        $sql = "SELECT username FROM `users` WHERE username LIKE '%$zoek%';";//moet nog profile image bij als dat werkent is
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) {
               $usernameZoek = $row['username'];
               echo "<button name='bezoek' type='submit' value='$usernameZoek'>".$usernameZoek."</button>";//de bezoek buttons
           }
        }
    }

 ?>
