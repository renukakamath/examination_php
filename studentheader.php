
<?php include 'connection.php' ?>
<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="student_viewsubject.php"> view subject</a>
<a href="student_viewteacher.php">view teacher</a>
<a href="student_viewexam.php">view exam</a>
<a href="student_attendexam.php">attend exam</a>
<a href="student_viewquestion.php">view question</a>
<a href="public_login.php">logout</a> -->
 <!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>examination</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- LOADER -->
	
	<!-- Start header -->
<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html">
					<img src="images/logo-hosting.png" alt="" />
				</a>
				
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="student_home.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="student_viewsubject.php">view subject</a></li>
						
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">view </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
							<ul class="nav-item">
								<li><a class="dropdown-item" href="student_viewteacher.php">view teacher</a></li>
								<li><a class="dropdown-item" href="student_viewexam.php">view exam</a></li>
								
								
							</ul>
							</div>
						</li>
						
						
						<li class="nav-item"><a class="nav-link" href="public_login.php">logout</a></li>
					</ul>
					
				</div>
			</div>
		</nav>
	</header>
