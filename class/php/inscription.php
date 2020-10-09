<?php
session_start();
header("Access-Control-Allow-Origin: *");
$REMOTE_ADDR= $_SERVER['REMOTE_ADDR']; 
if($REMOTE_ADDR=="::1"){
  $servername = "localhost";
  $username = "root";
  $password = $username;
  $dbname = "all_ffa";
}
else {
  $servername = "localhost";
  $username = "u481158665_all_ffa3";
  $password ="v3p9r3e@59A";
  $dbname = $username;
}
