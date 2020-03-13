
<form class="" method="post">
    <?php
        for($i=0; $i<=6; $i++){
            if(!empty($followingProfile[$i])){
                echo $followingProfile[$i];
                echo "<button typ='submit' value='$i' name='unfollow'>Unfollow</button>";
            }
        }
     ?>
</form>
