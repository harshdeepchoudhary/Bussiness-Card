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
        <style>
     body{

        background-color:pink;
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

        <title><?php echo $page_title; ?></title>
    </head>

    <body>

         
  <div class="container">
    <div class="row-12">
        <center>
            <div class="div1">
                        <form action="" method="post" enctype="multipart/form-data">

                            <table border="0">
                                <tr>
                                    <td style="width:100px;">&nbsp;</td>
                                    <td style="text-align:center;" colspan="3">
                                        <span style="font-size:X-Large;font-weight:bold;">Employee Details</span>
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
                                        Candidate Number
                                    </td>
                                    <td style="width:50px;text-align:center;">:</td>
                                    <td style="width:250px;text-align:left;">
                                    <td><?php echo $result_row['id'] ?></td>

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
                                    <td><?php echo $result_row['whatsapp'] ?></td>
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
                                    <td><?php echo $result_row['map'] ?></td>
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
                                    <td><?php echo $result_row['email'] ?></td>
                                    </td>
                                    <td style="width:100px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="width:100px;">&nbsp;</td>
                                    <td style="width:200px;text-align:left;">
                                        Address </td>
                                    <td style="width:50px;text-align:center;">:</td>
                                    <td style="width:250px;text-align:left;">
                                    <td><?php echo $result_row['address'] ?></td>
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
                                        <input name="website" type="text" value="<?php echo $result_row['website'] ?>" placeholder=" Your Website Link">
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
                                        <input name="facebook" type="text" value="<?php echo $result_row['facebook'] ?>" placeholder=" Your Facebook Link">
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
                                        <input name="twitter" type="text" value="<?php echo $result_row['twitter'] ?>" placeholder=" Your Twitter Link">
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
                                        <input name="instagram" type="text" value="<?php echo $result_row['instagram'] ?>" placeholder=" Your Instagram Link">
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
                                        <input name="youtube" type="text" value="<?php echo $result_row['youtube'] ?>" placeholder=" Your Youtube Link">
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
                                        <input name="pinterest" type="text" value="<?php echo $result_row['pinterest'] ?>" placeholder="  Your Pinterest Link">
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
                                        <input name="linked" type="text" value="<?php echo $result_row['linked'] ?>" placeholder="  Your LinkedIN Link">
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
                                        <input name="telegram" type="text" value="<?php echo $result_row['telegram'] ?>" placeholder="  Your Telegram Link">
                                    </td>
                                    <td style="width:100px;">&nbsp;</td>
                                </tr>

                                <tr>
                                    <td style="width:100px;">&nbsp;</td>
                                    <td style="width:200px;text-align:left;">
                                        Upload candidate Photo
                                    </td>
                                    <td style="width:50px;text-align:center;">:</td>
                                    <td style="width:250px;text-align:left;">
                                    <td>
                                        <?php
                                        $query = " select photo from emp where id= '" . $id . "'";
                                        $result = mysqli_query($conn, $query);

                                        if ($data = mysqli_fetch_assoc($result)) {
                                        ?>

                                            <img src="./image/<?php echo $data['photo']; ?>" width="100px">


                                        <?php
                                        }
                                        ?>
                                    </td>


                                    </td>
                                    <td style="width:100px;">&nbsp;</td>
                                </tr>
                            
                                <td style="width:100px;">&nbsp;</td>
                                </tr>

                            </table>
                        </form>
                    </div>
                </center>
    </body>
    </div>
    </div>
<?php } ?>
<?php

// close the connection.
$conn->close();
?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

    </html>