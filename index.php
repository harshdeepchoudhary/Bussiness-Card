<?php
$page_title = "Login";
$login_status = "";

/**
 * Description:
 * check login status:
 * 1 -- last login attempt success
 * 2 -- last login attempt failed.
 * 3 -- user just registered. Logged in automatically.
 * other -- new login attempt
 *
 */

require_once('includes/header.php');
?>

    <div class="container wrapper">
        <ul class="breadcrumb">
            <li><a href="admin.php">Home</a></li>
            <li class="active">Log In</li>
        </ul>
        <div class="col-xs-6 col-xs-offset-2">
            <?php
            if( isset( $_GET['ls'] ) ) {
                $login_status = $_GET['ls'];


                if ($login_status == 1) {
                    echo "<p class='lead'>You are logged in as <span class='text-success text-uppercase'>", $_SESSION['login'], "</span></p>";
                    echo "<a class='btn btn-danger' href='logout.php'>LOG OUT</a><br>";
                    header( "Refresh:3; url=presentation.php", true, 303);
                } elseif ($login_status == 2) {
                    echo "<h1>Login</h1>";
                    echo "<p class='lead text-danger'>Incorrect user name/password combination.</p>";
                } elseif ($login_status == 3) {
                    echo "<h1>Login</h1>";
                    echo "<p class='lead text-success'>Thank you. Your account has been created.</p>";
                    echo "<a class='btn btn-danger' href='logout.php'>LOG OUT</a><br>";
                    header( "Refresh:3; url=useraccount.php", true, 303);
                }
            }else {
                echo "<p class='lead'>You are not logged in. Please login <a href='registration.php'>Click Here</a> </p>";
            }

            if ( $login_status != 1 && $login_status != 3 ) { ?>
                <form class="form-horizontal" role="form" action="userlogin.php" method="post">
                    <div class="form-group">
                        <label for="newUserName" class="col-sm-2 control-label" >Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="newUserName" onkeypress="onlyLetter(this)"  name="username" placeholder="Username"  maxlength="15" required>
                        </div>
                    </div>
                      <script>
         function onlyLetter(input){
    $(input).keypress(function(ev) {
   var keyCode = window.event ? ev.keyCode : ev.which;
  //  code

    });
}
                            </script>
                    <div class="form-group">
                        <label for="newPassword" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="newPassword" name="password" maxlength="20" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success">SIGN IN</button>
                            <button type="" class="btn btn-primary">SIGN UP</button>
                        </div>
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
<?php
include ('includes/footer.php');
?>