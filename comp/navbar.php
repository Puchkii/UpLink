
<?php
  if(!isset($_COOKIE['cookies']))//als cookie niet gezet is show cookie melding
  {
 ?>
  <div class="container">
    <div class="row jumbotron">
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
        <p class="lead">We need you to accept our cookies to optimise site performance.</p>
      </div>
      <div class="col-xs12 col-sm12 col-md-3 col-lg3 col-xl-2">
        <button class="cookieAccept btn btn-outline-secondary btn-lg" onclick="cookieClose()">I Accept :)</button>
      </div>
    </div>
  </div>

<?php } ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a href="./index.php" class="navbar-brand"><img src="./img/logo.jpg" style=" width:25%;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
  <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a href="#" class="btn nav-link">Problems</a>
      </li>
      <li class="nav-item active">
        <a href="#" class="btn nav-link">CheatSheet</a>
      </li>
      <li class="nav-item active">
        <a href="#" class="btn nav-link">Friends</a>
      </li>
      <li class="nav-item active">
<<<<<<< HEAD
        <a href="profile.php" class="btn btn-outline-primary nav-link">Profile</a>
=======
        <a href="profile.php" class="btn nav-link">Profile</a>
>>>>>>> kevin
      </li>
      <li class="nav-item active">
        <div class="input-group">
          <form action="form-inline my-2 my-lg-0">
            <input type="search" class="form-control mr-sm-2" placeholder="It aint gone search itself" aria-label="e" aria-describedby="">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button">Search</button>
            </form>
          </div>
        </div>
      </li>
      <?php
        if(strlen($current) == 0)
        {
       ?>
      <li class="nav-item active">
        <a href="login.php" class="btn nav-link ">Log in</a>
      </li>
      <li class="nav-item active">
        <a href="register.php" class="btn nav-link ">Sign up</a>
      </li>
      <?php }
      else{ ?>
      <div class="">
        <form class="nav-item active" method="post">
          <button class="btn nav-link" name="logout">Sign out</button>
        </form>
      </div>
      <?php } ?>
    </ul>
  </div>
</nav>
