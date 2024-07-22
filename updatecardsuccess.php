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
  $paid=$_POST['paid'];
  
  $targetDir = "./image/";
$targetFile1 = $targetDir . basename($_FILES["image1"]["name"]);
$targetFile2 = $targetDir . basename($_FILES["image2"]["name"]);


 // Get all the submitted data from the form
  $query_str = "UPDATE bussiness SET 
               designation='$designation',
               name='$name',
               company='$company',
               map='$map',
               email='$email',
               address='$address',
               website='$website',
               facebook='$facebook',
               twitter='$twitter',
               instagram='$instagram',
               youtube='$youtube',
               pinterest='$pinterest',
               linked='$linked',
               telegram='$telegram',
               paid='$paid'
               WHERE whatsapp='$whatsapp'";
               
//execute the query
$result = @$conn->query($query_str);

//Handle selection errors
if (!$result) {
  $errno = $conn->errno;
  $errmsg = $conn->error;
  echo "Connection Failed with: $errno, $errmsg<br/>\n";
  exit;
}else {
    ?>
    <div><h1>Updated Successfully</h1></div>
    <?php
    header( "Refresh:1; url=operation.php", true, 303);
  ?>
  <?php ?>
  
  
<?php
}
}

// close the connection.
$conn->close();

include ('includes/footer.php');
?>

