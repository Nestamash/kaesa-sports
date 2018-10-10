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
					<nav id="nav">
                        <ul>
                          <!--  <li class='active'><a href=''><img src='http://localhost/kaesa/login/assets/API/uploads/<?php //echo"$_TopCoachProfilePicName";?>' id="p-pic"  alt='<?php //echo"$_CoachFName ";?>' title='<?php //echo"$_CoachFName ";?>'></a></li>
                            <li class='active'><a href=''>HELLO <?php //echo"$_CoachFName ";?></a></li>-->
                            <li class="active"><a href='#'>NEW POST </a></li>
                            <li ><a href="http://localhost/kaesa/login/?p=newevent">create event</a></li>
                            <li ><a href="http://localhost/kaesa/login/coach_players.php">players</a></li>
                            <li><a href='http://localhost/kaesa/login/my_money.php'>my money</a></li>


                            <li><a href='http://localhost/kaesa/posts/assets/API/logout.coach.inc.php'>LOGOUT</a></li>
                        </ul>
					</nav>

			</div>
		</div>
	<!-- Header -->
		<div id='page'>
		<div id='marketing' class='container'>
<?PHP

require ('assets/API/core.inc.php');

if (isset ($_SESSION['username']) && !empty ($_SESSION['username'])){

		$_pu = $_SESSION['username'];
		}
else {
		header('location:http://localhost/kaesa/login/?p=pP10001');
		die();
}

$LoginUserToken = $_GET['RTYHbiugttrdRFGHvytrCRTYHJbuyTRTY'];
$_si = $_GET['ccTCYvvtrDTVbuytcrRTYV'];

switch($LoginUserToken){
			case "";
				//header('location:index.php');
				header('location:http://localhost/kaesa/');
			break;

			case "DRTDCvhgbbyfcrGUbCTYvb";
				//Coach Login and  Registration Form

?>

	<!-- Main -->
		

			<!-- Extra -->
			<p><center><b>THE COACH </b></center></p>
      
      
		<div id='card' class='container'>
        <h1><a href=''> <center>POST UPLOAD </a> <center></h1><hr>
        <div id='login' width='40%' align='center'>   
          
          <form action='assets/API/AddNewPost.php' method='post' enctype='multipart/form-data'>
          
  
            <input type='hidden' required autocomplete='off' name='coach_username' readonly value='<?php echo"$_pu";?>' size='40' maxlength='40'/>
		  
            <input type='hidden' required autocomplete='off' name='sport_id' readonly value='<?php echo"$_si";?>' size='40' maxlength='40'/>
          
          <div class='field-wrap'>
            <label>
              Post Title<span class='req'>*</span><br>
            </label>
            <input type='text' required autocomplete='off' size='40' name='post_title' maxlength='35'/>
          </div>
		  
		  <div class='field-wrap'>
            <label>
              Upload a Photo<span class='req'>*</span><br>
            </label>
            <input type='file' size='40' required name='post_image' accept='image/*' /><br><br>
          </div>
		  
		  <div class='field-wrap'>
            <textarea id='post-textarea' name='post_content' required rows='6' placeholder="Write your post here... "></textarea>
          </div>
          
          <button class='button button-block' type='submit' />PUBLISH</button>
		  <a href='http://localhost/kaesa/posts/assets/API/logout.coach.inc.php'><button class='button button-block' />LOGOUT</button></a>
          
          </form>

        </div>
		</div><BR><BR>

	<!-- /Main -->";
<?php
			break;
			
			
			default:
				header('location:http://localhost/kaesa/');
				
			}
?>
	</div>
	</div>
	 

	

	<!-- Copyright -->
		<div id="copyright" class="container"><br>
			SPORTS NOTICEBOARD - EDWIN KAESA - ALL RIGHTS RESERVED &COPY; 2016
		</div>


	</body>
</html>