<?php
//start session
@session_start();


//check to see if a user if logged in
$login = '';
$name = '';
$role = 0;

if (isset($_SESSION['login'])){
	$login = $_SESSION['login'];
}

if (isset($_SESSION['name'])) {
	$name = $_SESSION['name'];
}

if (isset($_SESSION['role'])){
	$role = $_SESSION['role'];
}

if (isset($_SESSION['id'])) {
	$session_id = $_SESSION['id'];
}

?>
<!DOCTYPE html>
<html>
<head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <link rel="icon" type="image/png" href="./img/myndlogo.png">
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $page_title; ?></title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/main.css"/>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<script
			src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
			integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		></script>

</head>
<body>
	

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="#" class=" navbar-brand"><i class="fa fa-clock-o fa-lg"></i> Bussiness Digital IDCard</a>
		</div>
		<div class="navbar-right">
			<div id="navbar" class="navbar-collapse collapse">
				<?php
				if ($role == 1) : ?>
					<ul class="nav navbar-nav">
						<li><a href="operation.php" class="text-capitalize">Welcome, <?php echo $name; ?>!</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle navbar-brand" data-toggle="dropdown" role="button" aria-expanded="false"> Navigation <i class="fa fa-caret-down"></i></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="operation.php">HOME</a></li>
							
								<li><a href="logout.php">LOGOUT</a></li>
							</ul>
						</li>
					</ul>
				<?php
				endif;
				if ($role == 2) : ?>
					<ul class="nav navbar-nav">
						<li><a href="operation.php" class="text-capitalize">Welcome, <?php print_r($name); ?>!</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle navbar-brand" data-toggle="dropdown" role="button" aria-expanded="false"> Menu<i class="fa fa-caret-down"></i></a>
							<ul class="dropdown-menu" role="menu">
							    	<li><a href="useraccount.php">Profile</a></li>
								<li><a href="operation.php">Home</a></li>
									<li><a href="registration.php">New Admin Registration</a></li>
									<li><a href="index.php" target="blank">Student Registration</a></li>
									<li><a href="getid.php" target="blank">Generate IDCard</a></li>
								
						
							
								<li><a href="logout.php">LOGOUT</a></li>
							</ul>
						</li>
					</ul>
				<?php
				endif;
				if(empty($login)) : ?>
					<form class="navbar-form navbar-right" role="form" action="login.php" method="post">
						<div class="form-group">
							<input type="text" class="form-control" name="username" placeholder="Username" maxlength="15" required>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password" placeholder="Password" maxlength="20" required>
						</div>
						<button type="submit" class="btn btn-success">SIGN IN</button>
					</form>
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="admin.php" class="dropdown-toggle navbar-brand" data-toggle="dropdown" role="button" aria-expanded="false"> Navigation <i class="fa fa-caret-down"></i></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="admin.php">HOME</a></li>
								<li><a href="logout.php">LOGOUT</a></li>

							</ul>
						</li>
					</ul>
				<?php endif; ?>

			</div>
		</div><!--/.navbar-right -->
	</div>
</nav>