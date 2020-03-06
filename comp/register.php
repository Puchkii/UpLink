<div class="container text-center">
  <form method="post">
    <div class="form-group">
      <label for="formGroupExampleInput"><h4>Username</h4></label>
      <input type="text" class="form-control" name='username' placeholder="Enter username">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput"><h4>Email</h4></label>
      <input type="email" name="email" placeholder="Email"><!--heeft standaart all een check-->
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput"><h4>Birthdate</h4></label>
      <input type="date" name="birthDate"><!--heeft standaart all een check-->
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2"><h4>Password</h4></label>
      <input type="password" class="form-control" name="password" placeholder="Enter password">
      <input type="password" class="form-control" name="passwordRepeat" placeholder="Repeat password">
    </div>
      <button type="submit" name="register" value="Submit" class="btn btn-outline-secondary">Register now</button>
  </form>
  <?php
    $meldingen = $_SESSION['fouten'];
    //fout melding if statements de username te kort is kan denkt wel en als je nog meer hebt zeg het maar
    if($meldingen[1]){/*als de email all ingebruik is*/}
    if($meldingen[0]){/*als de username all ingebruik is*/}
    if($meldingen[2]){/*als de username niet is ingevult*/}
    if($meldingen[4]){/*als niet alle inputs zijn ingevult*/}
    if($meldingen[6]){/*als het wachtwoord niet voldoet aan de regels*/}
    if($meldingen[6]){/*als het wachtwoord niet voldoet aan de regels*/}
  ?>
</div>
