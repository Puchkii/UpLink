<?php

    $t = 0;

    $sql = "SELECT id,title,Text,Img,DatePost FROM `post` WHERE Username = '$bezoek';";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
           $idPost[$t] = $row['id'];
           $titlePost[$t] = $row['title'];
           $textPost[$t] = $row['Text'];
           $imagePost[$t] = $row['Img'];
           $DatePost[$t] = $row['DatePost'];
           $t ++;
       }
    }
    for($i=$t-1; $i>=0; $i--){/*Kevin hier worden de post geprint dus hier moet je de style aanpassen */ //die br tags zijn nu voor testen
        echo $titlePost[$i]."<br>".$textPost[$i]."<br>".$DatePost[$i]."<br>";
        if($imagePost[$i] != $bezoek){//checkt als er een image in de post zit
            echo "<img src='img/userImages/$imagePost[$i]' alt='post image'><br>";
        }
        echo "<br>";
    }

 ?>
