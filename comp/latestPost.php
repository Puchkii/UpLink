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

        /*Kevin hier worden de post geprint dus hier moet je de style aanpassen */ //die br tags zijn nu voor testen


        //Hierin moet je de post data doen. Wigga!

        // <div class="card" style="width: 18rem;">
        //     <img class="card-img-top" src="..." alt="Card image cap">
        //     <div class="card-body">
        //         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        //         <form method='post' class=''>
        //             <button type='submit' name='like' value='$idPost[$i]'>Like</button>
        //         </form>
        //         <form method='post' class=''>
        //             <button type='submit' name='removeLike' value='$idPost[$i]'>Remove Like</button>
        //         </form>
        //     </div>
        // </div>
        
        echo $titlePost[$i]."<br>".$textPost[$i]."<br>".$DatePost[$i]."<br> Likes : ".$aantal."<br>";//title/text/date/aantal likes
        if($imagePost[$i] != $bezoek){//checkt als er een image in de post zit
            echo "<img src='img/userImages/$imagePost[$i]' alt='post image'><br>";//image
        }

        if($bezoek != $current && $current){
            if(!in_array($current,$likeArray)){//like button kan je mischien nog veranderen naar een plusje of een hartje ofzo
                echo "<form method='post' class=''>
                        <button type='submit' name='like' value='$idPost[$i]'>Like</button>
                      </form>";
            }else{//een remove like button
              echo "<form method='post' class=''>
                      <button type='submit' name='removeLike' value='$idPost[$i]'>Remove Like</button>
                    </form>";
            }
        }
        echo "<br>";
    }

 ?>
