<?php

    $zoek = $_SESSION['zoekWoord'];

    if($zoek){
        $sql = "SELECT username FROM `users` WHERE username LIKE '%$zoek%';";//moet nog profile image bij als dat werkent is
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) {
               $usernameZoek = $row['username'];
               echo $usernameZoek."<br>"; /*kevin dit print de zoek resultaaten uit dit moet dus gestyled worden komt later nog een
                                          profile images bij*/
           }
        }
    }

 ?>
