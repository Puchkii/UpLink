
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
<!-- Bootstrap navbar. Er moet nog een  -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
  <div class="container-fluid">
  <a href="./index.php" class="navbar-brand"><img src="./img/logo.jpg" style=" width:25%;">UpL!nk</a> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
  <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a href="#" class="">Problems</a>
      </li>
      <li class="nav-item active">
        <a href="#" class="">CheatSheet</a>
      </li>
      <li class="nav-item active">
        <a href="#" class="">Friends</a>
      </li>
      <li class="nav-item active">
        <a href="#" class="">Profile</a>
      </li>
      <li>
      <input type="text" name="search" placeholder="Search..." class="SearchBar" autocomplete="off"><!--Search bar-->
      </li>
      <li class="nav-item active">
        <a href="login.php" class="inlogButton">Login</a>
      </li>
      <li class="nav-item active">
        <a href="register.php" class="inlogButton">Join Now</a>
      </li>
    </ul>

  </div>
</div>
</nav>
