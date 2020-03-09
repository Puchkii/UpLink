
<?php
    include 'Images.php';

    $foto = $_FILES["fotoToUpload"]["name"];
    $title = $_POST['titlePost'];
    $text = $_POST['textPost'];
    $postPost = true;

    if(isset($_POST['Update'])){
        if(empty($title) && empty($text)){//checkt als de inputs zijn ingevult
            $postPost = false;
        }
        if($postPost){
            $sql = "INSERT INTO `post` (`Title`,`Text`,`Img`,`Username`) VALUES ('$title','$text','$current$foto','$current');";
            if ($conn->query($sql) === true) {
                if($foto){
                    $loc = "img/userImages/";
                    $IMG = "fotoToUpload";
                    UploadIMG($loc,$IMG);//foto function
                    rename("img/userImages/$foto","img/userImages/$current$foto");
                }
            }
        }
        reloadPost();
    }

    $Like = $_POST['like'];

    if(isset($Like)){
        $sql = "SELECT Username,likers FROM `post` WHERE id = '$Like';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) {
               $usernamePost = $row['Username'];
               $likeArray = unserialize($row['likers']);
           }
        }
        if($usernamePost != $current){//zo dat je niet je eigen post een like kan geven
            if(empty($likeArray)){
                $likeArray = [$current];
            }
            else{
                if(!in_array($current,$likeArray)){
                    array_push($likeArray,$current);
                }
            }
            $compresLikes = serialize($likeArray);
            $sql = "UPDATE `post` SET `likers` = '$compresLikes' WHERE Id = '$Like';";
            if ($conn->query($sql) === true){
            }
        }
        reloadPost();
    }

    $unlike = $_POST['removeLike'];

    if(isset($unlike)){
        $sql = "SELECT likers,Username FROM `post` WHERE Id = '$unlike';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) {
               $LikersArray = unserialize($row['likers']);
               $usernamePost = $row['Username'];
           }
        }
        if($usernamePost != $current){
            if(in_array($current,$LikersArray)){
                $key = array_search($current, $LikersArray);
                unset($LikersArray[$key]);
            }

            $compressedLikes = serialize($LikersArray);

            $sql = "UPDATE `post` SET `likers` = '$compressedLikes' WHERE Id = '$unlike';";
            if ($conn->query($sql) === true) {
            }
        }
        reloadPost();
    }

 ?>
