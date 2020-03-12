<?php
    // ORDER BY `DatePost`
    if($current){
        $statement = "WHERE";
        for($i=0; $i<count($followingProfile); $i++){
            if($i == count($followingProfile)-1){
                $statement .= " Username = '".$followingProfile[$i]."'";
            }else{
                $statement .= " Username = '".$followingProfile[$i]."' OR ";
            }
        }
        $sql = "SELECT id,title,Text,Username,Img,DatePost,likers FROM `post` $statement ORDER BY `DatePost`;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) {
               $idPost = $row['id'];
               $titlePost = $row['title'];
               $textPost = $row['Text'];
               $imagePost= $row['Img'];
               $DatePost = $row['DatePost'];
               $userPost = $row['Username'];
               $likeArray = unserialize($row['likers']);
               $likes = Count($likeArray);
               usort($array, function($a1, $a2) {
                  $v1 = strtotime($a1['date']);
                  $v2 = strtotime($a2['date']);
                  return $v1 - $v2; // $v2 - $v1 to reverse direction
               });

               //post kaartjes
               echo "<div class='row'>
                       <div class='card col' style='width: 18rem;'>
                         <div class='card-body'>
                            <h5 class='card-title'>$titlePost</h5>
                            <h6 class='card-subtitle mb-2 text-muted'>$userPost</h6>
                            <p class='card-text'>$textPost</p>
                            <a href='' class='card-link'>Date : $DatePost</a>
                            <a href='' class='card-link'>Likes : $likes</a>";

               if(!in_array($current,$likeArray) && $current){//like button
                   echo "<form method='post' class=''>
                           <button type='submit' class'btn btn-outline-secondary' name='like' value='$idPost'>Like</button>
                         </form>";
               }else{//een remove like button
                   echo "<form method='post' class=''>
                           <button type='submit' class='btn btn-outline-secondary' name='removeLike' value='$idPost'>Remove Like</button>
                         </form>";
               }
               
               echo "</div></div></div><br>";//afsluiting divs
           }
        }
    }else{
      echo "Niet ingelogt";//moet iets anders tekomen te staan zo als een inlog button of iets anders ofzo
    }

 ?>
