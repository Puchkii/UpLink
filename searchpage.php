<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Selfmade CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <script src="js/scroll.js"></script>
    <title>UpL!nk</title>
  </head>
  <body>


    <?php
      include 'inc/get.php';
      include 'inc/logout.php';
      include 'comp/navbar.php';
      ?>
    <div class="container-fluid">
    <br>
        <!-- Search form -->
        <div class="md-form active-cyan-2 mb-3">
            <input class="form-control" type="text" placeholder="je vind vast wel iemand die van je houdt maar niet heus" aria-label="Search">
        </div>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Follower count</th>
      <th scope="col">Username</th>
      <th scope="col">Name</th>
      <th scope="col">Follow</th>
      <th scope="col">Block</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Ka</td>
      <td>Nker</td>
      <td><button class="btn btn-outline-secondary">Follow</button></td>
      <td><button class="btn btn-outline-secondary">Block</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Ni</td>
      <td>Gga</td>
      <td><button class="btn btn-outline-secondary">Follow</button></td>
      <td><button class="btn btn-outline-secondary">Block</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Katja</td>
      <td>Schuurman</td>
      <td><button class="btn btn-outline-secondary">Follow</button></td>
      <td><button class="btn btn-outline-secondary">Block</button></td>
    </tr>
  </tbody>

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
