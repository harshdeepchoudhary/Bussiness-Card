<?php



require_once 'includes/database.php';

$username = '';
$password = '';
$login_status = 2;

if ( isset($_POST['username']) )
    $username = trim($_POST['username']);
if ( isset($_POST['password']) )
    $password = trim($_POST['password']);

//select statement
$query_str = "SELECT * FROM admin WHERE username= '" . $username . "' AND password= '" . $password . "'" ;
$qr_str = "SELECT * FROM qr WHERE id= '" . $id . "'";



//execute the query
$result = $conn->query($query_str);



  if (!$result) 
  {
    $errno = $conn->errno;
    $errmsg = $conn->error;
    echo "You Already Resigtered :Contact HR Depatment for Any Queries Related to This Employee ID: $errmsg<br/>\n";
    $conn->close();
    exit;
} 
    // Check if credentials match
    elseif ($username === $username && $password === $password) {
        // Redirect to admin dashboard or perform actions for successful login
        header("Location: index.html");
        exit();
    } else {
        // Invalid credentials
        echo "Invalid username or password. Please try again.";
    }

?>
