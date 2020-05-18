<?php
    if($current){
        $t = 0;
        $statement = "WHERE";
        for($i=0; $i < count($followingProfile); $i++){
            if($i == count($followingProfile)-1){
                $statement .= " Username = '".$followingProfile[$i]."'";
            }else{
                $statement .= " Username = '".$followingProfile[$i]."' OR ";
            }
        }

        $sql = "SELECT id,title,Text,Username,Img,DatePost,likers FROM `post` $statement ORDER BY `DatePost` DESC;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) {
               $idPost[$t] = $row['id'];
               $titlePost[$t] = $row['title'];
               $textPost[$t] = $row['Text'];
               $imagePost[$t] = $row['Img'];
               $DatePost[$t] = $row['DatePost'];
               $userPost[$t] = $row['Username'];
               $likeArray[$t] = unserialize($row['likers']);
               $likes[$t] = Count($likeArray[$t]);
               $t++;
           }
        }
        if($t != 0){
            for($i=0; $i<=$t-1; $i++){
                echo "<div class='row'>
                        <div class='card col' style='width: 18rem;'>
                          <div class='card-body'>
                             <h5 class='card-title'>$titlePost[$i]</h5>
                             <h6 class='card-subtitle mb-2 text-muted'>$userPost[$i]</h6>
                             <p class='card-text' onclick='getHeight()'>$textPost[$i]</p>";
                if($imagePost[$i] != $userPost[$i]){//image if statement
                   echo "<img class='rounded mx-auto d-block' src='img/userImages/$imagePost[$i]' alt='Card image cap'>";
                }
                echo "<p class='card-link'>Date : $DatePost[$i]<br> Likes : $likes[$i]</p>";
                if($current && $current != $userPost[$i]){
                    if(!in_array($current,$likeArray[$i])){//like button
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
        }else{
            echo "<h1 style='text-align: center;'>No post yet</h1>";
        }
    }else{
        header('Location: index.php');
    }
 ?>
