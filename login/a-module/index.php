<!DOCTYPE HTML>
<?php

include ('assets/include/config.inc/config.php');

?>

<html>
	<head>
		<title>Sports NoticeBoard</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<link rel="shortcut icon" href="images/Football_Ball.png" type="image/x-icon">
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700italic,400,300,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<!--script src="forms/forms.js"></script-->
		<noscript>
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<!--link rel="stylesheet" href="forms/form.css" /-->
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		
	</head>
	<body>

	<!-- Header -->
		<div id="header">
			<div class="container">
					
				<!-- Logo -->
					<div id="logo">
						<h1><a href="http://localhost/kaesa/">The NoticeBoard</a></h1>
					</div>
				
				<!-- Nav -->
					<nav id="nav" style="background-color: green">
						<ul>
							<li><a href="http://localhost/kaesa/home.php?login=success">HOME</a></li>
							<li><a href="http://localhost/kaesa/sports.php">Our Sports</a></li>
                            <li ><a href="http://localhost/kaesa/login/a-module/events.php">Events</a></li>
							<li ><a href="http://localhost/kaesa/login/?p=pP10001">Coach Login</a></li>
							<li ><a href="http://localhost/kaesa/login/?p=pP10002">Player Login</a></li>
                            <li class="active"><a href="#">Admin</a></li>
						</ul>
					</nav>

			</div>
		</div>
	<!-- Header -->
		<div id='page'>
		<div id='marketing' class='container'>
<?PHP
error_reporting(0);
ini_set("display_errors","off");

$ErrorMessage = $_GET['Message'];

switch($ErrorMessage){
			case "HU879oisdnfsdnkjNKJDSNCDnkjndKJNkjnkNJbiujkkbJKbkBkbJkkIKBJHUgiujhg7yu87ygyuGygTDERDredyTGyuVyvyfTuvbYTfftVtftf6757ftYCYct";
			$_LoginUnsuccessful = 'Login Not Successful, Try Again.';
			break;
}
			echo"
				
	<!-- Main -->
		

			<!-- Extra -->
			<p><center><b>THE ADMIN </b></center></p>
      
      
		<div id='card' class='container'>
        <h1><a href=''> <center>ADMIN LOGIN </a> <center></h1><hr>
        <div id='login' width='40%' align='center'>   
          
          <form action='assets/API/AdminLogin.php' method='post'>
          
            <div class='field-wrap'>
			<label > <font color='#FF0000'> $_LoginUnsuccessful </font><br>
            <label>
              Admin Email Address <span class='req'>*</span><br>
            </label>
            <input type='email'required autocomplete='on' name='admin_username' size='40' maxlength='40'/>
          </div>
          
          <div class='field-wrap'>
            <label>
              Password<span class='req'>*</span><br>
            </label>
            <input type='password'required autocomplete='on' size='40' name='admin_password' maxlength='40'/>
          </div>
          
          <button class='button button-block'/>LOG IN</button>
          
          </form>

        </div>
		</div><BR><BR>
		</div>
	<!-- /Main -->";

			/*break;
			
			default:
				header('location:http://localhost/kaesa/');
				
			}*/

?>
	</div>
	</div>
	 

	

	<!-- Copyright -->
		<div id="copyright" class="container"><br>
			SPORTS NOTICEBOARD - EDWIN KAESA - ALL RIGHTS RESERVED &COPY; 2016
		</div>


	</body>
</html>