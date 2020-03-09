<?php
    // ORDER BY `DatePost`
    $volgend = join(',', array_fill(0, count($followingProfile), '?'));
    // $volgend = join("','",$followingProfile);
    echo $followingProfile;
    $sql = "SELECT id,title,Text,Username,Img,DatePost FROM `post` WHERE Username = '$current' ORDER BY `DatePost`;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
           $idPost = $row['id'];
           $titlePost = $row['title'];
           $textPost = $row['Text'];
           $imagePost= $row['Img'];
           $DatePost = $row['DatePost'];
           $userPost = $row['Username'];
           echo $idPost."<br>".$userPost."<br>".$textPost."<br><br>";
       }
    }

 ?>
