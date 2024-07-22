<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$page_title = "Delete IDCard";



require_once('includes/database.php');


//retrieve user id from a querystring
$id = $_GET['id'];
$query_str = "SELECT * FROM bussiness WHERE whatsapp= '" . $id . "'";




//execute the query
$result = $conn->query($query_str);
 $result_row = $result->fetch_assoc();

//Handle selection errors

    //display results in a table
    //insert a row into the table for each
if ($id==$result_row['whatsapp']) {

    
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
<div class="container" style="font-size:30px;">
    <center> <h3 >Deleted Successfully</h3></center>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Whatsapp Number</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
         <th scope="col">Photo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $result_row['whatsapp'] ?></td>
      <td><?php echo $result_row['name'] ?></td>
      <td><?php echo $result_row['email'] ?></td>
<td scope="col"><img src="<?php echo $result_row['logo'] ?>" width="100px" /></td>
    </tr>
 
  </tbody>
    
</table>


</div>
<?php
   header( "Refresh:3; url=operation.php", true, 303);
?>

   
  
    <?php
  
      
//the delete statement
$query_str = "DELETE FROM bussiness WHERE whatsapp= '" . $id . "'";

//execut the query
$result = $conn->query($query_str);

//retrieve the results
$result_row = $result->fetch_assoc();



//Handle selection errors

}else{
?>


<?php


    echo ' <!doctype html>
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
<h1> Invalid Whatsapp Number</h1>
<img src="Error.svg.png" width="200px">
<h3>To activate your card please contact to </h3>
<a href="mailto:techteam@mynditsolution.com">techteam@mynditsolution.com</a><br>
<a href="tel:+918639124257" target="blank">+91 8639124257</a>


               
</div></div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>';
   
    

  // Now ;
}    
    

include ('includes/footer.php');
?>

