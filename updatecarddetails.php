
<?php
//start session
@session_start();




require_once ('includes/database.php');

require_once ('includes/header.php');


//retrieve user id



$id = $_GET['id'];

//select statement
$query_str = "SELECT * FROM bussiness WHERE whatsapp= '" . $id . "'";


//execute the query
$result = $conn->query($query_str);




//retrieve the results
$result_row = $result->fetch_assoc();



//Handle selection errors
if($result_row['whatsapp']==$_GET['id']) {
?>
<!doctype html>
<html lang="en">

<head>
     <link rel="icon" type="image/png" href="./img/myndlogo.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>Employee Update Details</title>
    <style>
    
 

    </style>
</head>

<body>
<center>

   
                        
    <div class="container">
         <div class="row">
              <div class="col-12">



                <!-- <img src="images/signup-bg.jpg" alt=""> -->
                   <br>
                   <br>
                        <br>

                <div class="signup-content">
                    <form action="https://presentmynd.online/businesscard/updatecardsuccess.php" class="signup-form" method="POST" enctype="multipart/form-data">
                    
                     
                        <h2 class="form-title">Update Details</h2>
                         
                        
                        
                        <div class="form-group">
                            
                            
                            
                            <input type="Number" min="0" id="mobileNumber" required class="form-input" placeholder="Enter Your Number *"  name="whatsapp" id="name"  value="<?php echo $result_row['whatsapp']; ?>" />
                            
                        
                        </div>
                          <script>
                                const mobileNumberInput = document.getElementById('mobileNumber');

                                mobileNumberInput.addEventListener('input', function (event) {
                                    const inputValue = event.target.value;

                                    // Ensure the entered value is not longer than 10 digits
                                    if (inputValue.length > 10) {
                                        event.target.value = inputValue.slice(0, 10);
                                    }
                                });

                            </script>
                        
                        <div class="form-group">
                            <input type="text"  class="form-input" required name="designation" placeholder="Enter Your Designation *" maxlength="50" id="alpha-only-input1" value="<?php echo $result_row['designation']; ?>" />
                          
                            </div>
                            
                        
                        <div class="form-group">
                            <input type="text" required class="form-input" required placeholder="Enter Your Full Name *" maxlength="20"  name="name" id="alpha-only-input2"  value="<?php echo $result_row['name']; ?>" />
                        
                        </div>
                              <script>
                                const alphaOnlyInput1 = document.getElementById('alpha-only-input2'),
  alphaOnlyPattern1 = new RegExp('^[a-zA-Z ]+$')

let previousValue1 = ''

alphaOnlyInput1.addEventListener('input', (e) => {
  let currentValue1 = alphaOnlyInput.value

  if (e.inputType.includes('delete') || alphaOnlyPattern1.test(currentValue1)) {
    previousValue = currentValue
  }

  alphaOnlyInput1.value = previousValue1
})
                            </script>
                                <div class="form-group">
                            <input type="text" required class="form-input"  placeholder="Enter Your Company Name *" maxlength="50"  name="company" id="alpha-only-input3"  value="<?php echo $result_row['company']; ?>" />
                             
                        </div>
                              <script>
                                const alphaOnlyInput2 = document.getElementById('alpha-only-input3'),
  alphaOnlyPattern2 = new RegExp('^[a-zA-Z ]+$')

let previousValue2 = ''

alphaOnlyInput2.addEventListener('input', (e) => {
  let currentValue1 = alphaOnlyInput.value

  if (e.inputType.includes('delete') || alphaOnlyPattern2.test(currentValue1)) {
    previousValue = currentValue
  }

  alphaOnlyInput2.value = previousValue2
})
                            </script>
                       
                       
                        <div class="form-group">
                            <input type="text" class="form-input" placeholder="Enter Your Map Address "  name="map" oninput="validateLinkInput(this)"  value="<?php echo $result_row['map']; ?>" />
                        </div>
                        <div class="form-group">
                            <input type="email" required class="form-input"
                            name="email" id="name" placeholder="Enter Your Email *"  value="<?php echo $result_row['email']; ?>" />
                             
                        </div>
                        <div class="form-group">
                            <textarea type="text" required class="form-input" rows="4" cols="50"  maxlength="100"   name="address" id="name" placeholder="Enter Your Address "> <?php echo $result_row['address']; ?></textarea>
                             
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="website" placeholder="Enter Your Website Link "  oninput="validateLinkInput(this)"  value="<?php echo $result_row['website']; ?>" />
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-input" name="facebook" id="name" placeholder="Enter Your Facebook Username " maxlength="20"  value="<?php echo $result_row['facebook']; ?>" />
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-input" name="twitter" id="name" placeholder="Enter Your Twitter Username " maxlength="20"  value="<?php echo $result_row['twitter']; ?>" />
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-input" name="instagram" id="email" placeholder="Enter Your Instagram Username " maxlength="20"  value="<?php echo $result_row['instagram']; ?>" />
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-input" name="youtube" id="email" placeholder="Enter Your Youtube Username" maxlength="20" value="<?php echo $result_row['youtube']; ?>" />
                        </div>
                        <div class="form-group">
                            <input type="text" oninput="validateLinkInput(this)" class="form-input" name="pinterest" id="email" placeholder="Enter Your Pinterest Link "  value="<?php echo $result_row['pinterest']; ?>" />
                        </div>
                        <div class="form-group">
                            <input type="text" oninput="validateLinkInput(this)" required class="form-input" name="linked" placeholder="Enter Your LinkedIn Link * " id="email"  value="<?php echo $result_row['linked']; ?>" />
                             
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-input" placeholder="Enter Your Telegram UserName " name="telegram" id="email"  value="<?php echo $result_row['telegram']; ?>" />
                        </div>
                          <div class="form-group">
                              <h3 style="color:white;">Select Yes If Paid Otherwise No</h3>
                                <label class="radio-label">
    <input type="radio" name="paid" value="yes" class="radio-input">
    Yes
  </label>
  <label class="radio-label">
    <input type="radio" name="paid" value="no" class="radio-input">
      No
  </label>

</div>
                         
                        </div>
                        <!--<div class="form-input" style="background-color:white;">-->
                        <!--    <label for="photo">Upload Your photo 3.5 x 4.5 cm</label>-->
                        <!--    <input type="file" required name="image1" class=""  id="logo"  value="<?php echo $result_row['logo']; ?>"  />-->
                        <!--     <span class="rq">*Required.</span>-->
                        <!--</div>-->
                        <!--<br>-->
                    
                        <!-- <div class="form-input" style="background-color:white;">-->
                        <!--    <label for="photo">Upload Your Company Logo 3.5 x 4.5 cm</label>-->
                        <!--    <input type="file" required name="image2" placeholder="Upload Your Company Logo" class="" multiple  value="<?php echo $result_row['images2']; ?>" />-->
                        <!--     <span class="rq">*Required.</span>-->
                        <!--</div>-->
                        
                        
                   
                        <div class="form-group">
                            <input style="background-color:#33FFB0;" type="submit" name="upload" id="submit" class="form-submit" value="Save Details" />
                        </div>
                    </form>

                </div>
     </div>




    </div>



    </div>
    </center>
    <!-- JS -->
      <script>
        function validateLinkInput(input) {
            const inputValue = input.value;

            // Regular expression pattern to match a URL
            const urlPattern = /^(ftp|http|https):\/\/[^ "]+$/;

            if (!urlPattern.test(inputValue)) {
                // Clear the input if it doesn't match the URL pattern
                input.value = '';
            }
        }

    </script>
    <script>
           
                                const alphaOnlyInput = document.getElementById('alpha-only-input1'),
  alphaOnlyPattern = new RegExp('^[a-zA-Z ]+$')

let previousValue = ''

alphaOnlyInput.addEventListener('input', (e) => {
  let currentValue = alphaOnlyInput.value

  if (e.inputType.includes('delete') || alphaOnlyPattern.test(currentValue)) {
    previousValue = currentValue
  }

  alphaOnlyInput.value = previousValue
})
                            </script>
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
    
    ?>

<?php
}
else
{
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
