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
                <li ><a href="http://localhost/kaesa/login/?p=pP10001">Coach Login</a></li>
                <li ><a href="http://localhost/kaesa/login/?p=pP10002">Player Login</a></li>
                <li ><a href="http://localhost/kaesa/login/a-module/">ADMIN</a></li>
            </ul>
        </nav>

    </div>
</div>
<!-- Header -->
<div id='page'>
    <div id='marketing' class='container'>


        <?PHP
        error_reporting(0);
        ini_set("display_errors","on");

        $LoginUserToken = $_GET['p'];
        $ErrorMessage = $_GET['Message'];

        switch($ErrorMessage){
            case "HU879oisdnfsdnkjNKJDSNCDnkjndKJNkjnkNJbiujkkbJKbkBkbJkkIKBJHUgiujhg7yu87ygyuGygTDERDredyTGyuVyvyfTuvbYTfftVtftf6757ftYCYct";
                $_LoginUnsuccessful = 'Login Not Successful, Try Again.';
                break;
        }
        switch($LoginUserToken){
            case "";
                //header('location:index.php');
                header('location:http://localhost/kaesa/');
                break;


            case "newevent";


                echo"	
		<!-- Main -->
		

			<!-- Extra -->
			<p><center><b>event </b></center></p>
      
      
		<div id='card' class='container'>
        <h1><a href=''> <center>add a match </a> <center></h1><hr>
        <div id='login' width='40%' align='center'>   
          
          <form action='assets/API/events.php' method='post' enctype='multipart/form-data'>
           <div class='field-wrap'>
			<label > <font color='#FF0000'> $_LoginUnsuccessful </font><br>
            <label>
             teams <span class='req'>*</span><br>
            </label>
            <input type='text'required autocomplete='on' name='_teams'  maxlength='40'/>
          </div>
          
            <div class='field-wrap' id='form-row show-inputbtns'>
			<label > <font color='#FF0000'> $_LoginUnsuccessful </font><br>
            <label>
              game date <span class='req'>*</span><br>
            </label>
            <!--<input type='text'required autocomplete='off' name='_game_date' size='40' maxlength='40'/-->
             <input type=\"date\" data-date-inline-picker=\"false\" data-date-open-on-focus=\"true\" name='_game_date'/>
          </div>
          
          <div class='field-wrap'>
            <label>
              time<span class='req'>*</span><br>
            </label>
            <input type=\"time\" size='40' name='game_time' maxlength='40'/>
          
          </div>
           <div class='field-wrap'>
            <label>
             venue<span class='req'>*</span><br>
            </label>
            <input type='text'required autocomplete='on' size='40' name='_venue' maxlength='40'/>
          </div>
          
          
          
          <button class='button button-block'/>add event</button>
          
          </form>

        </div>
		</div><BR><BR>
		
		
		";

                break;



            default:
                header('location:http://localhost/kaesa/');

        }

        ?>
        <?php
        $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if(strpos($url, "register=success") == true){
            echo "the player has been registered succefully";
            exit();
        }elseif (strpos($url, "register=failed") == true) {
            echo "there was an error the player has not register. try again";
            exit();
        } elseif (strpos($url, "addevent=success") == true) {
            echo "the match was added Successfully";
            exit();
        }elseif (strpos($url, "addevent=failed") == true) {
            echo "there was an error adding the event try again";
            exit();
        }elseif (strpos($url, "coach=success") == true) {
            echo "the coach is registered Successfully";
            exit();
        }elseif (strpos($url, "coach=failed") == true) {
            echo "there was an error in registration try again";
            exit();
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