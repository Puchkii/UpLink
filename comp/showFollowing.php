
<form class="" method="post">
    <?php
        /*Kevin je moet de style eve doen en je moet de pagina buttons ergens neer zetten van naar de volgende pagina van mensen die je volgt*/
        for($i=0; $i<=6; $i++){
            if(!empty($followigProfile[$i])){
                echo $followigProfile[$i];
                echo "<button typ='submit' value='$i' name='unfollow'>Unfollow</button>";
            }
        }
     ?>
</form>
