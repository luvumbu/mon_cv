<?php 
session_start() ; 
?>
<h1>Connexion</h1>
<form>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    <div id="error_mail_c" class="display_none">
      <i class="fa fa-remove"></i>
    </div>

  </div>
  <div class="form-group">
    <label for="password1">Password</label>
    <input type="password" class="form-control" id="password1" placeholder="Password">
    <div id="error_password_c" class="display_none">
      <i class="fa fa-remove"></i>
    </div>

  </div>
  <div type="submit" id="submit_button" class="btn btn-primary" onclick="button_connection()">Submit</div>
</form>
 

<?php
if (isset($_SESSION["information"])) {

  if ($_SESSION["information"] == "Succes") {

    echo '<div class="alert alert-success">
    <strong>Success!</strong> Connexion reussi
  </div>';   
 echo ' <meta http-equiv="refresh" content="3; URL=login/index.php" />';

  } else {
    echo '<div class="alert alert-danger">
<strong>Erreur</strong> Erreur Mot de passe ou adresse mail  <strong><a href="http:google.com" style="color:red">Mot de passe oublié </strong>
</div>';
  }
}

?>