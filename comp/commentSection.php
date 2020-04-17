
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
