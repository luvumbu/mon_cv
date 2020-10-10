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
<div class="alert alert-success">
  <strong>Success!</strong> Connexion reussi
</div>
<div class="alert alert-danger">
  <strong>Danger!</strong> Erreur mot de passe ou adresse mail
</div>

<?php 

if(isset($_SESSION["newsession"])){
  echo $_SESSION["newsession"] ;
}
else {
  echo "NON" ; 
}
?>