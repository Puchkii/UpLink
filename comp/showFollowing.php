
<form class="" method="post">
    <?php
        for($i=0; $i<=6; $i++){
            if(!empty($followingProfile[$i])){
                echo "<div class='card' style='width: 18rem;'>";
                echo $followingProfile[$i];
                echo "<img src='...' class='card-img-top' alt='...'>"; //hier zien ze een lelijk gezicht
                echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>biografie over je onnuttige bestaan</h5>"; //hier komt je bio
                    echo "<button typ='submit' value='$i' class='btn btn-outline-secondary' name='unfollow'>Unfollow</button>";
                    echo "</div>";
                echo "</div><br>";
            }
        }
     ?>
</form>
