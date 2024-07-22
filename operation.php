<?php
$page_title = "Dashboard";
require_once ('includes/header.php');
require_once ('includes/database.php');


//retrieve user id
$user_id = $session_id;

//define the select statement
$query_str = "SELECT * FROM users WHERE user_id=" . $user_id;


//execute the query
$result = $conn->query($query_str);




//retrieve the results
$result_row = $result->fetch_assoc();



//Handle selection errors
if (!$result) {
	$errno = $conn->errno;
	$errmsg = $conn->error;
	echo "Selection failed with: ($errno) $errmsg<br/>\n";
	$conn->close();
	exit;
} else { //display results in a table
	?>

    <div class="container wrapper">
        <ul class="breadcrumb">
            <li><a href="operation.php">Home</a></li>
        
        </ul>

            <center>
    <div class="container">
       
          
    
        
        <div class="row">
            <h1>Dashboard</h1>
           
        
        
        
            <!-- <div class="col-12">-->
            <!--    <a href="presentation.php" target=blank class="btn btn-info" role="button">Enter Your Personal Details</a> -->
              
            <!--</div>-->
            
                
             <div class="col-12">
                <a href="updatecard.php"  class="btn btn-success" role="button">Update Student Details</a> 
              
            </div>
            <br>
             <div class="col-12">
                <a href="deletecard.php"  class="btn btn-danger" role="button">Delete Student Details</a> 
              
            </div>
            <br>
             <div class="col-12">
                <a href="apporoved.php" class="btn btn-primary" role="button">Approved Student Details</a> 
              
            </div>
            <br>
                 <div class="col-12">
                <a href="pending.php" class="btn btn-info" role="button">Pending Student Details</a> 
              
            </div>
            <br>
             <div class="col-12">
                <a href="list.php" class="btn btn-warning" role="button">Student Details</a> 
              
            </div>
        

            <!--  <div class="col-12">-->
            <!--    <a href="getid.php" target=blank class="btn btn-warning" role="button">Show Your IDCard</a> -->
              
            <!--</div>-->
            

        </div>
    
            
        </div>
        </center>
    </div>
<?php
}
include ('includes/footer.php');
?>