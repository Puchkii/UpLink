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

        // hier komt hoe ik de trending post eruit wil laten zien

        // <div class="card" style="width: 18rem;">
        //     <img class="card-img-top" src="..." alt="Card image cap">
        //     <div class="card-body">
        //         <div class="card-header">
        //          hier komt je title bih
        //          </div>
        //         <p class="card-text">lorem ipsum blablabla suck a dick</p>
        //          <button type='submit' class'btn btn-outline-secondary' name='like' value='$idPost[$i]'>Like</button>
        //          <button type='submit' class='btn btn-outline-secondary' name='removeLike' value='$idPost[$i]'>Remove Like</button>
        //     </div>
        // </div>


        // echo $titlePost[$i]."<br>".$textPost[$i]."<br>".$DatePost[$i]."<br> Likes : ".$aantal."<br>";//title/text/date/aantal likes
        echo " <div class='card' style='width: 18rem;'>";
        if($imagePost[$i] != $userPost[$i]){//checkt als er een image in de post zit
            echo "<img class='rounded' src='img/userImages/$imagePost[$i]' alt='post image'><br>";//image
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
                        <button type='submit' class'btn btn-outline-secondary' name='like' onclick='getHeight()' value='$idPost[$i]'>Like</button>
                      </form>";
            }else{//een remove like button
                echo "<form method='post' class=''>
                        <button type='submit' class='btn btn-outline-secondary' name='removeLike' onclick='getHeight()' value='$idPost[$i]'>Remove Like</button>
                      </form>";
            }
        }
        echo "</div><br>";
    }
 ?>
