<?php

    $sql = "SELECT id,title,Text,Img,DatePost FROM `post` WHERE Username = '$current';";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
           $idPost = $row['id'];
           $titlePost = $row['title'];
           $textPost = $row['Text'];
           $imagePost = $row['Img'];
           $DatePost = $row['DatePost'];

           /*Kevin hier worden de post geprint dus hier moet je de style aanpassen */
           echo $titlePost."<br>".$textPost."<br>".$DatePost."<br>";
           if($imagePost){
              echo "<img src='img/userImages/$imagePost' alt='post image'><br>";
           }
       }
    }

 ?>
