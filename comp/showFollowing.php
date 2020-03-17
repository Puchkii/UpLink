
<form class="" method="post">
    <?php
        for($i=0; $i<=6; $i++){
            if(!empty($followingProfile[$i])){
                echo "<div class='row'>";
                echo "<div class='card col'>";
                echo $followingProfile[$i];
                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                echo "<button typ='submit' value='$i' class='btn btn-outline-secondary' name='unfollow'>Unfollow</button>";
                echo "</div><br>";
            }
        }
     ?>
</form>
