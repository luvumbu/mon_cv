<?php
session_start();
header("Access-Control-Allow-Origin: *");
$REMOTE_ADDR= $_SERVER['REMOTE_ADDR']; 
if($REMOTE_ADDR=="::1"){
  $servername = "localhost";
  $username = "root";
  $password = $username;
  $dbname = "mon_cv_activite";
}
else {
  $servername = "localhost";
  $username = "u481158665_all_ffa3";
  $password ="v3p9r3e@59A";
  $dbname = $username;
}
$email = $_POST["email"] ; 

 
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$adresse_physique = $_POST["adresse_physique"];
$naissance = $_POST["naissance"];
$password1 = sha1( $_POST["password1"]);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT * FROM `user` WHERE `mail_user`="'.$email.'"';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  
		$_SESSION["information"] = "Danger";
  }
} else {
  $_SESSION["information"] = "Succes";
  // Insertion 
  $conn2 = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn2->connect_error) {
    die("Connection failed: " . $conn2->connect_error);
  }
  
  $sql2 = "INSERT INTO user (mail_user, nom_user, prenom_user,adresse_physique_user,naissance_user,password_user)
  VALUES ('$email','$nom','$prenom','$adresse_physique','$naissance','$password1')";

  if ($conn2->query($sql2) === TRUE) {
    echo "New record created successfully";
    $_SESSION["Connexion"] = "ON" ; 
  } else {
    echo "Error: " . $sql2 . "<br>" . $conn2->error;
  }
  
  $conn2->close();
  // Fin insertion 
}
$conn->close();