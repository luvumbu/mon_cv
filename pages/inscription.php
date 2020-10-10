<?php 
session_start(); 
?>
<h1>
  Inscription
</h1>
<form id="forms">
  <div class="form-group">
    <label for="email">Adresse mail</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    <div id="error_mail" class="display_none">
      <i class="fa fa-remove"></i>
    </div>
  </div>
  <div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" class="form-control" id="nom" placeholder="Nom d'utilisateur">
    <div id="error_nom" class="display_none">
      <i class="fa fa-remove"></i>
    </div>
  </div>
  <div class="form-group">
    <label for="prenom">Prenom</label>
    <input type="text" class="form-control" id="prenom" placeholder="Prenom d'utilisateur">
    <div id="error_prenom" class="display_none">
      <i class="fa fa-remove"></i>
    </div>
  </div>
  <div class="form-group">
    <label for="adresse_physique">Adresse physique</label>
    <input type="text" class="form-control" id="adresse_physique" placeholder="exemple : 5 rue de lille Armentieres">
    <div id="error_adresse_physique" class="display_none">
      <i class="fa fa-remove"></i>
    </div>
  </div>
  <div class="form-group">
    <label for="naissance">Date de naissance</label>
    <input type="date" class="form-control" id="naissance" placeholder="Nom d'utilisateur">
    <div id="error_naissance" class="display_none">
      <i class="fa fa-remove"></i>
    </div>
  </div>




  <div class="form-group">
    <label for="Password1">Password</label>
    <input type="password" class="form-control" id="Password1" placeholder="Entrer un mot de passe">
    <div id="error_password1" class="display_none">
      <i class="fa fa-remove"></i>
    </div>
  </div>
  <div class="form-group">
    <label for="Password2">Password</label>
    <input type="password" class="form-control" id="Password2" placeholder="Retaper votre mot de passe">
    <div id="error_password2" class="display_none">
      <i class="fa fa-remove"></i>
    </div>
  </div>
  <div type="submit" id="submit_button" class="btn btn-primary" onclick="button_incription()">Submit</div>
</form>



<?php
if (isset($_SESSION["information"])) {

  if ($_SESSION["information"] == "Succes") {

    echo '<div class="alert alert-success">
    <strong>Success!</strong> Inscription reussi
  </div>';
  } else {
    echo '<div class="alert alert-danger">
<strong>Erreur</strong> Utilisateur déjà enregistre  <strong><a href="http:google.com" style="color:red">Mot de passe oublié </strong>
</div>';
  }
}

?>