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
        /*als je dat klaar hebt dan zet ik er een max op of je zegt even hoe je alles wilt uitgeprint*/

        echo $titlePost[$i]."<br>".$textPost[$i]."<br>".$DatePost[$i]."<br> Likes : ".$aantal."<br>";//title/text/date/aantal likes
        if($imagePost[$i] != $bezoek){//checkt als er een image in de post zit
            echo "<img class='rounded' src='img/userImages/$imagePost[$i]' alt='post image'><br>";//image
        }
        if($userPost[$i] != $current){
            if(!in_array($current,$likeArray)){//like button kan je mischien nog veranderen naar een plusje of een hartje ofzo
                echo "<form method='post' class=''>
                        <button type='submit' class'btn btn-outline-secondary' name='like' value='$idPost[$i]'>Like</button>
                      </form>";
            }else{//een remove like button
                echo "<form method='post' class=''>
                        <button type='submit' class='btn btn-outline-secondary' name='removeLike' value='$idPost[$i]'>Remove Like</button>
                      </form>";
            }
        }
        echo "<br>";
    }
 ?>
