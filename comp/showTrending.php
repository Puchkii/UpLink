<?php
    $t = 0;
    $sql = "SELECT id,title,Text,Username,Img,DatePost FROM `post` ORDER BY `post`.`likers`";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
           $idPost[$t] = $row['id'];
           $titlePost[$t] = $row['title'];
           $textPost[$t] = $row['Text'];
           $imagePost[$t] = $row['Img'];
           $DatePost[$t] = $row['DatePost'];
           $userPost[$t] = $row['Username'];
           $t ++;
       }
    }

    for($i=$t-1; $i>=0; $i--){
        $sql = "SELECT likers FROM `post` WHERE id = '$idPost[$i]';";//voor de like check/aantal likes
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) {
               $likeArray = unserialize($row['likers']);
               $likes = Count($likeArray);
           }
        }

        echo "<div class='row'>
                <div class='card col' style='width: 18rem;'>
                  <div class='card-body'>
                     <h5 class='card-title'>$titlePost[$i]</h5>
                     <h6 class='card-subtitle mb-2 text-muted'>$userPost[$i]</h6>
                     <p class='card-text' onclick='getHeight()'>$textPost[$i]</p>";
        if($imagePost[$i] != $userPost[$i]){//image if statement
           echo "<img class='rounded mx-auto d-block' src='img/userImages/$imagePost[$i]' alt='Card image cap'>";
        }
        echo "<p class='card-link'>Date : $DatePost[$i]<br> Likes : $likes</p>";
        if($current && $current != $userPost[$i]){//zo dat je niet je eigen post kan liken 
            if(!in_array($current,$likeArray) && $current){//like button
                echo "<form method='post' class=''>
                        <button type='submit' class='btn btn-outline-secondary' name='like' value='$idPost[$i]' onclick='getHeight()'><i style='border: none; color: black' class='far fa-heart'></i></button>
                      </form>";
            }else{//een remove like button
                echo "<form method='post' class=''>
                        <button type='submit' class='btn btn-outline-secondary' name='removeLike' value='$idPost[$i]' onclick='getHeight()'><i style='border: none; color: red;' class='fas fa-heart'></i></button>
                      </form>";
            }
        }
        echo "</div></div></div><br>";//afsluiting divs
    }
 ?>
