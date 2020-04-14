
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
<hr>
  <h3>Jobs:<h3>
  <form class="" method="post">
    <input type="text" name="jobTitle" class="rounded" value="" placeholder="Wat was jou functie?"><br><br>
    <textarea name="jobInfo" rows="8" class="rounded" placeholder="Vertel wat over wat jij daar betekent voor het bedrijf" cols="80"></textarea><br>
    <input type="submit" name="AddJob" value="Add" class="btn btn-outline-secondary" onclick='getHeight()'>
  </form>
</div>
<form class=""  method="post">
  <?php
      for($i=0; $i < count($jobsDB)/2; $i++){
          echo $jobsDB[$i]."<br>".$jobsDB[$i+1]."<br><button class='' name='deleteJob' value='$i'>-</button>";
      }
   ?>
</form>

<!--Een lijst van job titles die je kan veranderen en verweideren moet hier nog komen-->
