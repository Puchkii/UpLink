
<br>
<h1>Comment section</h1><!--Comment input -->
  <?php if($current){ ?><!--Als je bent ingelogt-->
    <form class="" action="" method="post">
      <textarea name="Comment" rows="8" cols="80"></textarea>
      <input type="Submit" name="Post" value="Post"><!--Een submit icoon moet er komen---->
    </form>
  <?php } ?>
<hr>
<?php
    //kevin als jij een comment vak maakt in html dan doe ik hem wel in de php later er moet ook nog een delete button bij de comments komen
    for($i=0; $i < count($commentBE); $i+=2){
        echo $commentBE[$i]." ".$commentBE[$i+1]."<br>";
    }
?>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <form method='post' class=''>
      <button type='submit' class='btn btn-outline-secondary' name='like' value='$idPost[$i]' onclick='getHeight()'><i style='border: none; color: red;' class='fas fa-heart'></i></button>
      <button type='submit' class='btn btn-outline-secondary' name='removeLike' value='$idPost[$i]' onclick='getHeight()'><i style='border: none; color: black' class='far fa-heart'></i></button>
      <button class="btn btn-secondary"><i class="far fa-trash-alt"></i></button>
    </form>
  </div>
</div>

