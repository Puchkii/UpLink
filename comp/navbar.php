
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


<!-- vanaf deze lijn naar beneden moet de php weer worden toegepast. ik heb je php code onderaan gelaten
      zodat je het alleen hoeft te plakken op de juiste plaats -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Feed</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Trending</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Followers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
            </li>
        </ul>
    </div>
    <div class="mx-auto order-0">
        <a class="navbar-brand mx-auto" href="#">UpL!nk</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li>
              <input type="text" placeholder="Gotta catch em all" class="rounded">
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Log In</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sign Up</a>
            </li>
        </ul>
    </div>
</nav>






      <?php
        if(strlen($current) == 0)
        {
          ?>


      <?php }
      else{ ?>


      <?php } ?>
