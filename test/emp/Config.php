


<?php
//start a new session
session_start();

$page_title = "Add Movie";


require_once 'includes/database.php';

$id = $_GET['id'];
$whatsapp = $_GET['whatsapp'];
$map = $_GET['map'];
$email = $_GET['email'];
$address = $_GET['address'];
$website = $_GET['website'];
$facebook = $_GET['facebook'];
$twitter = $_GET['twitter'];
$instagram = $_GET['instagram'];
$youtube = $_GET['youtube'];
$pinterest = $_GET['pinterest'];
$linked = $_GET['linked'];
$telegram = $_GET['telegram'];
$photo =  $_GET['photo'];

//define sql statement
$query_str = "INSERT INTO emp VALUES ('$id', '$whatsapp', '$map', '$email', '$address','$website','$facebook','$twitter','$instagram','$youtube','$pinterest','$linked','$telegram','$photo')";

//execute the query
$result = @$conn->query($query_str);

//handle error
if($result) {
    //redirect to index page
    header("Location:getid.php");
}
else{
  $errno = $conn->errno;
  $errmsg = $conn->error;
  echo "Insertion failed with: ($errno) $errmsg<br/>\n";
  $conn->close();
  exit;
}
