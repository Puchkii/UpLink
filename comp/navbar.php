
<?php
  if(!isset($_COOKIE['cookies']))//als cookie niet gezet is show cookie melding
  {
 ?>

  <div class="cookieMelding" id="Cookies">
    <div class="cookieText">
      To use our site to the max potential we need you to accept our cookies.
    </div>
    <button class="cookieAccept" onclick="cookieClose()">
      I Accept :)
    </button>
  </div>

<?php } ?>
<!-- Bootstrap navbar. Er moet nog een  -->
<nav class="navbar navbar-expand-lg  header">
  <a href="./index.php" class="navbar-brand"><img src="./img/logo.jpg" style=" width:25%;">UpL!nk</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
  <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a href="#" class="inlogButton nav-link">Problems</a>
      </li>
      <li class="nav-item active">
        <a href="#" class="inlogButton nav-link">CheatSheet</a>
      </li>
      <li class="nav-item active">
        <a href="#" class="inlogButton nav-link">Friends</a>
      </li>
      <li class="nav-item active">
        <a href="#" class="inlogButton nav-link">Profile</a>
      </li>
      <li>
      <input type="text" name="search" placeholder="Search..." class="SearchBar nav-link" autocomplete="off">
      </li>
      <?php
        if(strlen($current) == 0)
        {
       ?>
      <li class="nav-item active">
        <a href="login.php" class="inlogButton nav-link">Log in</a>
      </li>
      <li class="nav-item active">
        <a href="register.php" class="inlogButton nav-link">Sign up</a>
      </li>
      <?php }
      else{ ?>
        <form class="nav-item active" method="post">
          <button class="inlogButton nav-link" name="logout">Sign out</button>
        </form>
      <?php } ?>
    </ul>

  </div>
</nav>
