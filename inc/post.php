
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

 ?>
