<?php

$page_title = "Approve Student";

require_once ('includes/header.php');
require_once ('includes/database.php');

//select statement
$query_str = "SELECT * FROM bussiness WHERE paid='yes'";

//execut the query
$result = $conn->query($query_str);

//Handle selection errors
if (!$result) {
	$errno = $conn->errno;
	$errmsg = $conn->error;
	echo "Selection failed with: ($errno) $errmsg<br/>\n";
	$conn->close();
	exit;
}else { //display results in a table
	?>
	
<div class="container">
    <div class="row">
        <div class="col-12">

		<ul class="breadcrumb">
			<li><a href="index.php">Home</a></li>
		
		</ul>
<br>
	
		<center>
		<button class="btn btn-success" id="download-button">Download as PDF</button>
		</center>
<br>
		
		<div class="movie-list"  id="invoice" style="margin-left:70px;margin-right:70px;">
		    	<h1 class="text-center">Approved List </h1>
		    
		    	<?php
			$i = 0;
			
			while ( $result_row = $result->fetch_assoc() ) :
				$i++;
				if ($i == 1) :
					?>
					<div class="row">
					    
					    	<?php endif; ?>
					
		<table class="table table-striped">
		    
  <thead>
      
  <tr>
      <th scope="col">#</th>
      <th scope="col" class="table-primary">Whatsapp Number</th>
       <th scope="col">Full Name</th>
         <th scope="col">Email Address</th>
      <th scope="col">Photo</th>
      <th scope="col">Approved</th>
         <th scope="col">Reject</th>
      
      
    </tr>
  </thead>
  <tbody>
    <tr >
      <td scope="col">1</td>
      <td class="table-primary" scope="col"><?php echo $result_row['whatsapp']?></td>
      <td scope="col"><?php echo $result_row['name']?></td>
      <td scope="col"><?php echo $result_row['email']?></td>
      <td scope="col"><img src="<?php echo $result_row['logo'] ?>" width="100px" /></td>
      <td><?php echo $result_row['paid']?></td>
      	<td><a class="btn btn-danger" href="approvedstatus.php?whatsapp=<?php echo $result_row['whatsapp'] ?>" role="button">Reject</a></td>
      
    </tr>
  
  </tbody>
</table>



	<?php if ($i == 3) : ?>
	</div>
				
				<?php $i=0; endif; endwhile; ?>
				</div>
			    		



</div>
    </div>
</div>
</div>
			    
		

	<?php
	// clean up result sets when we're done with them!
	$result->close();
}

// close the connection.
$conn->close();

include ('includes/footer.php');
?>