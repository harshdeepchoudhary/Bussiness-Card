<?php
//start a new session



$page_title = "Add details";


require_once 'includes/database.php';

// If upload button is clicked ...
if (isset($_POST['upload'])) 
{

  $whatsapp = $_POST['whatsapp'];
  $designation = $_POST['designation'];
  $name = $_POST['name'];
  $name = $_POST['company'];
  $map = $_POST['map'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $website = $_POST['website'];
  $facebook = $_POST['facebook'];
  $twitter = $_POST['twitter'];
  $instagram = $_POST['instagram'];
  $youtube = $_POST['youtube'];
  $pinterest = $_POST['pinterest'];
  $linked = $_POST['linked'];
  $telegram = $_POST['telegram'];
  
  $targetDir = "./image/";
$targetFile1 = $targetDir . basename($_FILES["image1"]["name"]);
$targetFile2 = $targetDir . basename($_FILES["image2"]["name"]);

 


  // Get all the submitted data from the form
  $sql = "INSERT INTO bussiness VALUES ('$whatsapp','$designation', '$name', '$company','$map', '$email', '$address','$website','$facebook','$twitter','$instagram','$youtube','$pinterest','$linked','$telegram','$targetFile1','$targetFile2')";

  // Execute query
  $result = @$conn->query($sql);
  if (!$result) {
    $errno = $conn->errno;
    $errmsg = $conn->error;
   echo "You Already Resigtered : Contact HR Depatment for Any Queries Related to This Employee ID: $errmsg<br/>\n";
    $conn->close();
   
    exit;
} 
  

  // Now let's move the uploaded image into the folder: image

  elseif (move_uploaded_file($_FILES["image1"]["tmp_name"], $targetFile1) &&
    move_uploaded_file($_FILES["image2"]["tmp_name"], $targetFile2)) 
  {
  		echo "Done";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
 $conn->close();
?>