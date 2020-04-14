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
           }
        }

        if(empty($likeArray)){
            $aantal = 0;
        }else{
            $aantal = count($likeArray);
        }

        /*Kevin hier worden de trending post uitgeprint. dus hier moet je de style aanpassen */
        
        echo " <div class='card'>";
        if($imagePost[$i] != $userPost[$i]){//checkt als er een image in de post zit
            echo "<br><img class='rounded mx-auto' src='img/userImages/$imagePost[$i]' style='width:60%;' alt='post image'><br>";//image
        }
        echo "<div class='card-body'>
                 <div class='card-header'>
                    $titlePost[$i]
                  </div>
                  <p class='card-text'>$textPost[$i]</p>
             </div>";
        if($userPost[$i] != $current && $current){
            if(!in_array($current,$likeArray)){//like button kan je mischien nog veranderen naar een plusje of een hartje ofzo
                echo "<form method='post' class=''>
                        <button type='submit' class='btn btn-outline-secondary' name='like' onclick='getHeight()' value='$idPost[$i]'><i style='border: none; color: red;' class='fas fa-heart'></i></button>
                      </form>";
            }else{//een remove like button
                echo "<form method='post' class=''>
                        <button type='submit' class='btn btn-outline-secondary' name='removeLike' onclick='getHeight()' value='$idPost[$i]'><i style='border: none; color: black' class='far fa-heart'></i></button>
                      </form>";
            }
        }
        echo "</div><br>";
    }
 ?>
