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
  
		echo "trouvé"; 
  }
} else {
  echo "0 results";
}
$conn->close();