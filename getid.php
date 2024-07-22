<!doctype html>
<html lang="en">
  <head>
         <link rel="icon" type="image/png" href="./img/myndlogo.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
<style>
   body{
            background-image: url(baground.png);
            background-size: cover;
            height: 100vh;
        }
        img{
            width: 50%;
  height: auto;
        }
.container-fluid{

    
   display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
    
            height: 100vh;
}
h1{
    
color: #22376F;

font-family: Poppins;
font-size: 50.315px;
font-style: normal;
font-weight: 400;

    z-index: 3;
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
  .footer{
    
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
   
</style>
    <title>Mynd it Solutions</title>
  </head>
  <body>
 <div class="container-fluid" >
     <div class="row">
         <div class="col-12">
            
 <form action="empqr.php" method="GET"  enctype="multipart/form-data">
  <div class="form-group">
      <h1>IDCard Generater</h1>
    <label for="exampleInputEmail1">Enter Your Whatsapp Number to Get Your Digital Card</label>
    <input name="whatsapp" type="Number" required  min="0" id="mobileNumber" class="form-control" aria-describedby="emailHelp" placeholder="Whtaspp No :8297698xxx">
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
   
<br>
  
<center> 
     <button type="submit" class="btn1" name="hbsdkjsahdknsadajksndkjsandjsafcusancnsauhttps://presentmynd.online/businesscard/empqr.php?whatsapp=8007266726&hbsdkjsahdknsadajksndkjsandjsafcusancnsau=" class="btn btn-primary">Submit</button></center>
</form>
 </div>

   </div>
   
  </div>
 
  <div class="footer">
  
  
 
     <h3>Copyright 2023 MYND IT SOLUTIONS all rights reserved
  </div>
  
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>