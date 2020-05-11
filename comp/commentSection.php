
<br>
<h1>Comment section</h1><!--Comment input -->
  <?php if($current){ ?><!--Als je bent ingelogt-->
    <form class="" action="" method="post">
      <textarea name="Comment" rows="8" cols="80"></textarea>
      <input type="Submit"  class="btn btn-outline-secondary"  name="Post" value="Post" onclick='getHeight()'><!--Een submit icoon moet er komen---->
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

          // trash it
          echo "<button type='submite' class='btn btn-secondary' value='$i' name='removeComment'><i class='far fa-trash-alt'></i></button>";
          
          // add like
          echo "<form method='post' class=''>
                  <button type='submit' class='btn btn-outline-secondary' name='like' value='$idPost[$i]' onclick='getHeight()'><i style='border: none; color: red;' class='fas fa-heart'></i></button>
                </form>";
          // remove like
          echo "<form method='post' class=''>
                  <button type='submit' class='btn btn-outline-secondary' name='removeLike' value='$idPost[$i]' onclick='getHeight()'><i style='border: none; color: black' class='far fa-heart'></i></button>
                </form>";

        }
        echo "    </form>
                </div>
              </div><br>";
    }
?>
