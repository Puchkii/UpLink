
<!--Post inputs-->
<?php
  if($bezoek == $current){/*weet niet of dit de beste manier is om het te doen net zo als bij de cookie melding
                          ik weet niet of gwn echo of dit of een andere manier wat er netter is */
 ?>
 <br>
<div class="form-group container">
   <form class="" method="post" enctype="multipart/form-data"> <!--moet voor de image update-->
       <input type="text" class="form-control" name="titlePost" placeholder="Title"><!--Title post-->
       <br>
       <textarea name="textPost" rows="8" cols="80" class="form-control" placeholder="Text"></textarea><!--Text post-->
       <br>
       <label for="exampleFormControlFile1">Upload Foto <label class="font-weight-bold">(Max 2MB)</label></label>
        <input type="file" name="fotoToUpload" id="fotoToUpload" class="form-control-file" accept="image/*"><!--max 2mb foto-->
        <br>
       <input type="submit" class="btn btn-outline-secondary" name="Update" value="Post"><!--Post Button-->
   </form>
  </div>
<?php } ?>
