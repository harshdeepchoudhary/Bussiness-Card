<?php
//start a new session




require_once 'includes/database.php';

$id = $_GET['id'];

//select statement
$query_str = "SELECT * FROM emp WHERE id= '" . $id . "'";
$qr_str = "SELECT * FROM qr WHERE id= '" . $id . "'";



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

    <html>

    <!-- Mirrored from fabvisitingcard.in/sakhi--studio--and-academy by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Nov 2023 10:46:42 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

    <head>
        <base>
        <link rel="icon" type="image/png" href="./img/myndlogo.png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Shadows+Into%20Light&amp;display=swap" media="all" id="shr-font-shadows-into light">
        <link rel="stylesheet" href="../use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link href="templates/common/css/common.css" rel="stylesheet">
        <link href="templates/template6/t6-style.4.css" rel="stylesheet">
        <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css">
        <script src="../connect.facebook.net/en_US/sdkd3bd.js?hash=9fd289b669a723c54e0d115f45a6f418&amp;ua=modern_es6" async="" crossorigin="anonymous"></script>
        <script async="" defer="" crossorigin="anonymous" src="../connect.facebook.net/en_US/sdk.js#xfbml=1&amp;version=v5.0"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/fabric"></script>
        <script defer src="templates/common/js/lib/webfont.js"></script>
        <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui">
        <meta property="og:image" itemprop="image" content="https://vcard-bucket.s3.us-east-2.amazonaws.com/A004/sakhi--studio--and-academy/1590565759936.jpeg">
        <meta property="og:type" content="website">
        <meta property="og:description" content="Mrs. CHHAYA SALVE PATIL (OWNER)" />
        <title>Mynd It Solution</title>
        <meta name="title" content="Mynd It Solution" />
        <link rel="manifest" id="manifest-placeholder">


    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="page-wrapper" id="home-section">
                        <div class="separator"></div>
                        <div class="views-label"><i class="fas fa-eye"></i> Views: <b id="counter">7371</b></div>
                        <div class="upper">
                            <!-- User Profile Pic -->
                            <img src="./img/myndlogo.png" class="profile-pic-img undefined" crossorigin="anonymous">
                            <!-- User Company Name -->
                            <div class="firmname">Mynd it Solution</div>
                            <div class="firmname-underline"></div>
                            <!-- User First Name and Last Name -->
                            <center>
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
                            </center>

                            <div class="name">
                                <td><?php echo $result_row['id'] ?></td>
                            </div>
                            <div class="name">
                                <td><?php echo $result_row['name'] ?></td>
                            </div>
                            <span style="margin-top: 5px;display: block"><i style="font-size: 12px;">(OWNER)</i></span>
                            <div class="contact-buttons">
                                <a class="contact-button" target="_blank" href="tel:+91<?php echo $result_row['whatsapp'] ?>">
                                    <i class="fas fa-phone fa-flip-horizontal"></i>
                                    <!-- Call -->
                                </a>
                                <a class="contact-button" target="_blank" href="https://chat.whatsapp.com/<?php echo $result_row['whatsapp'] ?>">
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
                                            +91-<?php echo $result_row['whatsapp'] ?></a>
                                    </div>

                                </div>
                            </div>


                            <div class="contact-info-wrapper">
                                <a class="contact-piller-button" target="_blank" href="mailto:vivekkumar@gmail.com">
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

                                        <?php echo $result_row['address'] ?></a>
                                </div>
                            </div>

                        </div>
                        <div style="padding: 15px;">
                            <div class="p-20"></div>
                            <div class="shadow-buttons">
                                <a class="shadow-button" href="EnterDetails.php">
                                    <i class="fas fa-download shadow-button-icon"></i>
                                    Add to
                                    Phone Book</a>
                                <!-- <a class="shadow-button" href="index.php" download=""> 
                        <i
                            class="fas fa-cloud-download-alt shadow-button-icon"></i>Save Card</a>
                    <a class="shadow-button save-card-button"> -->

                            </div>
                            <div class="p-30 mt-30"></div>
                            <ul class="inprofile share-buttons">

                                <li class="share-button">
                                    <a target="_blank" href="<?php echo $result_row['websitte'] ?>">
                                        <img src="img/earth.png" width="28px"></a>
                                </li>
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
                            <div class="p-20"></div>
                        </div>
                        <div class="bottom-separator"></div>
                    </div>
                </div>

                <div class="section-container" id="about-us-section">
                    <div class="separator"></div>
                    <div class="section-content-wrapper">
                        <h2 class="section-header">About Us</h2>
                        <div class="section-header-underline"></div>
                        <table class="about-us-table">
                            <tbody>
                                <tr>
                                    <td class="table-row-label">
                                        <h3 class="table-row-label-text">Company Name</h3><b class="table-row-label-separator">:</b>
                                    <td>
                                    <td class="table-row-value">
                                        Mynd it Solution
                                    <td>
                                </tr>

                                <tr>
                                    <td class="table-row-label">
                                        <h3 class="table-row-label-text">Year of Est.</h3><b class="table-row-label-separator">:</b>
                                    <td>
                                    <td class="table-row-value">
                                        2023
                                    <td>
                                </tr>
                                <tr>
                                    <td class="table-row-label">
                                        <h3 class="table-row-label-text">Nature Of Business</h3><b class="table-row-label-separator">:</b>
                                    <td>
                                    <td class="table-row-value">
                                        Website Designer , App Developer , Digital Marketing

                                    <td>
                                </tr>
                            </tbody>
                        </table>


                    </div>
                    <div class="bottom-separator"></div>
                </div>

                <div class="qr">

                    <div class="separator"></div>


                    <div class="qr-code-wrapper">
                        <div class="qr-code-label">Scan below QR to open profile:</div>
                        
                        
                        <center>
                                <div class="form-group text-center">
                                    <?php
                                    $query = " select filename from qr where id= '" . $id . "'";
                                    $result = mysqli_query($conn, $query);

                                    if ($data = mysqli_fetch_assoc($result)) {
                                    ?>

                                        <img src="./qr/<?php echo $data['filename']; ?>" width="200px" >


                                    <?php
                                    }
                                    ?>
                                </div>
                            </center>
                    </div>
                </div>



            </div>
        </div>

        </div>


        <script>
            let count = parseInt(localStorage.getItem('visitorCounter') || '950');

            count++;

            localStorage.setItem('visitorCounter', count);

            document.getElementById('counter').innerHTML = count;
        </script>





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