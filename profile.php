<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/2a0f696f00.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Selfmade-->
    <link rel="stylesheet" href="css/style.css">
    <script src="js/scroll.js"></script>
    <!-- css profile img -->
    <link rel="stylesheet" href="css/profile-img.css">

    <title>UpL!nk - Profile</title>
  </head>
  <body>

    <?php
      //deze includes pages kunnen allemaal in een index met een get systeem. weet nog niet of ik dat ook nog ga toevoegen
      include 'inc/get.php';
      include 'inc/logout.php';
      include 'comp/navbar.php';
      include 'inc/post.php';
      include 'inc/commentSection.php';
      include 'inc/follow.php';
    ?>
      <div class="container">
        <?php
          include 'comp\topProfile.php';
        ?>
        <div class="row">
          <div class="col-sm-4">
            <img src="img/profileImage/DylanspinRoom.jpg" alt="..." class="img-thumbnail"><!--Kevin ik heb er een tijdelijke image in gezet zo dat je het kan fixen -->
          </div>
          <div class="col-sm-4">
            <p>Profiel naam hier</p>
          </div>
          <div class="col-sm-4">
            <p>Profiel bio/info</p>
          </div>
        </div>      
        <hr class="my-4">
          <?php include 'comp/post.php'; ?>
          <div class="row">
            <div class="col-sm-8">
              <h2>Latest posts</h2>
              <div class="overflow-auto">
                <?php
                    include 'comp/latestPost.php';
                 ?>
              </div>
            </div>
            <div class="col-sm-4">
              <h2>Followers</h2>
              <form class="" method="post">
                <?php include 'comp/followers.php'; ?>
              </form>
            </div>
            <div class="w-100"></div>
            <div class="col-sm-8">
              <h2>About me</h2>
              <?php echo $aboutBE;?>
            </div>
            <div class="col-sm-8">
              <?php
                include 'comp/commentSection.php';
              ?>
            </div>
          </div>
        </div>

    <!-- Selfmade JS -->
    <script src="js/CookieNotifier.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>
