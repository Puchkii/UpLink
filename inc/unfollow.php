<?php
    $person = $_POST['unfollow'];
    if(isset($_POST['unfollow'])){
        $person = $followigProfile[$person];
        $sql = "SELECT followers FROM `users` WHERE username = '$person';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) {
               $followersDB = unserialize($row['followers']);
           }
       }
       $sql = "SELECT following FROM `users` WHERE username = '$current';";
       $result = $conn->query($sql);
       if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              $followingDB = unserialize($row['following']);
          }
       }
       if(in_array($current,$followersDB)){
           $key1 = array_search($current, $followersDB);
           unset($followersDB[$key1]);
       }
       if(in_array($person,$followingDB)){
           $key2 = array_search($person, $followingDB);
           unset($followingDB[$key2]);
       }

       $compressedFollowers = serialize($followersDB);
       $compressedFollowing = serialize($followingDB);

       $sql = "UPDATE `users` SET `followers` = '$compressedFollowers' WHERE username = '$person';";
       if ($conn->query($sql) === true) {
           $sql = "UPDATE `users` SET `following` = '$compressedFollowing' WHERE username = '$current';";
           if ($conn->query($sql) === true) {
             
           }
       }
       reloadPost();
    }
 ?>
