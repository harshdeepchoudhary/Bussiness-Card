<?php
//start a new session

session_start();

$page_title = "Add details";


require_once 'includes/database.php';

// If upload button is clicked ...
if (isset($_POST['upload'])) {
    $id = $_POST['id'];
    $whatsapp = $_POST['whatsapp'];
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

	$filename = $_FILES["photo"]["name"];
	$tempname = $_FILES["photo"]["tmp_name"];
	$folder = "./image/" . $filename;

	

	// Get all the submitted data from the form
	$sql = "INSERT INTO emp VALUES ('$id', '$whatsapp', '$map', '$email', '$address','$website','$facebook','$twitter','$instagram','$youtube','$pinterest','$linked','$telegram','$filename')";

	// Execute query
	$RESULT=@$conn->query($sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo '<div style="text-align:center;"><h3>  uploaded successfully!</h3>
        <img src="success.png" width="100px" ></div>';
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
?>