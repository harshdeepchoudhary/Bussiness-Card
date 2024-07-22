<!doctype html>
<html lang="en">

<head>
     <link rel="icon" type="image/png" href="./img/myndlogo.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>Register</title>
    <style>
    
body{

            background-size: cover;
            height: 100vh;
         
}
 img{
            width: 50%;
  height: auto;
        }
        h1{
            color: #22376F;

font-family: Poppins;
font-size: 30.315px;
font-style: normal;
font-weight: 300;

    z-index: 3;
        }
         .footer{
    margin-top:20px;
    width: 100%;
    
    
    background-color:  #22376F;
  
    color: white;
    
height: 70px;

position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
   justify-content: center;
            align-items: center;

  }
  .btn1{
    display: flex;
padding: 10px 30px 10px 30px;
justify-content: flex-end;
align-items: center;
border-radius: 70px;
border: 3px solid #22376F;
background: #22376F;
box-shadow: 0px 8px 0px 0px #303030;
color: white;
text-decoration: none;
    
  }
    </style>
</head>

<body>
<center
    <br>
   <br>   <br>   <br>

    <div class="container">
         <div class="row">
              <div class="col-12">

<h1> Registration</h1>

                <!-- <img src="images/signup-bg.jpg" alt=""> -->

                <div class="signup-content">
                    <form action="generatecard.php" class="signup-form" method="GET" enctype="multipart/form-data">
                    
                     
                         
                        <br>
                        
                        <div class="form-group">
                            
                            
                            <input type="Number" min="10" id="mobileNumber" required class="form-input"  name="whatsapp" id="name"  placeholder="Whatsapp No Ex:87547xxx  *" />
                        
                        
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
                            <input type="text" required class="form-input" name="designation" id="alpha-only-input1" placeholder="Your Designation *" />
                             
                            </div>
                            
                        
                        <div class="form-group">
                            <input type="text" required class="form-input" name="name" id="alpha-only-input2" placeholder="Your Name *" />
                             
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
                            <input type="text" required class="form-input" name="company" id="alpha-only-input3" placeholder="Your Company Name *" />
                             
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
                            <input type="text" required class="form-input" name="map" oninput="validateLinkInput(this)" placeholder=" Your Location Google Map Link *" />
                        </div>
                        <div class="form-group">
                            <input type="email" required class="form-input"
                            name="email" id="name" placeholder="Enter Your Email *" />
                             
                        </div>
                        <div class="form-group">
                            <textarea type="text" required class="form-input" name="address" id="name" placeholder="Your Full Address *" ></textarea>
                            
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="website" oninput="validateLinkInput(this)" placeholder="Your Website Link " />
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-input" name="facebook" id="name" placeholder="Your Facebook Username" />
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-input" name="twitter" id="name" placeholder="Your Twitter Username" />
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-input" name="instagram" id="email" placeholder="Your Instagram Username" />
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-input" name="youtube" id="email" placeholder="Your Youtube Username" />
                        </div>
                        <div class="form-group">
                            <input type="text" oninput="validateLinkInput(this)" class="form-input" name="pinterest" id="email" placeholder="Your Pintterest Link" />
                        </div>
                        <div class="form-group">
                            <input type="text" oninput="validateLinkInput(this)" required class="form-input" name="linked" id="email" placeholder="Your LinkedIn Link *" />
                             
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-input" name="telegram" id="email" placeholder="Your Telegram Username" />
                        </div>
                        <div class="form-input" style="background-color:white;">
                            <label for="photo">Upload Your photo 3.5 x 4.5 cm</label>
                            <input type="file" required name="image1" placeholder="Upload Your Photo" class="" multiple id="logo" />
                             <span class="rq">*Required.</span>
                        </div>
                        <br>
                    
                         <div class="form-input" style="background-color:white;">
                            <label for="photo">Upload Your Company Logo 3.5 x 4.5 cm</label>
                            <input type="file" required name="image2" placeholder="Upload Your Company Logo" class="" multiple id="logo" />
                             <span class="rq">*Required.</span>
                        </div>
                        <br>
                        <br>
                   
                        
                            <input type="submit" name="upload" id="submit" class="btn1" value="Save Details" />
                        
                    </form>
                    <br>
                    <br>

                </div>
                
     </div>
     
 



    </div>



    </div>
        
  

    </center>
       <div class="footer">
 
  
 
     <h3>Copyright 2023 MYND IT SOLUTIONS all rights reserved
  </div>
    
  
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