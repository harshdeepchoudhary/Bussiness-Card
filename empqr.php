<?php
//start a new session

session_start();



require_once 'includes/database.php';

$id = $_GET['whatsapp'];

//select statement
$query_str = "SELECT * FROM bussiness WHERE whatsapp= '" . $id . "'";
$admin_str = "SELECT whatsapp FROM users WHERE whatsapp= '" . $id . "'";



//execute the query
$result = $conn->query($query_str);
$result_admin = $conn->query($admin_str);

//Handle selection errors

//display results in a table
//insert a row into the table for each row of data
$result_row = $result->fetch_assoc();
$admin_row = $result_admin->fetch_assoc();
//	$review_result_row = $review_result->fetch_assoc();

if (!$result && !$result_admin) {

    echo "You Already Resigtered :Contact HR Depatment for Any Queries Related to This Employee ID: $errmsg<br/>\n";
    $conn->close();
    exit;
}
// elseif ($id==$result_row['whatsapp'] &&  $_SESSION['login']==$admin_row['user_name'] )

elseif ($result_row['whatsapp'] == $admin_row['whatsapp'] && $result_row['paid'] == 'yes') {
?>
    <!doctype html>
    <html lang="en">

    <head>
        <base>
        <link rel="icon" type="image/png" href="./img/myndlogo.png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Shadows+Into%20Light&amp;display=swap" media="all" id="shr-font-shadows-into light">
        <link rel="stylesheet" href="../use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <link href="templates/template6/t6-style.4.css" rel="stylesheet">
        <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css">
        <script src="../connect.facebook.net/en_US/sdkd3bd.js?hash=9fd289b669a723c54e0d115f45a6f418&amp;ua=modern_es6" async="" crossorigin="anonymous"></script>
        <script async="" defer="" crossorigin="anonymous" src="../connect.facebook.net/en_US/sdk.js#xfbml=1&amp;version=v5.0"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/fabric"></script>
        <script defer src="templates/common/js/lib/webfont.js"></script>
        <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui">
        <meta property="" itemprop="" content="./img/myndlogo.png" type="image/png" href="./img/myndlogo.png">
        <meta property="og:type" content="website">
        <meta property="og:description" content="Made By Harshdeep Choudhary" />
        <title>Mynd It Solution</title>
        <meta name="title" content="Mynd It Solution" />
        <link rel="manifest" id="manifest-placeholder">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    </head>


    </head>

    <body>

        <body>

            <!--  <br>-->
            <!--    <button  class="button-34" id="download-button">    <i class="fas fa-download shadow-button-icon"> </i> Download as PDF</button>-->
            <!--    <br>-->
            <!--<br>-->

            <div class="container" id="invoice">
                <div class="row">
                    <div class="col-12">

                        <div class="page-wrapper" id="home-section">
                            <div class="separator"></div>
                            <!--<div class="views-label"><i class="fas fa-eye"></i> Views: <b id="counter">7371</b></div>-->
                            <div class="upper">


                                <!-- User Company Name -->

                                <center>
                                    <div class="form-group text-center">

                                        <?php
                                        $query = " select image2 from bussiness where whatsapp= '" . $id . "'";
                                        $result = mysqli_query($conn, $query);

                                        if ($data = mysqli_fetch_assoc($result)) {
                                        ?>

                                            <img src="<?php echo $data['image2']; ?>" width="300px">


                                        <?php
                                        }
                                        ?>
                                    </div>
                                </center>


                                <center>
                                    <div class="form-group text-center">

                                        <?php
                                        $query = " select logo from bussiness where whatsapp= '" . $id . "'";
                                        $result = mysqli_query($conn, $query);

                                        if ($data = mysqli_fetch_assoc($result)) {
                                        ?>

                                            <img src="<?php echo $data['logo']; ?>" width="100px">


                                        <?php
                                        }
                                        ?>
                                    </div>
                                </center>
                                <div class="name" style="font-size:15px; font-weight:bold;color:black;">
                                    <tr>Full Name :


                                    </tr>
                                    <tr> <?php echo $result_row['name'] ?></tr>
                                </div>




                                <div class="name" style="font-size:15px; font-weight:bold;color:black;">
                                    <tr>Designation :


                                    </tr>
                                    <tr> <?php echo $result_row['designation'] ?></tr>
                                </div>
                                <div class="name" style="font-size:15px; font-weight:bold;color:black;">
                                    <tr>Number :


                                    </tr>
                                    <tr> <?php echo $result_row['whatsapp'] ?></tr>
                                </div>


                                <span style="margin-top: 5px;display: block"><i style="font-size: 12px;"></i></span>
                                <div class="contact-buttons">
                                    <a class="contact-button" target="_blank" href="tel:+91<?php echo $result_row['whatsapp'] ?>">
                                        <i class="fas fa-phone fa-flip-horizontal"></i>
                                        <!-- Call -->
                                    </a>
                                    <a class="contact-button" target="_blank" href="https://api.whatsapp.com/send/?phone=+91<?php echo $result_row['whatsapp'] ?>&text=Welcome+Mynd+It+Solution%0A&type=phone_number&app_absent=0">
                                        <i class="fab fa-whatsapp"></i>
                                        <!-- Whatsapp -->
                                    </a>
                                    <a class="contact-button" target="_blank" href="<?php echo $result_row['map'] ?>">
                                        <i class="fas fa-map-marker-alt fa-flip-horizontal"></i>
                                        <!-- Direction -->
                                    </a>
                                    <a class="contact-button" target="_blank" href="mailto:<?php echo $result_row['email'] ?>">
                                        <i class="fas fa-envelope fa-flip-horizontal"></i>
                                        <!-- Mail -->
                                    </a>
                                </div>
                            </div>


                        </div>
                        <div class="lower">
                            <div class="contact-info-container">
                                <div class="contact-info-wrapper">
                                    <a class="contact-piller-button call" target="_blank" href="tel:+91<?php echo $result_row['whatsapp'] ?>">
                                        <i class="fas fa-phone fa-flip-horizontal"></i>
                                    </a>
                                    <div class="contact-info">
                                        <div style="margin-bottom: 5px;"><a target="_blank" href="tel:+91<?php echo $result_row['whatsapp'] ?>">
                                                +91-
                                                <?php echo $result_row['whatsapp'] ?>
                                            </a>
                                        </div>

                                    </div>
                                </div>


                                <div class="contact-info-wrapper">
                                    <a class="contact-piller-button" target="_blank" href="mailto:<?php echo $result_row['email'] ?>">
                                        <i class="fas fa-envelope"></i>
                                    </a>
                                    <div class="contact-info">

                                        <a href="mailto:<?php echo $result_row['email'] ?>">
                                            <?php echo $result_row['email'] ?>
                                        </a><br />

                                    </div>
                                </div>

                                <div class="contact-info-wrapper">
                                    <a class="contact-piller-button" target="_blank" href=" <?php echo $result_row['map'] ?>">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </a>
                                    <div class="contact-info">


                                        <a target="_blank" href=" <?php echo $result_row['map'] ?>">

                                            <?php echo $result_row['address'] ?>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <!--    <div style="padding: 15px;">-->
                            <!--        <div class="p-20"></div>-->
                            <!--            <div class="shadow-buttons">-->

                            <!--<a class="shadow-button" href="idcard.php">-->
                            <!--  <i class="fas fa-download shadow-button-icon"></i>-->
                            <!--  Add to-->
                            <!--  Phone Book</a>-->
                            <!--<a class="shadow-button" href="index.php" download=""> -->
                            <!--       <i-->
                            <!--           class="fas fa-cloud-download-alt shadow-button-icon"></i>Save Card</a>-->
                            <!--   <a class="shadow-button save-card-button"> -->
                            <br>

                            <div>

                                <fieldset style="border:none; background-color:white;color:white;">

                                    <div>

                                        <input style="color:white;font-size:1px;" type="text" id="emailEl" value="<?php echo $result_row['email'] ?>" />
                                    </div>

                                    <div>

                                        <input style="color:white;font-size:1px;" type="text" id="nameEl" value="<?php echo $result_row['name'] ?>" />
                                    </div>


                                    <div>

                                        <input style="color:white;font-size:1px;" type="text" id="telEl" value="<?php echo $result_row['whatsapp'] ?>" />
                                    </div>

                                    <div>

                                        <input style="color:white;font-size:1px;" type="text" id="addressEl" value="<?php echo $result_row['address'] ?>" />
                                    </div>



                                    <button class="button-34" id="downloadEl">Add to Phone Book</button>
                                </fieldset>
                                <br>
                                <script>
                                    'use strict';

                                    function downloadToFile(content, filename, contentType) {
                                        const a = document.createElement('a');
                                        const file = new Blob([content], {
                                            type: contentType
                                        });

                                        a.href = URL.createObjectURL(file);
                                        a.download = filename;
                                        a.click();

                                        URL.revokeObjectURL(a.href);
                                    }

                                    function previewFile(event) {
                                        let reader = new FileReader();
                                        let file = event.target.files[0];

                                        reader.readAsDataURL(file);
                                        reader.onloadend = () => (previewEl.src = reader.result);
                                    }

                                    const makeVCardVersion = () => `VERSION:3.0`;
                                    const makeVCardName = (name) => `FN:${name}`;
                                    const makeVCardTel = (phone) => `TEL;TYPE=WORK,VOICE:${phone}`;
                                    const makeVCardAdr = (address) => `ADR;TYPE=WORK,PREF:;;${address}`;
                                    const makeVCardEmail = (email) => `EMAIL:${email}`;

                                    function makeVCard() {
                                        let vcard = `BEGIN:VCARD
${makeVCardVersion()}
${makeVCardName(nameEl.value)}
${makeVCardTel(telEl.value)}
${makeVCardAdr(addressEl.value)}
${makeVCardEmail(emailEl.value)}
END:VCARD`;
                                        downloadToFile(vcard, 'vcard.vcf', 'text/vcard');
                                    }

                                    downloadEl.addEventListener('click', makeVCard);
                                    fileEl.addEventListener('change', previewFile);
                                </script>


                                <script>
                                    const button = document.getElementById('download-button');

                                    function generatePDF() {
                                        // Choose the element that your content will be rendered to.
                                        const element = document.getElementById('invoice');
                                        // Choose the element and save the PDF for your user.
                                        html2pdf().from(element).save();
                                    }

                                    button.addEventListener('click', generatePDF);
                                </script>


                            </div>
                            <div class="row" style="display:flex;flex-direction:row;justify-content:center;">
                                <center>
                                    <div class=" mt-30"></div>
                                    <ul class="inprofile share-buttons">


                                        <li class="share-button">
                                            <a target="_blank" href="https://www.facebook.com/<?php echo $result_row['facebook'] ?>"><i class="share-button-facebook fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="share-button">
                                            <a target="_blank" href="https://twitter.com/@<?php echo $result_row['twitter'] ?>"><i class="share-button-twitter fab fa-twitter"></i></a>
                                        </li>
                                        <li class="share-button">
                                            <a target="_blank" href="https://www.instagram.com/<?php echo $result_row['instagram'] ?>"><i class="share-button-instagram fab fa-instagram"></i></a>
                                        </li>
                                        <li class="share-button">
                                            <a target="_blank" href="https://www.youtube.com/@<?php echo $result_row['youtube'] ?>"><i class="share-button-youtube fab fa-youtube"></i></a>
                                        </li>
                                        <li class="share-button">
                                            <a target="_blank" href="<?php echo $result_row['pinterest'] ?>"><i class="share-button-pinterest fab fa-pinterest-p"></i></a>
                                        </li>
                                        <li class="share-button">
                                            <a target="_blank" href="<?php echo $result_row['linked'] ?>"><i class="share-button-linkedin fab fa-linkedin-in"></i></a>
                                        </li>
                                        <li class="share-button">
                                            <a target="_blank" href="https://t.me/heyhhp<?php echo $result_row['telegram'] ?>"><i class="share-button-telegram fab fa-telegram-plane"></i></a>
                                        </li>
                                    </ul>
                                </center>

                            </div>

                        </div>
                        <div class="bottom-separator"></div>
                    </div>


                    <div class="section-container" id="about-us-section">
                        <div class="separator"></div>
                        <div class="section-content-wrapper">

                            <br>
                            <h2 class="section-header">About Us</h2>

                            <div class="section-header-underline"></div>

                            <table class="about-us-table">
                                <tbody>
                                    <tr>
                                        <td class="table-row-label">
                                            <h3 class="table-row-label-text" style="font-size:15px; font-weight:bold;color:black;">Company Name</h3><b class="table-row-label-separator">:</b>
                                        <td>
                                        <td class="table-row-value" style="font-size:15px; font-weight:bold;color:black;">
                                            &nbsp;<?php echo $result_row['company'] ?>

                                        <td>
                                    </tr>

                                    <!--<tr>-->
                                    <!--    <td class="table-row-label">-->
                                    <!--        <h3 class="table-row-label-text"-->
                                    <!--            style="font-size:15px; font-weight:bold;color:black;">Year of Est.</h3><b-->
                                    <!--            class="table-row-label-separator">:</b>-->
                                    <!--    <td>-->
                                    <!--    <td class="table-row-value" style="font-size:15px; font-weight:bold;color:black;">-->
                                    <!--        2023-->
                                    <!--    <td>-->
                                    <!--</tr>-->

                                    <!--<tr>-->
                                    <!--    <td class="table-row-label">-->
                                    <!--        <h3 class="table-row-label-text"-->
                                    <!--            style="font-size:15px; font-weight:bold;color:black;">Nature Of Business</h3><b-->
                                    <!--            class="table-row-label-separator">:</b>-->
                                    <!--    <td>-->
                                    <!--    <td class="table-row-value" style="font-size:15px; font-weight:bold;color:black;">-->
                                    <!--&nbsp;      IT Infrastructure-->

                                    <!--    <td>-->
                                    <!--</tr>-->
                                    <tr>
                                        <td class="table-row-label" <h3 class="table-row-label-text" style="font-size:15px; font-weight:bold;color:black;">Company Logo</h3><b class="table-row-label-separator">:</b>
                                        <td>
                                        <td>
                                            <center>
                                                <div class="form-group text-center">

                                                    <?php
                                                    $query = " select image2 from bussiness where whatsapp= '" . $id . "'";
                                                    $result = mysqli_query($conn, $query);

                                                    if ($data = mysqli_fetch_assoc($result)) {
                                                    ?>

                                                        <img src="<?php echo $data['image2']; ?>" width="100px">


                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </center>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>


                        </div>
                        <br>
                        <div class="bottom-separator"></div>

                        <br>


                        <div class="qr">

                            <div class="separator"></div>


                            <div class="qr-code-wrapper">
                                <div class="qr-code-label">Scan below QR to open profile:</div>



                                <div class="container">

                                    <div class="row">

                                        <div class="col-sm-3">
                                            <?php

                                            $code = $_GET['whatsapp'];


                                            echo "
						<img src='https://quickchart.io/qr?text=http://localhost/businesscard/empqr.php?id=$code&choe=UTF-8&size=200' width='200px'>
					";

                                            ?>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <br>
                        <center>

                            <div class="button-34">

                                <i class="fas fa-phone fa-flip-horizontal"></i>
                                <a class="" style="color:white;" target="blank" href='https://api.whatsapp.com/send/?&text=empqr.php?id=<?php echo $result_row['whatsapp'] ?>&choe=UTF-8' id="share-button">Share On Whatsapp</a>
                            </div>
                            <!-- Call -->
                            <br>
                        </center>

                       

                   

            <script>
                let count = parseInt(localStorage.getItem('visitorCounter') || '950');

                count++;

                localStorage.setItem('visitorCounter', count);

                document.getElementById('counter').innerHTML = count;
            </script>




            <!-- JS -->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="js/main.js"></script>
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

            <body>
            </body>

    </html>

<?php
} else {
    ?>
       <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>IDCard</title>
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
        color:black;
    }
    h3{
        color: red;
    }
    a{
        list-style:none;
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
}

?>