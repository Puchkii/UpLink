
<?php
  include 'inc/search.php';//is nodig voor het zoeken naar accounts in de header
  include 'inc/bezoek.php';//is nodig voor het bezoeken van je eigen profile
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
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="feed.php">Feed</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="trending.php">Trending</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="following.php">Following</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="settings.php">Settings</a>
            </li>
            <li class="nav-item">
              <form class="" method="post"><!--kevin dit moet een form zijn om naar het goede account te gaan-->
                  <button class="nav-link" type="submit" value="<?php echo $current; ?>" name="bezoek">Profile</button>
              </form>
            </li>
        </ul>
    </div>
    <div class="mx-auto order-0">
        <a class="navbar-brand mx-auto" href="/UpLink">UpL!nk</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li>
              <form class=""  method="post">
                  <input type="text" placeholder="Gotta catch em all" name="zoeken" class="rounded">
              </form>
            </li>
            <?php if($current){
              echo "<li class='nav-item'>
                      <form method='post'>
                        <button type='submit' name='logout' class='nav-link'>Logout</button>
                      </form>
                    </li>";
            }else{
                echo "<li class='nav-item'>
                        <a class='nav-link' href='login.php'>Log In</a>
                      </li>
                      <li class='nav-item'>
                          <a class='nav-link' href='register.php'>Sign Up</a>
                      </li>";
            } ?>
        </ul>
    </div>
</nav>
