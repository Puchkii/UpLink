
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

  <a href="" class="headerButton">Problems</a><!--Header buttons-->
  <a href="" class="headerButton">CheatSheet</a>
  <a href="" class="headerButton">Friends</a>
  <a href="" class="headerButton">Profile</a>

  <input type="text" name="search" placeholder="Search..." class="SearchBar" autocomplete="off"><!--Search bar-->

  <div class="loginbuttonLoc"><!--Login/register buttons-->
    <a href="login.php" class="inlogButton">Login</a>
    <a href="register.php" class="inlogButton">Join Now</a>
  </div>
  <div class="mobileMenu"><!--Mobile menu-->
    <i class="fa fa-bars" aria-hidden="true"></i>
  </div>
</form>
