<?php
session_start();
header("Access-Control-Allow-Origin: *");
$REMOTE_ADDR = $_SERVER['REMOTE_ADDR'];
if ($REMOTE_ADDR == "::1") {
  $servername = "localhost";
  $username = "root";
  $password = $username;
  $dbname = "mon_cv_activite";
} else {
  $servername = "localhost";
  $username = "u947959947_mon_cv_activit";
  $password = "v3p9r3e@59A";
  $dbname = $username;
}
$email = $_POST["email"];
$password1 = sha1( $_POST["password1"]);
echo "?";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//$email = "luvumbu.n@gmail.com"; 
 


echo $password1;
$sql ='SELECT * FROM `user` WHERE `mail_user`="'.$email.'" AND `password_user` ="'.$password1.'"';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {


    echo $row["password_user"];

    $_SESSION["information"] = "Succes";

  }
} else {
echo "NUL";

	$_SESSION["information"] = "Danger";
}
$conn->close();
