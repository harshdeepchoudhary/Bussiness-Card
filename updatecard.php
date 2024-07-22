

<?php
$page_title = "Update Card";
require_once ('includes/header.php');
require_once ('includes/database.php');


	?>

  <div class="container wrapper">
        <ul class="breadcrumb">
            <li><a href="useraccount.php">Home</a></li>
        
        </ul>

            <center>
    <div class="container" style="padding:10%">
       
          
    
        
        <div class="row">
           
        
        
 <form action="https://presentmynd.online/businesscard/updatecarddetails.php" method="GET"  enctype="multipart/form-data">
  <div class="form-group">
      
    <label for="exampleInputEmail1">Enter Your Whatsapp Number to Update IDCard Details</label>
    <input name="id" type="Number" required  min="0" id="mobileNumber" class="form-control" aria-describedby="emailHelp" placeholder="Whtaspp No :8297698xxx">
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
  
<center>  <button type="submit" name="upload" class="btn btn-primary">Submit</button></center>
</form>
 </div>
   </div>
  </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
<?php

include ('includes/footer.php');
?>