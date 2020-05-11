<div class="container text-center">
  <form method="post">
  <br>
  <div class="card" style="width: 18rem;">
    <div class="form-group">
      <label><h4>Username</h4></label>
      <input type="text" class="form-control" name='username' placeholder="Enter username">
    </div><br>
    <div class="form-group">
      <label><h4>Email</h4></label>
      <input type="email" name="email" placeholder="Email" class="form-control">
    </div>
    <div class="form-group">
      <label><h4>Birthdate</h4></label>
      <input type="date" name="birthDate" class="form-control">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2"><h4>Password</h4></label>
      <input type="password" class="form-control" name="password" placeholder="Enter password"><br>
      <input type="password" class="form-control" name="passwordRepeat" placeholder="Repeat password">
    </div>
      <button type="submit" name="register" value="Submit" class="btn btn-outline-secondary">Register now</button>
  </div>
  </form>
</div><br>
<?php
  if(!$_SESSION['fout']){
    $melding = $_SESSION['fouten'];
    echo "<div class='alert alert-danger m-4' role='alert'><h2>Failed to register Becouse : </h2><h5> $melding</h5></div>";
  }
?>
