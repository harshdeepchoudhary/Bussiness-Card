<?php

session_start();

$page_title = "Add details";





?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title><?php echo $page_title; ?></title>
    <style>
     body{

        background-image: url(img/pexels-pixabay-265072.jpg);
        width: 100%;
height: 100vh;
        background-size: cover;
     }
     .container{     display: flex;
     flex-direction: column;
     justify-content: center;
     font-size: 17px;
     font-weight: bold;
  

     }
     .butt{
      text-align: center;
      justify-content: center;
     }

        </style>
  </head>
  <body">
  
    
  <div class="container">
    <div class="row-12">
        <center>
            <div class="div1">
             <form action="sucess.php"  method="POST" enctype="multipart/form-data">
                  <table border="0">
                 <tr>
                     <td style="width:100px;">&nbsp;</td>
                     <td style="text-align:center;" colspan="3">
                         <span  style="font-size:X-Large;font-weight:bold;">Employee Registration</span>
                     </td>
                     <td style="width:100px;">&nbsp;</td>
                 </tr>
                 <tr>
                     <td style="width:100px;">&nbsp;</td>
                     <td style="width:200px;text-align:left;">&nbsp;</td>
                     <td style="width:50px;text-align:center;">&nbsp;</td>
                     <td style="width:250px;text-align:left;">&nbsp;</td>
                     <td style="width:100px;">&nbsp;</td>
                 </tr>
                   <tr>
                     <td style="width:100px;">&nbsp;</td>
                     <td style="width:200px;text-align:left;">
                         Employee ID
                     </td>
                     <td style="width:50px;text-align:center;">:</td>
                     <td style="width:250px;text-align:left;">
                         <input name="id" type="text" required placeholder="Employee ID">
                     </td>
                     <td style="width:100px;">&nbsp;</td>
                 </tr>
                 <tr>
                     <td style="width:100px;">&nbsp;</td>
                     <td style="width:200px;text-align:left;">
                         Candidate Whatsapp Number
                     </td>
                     <td style="width:50px;text-align:center;">:</td>
                     <td style="width:250px;text-align:left;">
                         <input name="whatsapp" required type="Number" placeholder="Whatsapp Number">
                     </td>
                     <td style="width:100px;">&nbsp;</td>
                 </tr>
                 <tr>
                     <td style="width:100px;">&nbsp;</td>
                     <td style="width:200px;text-align:left;">
                        Your Location Google Map Link
                     </td>
                     <td style="width:50px;text-align:center;">:</td>
                     <td style="width:250px;text-align:left;">
                         <input name="map" required type="text" placeholder=" Your Location Google Map Link">
                     </td>
                     <td style="width:100px;">&nbsp;</td>
                 </tr>
                 <tr>
                     <td style="width:100px;">&nbsp;</td>
                     <td style="width:200px;text-align:left;">
                         Email
                     </td>
                     <td style="width:50px;text-align:center;">:</td>
                     <td style="width:250px;text-align:left;">
                         <input name="email" required type="email" placeholder="Enter Your Email">
                     </td>
                     <td style="width:100px;">&nbsp;</td>
                 </tr>
                 <tr>
                     <td style="width:100px;">&nbsp;</td>
                     <td style="width:200px;text-align:left;">
                         Address                </td>
                     <td style="width:50px;text-align:center;">:</td>
                     <td style="width:250px;text-align:left;">
                         <textarea name="address" rows="2" required cols="20" placeholder="Enter Your Full Address"  style="height:50px;width:200px;">
                         </textarea>
                     </td>
                     <td style="width:100px;">&nbsp;</td>
                 </tr>
                 <tr>
                     <td style="width:100px;">&nbsp;</td>
                     <td style="width:200px;text-align:left;">
                         Your Website Link
                     </td>
                     <td style="width:50px;text-align:center;">:</td>
                     <td style="width:250px;text-align:left;">
                         <input name="website" type="text" placeholder=" Your Website Link">
                     </td>
                     <td style="width:100px;">&nbsp;</td>
                 </tr>
                 <tr>
                     <td style="width:100px;">&nbsp;</td>
                     <td style="width:200px;text-align:left;">
                         Your Facebook Link
                     </td>
                     <td style="width:50px;text-align:center;">:</td>
                     <td style="width:250px;text-align:left;">
                         <input name="facebook" required type="text" placeholder=" Your Facebook Link">
                     </td>
                     <td style="width:100px;">&nbsp;</td>
                 </tr>
                  <tr>
                     <td style="width:100px;">&nbsp;</td>
                     <td style="width:200px;text-align:left;">
                         Your Twitter Link
                     </td>
                     <td style="width:50px;text-align:center;">:</td>
                     <td style="width:250px;text-align:left;">
                         <input name="twitter" required type="text" placeholder=" Your Twitter Link">
                     </td>
                     <td style="width:100px;">&nbsp;</td>
                 </tr>
                  <tr>
                     <td style="width:100px;">&nbsp;</td>
                     <td style="width:200px;text-align:left;">
                         Your Instagram Link
                     </td>
                     <td style="width:50px;text-align:center;">:</td>
                     <td style="width:250px;text-align:left;">
                         <input name="instagram" required type="text" placeholder=" Your Instagram Link">
                     </td>
                     <td style="width:100px;">&nbsp;</td>
                 </tr>
                  <tr>
                     <td style="width:100px;">&nbsp;</td>
                     <td style="width:200px;text-align:left;">
                         Your Youtube Link
                     </td>
                     <td style="width:50px;text-align:center;">:</td>
                     <td style="width:250px;text-align:left;">
                         <input name="youtube" type="text" placeholder=" Your Youtube Link">
                     </td>
                     <td style="width:100px;">&nbsp;</td>
                 </tr>
                  <tr>
                     <td style="width:100px;">&nbsp;</td>
                     <td style="width:200px;text-align:left;">
                         Your Pinterest Link
                     </td>
                     <td style="width:50px;text-align:center;">:</td>
                     <td style="width:250px;text-align:left;">
                         <input name="pinterest" type="text" placeholder="  Your Pinterest Link">
                     </td>
                     <td style="width:100px;">&nbsp;</td>
                 </tr>
                   <tr>
                     <td style="width:100px;">&nbsp;</td>
                     <td style="width:200px;text-align:left;">
                         Your LinkedIN Link
                     </td>
                     <td style="width:50px;text-align:center;">:</td>
                     <td style="width:250px;text-align:left;">
                         <input name="linked" required type="text" placeholder="  Your LinkedIN Link">
                     </td>
                     <td style="width:100px;">&nbsp;</td>
                 </tr>
                      <tr>
                     <td style="width:100px;">&nbsp;</td>
                     <td style="width:200px;text-align:left;">
                         Your Telegram Link
                     </td>
                     <td style="width:50px;text-align:center;">:</td>
                     <td style="width:250px;text-align:left;">
                         <input name="telegram" required type="text" placeholder="  Your Telegram Link">
                     </td>
                     <td style="width:100px;">&nbsp;</td>
                 </tr><br><br>
               
                 <tr>
                     <td style="width:100px;">&nbsp;</td>
                     <td style="width:200px;text-align:left;">
                         Upload candidate Photo
                     </td>
                     <td style="width:50px;text-align:center;">:</td>
                     <td style="width:250px;text-align:left;">
                         <input type="file" name="photo" multiple  />
                     </td>
                     <td style="width:100px;">&nbsp;</td>
                 </tr>
                 <td>
                       <div class="butt">
                        <input type="submit" name="upload"  value="SUBMIT FORM" class="btn btn-primary text-center" />
                       </div>
                     </td>
                    
                 </tr>       
             
                 </table>
                  </form>
         </div>
     </center>
    </div>
  </div>



 

<!-- $id = $_GET['id'];
$whatsapp = $_GET['whatsapp'];
$map = $_GET['map'];
$email = $_GET['email'];
$address = $_GET['address'];
$website = $_GET['website'];
$facebook = $_GET['facebook'];
$twitter = $_GET['twitter'];
$instagram = $_GET['instagram'];
$youtube = $_GET['youtube'];
$pinterest = $_GET['pinterest'];
$linked = $_GET['linked'];
$telegram = $_GET['telegram'];
$photo =  $_GET['photo'];

//define sql statement
$query_str = "INSERT INTO emp VALUES ('$id', '$whatsapp', '$map', '$email', '$address','$website','$facebook','$twitter','$instagram','$youtube','$pinterest','$linked','$telegram','$photo')";

//execute the query
$result = @$conn->query($query_str);

//handle error
if($result) {
    //redirect to index page
    header("Location:getid.php");
}
else{
  $errno = $conn->errno;
  $errmsg = $conn->error;
  echo "Insertion failed with: ($errno) $errmsg<br/>\n";
  $conn->close();
  exit;
}
?> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>




