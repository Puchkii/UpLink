
<!--De settings inputs er moeten ook fout meldingen komen zo als oud wachtwoord klopt niet wachtwoorden matchen niet
    username is all ingebruik job title niet ingevult-->

<!--De style moet hier van nog gedaan worden als het kan hou de namen er in of ongeveer het zelfde maakt nog niet veel uit
    omdat de functioneel gedeelte nog niet gemaakt is-->

<div class="mx-auto" style="width: 1050px;">
<br>
  <h3>Change password:</h3><br>
  <form class="row" method="post">
    <input type="password" name="password1" class="rounded col" value="" placeholder="New Password"><br><br>
    <input type="password" name="password2" class="rounded col" value="" placeholder="Retype new Password"><br><br>
    <input type="password" name="oudwachtwoord" class="rounded col" value="" placeholder="Old Password"><br><br>
    <input type="submit" name="ChangePassword" value="Change" class="btn btn-outline-secondary" onclick='getHeight()'>
  </form>

  <h3>Change Picture:</h3><br>
  <form class="" method="post" enctype="multipart/form-data">
    <input type="file" name="profileImage" id="profileImage" class="form-control-file" accept="image/*"><!--max 2mb foto-->
    <input type="submit" name="ChangePicture" value="Change" class="btn btn-outline-secondary" onclick='getHeight()'>
  </form>

<br>
<hr>
  <h3 class="">Me:<h3>
  <form class="" method="post">
    <textarea name="aboutme" rows="8" class="rounded" placeholder="Vertel iets over jezelf" cols="80"><?php echo $aboutDB; ?></textarea>
    <br>
    <input type="submit" name="Submit" value="Change" class="btn btn-outline-secondary" onclick='getHeight()'>
  </form>

<br>
