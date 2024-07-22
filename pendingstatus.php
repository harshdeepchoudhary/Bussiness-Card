<?php
//start a new session



$page_title = "Add details";


require_once 'includes/database.php';

// If upload button is clicked ...


  $whatsapp = $_GET['whatsapp'];
   $paid="yes";
  


 // Get all the submitted data from the form
  $query_str = "UPDATE bussiness SET 
        
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
 header( "Refresh:1; url=pending.php", true, 303);
}


// close the connection.
$conn->close();

include ('includes/footer.php');
?>

