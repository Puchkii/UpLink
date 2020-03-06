
<form class="" method="post">
    <input type="date" name="birthdate" value="">
    <input type="submit" name="submit" value="">
</form>

<?php

   $birtdate = $_POST['birthdate'];
   
   if(isset($_POST['submit'])){
      echo strlen($birtdate);
   }

 ?>
