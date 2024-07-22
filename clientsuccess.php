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
  $company = $_POST['company'];
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
    $paid="no";
  
  
  $targetDir = "./image/";
$targetFile1 = $targetDir . basename($_FILES["image1"]["name"]);
$targetFile2 = $targetDir . basename($_FILES["image2"]["name"]);
  $tempname1=$_FILES["image1"]["tmp_name"];
   $tempname2=$_FILES["image2"]["tmp_name"];




  // Get all the submitted data from the form
  $sql = "INSERT INTO bussiness VALUES ('$whatsapp','$designation', '$name', '$company','$map', '$email', '$address','$website','$facebook','$twitter','$instagram','$youtube','$pinterest','$linked','$telegram','$paid','$targetFile1','$targetFile2')";

  // Execute query
  $result = @$conn->query($sql);
  if (!$result) {
    $errno = $conn->errno;
    $errmsg = $conn->error;
  ?>
        <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Failed</title>
    <style>
    .success{
        text-align:center;
        width:"200px" ;
        height:"200px";
 background: none;
    }
    h1{
        color:red;
    }
    h4{
        color:redk;
    }
    h3{
    color:black;
    }
    .container{
    display:flex;
    flex-direction:coloumn;
    justify-content:center;
    allign-item:center;
    }
</style>
  </head>
  <body>
  <body>
<div class="container">
<div class="row-12">
<div class="success">
<img src="Error.svg.png" width="200px">
<h3>To activate your card please contact to </h3>
<a href="mailto:hhptouch@gmail.com">hhptouch@gmail.com</a><br>
<a href="tel:+917376038020" target="blank">+91 7376038020</a>



               
</div></div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

<?php
header( "Refresh:3; url=getid.php", true, 303);
   
    exit;
} 
  

  // Now let's move the uploaded image into the folder: image

  elseif (move_uploaded_file($tempname1, $targetFile1) &&
    move_uploaded_file(  $tempname2, $targetFile2)) 
  {  header( "Refresh:3; url=registration.php", true, 303);
  		?>
      
      <?php
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
 $conn->close();
?>