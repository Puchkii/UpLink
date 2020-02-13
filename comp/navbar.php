
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
<nav class="navbar navbar-expand-lg bg-dark">
  <a href="./index.php" class="navbar-brand"><img src="./img/logo.jpg" style=" width:25%;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
  <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a href="#" class="btn btn-outline-primary nav-link">Problems</a>
      </li>
      <li class="nav-item active">
        <a href="#" class="btn btn-outline-primary nav-link">CheatSheet</a>
      </li>
      <li class="nav-item active">
        <a href="#" class="btn btn-outline-primary nav-link">Friends</a>
      </li>
      <li class="nav-item active">
        <a href="#" class="btn btn-outline-primary nav-link">Profile</a>
      </li>
      <li class="nav-item active">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="It aint gone search itself" aria-label="e" aria-describedby="">
            <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">Search</button>
          </div>
        </div>
      </li>
      <?php
        if(strlen($current) == 0)
        {
       ?>
      <li class="nav-item active">
        <a href="login.php" class="btn btn-outline-primary nav-link">Log in</a>
      </li>
      <li class="nav-item active">
        <a href="register.php" class="btn btn-outline-primary nav-link">Sign up</a>
      </li>
      <?php }
      else{ ?>
        <form class="nav-item active" method="post">
          <button class="btn btn-outline-primary nav-link" name="logout">Sign out</button>
        </form>
      <?php } ?>
    </ul>

  </div>
</nav>
