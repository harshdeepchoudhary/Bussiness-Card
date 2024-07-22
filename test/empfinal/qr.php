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
<center>


    <div class="container">
         <div class="row">
              <div class="col-12">




                <!-- <img src="images/signup-bg.jpg" alt=""> -->

                <div class="signup-content">
                    <form action="qrsucess.php" class="signup-form" method="POST" enctype="multipart/form-data">
                        <img src="./img/myndlogo.png" style="background-color:white; border-radius:10px"  class="profile-pic-img undefined" crossorigin="anonymous">
                        <br>
                        <br>
                        <h2 class="form-title">Employee QRCODE</h2>
                        <div class="form-group">
                            <input type="text" required class="form-input" name="id" id="name" placeholder="Your ID" />
                        </div>
                       
                       
                        <div class="form-input" style="background-color:white;">
                            <label for="photo">Upload Pasport Image Size 3.5 x 4.5 cm</label>
                            <input type="file" name="photo" placeholder="Upload Only Photo" class="" id="photo" />
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <input type="submit" name="upload" id="submit" class="form-submit" value="Upload QRCODE" />
                        </div>
                    </form>

                </div>
     </div>




    </div>



    </div>
    </center>
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