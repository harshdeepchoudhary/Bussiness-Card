<?php
//start a new session

session_start();

$page_title = "Add details";


require_once 'includes/database.php';

// If upload button is clicked ...
if (isset($_POST['upload'])) {

  $id = $_POST['id'];
  $filename = $_FILES["photo"]["name"];
  $tempname = $_FILES["photo"]["tmp_name"];
  $folder = "./qr/" . $filename;



  // Get all the submitted data from the form
  $sql = "INSERT INTO qr VALUES ('$id','$filename')";

  // Execute query
  $RESULT = @$conn->query($sql);

  // Now let's move the uploaded image into the folder: image
  if (move_uploaded_file($tempname, $folder)) 
  {
    echo'<h1>Sucees</h1>';

  }
  else{
    echo'<h1>Failed</h1>';
  }
  }
    ?>