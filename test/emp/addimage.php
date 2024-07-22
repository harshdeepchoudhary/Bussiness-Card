<!DOCTYPE html>
<html>

<head>
	<title>Image Upload</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
	<div id="content">
		<form method="POST" action="" enctype="multipart/form-data">
			<div class="form-group">
				<input class="form-control" type="file" name="uploadfile" value="" />
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
			</div>
		</form>
	</div>
	<div id="display-image">
	<?php
//start a new session
session_start();

$page_title = "add Image";


require_once 'includes/database.php';

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./image/" . $filename;

	

	// Get all the submitted data from the form
	$sql = "INSERT INTO emp (photo) VALUES ('$filename')";

	// Execute query
	$RESULT=@$conn->query($sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
?>
<div id="display-image">
    <?php
        $query = " select * from emp ";
        $result = mysqli_query($conn, $query);
 
        while ($data = mysqli_fetch_assoc($result)) {
    ?>
      
       <img src="./image/<?php echo $data['photo']; ?>" width="100px">
  
 
    <?php
        }
    ?>
    </div>
	
	</div>
</body>

</html>
