<?php

    $t = 0;
    $sql = "SELECT id,title,Text,Img,DatePost FROM `post` WHERE Username = '$bezoek' ORDER BY `DatePost`;";
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

    for($i=0; $i<$t; $i++){
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

        echo "<div class='card p-2' style='width: 18rem;'>";
        echo $titlePost[$i]."<br>".$textPost[$i]."<br>".$DatePost[$i]."<br> Likes : ".$aantal."<br>";//title/text/date/aantal likes

        if($imagePost[$i] != $bezoek){//checkt als er een image in de post zit
            echo "<img class='card-img-top' src='img/userImages/$imagePost[$i]' alt='post image'><br>";//image
        }
        if($bezoek == $current){//als de comment van de ingelogte is
          echo "<form method='post' class=''>
                  <button type='submite' class='btn btn-secondary m-2' value='$idPost[$i]' name='removePost'><i class='far fa-trash-alt'></i></button>
                </form>";
        }
        if($bezoek != $current && $current){
            if(!in_array($current,$likeArray)){//like button kan je mischien nog veranderen naar een plusje of een hartje ofzo
                echo "<form method='post' class=''>
                        <button type='submit' class='btn btn-outline-secondary' name='like' value='$idPost[$i]' onclick='getHeight()'><i style='border: none; color: red;' class='fas fa-heart'></i></button>
                      </form>";
            }else{//een remove like button
                echo "<form method='post' class=''>
                        <button type='submit' class='btn btn-outline-secondary' name='removeLike' value='$idPost[$i]' onclick='getHeight()'><i style='border: none; color: black' class='far fa-heart'></i></button>
                      </form>";
            }
        }
        echo "</div><br>";
    }

 ?>
