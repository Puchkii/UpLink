
<?php
  if(!isset($_COOKIE['cookies']))//als cookie niet gezet is show cookie melding
  {
 ?>
 
  <div class="cookieMelding" id="Cookies">
    <div class="cookieText">
      To use our site to the max potential we need you to accept our cookies.
    </div>
    <button class="cookieAccept" onclick="cookieClose()">
      I Accept
    </button>
  </div>

<?php } ?>

<form class="header">
  <a href="index.php" class="logo">Upl!nk</a><!--Logo-->

  <a href="" class="headerButton">Ergens</a><!--Header buttons-->
  <a href="" class="headerButton">Ergens</a>
  <a href="" class="headerButton">Ergens</a>
  <a href="" class="headerButton">Ergens</a>

  <input type="text" name="search" placeholder="Search..." class="SearchBar" autocomplete="off"><!--Search bar-->

  <div class="loginbuttonLoc"><!--Login/register buttons-->
    <button href="#" class="inlogButton">Login</button>
    <button href="#" class="inlogButton">Join Now</button>
  </div>
</form>
