
<br>
<h1>Comment section</h1><!--Comment input -->
  <?php if($current){ ?><!--Als je bent ingelogt-->
    <form class="" action="" method="post">
      <textarea name="Comment" rows="8" cols="80"></textarea>
      <input type="Submit" name="Post" value="Post" onclick='getHeight()'><!--Een submit icoon moet er komen---->
    </form>
  <?php } ?>
<hr><br>
<?php
    for($i=0; $i < count($commentBE); $i+=2){
        $user = $commentBE[$i+1];
        echo "<div class='card' style='width: 18rem;'>
                <div class='card-body'>
                  <h2 class='card-text'>$user</h2>
                  <p class='card-text'>$commentBE[$i]</p>
                  <form method='post' class=''>";
        if($bezoek == $current){//als de comment van de ingelogte is
          echo "<button type='submite' class='btn btn-secondary' value='$i' name='removeComment'><i class='far fa-trash-alt'></i></button>";
        }
        echo "    </form>
                </div>
              </div><br>";
    }
?>
