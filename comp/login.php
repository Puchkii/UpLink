<br>
<div class="container text-center card">
<label for="Login"><h4>Log hier in</h4></label>
  <br><br>
    <form method="post">
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Enter Username" name="username">
        </div>
        <div class="col">
          <input type="password" class="form-control" placeholder="Enter password" name="password">
        </div>
      </div>
      <?php
          if($_SESSION['wachtwoordCheck'] == "true"){
              echo "<div class='alert alert-danger m-4' role='alert'>Failed to login</div>";
          }
      ?>
      <br>
      <button type="submit" name="login" class="btn btn-outline-secondary">Log in</button>
    </form>
    <br>
    <button href="register.php" class="btn btn-outline-secondary">Dont have an Account?</button>
    <br><br>
    <button href="#" class="btn btn-outline-secondary">Forgot password?</button>
</div>
