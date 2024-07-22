<?php
//start a new session




require_once 'includes/database.php';

$id = $_POST['id'];

//select statement
$query_str = "SELECT * FROM emp WHERE id= '" . $id . "'";



//execute the query
$result = $conn->query($query_str);
//Handle selection errors
if (!$result) {
    $errno = $conn->errno;
    $errmsg = $conn->error;
    echo "Selection failed with: ($errno) $errmsg<br/>\n";
    $conn->close();
    exit;
} else {
    //display results in a table
    //insert a row into the table for each row of data
    $result_row = $result->fetch_assoc();
    //	$review_result_row = $review_result->fetch_assoc();

    $page_title = "IDCard: " . $result_row['id'];



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Font Icon -->
  <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

  <!-- Main css -->
  <link rel="stylesheet" href="css/style.css">
    <title>Employee Register</title>
  </head>
  <body>
  


<div class="container">
    <div class="row-12">
        
    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form action="" class="signup-form" method="POST" enctype="multipart/form-data">
                        <h2 class="form-title">Employee Details</h2>
                        <div class="form-group">
                            <!-- <input type="text" class="form-input" name="id" id="name"  placeholder="Your ID"/> -->
                        </div>
                        <div class="form-group">
                       <center>
                       <tr>
                                    <td style="width:100px;">&nbsp;</td>
                                    <td style="width:200px;text-align:left;">
                                        Candidate ID
                                    </td>
                                    <td style="width:50px;text-align:center;">:</td>
                                    <td style="width:250px;text-align:left;">
                                    <td><?php echo $result_row['id'] ?></td>

                                    </td>
                                    <td style="width:100px;">&nbsp;</td>
                                </tr>
                       </center>
                        </div>
                        <div class="form-group text-center">
                        <?php
                                        $query = " select photo from emp where id= '" . $id . "'";
                                        $result = mysqli_query($conn, $query);

                                        if ($data = mysqli_fetch_assoc($result)) {
                                        ?>

                                            <img src="./image/<?php echo $data['photo']; ?>" width="100px">


                                        <?php
                                        }
                                        ?>
                        </div>
                        <div class="form-group">
                        <span><h2>Map </h2></span>
                          <input type="text" class="form-input"  value="<?php echo $result_row['map'] ?>" name="map" id="name" placeholder=" Your Location Google Map Link"/> 
                        </div>
                        <div class="form-group">
                        <span><h2>Email Id </h2></span>
                            <input type="email" class="form-input"  value="<?php echo $result_row['email'] ?>"  name="email" id="name" placeholder="Enter Your Email"/>
                        </div>
                        <div class="form-group">
                        <span><h2>Address</h2></span>
                            <textarea type="text" class="form-input"  value="<?php echo $result_row['address'] ?>" name="address" id="address" placeholder="Your Full Address"><?php echo $result_row['address'] ?></textarea>
                        </div>
                        <div class="form-group">
                        <span><h2>Website</h2></span>
                            <input type="text" class="form-input"  value="<?php echo $result_row['website'] ?>"  name="website" id="website" placeholder="Your Website Link"/>
                        </div>
                        <div class="form-group">
                        <span><h2>Facebook </h2></span>
                            <input type="text" class="form-input"  value="<?php echo $result_row['facebook'] ?>"  name="facebook" id="facebook" placeholder="Your Facebook Link"/>
                        </div>
                        <div class="form-group">
                        <span><h2>Twitter</h2></span>
                            <input type="text" class="form-input"  value="<?php echo $result_row['twitter'] ?>"  name="twitter" id="twitter" placeholder="Your Twitter Link"/>
                        </div>
                        <div class="form-group">
                        <span><h2>Instagram</h2></span>
                            <input type="text" class="form-input"  value="<?php echo $result_row['instagram'] ?>"  name="instagram" id="instagram" placeholder="Your Instagram Link"/>
                        </div>
                        <div class="form-group">
                        <span><h2>Youtube</h2></span>
                            <input type="text" class="form-input"  value="<?php echo $result_row['youtube'] ?>"  name="youtube" id="youtube" placeholder="Your Youtube Link"/>
                        </div>
                        <div class="form-group">
                        <span><h2>Pinterest</h2></span>
                            <input type="text" class="form-input"  value="<?php echo $result_row['pinterest'] ?>"  name="pinterest" id="pinterest" placeholder="Your Pinterest Link"/>
                        </div>
                        <div class="form-group">
                        <span><h2>LinkedIn </h2></span>
                            <input type="text" class="form-input"  value="<?php echo $result_row['linked'] ?>"  name="linked" id="linked" placeholder="Your LinkedIn Link"/>
                        </div>
                        <div class="form-group">
                        <span><h2>Telegram </h2></span>
                            <input type="text" class="form-input"  value="<?php echo $result_row['telegram'] ?>"  name="telegram"  id="telegram" placeholder="Your Telegram Link"/>
                        </div>
              
                        <div class="form-group">
                            <!-- <input type="submit" name="upload"   id="submit" class="form-submit" value="Sign up"/> -->
                        </div>
                    </form>
                   
                </div>
            </div>
        </section>

    </div>

    </div>
</div>
 

</html>

    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title><?php echo $page_title; ?></title>
    </head>

    <body>

      
    </body>
 
<?php } ?>
<?php

// close the connection.
$conn->close();
?>
   <!-- JS -->
   <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

    </html>