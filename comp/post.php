
<!--Post inputs-->
<?php
  if($bezoek == $current){/*weet niet of dit de beste manier is om het te doen net zo als bij de cookie melding
                          ik weet niet of gwn echo of dit of een andere manier wat er netter is */
 ?>
   <form class="" method="post" enctype="multipart/form-data"> <!--moet voor de image update-->
       <input type="text" name="titlePost" placeholder="Title"><!--Title post-->
       <textarea name="textPost" rows="8" cols="80" placeholder="Text"></textarea><!--Text post-->
       <input type="file" name="fotoToUpload" id="fotoToUpload" class="" accept="image/*"><!--max 2mb foto-->
       <input type="submit" name="Update" value="Post"><!--Post Button-->
   </form>
<?php } ?>
