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
        <link href="boots3/css/bootstrap.min.css" rel="stylesheet">
        <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
        <script src="boots3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="sweetalert/dist/sweetalert.css">
        <script src="sweetalert/dist/sweetalert.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#flash-msg").delay(4000).fadeOut("slow");
            });

        </script>
        <script >
            function JSalert(){
                alert("Congrats!", ", Your account is created!", "success");
            }
        </script>
		<!--script src="forms/forms.js"></script-->
		<noscript>
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<!--link rel="stylesheet" href="forms/form.css" /-->
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->

        <style>
            #cardi{

                border-right: 3px solid #009688;
                width: 275px;
                height: auto;




            }
        </style>
        <style>
            textarea {

                padding: 12px 20px;
                box-sizing: border-box;

                border-radius: 4px;
                background-color: #f8f8f8;
                font-size: 16px;
                resize: none;
                border:inset 2px #009688;

            }
        </style>
		
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
					<!--<nav id="nav" style="background-color:green";>
						<ul>
							<li><a href="http://localhost/kaesa">HOME</a></li>
							<li><a href="http://localhost/kaesa/#page">Our Sports</a></li>
                            <li class="active"><a href="#">Coach login</a></li>
							<li class="active" ><a href="http://localhost/kaesa/login/?p=pP10002">Player Login</a></li>
							<li ><a href="http://localhost/kaesa/login/a-module/">ADMIN</a></li>
						</ul>
					</nav>-->

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
    case "pP100060";
        //Coach Login and  Registration Form


        echo"
				
	<!-- Main -->
	
	<nav id=\"nav\" style=\"background-color:green\";>
            <ul>
                <li><a href=\"http://localhost/kaesa/home.php?login=success\">HOME</a></li>
                <li class='active'><a href=\"http://localhost/kaesa/sports.php\">Our Sports</a></li>
                <li ><a href=\"http://localhost/kaesa/login/a-module/events.php\">Events</a></li>
                <li ><a href=\"http://localhost/kaesa/login/?p=pP10001\">Coach login</a></li>
                <li ><a href=\"http://localhost/kaesa/login/?p=pP10002\">Player Login</a></li>
                <li ><a href=\"http://localhost/kaesa/login/a-module/\">ADMIN</a></li>
            </ul>
        </nav>
        
        <div id=\"main\" class=\"container\">
        <div class=\"row\">
            <div class=\"6u\">
                <section>
                    <header>
                        <h2>Chelsea news:</h2>
                        <span class=\"byline\"> Eden Hazard needs to improve one thing to be equal with Messi and Ronaldo</span>
                    </header>
                    <p> CHELSEA ace Eden Hazard has the ability to match Lionel Messi and Cristiano Ronaldo,
                     but lets himself drift in and out of games too regularly. </p>
                    <p>
                       That’s the view of former Premier League manager and current football pundit Graeme Souness.

Hazard has stayed at Chelsea throughout the summer despite interest from Real Madrid.

Had the Belgian made the move to the Spanish capital, it would have been as a replacement for Ronaldo with the Portugal star joining Juventus last month.

Hazard is yet to start for Chelsea this season, but could make his first full appearance of the campaign at Newcastle today (4pm).</p>
<p> if you are interested in this game please click <a href='http://localhost/kaesa/login/?p=pP10002'> here</a> to register as a player</p>
               
                <!--    <a href=\"#\" class=\"button\">More Details</a>-->
                </section>
            </div><br>
            <section class=\"sidebar\" style='width: 400px'>
                    <header>
                        <h2>activities</h2>
                    </header>
                    <ul class=\"style2\">
                        <li>
                            <a href=\"#\"><img src=\"images/pics16.jpg\" alt=\"\" width='300px'></a>
                          <!--  <p>Olympic Rio Venues. </p>-->
                        </li>
            <div class=\"3u\">
            <!--    <section class=\"sidebar\">
                    <header>
                        <h2>Recent Posts</h2>
                    </header>
                    <ul class=\"style2\">
                        <li>
                            <a href=\"#\"><img src=\"images/pics07.jpg\" alt=\"\"></a>
                            <p>Olympic Rio Venues. </p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics08.jpg\" alt=\"\"></a>
                            <p>Wrestling is underway ext.</p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics09.jpg\" alt=\"\"></a>
                            <p>New planning and East Africa Games coming to JKUAT .</p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics10.jpg\" alt=\"\"></a>
                            <p>NExt venues for the games will be communicated.</p>
                        </li>
                    </ul>
                </section>
            </div>
            <div class=\"3u\">
                <section class=\"sidebar\">
                    <header>
                        <h2>Latest News Articles</h2>
                    </header>
                   <ul class=\"style1\">
                        <li class='active'><a href=\"http://localhost/kaesa/login/?p=pP100087\">CHELSEA NEWS</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100086\">Cristiano Ronaldo has won the Ballon d'Or five times</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100085\">real madrid player </a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100084\">basket ball news</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100083\">kenya swimming champion</a></li>
                    </ul>
                </section>-->
        
        
       
        ";
        break;
    case "pP100061";
        //Coach Login and  Registration Form


        echo"
				
	<!-- Main -->
	
	<nav id=\"nav\" style=\"background-color:green; position: fixed; height: 80px; \";>
            <ul>
                <li><a href=\"http://localhost/kaesa/home.php?login=success\">HOME</a></li>
                <li class='active'><a href=\"http://localhost/kaesa/sports.php\">Our Sports</a></li>
                <li ><a href=\"http://localhost/kaesa/login/a-module/events.php\">Events</a></li>
                <li ><a href=\"http://localhost/kaesa/login/?p=pP10001\">Coach login</a></li>
                <li ><a href=\"http://localhost/kaesa/login/?p=pP10002\">Player Login</a></li>
                <li ><a href=\"http://localhost/kaesa/login/a-module/\">ADMIN</a></li>
            </ul>
        </nav>
        <div id=\"page\">

    <!-- Extra -->
    <div id=\"marketing\" class=\"container\">
        <div class=\"row\">
            <div class=\"3u\">
                <section id=\"cardi\">
                    <header>
                        <h2>swimming</h2>
                    </header>
                    <p class=\"subtitle\">A Forum for the football players to share information and ideas.A Forum for the football players to share information and ideas. </p>
                    <p><a href=\"#\"><img src=\"images/pics13.jpg\" alt=\"\" height=\"165px\" width=\"250px\" ></a></p><center>
                        <a href=\"http://localhost/kaesa/login/?p=pP100060\" class=\"button\">More</a></center>
                </section>
            </div>
            <div class=\"3u\">
                <section id=\"cardi\">
                    <header>
                        <h2>net Ball</h2>
                    </header>
                    <p class=\"subtitle\">A Forum for the football players to share information and ideas. A Forum for the football players to share information and ideas. </p>
                    <p><a href=\"#\"><img src=\"images/pics14.jpg\" alt=\"\" height=\"165px\" width=\"250px\"></a></p><center>
                        <a href=\"http://localhost/kaesa/login/?p=pP100064\" class=\"button\">More</a></center>
                </section>
            </div>
            <div class=\"3u\">
                <section id=\"cardi\">
                    <header>
                        <h2>table tennis</h2>
                    </header>
                    <p class=\"subtitle\">A Forum for the Skating players to share information and ideas. A Forum for the football players to share information and ideas.</p>
                    <p><a href=\"#\"><img src=\"images/pics15.jpg\" alt=\"\" height=\"165px\" width=\"250px\"></a></p><center>
                        <a href=\"http://localhost/kaesa/login/?p=pP100065\" class=\"button\">More</a></center>
                </section>
            </div>
            <div class=\"3u\">
                <section id='cardi' >
                    <header>
                        <h2>long tennis</h2>
                    </header>
                    <p class=\"subtitle\">A Forum for the our players and coaches to share information and ideas.A Forum for the football players to share information.</p><center>
                        <p><a href=\"#\"><img src=\"images/pics16.jpg\" alt=\"\" height=\"165px\" width=\"250px\"></a></p>
                        <a href=\"http://localhost/kaesa/login/?p=pP100066\" class=\"button\">More</a></center>
                </section>
            </div>
        </div>
    </div>
        
        ";
        break;
    case "pP100063";
        //Coach Login and  Registration Form


        echo"
				
	<!-- Main -->
	
	<nav id=\"nav\" style=\"background-color:green\";>
            <ul>
                <li><a href=\"http://localhost/kaesa/home.php?login=success\">HOME</a></li>
                <li class='active'><a href=\"http://localhost/kaesa/sports.php\">Our Sports</a></li>
                <li ><a href=\"http://localhost/kaesa/login/a-module/events.php\">Events</a></li>
                <li ><a href=\"http://localhost/kaesa/login/?p=pP10001\">Coach login</a></li>
                <li ><a href=\"http://localhost/kaesa/login/?p=pP10002\">Player Login</a></li>
                <li ><a href=\"http://localhost/kaesa/login/a-module/\">ADMIN</a></li>
            </ul>
        </nav>
        
        <div id=\"main\" class=\"container\">
        <div class=\"row\">
            <div class=\"6u\">
                <section>
                    <header>
                        <h2>Chelsea news:</h2>
                        <span class=\"byline\"> Eden Hazard needs to improve one thing to be equal with Messi and Ronaldo</span>
                    </header>
                    <p> CHELSEA ace Eden Hazard has the ability to match Lionel Messi and Cristiano Ronaldo,
                     but lets himself drift in and out of games too regularly. </p>
                    <p>
                       That’s the view of former Premier League manager and current football pundit Graeme Souness.

Hazard has stayed at Chelsea throughout the summer despite interest from Real Madrid.

Had the Belgian made the move to the Spanish capital, it would have been as a replacement for Ronaldo with the Portugal star joining Juventus last month.

Hazard is yet to start for Chelsea this season, but could make his first full appearance of the campaign at Newcastle today (4pm).</p>
<p> if you are interested in this game please click <a href='http://localhost/kaesa/login/?p=pP10002'> here</a> to register as a player</p>
               
                <!--    <a href=\"#\" class=\"button\">More Details</a>-->
                </section>
            </div><br>
            <section class=\"sidebar\" style='width: 400px'>
                    <header>
                        <h2>activities</h2>
                    </header>
                    <ul class=\"style2\">
                        <li>
                            <a href=\"#\"><img src=\"images/pics16.jpg\" alt=\"\" width='300px'></a>
                          <!--  <p>Olympic Rio Venues. </p>-->
                        </li>
            <div class=\"3u\">
            <!--    <section class=\"sidebar\">
                    <header>
                        <h2>Recent Posts</h2>
                    </header>
                    <ul class=\"style2\">
                        <li>
                            <a href=\"#\"><img src=\"images/pics07.jpg\" alt=\"\"></a>
                            <p>Olympic Rio Venues. </p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics08.jpg\" alt=\"\"></a>
                            <p>Wrestling is underway ext.</p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics09.jpg\" alt=\"\"></a>
                            <p>New planning and East Africa Games coming to JKUAT .</p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics10.jpg\" alt=\"\"></a>
                            <p>NExt venues for the games will be communicated.</p>
                        </li>
                    </ul>
                </section>
            </div>
            <div class=\"3u\">
                <section class=\"sidebar\">
                    <header>
                        <h2>Latest News Articles</h2>
                    </header>
                   <ul class=\"style1\">
                        <li class='active'><a href=\"http://localhost/kaesa/login/?p=pP100087\">CHELSEA NEWS</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100086\">Cristiano Ronaldo has won the Ballon d'Or five times</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100085\">real madrid player </a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100084\">basket ball news</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100083\">kenya swimming champion</a></li>
                    </ul>
                </section>-->
        
        ";
        break;
    case "pP100062";
        //Coach Login and  Registration Form


        echo"
				
	<!-- Main -->
	
	<nav id=\"nav\" style=\"background-color:green\";>
            <ul>
                <li><a href=\"http://localhost/kaesa/home.php?login=success\">HOME</a></li>
                <li class='active'><a href=\"http://localhost/kaesa/sports.php\">Our Sports</a></li>
                <li ><a href=\"http://localhost/kaesa/login/a-module/events.php\">Events</a></li>
                <li ><a href=\"http://localhost/kaesa/login/?p=pP10001\">Coach login</a></li>
                <li ><a href=\"http://localhost/kaesa/login/?p=pP10002\">Player Login</a></li>
                <li ><a href=\"http://localhost/kaesa/login/a-module/\">ADMIN</a></li>
            </ul>
        </nav>
        
        <div id=\"main\" class=\"container\">
        <div class=\"row\">
            <div class=\"6u\">
                <section>
                    <header>
                        <h2>Chelsea news:</h2>
                        <span class=\"byline\"> Eden Hazard needs to improve one thing to be equal with Messi and Ronaldo</span>
                    </header>
                    <p> CHELSEA ace Eden Hazard has the ability to match Lionel Messi and Cristiano Ronaldo,
                     but lets himself drift in and out of games too regularly. </p>
                    <p>
                       That’s the view of former Premier League manager and current football pundit Graeme Souness.

Hazard has stayed at Chelsea throughout the summer despite interest from Real Madrid.

Had the Belgian made the move to the Spanish capital, it would have been as a replacement for Ronaldo with the Portugal star joining Juventus last month.

Hazard is yet to start for Chelsea this season, but could make his first full appearance of the campaign at Newcastle today (4pm).</p>
<p> if you are interested in this game please click <a href='http://localhost/kaesa/login/?p=pP10002'> here</a> to register as a player</p>
               
                <!--    <a href=\"#\" class=\"button\">More Details</a>-->
                </section>
            </div><br>
            <section class=\"sidebar\" style='width: 400px'>
                    <header>
                        <h2>activities</h2>
                    </header>
                    <ul class=\"style2\">
                        <li>
                            <a href=\"#\"><img src=\"images/pics16.jpg\" alt=\"\" width='300px'></a>
                          <!--  <p>Olympic Rio Venues. </p>-->
                        </li>
            <div class=\"3u\">
            <!--    <section class=\"sidebar\">
                    <header>
                        <h2>Recent Posts</h2>
                    </header>
                    <ul class=\"style2\">
                        <li>
                            <a href=\"#\"><img src=\"images/pics07.jpg\" alt=\"\"></a>
                            <p>Olympic Rio Venues. </p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics08.jpg\" alt=\"\"></a>
                            <p>Wrestling is underway ext.</p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics09.jpg\" alt=\"\"></a>
                            <p>New planning and East Africa Games coming to JKUAT .</p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics10.jpg\" alt=\"\"></a>
                            <p>NExt venues for the games will be communicated.</p>
                        </li>
                    </ul>
                </section>
            </div>
            <div class=\"3u\">
                <section class=\"sidebar\">
                    <header>
                        <h2>Latest News Articles</h2>
                    </header>
                   <ul class=\"style1\">
                        <li class='active'><a href=\"http://localhost/kaesa/login/?p=pP100087\">CHELSEA NEWS</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100086\">Cristiano Ronaldo has won the Ballon d'Or five times</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100085\">real madrid player </a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100084\">basket ball news</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100083\">kenya swimming champion</a></li>
                    </ul>
                </section>-->
        
        ";
        break;
    case "pP100066";
        //Coach Login and  Registration Form


        echo"
				
	<!-- Main -->
	
	<nav id=\"nav\" style=\"background-color:green\";>
            <ul>
                <li><a href=\"http://localhost/kaesa/home.php?login=success\">HOME</a></li>
                <li class='active'><a href=\"http://localhost/kaesa/sports.php\">Our Sports</a></li>
                <li ><a href=\"http://localhost/kaesa/login/a-module/events.php\">Events</a></li>
                <li ><a href=\"http://localhost/kaesa/login/?p=pP10001\">Coach login</a></li>
                <li ><a href=\"http://localhost/kaesa/login/?p=pP10002\">Player Login</a></li>
                <li ><a href=\"http://localhost/kaesa/login/a-module/\">ADMIN</a></li>
            </ul>
        </nav>
        
        <div id=\"main\" class=\"container\">
        <div class=\"row\">
            <div class=\"6u\">
                <section>
                    <header>
                        <h2>Chelsea news:</h2>
                        <span class=\"byline\"> Eden Hazard needs to improve one thing to be equal with Messi and Ronaldo</span>
                    </header>
                    <p> CHELSEA ace Eden Hazard has the ability to match Lionel Messi and Cristiano Ronaldo,
                     but lets himself drift in and out of games too regularly. </p>
                    <p>
                       That’s the view of former Premier League manager and current football pundit Graeme Souness.

Hazard has stayed at Chelsea throughout the summer despite interest from Real Madrid.

Had the Belgian made the move to the Spanish capital, it would have been as a replacement for Ronaldo with the Portugal star joining Juventus last month.

Hazard is yet to start for Chelsea this season, but could make his first full appearance of the campaign at Newcastle today (4pm).</p>
<p> if you are interested in this game please click <a href='http://localhost/kaesa/login/?p=pP10002'> here</a> to register as a player</p>
               
                <!--    <a href=\"#\" class=\"button\">More Details</a>-->
                </section>
            </div><br>
            <section class=\"sidebar\" style='width: 400px'>
                    <header>
                        <h2>activities</h2>
                    </header>
                    <ul class=\"style2\">
                        <li>
                            <a href=\"#\"><img src=\"images/pics16.jpg\" alt=\"\" width='300px'></a>
                          <!--  <p>Olympic Rio Venues. </p>-->
                        </li>
            <div class=\"3u\">
            <!--    <section class=\"sidebar\">
                    <header>
                        <h2>Recent Posts</h2>
                    </header>
                    <ul class=\"style2\">
                        <li>
                            <a href=\"#\"><img src=\"images/pics07.jpg\" alt=\"\"></a>
                            <p>Olympic Rio Venues. </p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics08.jpg\" alt=\"\"></a>
                            <p>Wrestling is underway ext.</p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics09.jpg\" alt=\"\"></a>
                            <p>New planning and East Africa Games coming to JKUAT .</p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics10.jpg\" alt=\"\"></a>
                            <p>NExt venues for the games will be communicated.</p>
                        </li>
                    </ul>
                </section>
            </div>
            <div class=\"3u\">
                <section class=\"sidebar\">
                    <header>
                        <h2>Latest News Articles</h2>
                    </header>
                   <ul class=\"style1\">
                        <li class='active'><a href=\"http://localhost/kaesa/login/?p=pP100087\">CHELSEA NEWS</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100086\">Cristiano Ronaldo has won the Ballon d'Or five times</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100085\">real madrid player </a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100084\">basket ball news</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100083\">kenya swimming champion</a></li>
                    </ul>
                </section>-->
        
        ";
        break;
    case "pP100065";
        //Coach Login and  Registration Form


        echo"
				
	<!-- Main -->
	
	<nav id=\"nav\" style=\"background-color:green\";>
            <ul>
                <li><a href=\"http://localhost/kaesa/home.php?login=success\">HOME</a></li>
                <li class='active'><a href=\"http://localhost/kaesa/sports.php\">Our Sports</a></li>
                <li ><a href=\"http://localhost/kaesa/login/a-module/events.php\">Events</a></li>
                <li ><a href=\"http://localhost/kaesa/login/?p=pP10001\">Coach login</a></li>
                <li ><a href=\"http://localhost/kaesa/login/?p=pP10002\">Player Login</a></li>
                <li ><a href=\"http://localhost/kaesa/login/a-module/\">ADMIN</a></li>
            </ul>
        </nav>
        
        <div id=\"main\" class=\"container\">
        <div class=\"row\">
            <div class=\"6u\">
                <section>
                    <header>
                        <h2>Chelsea news:</h2>
                        <span class=\"byline\"> Eden Hazard needs to improve one thing to be equal with Messi and Ronaldo</span>
                    </header>
                    <p> CHELSEA ace Eden Hazard has the ability to match Lionel Messi and Cristiano Ronaldo,
                     but lets himself drift in and out of games too regularly. </p>
                    <p>
                       That’s the view of former Premier League manager and current football pundit Graeme Souness.

Hazard has stayed at Chelsea throughout the summer despite interest from Real Madrid.

Had the Belgian made the move to the Spanish capital, it would have been as a replacement for Ronaldo with the Portugal star joining Juventus last month.

Hazard is yet to start for Chelsea this season, but could make his first full appearance of the campaign at Newcastle today (4pm).</p>
<p> if you are interested in this game please click <a href='http://localhost/kaesa/login/?p=pP10002'> here</a> to register as a player</p>
               
                <!--    <a href=\"#\" class=\"button\">More Details</a>-->
                </section>
            </div><br>
            <section class=\"sidebar\" style='width: 400px'>
                    <header>
                        <h2>activities</h2>
                    </header>
                    <ul class=\"style2\">
                        <li>
                            <a href=\"#\"><img src=\"images/pics16.jpg\" alt=\"\" width='300px'></a>
                          <!--  <p>Olympic Rio Venues. </p>-->
                        </li>
            <div class=\"3u\">
            <!--    <section class=\"sidebar\">
                    <header>
                        <h2>Recent Posts</h2>
                    </header>
                    <ul class=\"style2\">
                        <li>
                            <a href=\"#\"><img src=\"images/pics07.jpg\" alt=\"\"></a>
                            <p>Olympic Rio Venues. </p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics08.jpg\" alt=\"\"></a>
                            <p>Wrestling is underway ext.</p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics09.jpg\" alt=\"\"></a>
                            <p>New planning and East Africa Games coming to JKUAT .</p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics10.jpg\" alt=\"\"></a>
                            <p>NExt venues for the games will be communicated.</p>
                        </li>
                    </ul>
                </section>
            </div>
            <div class=\"3u\">
                <section class=\"sidebar\">
                    <header>
                        <h2>Latest News Articles</h2>
                    </header>
                   <ul class=\"style1\">
                        <li class='active'><a href=\"http://localhost/kaesa/login/?p=pP100087\">CHELSEA NEWS</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100086\">Cristiano Ronaldo has won the Ballon d'Or five times</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100085\">real madrid player </a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100084\">basket ball news</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100083\">kenya swimming champion</a></li>
                    </ul>
                </section>-->
        
        ";
        break;
    case "pP100067";
        //Coach Login and  Registration Form


        echo"
				
	<!-- Main -->
	
	<nav id=\"nav\" style=\"background-color:green\";>
            <ul>
                <li><a href=\"http://localhost/kaesa/home.php?login=success\">HOME</a></li>
                <li class='active'><a href=\"http://localhost/kaesa/sports.php\">Our Sports</a></li>
                <li ><a href=\"http://localhost/kaesa/login/a-module/events.php\">Events</a></li>
                <li ><a href=\"http://localhost/kaesa/login/?p=pP10001\">Coach login</a></li>
                <li ><a href=\"http://localhost/kaesa/login/?p=pP10002\">Player Login</a></li>
                <li ><a href=\"http://localhost/kaesa/login/a-module/\">ADMIN</a></li>
            </ul>
        </nav>
        
        <div id=\"main\" class=\"container\">
        <div class=\"row\">
            <div class=\"6u\">
                <section>
                    <header>
                        <h2>Chelsea news:</h2>
                        <span class=\"byline\"> Eden Hazard needs to improve one thing to be equal with Messi and Ronaldo</span>
                    </header>
                    <p> CHELSEA ace Eden Hazard has the ability to match Lionel Messi and Cristiano Ronaldo,
                     but lets himself drift in and out of games too regularly. </p>
                    <p>
                       That’s the view of former Premier League manager and current football pundit Graeme Souness.

Hazard has stayed at Chelsea throughout the summer despite interest from Real Madrid.

Had the Belgian made the move to the Spanish capital, it would have been as a replacement for Ronaldo with the Portugal star joining Juventus last month.

Hazard is yet to start for Chelsea this season, but could make his first full appearance of the campaign at Newcastle today (4pm).</p>
<p> if you are interested in this game please click <a href='http://localhost/kaesa/login/?p=pP10002'> here</a> to register as a player</p>
               
                <!--    <a href=\"#\" class=\"button\">More Details</a>-->
                </section>
            </div><br>
            <section class=\"sidebar\" style='width: 400px'>
                    <header>
                        <h2>activities</h2>
                    </header>
                    <ul class=\"style2\">
                        <li>
                            <a href=\"#\"><img src=\"images/pics16.jpg\" alt=\"\" width='300px'></a>
                          <!--  <p>Olympic Rio Venues. </p>-->
                        </li>
            <div class=\"3u\">
            <!--    <section class=\"sidebar\">
                    <header>
                        <h2>Recent Posts</h2>
                    </header>
                    <ul class=\"style2\">
                        <li>
                            <a href=\"#\"><img src=\"images/pics07.jpg\" alt=\"\"></a>
                            <p>Olympic Rio Venues. </p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics08.jpg\" alt=\"\"></a>
                            <p>Wrestling is underway ext.</p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics09.jpg\" alt=\"\"></a>
                            <p>New planning and East Africa Games coming to JKUAT .</p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics10.jpg\" alt=\"\"></a>
                            <p>NExt venues for the games will be communicated.</p>
                        </li>
                    </ul>
                </section>
            </div>
            <div class=\"3u\">
                <section class=\"sidebar\">
                    <header>
                        <h2>Latest News Articles</h2>
                    </header>
                   <ul class=\"style1\">
                        <li class='active'><a href=\"http://localhost/kaesa/login/?p=pP100087\">CHELSEA NEWS</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100086\">Cristiano Ronaldo has won the Ballon d'Or five times</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100085\">real madrid player </a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100084\">basket ball news</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100083\">kenya swimming champion</a></li>
                    </ul>
                </section>-->
        
        ";
        break;
    case "pP100064";
        //Coach Login and  Registration Form


        echo"
				
	<!-- Main -->
	
	<nav id=\"nav\" style=\"background-color:green\";>
            <ul>
                <li><a href=\"http://localhost/kaesa/home.php?login=success\">HOME</a></li>
                <li class='active'><a href=\"http://localhost/kaesa/sports.php\">Our Sports</a></li>
                <li ><a href=\"http://localhost/kaesa/login/a-module/events.php\">Events</a></li>
                <li ><a href=\"http://localhost/kaesa/login/?p=pP10001\">Coach login</a></li>
                <li ><a href=\"http://localhost/kaesa/login/?p=pP10002\">Player Login</a></li>
                <li ><a href=\"http://localhost/kaesa/login/a-module/\">ADMIN</a></li>
            </ul>
        </nav>
        
        <div id=\"main\" class=\"container\">
        <div class=\"row\">
            <div class=\"6u\">
                <section>
                    <header>
                        <h2>Chelsea news:</h2>
                        <span class=\"byline\"> Eden Hazard needs to improve one thing to be equal with Messi and Ronaldo</span>
                    </header>
                    <p> CHELSEA ace Eden Hazard has the ability to match Lionel Messi and Cristiano Ronaldo,
                     but lets himself drift in and out of games too regularly. </p>
                    <p>
                       That’s the view of former Premier League manager and current football pundit Graeme Souness.

Hazard has stayed at Chelsea throughout the summer despite interest from Real Madrid.

Had the Belgian made the move to the Spanish capital, it would have been as a replacement for Ronaldo with the Portugal star joining Juventus last month.

Hazard is yet to start for Chelsea this season, but could make his first full appearance of the campaign at Newcastle today (4pm).</p>
<p> if you are interested in this game please click <a href='http://localhost/kaesa/login/?p=pP10002'> here</a> to register as a player</p>
               
                <!--    <a href=\"#\" class=\"button\">More Details</a>-->
                </section>
            </div><br>
            <section class=\"sidebar\" style='width: 400px'>
                    <header>
                        <h2>activities</h2>
                    </header>
                    <ul class=\"style2\">
                        <li>
                            <a href=\"#\"><img src=\"images/pics16.jpg\" alt=\"\" width='300px'></a>
                          <!--  <p>Olympic Rio Venues. </p>-->
                        </li>
            <div class=\"3u\">
            <!--    <section class=\"sidebar\">
                    <header>
                        <h2>Recent Posts</h2>
                    </header>
                    <ul class=\"style2\">
                        <li>
                            <a href=\"#\"><img src=\"images/pics07.jpg\" alt=\"\"></a>
                            <p>Olympic Rio Venues. </p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics08.jpg\" alt=\"\"></a>
                            <p>Wrestling is underway ext.</p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics09.jpg\" alt=\"\"></a>
                            <p>New planning and East Africa Games coming to JKUAT .</p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics10.jpg\" alt=\"\"></a>
                            <p>NExt venues for the games will be communicated.</p>
                        </li>
                    </ul>
                </section>
            </div>
            <div class=\"3u\">
                <section class=\"sidebar\">
                    <header>
                        <h2>Latest News Articles</h2>
                    </header>
                   <ul class=\"style1\">
                        <li class='active'><a href=\"http://localhost/kaesa/login/?p=pP100087\">CHELSEA NEWS</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100086\">Cristiano Ronaldo has won the Ballon d'Or five times</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100085\">real madrid player </a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100084\">basket ball news</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100083\">kenya swimming champion</a></li>
                    </ul>
                </section>-->
        
        ";
        break;
    case "pP100087";
        //Coach Login and  Registration Form


        echo"
				
	<!-- Main -->
	
	<nav id=\"nav\" style=\"background-color:green\";>
            <ul>
                <li><a href=\"http://localhost/kaesa/home.php?login=success\">HOME</a></li>
                <li class='active'><a href=\"http://localhost/kaesa/sports.php\">Our Sports</a></li>
                <li ><a href=\"http://localhost/kaesa/login/a-module/events.php\">Events</a></li>
                <li ><a href=\"http://localhost/kaesa/login/?p=pP10002\">Coach login</a></li>
                <li ><a href=\"http://localhost/kaesa/login/?p=pP10002\">Player Login</a></li>
                <li ><a href=\"http://localhost/kaesa/login/a-module/\">ADMIN</a></li>
            </ul>
        </nav>
        
        <div id=\"main\" class=\"container\">
        <div class=\"row\">
            <div class=\"6u\">
                <section>
                    <header>
                        <h2>Chelsea news:</h2>
                        <span class=\"byline\"> Eden Hazard needs to improve one thing to be equal with Messi and Ronaldo</span>
                    </header>
                    <p> CHELSEA ace Eden Hazard has the ability to match Lionel Messi and Cristiano Ronaldo,
                     but lets himself drift in and out of games too regularly. </p>
                    <p>
                       That’s the view of former Premier League manager and current football pundit Graeme Souness.

Hazard has stayed at Chelsea throughout the summer despite interest from Real Madrid.

Had the Belgian made the move to the Spanish capital, it would have been as a replacement for Ronaldo with the Portugal star joining Juventus last month.

Hazard is yet to start for Chelsea this season, but could make his first full appearance of the campaign at Newcastle today (4pm).</p>

                <!--    <a href=\"#\" class=\"button\">More Details</a>-->
                </section>
            </div>
            <div class=\"3u\">
                <section class=\"sidebar\">
                    <header>
                        <h2>Recent Posts</h2>
                    </header>
                    <ul class=\"style2\">
                        <li>
                            <a href=\"#\"><img src=\"images/pics07.jpg\" alt=\"\"></a>
                            <p>Olympic Rio Venues. </p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics08.jpg\" alt=\"\"></a>
                            <p>Wrestling is underway ext.</p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics09.jpg\" alt=\"\"></a>
                            <p>New planning and East Africa Games coming to JKUAT .</p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics10.jpg\" alt=\"\"></a>
                            <p>NExt venues for the games will be communicated.</p>
                        </li>
                    </ul>
                </section>
            </div>
            <div class=\"3u\">
                <section class=\"sidebar\">
                    <header>
                        <h2>Latest News Articles</h2>
                    </header>
                   <ul class=\"style1\">
                        <li class='active'><a href=\"http://localhost/kaesa/login/?p=pP100087\">CHELSEA NEWS</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100086\">
Blueseventy Swim the Week: Eleventh-Hour Eastin Overcomes Mono

</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100085\">real madrid player </a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100084\">basket ball news</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100083\">kenya swimming champion</a></li>
                    </ul>
                </section>
        
        ";
        break;
			
			case "pP10001";
				//Coach Login and  Registration Form
				
			echo"
				
	<!-- Main -->
	
	<nav id=\"nav\" style=\"background-color:green\";>
            <ul>
                <li><a href=\"http://localhost/kaesa/home.php?login=success\">HOME</a></li>
                <li><a href=\"http://localhost/kaesa/sports.php\">Our Sports</a></li>
                <li ><a href=\"http://localhost/kaesa/login/a-module/events.php\">Events</a></li>
                <li class='active'><a href=\"#\">Coach login</a></li>
                <li ><a href=\"http://localhost/kaesa/login/?p=pP10002\">Player Login</a></li>
                <li ><a href=\"http://localhost/kaesa/login/a-module/\">ADMIN</a></li>
            </ul>
        </nav>
		

			<!-- Extra -->
			<p><center><b>THE COACH </b></center></p>
      
      
		<div id='card' class='container'>
        <h1><a href=''> <center>COACH LOGIN </a> <center></h1><hr>
        <div id='login' width='40%' align='center'>   
          
          <form action='assets/API/CoachLogin.php' method='post'>
          
            <div class='field-wrap'>
			<label > <font color='#FF0000'> $_LoginUnsuccessful </font><br>
			</label>
            <label>
              Email Address <span class='req'>*</span><br>
            </label>
            <input type='email'required autocomplete='on' name='coach_username' size='40' maxlength='40'/>
          </div>
          
          <div class='field-wrap'>
            <label>
              Password<span class='req'>*</span><br>
            </label>
            <input type='password'required autocomplete='on' size='40' name='coach_password' maxlength='40'/>
          </div>
          
          <button class='button button-block'/>LOG IN</button>
          
          </form>

        </div>
		</div><BR><BR>
		<!-- create an event form -->
		";

			break;
    case "pP100083";
        //Coach Login and  Registration Form


        echo"
				
	<!-- Main -->
	
	<nav id=\"nav\" style=\"background-color:green\";>
            <ul>
                <li><a href=\"http://localhost/kaesa/home.php?login=success\">HOME</a></li>
                <li class='active'><a href=\"http://localhost/kaesa/sports.php\">Our Sports</a></li>
                <li ><a href=\"http://localhost/kaesa/login/a-module/events.php\">Events</a></li>
                <li ><a href=\"http://localhost/kaesa/login/?p=pP10001\">Coach login</a></li>
                <li ><a href=\"http://localhost/kaesa/login/?p=pP10002\">Player Login</a></li>
                <li ><a href=\"http://localhost/kaesa/login/a-module/\">ADMIN</a></li>
            </ul>
        </nav>
        
        <div id=\"main\" class=\"container\">
        <div class=\"row\">
            <div class=\"6u\">
                <section>
                    <header>
                        <h2>Cristiano Ronaldo has won the Ballon d'Or five times</h2>
                        <span class=\"byline\"> Eden Hazard needs to improve one thing to be equal with Messi and Ronaldo</span>
                    </header>
                    <p> CHELSEA ace Eden Hazard has the ability to match Lionel Messi and Cristiano Ronaldo,
                     but lets himself drift in and out of games too regularly. </p>
                    <p>
                       That’s the view of former Premier League manager and current football pundit Graeme Souness.

Hazard has stayed at Chelsea throughout the summer despite interest from Real Madrid.

Had the Belgian made the move to the Spanish capital, it would have been as a replacement for Ronaldo with the Portugal star joining Juventus last month.

Hazard is yet to start for Chelsea this season, but could make his first full appearance of the campaign at Newcastle today (4pm).</p>

                <!--    <a href=\"#\" class=\"button\">More Details</a>-->
                </section>
            </div>
            <div class=\"3u\">
                <section class=\"sidebar\">
                    <header>
                        <h2>Recent Posts</h2>
                    </header>
                    <ul class=\"style2\">
                        <li>
                            <a href=\"#\"><img src=\"images/pics07.jpg\" alt=\"\"></a>
                            <p>Olympic Rio Venues. </p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics08.jpg\" alt=\"\"></a>
                            <p>Wrestling is underway ext.</p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics09.jpg\" alt=\"\"></a>
                            <p>New planning and East Africa Games coming to JKUAT .</p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics10.jpg\" alt=\"\"></a>
                            <p>NExt venues for the games will be communicated.</p>
                        </li>
                    </ul>
                </section>
            </div>
            <div class=\"3u\">
                <section class=\"sidebar\">
                    <header>
                        <h2>Latest News Articles</h2>
                    </header>
                   <ul class=\"style1\">
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100087\">CHELSEA NEWS</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100086\">Blueseventy Swim the Week: Eleventh-Hour Eastin Overcomes Mono </a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100085\">real madrid player </a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100084\">basket ball news</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100083\">kenya swimming champion</a></li>
                    </ul>
                </section>
        
        ";
        break;
    case "pP100084";
        //Coach Login and  Registration Form


        echo"
				
	<!-- Main -->
	
	<nav id=\"nav\" style=\"background-color:green\";>
            <ul>
                <li><a href=\"http://localhost/kaesa/home.php?login=success\">HOME</a></li>
                <li class='active'><a href=\"http://localhost/kaesa/sports.php\">Our Sports</a></li>
                <li ><a href=\"http://localhost/kaesa/login/a-module/events.php\">Events</a></li>
                <li ><a href=\"http://localhost/kaesa/login/?p=pP10001\">Coach login</a></li>
                <li ><a href=\"http://localhost/kaesa/login/?p=pP10002\">Player Login</a></li>
                <li ><a href=\"http://localhost/kaesa/login/a-module/\">ADMIN</a></li>
            </ul>
        </nav>
        
        <div id=\"main\" class=\"container\">
        <div class=\"row\">
            <div class=\"6u\">
                <section>
                    <header>
                        <h2>Cristiano Ronaldo has won the Ballon d'Or five times</h2>
                        <span class=\"byline\"> Eden Hazard needs to improve one thing to be equal with Messi and Ronaldo</span>
                    </header>
                    <p> CHELSEA ace Eden Hazard has the ability to match Lionel Messi and Cristiano Ronaldo,
                     but lets himself drift in and out of games too regularly. </p>
                    <p>
                       That’s the view of former Premier League manager and current football pundit Graeme Souness.

Hazard has stayed at Chelsea throughout the summer despite interest from Real Madrid.

Had the Belgian made the move to the Spanish capital, it would have been as a replacement for Ronaldo with the Portugal star joining Juventus last month.

Hazard is yet to start for Chelsea this season, but could make his first full appearance of the campaign at Newcastle today (4pm).</p>

                <!--    <a href=\"#\" class=\"button\">More Details</a>-->
                </section>
            </div>
            <div class=\"3u\">
                <section class=\"sidebar\">
                    <header>
                        <h2>Recent Posts</h2>
                    </header>
                    <ul class=\"style2\">
                        <li>
                            <a href=\"#\"><img src=\"images/pics07.jpg\" alt=\"\"></a>
                            <p>Olympic Rio Venues. </p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics08.jpg\" alt=\"\"></a>
                            <p>Wrestling is underway ext.</p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics09.jpg\" alt=\"\"></a>
                            <p>New planning and East Africa Games coming to JKUAT .</p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics10.jpg\" alt=\"\"></a>
                            <p>NExt venues for the games will be communicated.</p>
                        </li>
                    </ul>
                </section>
            </div>
            <div class=\"3u\">
                <section class=\"sidebar\">
                    <header>
                        <h2>Latest News Articles</h2>
                    </header>
                   <ul class=\"style1\">
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100087\">CHELSEA NEWS</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100086\">Blueseventy Swim the Week: Eleventh-Hour Eastin Overcomes Mono </a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100085\">real madrid player </a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100084\">basket ball news</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100083\">kenya swimming champion</a></li>
                    </ul>
                </section>
        
        ";
        break;
    case "pP100085";
        //Coach Login and  Registration Form


        echo"
				
	<!-- Main -->
	
	<nav id=\"nav\" style=\"background-color:green\";>
            <ul>
                <li><a href=\"http://localhost/kaesa/home.php?login=success\">HOME</a></li>
                <li class='active'><a href=\"http://localhost/kaesa/sports.php\">Our Sports</a></li>
                <li ><a href=\"http://localhost/kaesa/login/a-module/events.php\">Events</a></li>
                <li ><a href=\"http://localhost/kaesa/login/?p=pP10001\">Coach login</a></li>
                <li ><a href=\"http://localhost/kaesa/login/?p=pP10002\">Player Login</a></li>
                <li ><a href=\"http://localhost/kaesa/login/a-module/\">ADMIN</a></li>
            </ul>
        </nav>
        
        <div id=\"main\" class=\"container\">
        <div class=\"row\">
            <div class=\"6u\">
                <section>
                    <header>
                        <h2>
Zheng Peifeng, at the first attempt</h2>
                        <span class=\"byline\"> Zheng Peifeng, at the first attempt</span>
                    </header>
                    <p> 

Competing in his first ever ITTF World Tour final of any description, China’s Zheng Peifeng won the Men’s Singles title at the Seamaster 2018 ITTF World Tour Czech Open in Olomouc on Sunday 26th August.

In the final, he beat Portugal’s Marcos Freitas, the no.4 seed in six games (13-11, 6-11, 8-11, 11-7, 11-8, 11-6).
 </p>
                    <p>
                       A complete contrast in styles, Marcos Freitas, left handed, shake-hands grip style, preferring to execute top spin strokes a step back from the table; conversely Zheng Peifeng, right handed, pen-hold grip style, fast, in the modern manner utilising an effective backhand top spin stroke, was the fare on offer.

It was Marcos Freitas who made the better start. In the opening game he went ahead 7-2, it was at that stage Zheng Peifeng found his feet, found his rhythm. He levelled at 8-all before at 10-9 Marcos Freitas, gaining success by executing his forehand wide to the Zheng Peifeng forehand, secured game point. The point was saved, before on his second game point Zheng Peifeng converted.

Once again, seeking every opportunity play a fast forehand attacking stroke early in the rally, Marcos Freitas, as in the previous game, went ahead 7-2; this time he did not relinquish the advantage. At 10-6 he held four game points, he succeeded at the first time of asking.</p>

                <!--    <a href=\"#\" class=\"button\">More Details</a>-->
                </section>
            </div>
            <div class=\"3u\">
                <section class=\"sidebar\">
                    <header>
                        <h2>Recent Posts</h2>
                    </header>
                    <ul class=\"style2\">
                        <li>
                            <a href=\"#\"><img src=\"images/pics07.jpg\" alt=\"\"></a>
                            <p>Olympic Rio Venues. </p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics08.jpg\" alt=\"\"></a>
                            <p>Wrestling is underway ext.</p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics09.jpg\" alt=\"\"></a>
                            <p>New planning and East Africa Games coming to JKUAT .</p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics10.jpg\" alt=\"\"></a>
                            <p>NExt venues for the games will be communicated.</p>
                        </li>
                    </ul>
                </section>
            </div>
            <div class=\"3u\">
                <section class=\"sidebar\">
                    <header>
                        <h2>Latest News Articles</h2>
                    </header>
                    <ul class=\"style1\">
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100087\">CHELSEA NEWS</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100086\">Blueseventy Swim the Week: Eleventh-Hour Eastin Overcomes Mono </a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100085\">
Zheng Peifeng, at the first attempt </a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100084\">basket ball news</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100083\">kenya swimming champion</a></li>
                    </ul>
                </section>
        
        ";
        break;
    case "pP100086";
        //Coach Login and  Registration Form


        echo"
				
	<!-- Main -->
	
	<nav id=\"nav\" style=\"background-color:green\";>
            <ul>
                <li><a href=\"http://localhost/kaesa/home.php?login=success\">HOME</a></li>
                <li class='active'><a href=\"http://localhost/kaesa/sports.php\">Our Sports</a></li>
                <li ><a href=\"http://localhost/kaesa/login/a-module/events.php\">Events</a></li>
                <li ><a href=\"http://localhost/kaesa/login/?p=pP10001\">Coach login</a></li>
                <li ><a href=\"http://localhost/kaesa/login/?p=pP10002\">Player Login</a></li>
                <li ><a href=\"http://localhost/kaesa/login/a-module/\">ADMIN</a></li>
            </ul>
        </nav>
        
        <div id=\"main\" class=\"container\">
        <div class=\"row\">
            <div class=\"6u\">
                <section>
                    <header>
                        <h2>Blueseventy Swim the the Week: </h2>
                        <span class=\"byline\"> 
 Eleventh-Hour Eastin Overcomes Mono

</span>
                    </header>
                    <p> Eastin has shown an admirable ability to overcome adversity throughout her career, and last week’s patient, calm, confident endurance of a bad twist of fate has only made Eastin more popular with fans – and more respected by the sport as a whole. </p>
                    <p>
                       With arguably the most important U.S. Nationals of the Olympic cycle coming up, there’s no better time for a swimmer to start heating up. Hali Flickinger is doing just that.</p>

                <!--    <a href=\"#\" class=\"button\">More Details</a>-->
                </section>
            </div>
            <div class=\"3u\">
                <section class=\"sidebar\">
                    <header>
                        <h2>Recent Posts</h2>
                    </header>
                    <ul class=\"style2\">
                        <li>
                            <a href=\"#\"><img src=\"images/pics07.jpg\" alt=\"\"></a>
                            <p>Olympic Rio Venues. </p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics08.jpg\" alt=\"\"></a>
                            <p>Wrestling is underway ext.</p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics09.jpg\" alt=\"\"></a>
                            <p>New planning and East Africa Games coming to JKUAT .</p>
                        </li>
                        <li>
                            <a href=\"#\"><img src=\"images/pics10.jpg\" alt=\"\"></a>
                            <p>NExt venues for the games will be communicated.</p>
                        </li>
                    </ul>
                </section>
            </div>
            <div class=\"3u\">
                <section class=\"sidebar\">
                    <header>
                        <h2>Latest News Articles</h2>
                    </header>
                   <ul class=\"style1\">
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100087\">CHELSEA NEWS</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100086\">
Blueseventy Swim the the Week: Eleventh-Hour Eastin Overcomes Mono</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100085\">
Zheng Peifeng, at the first attempt </a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100084\">basket ball news</a></li>
                        <li><a href=\"http://localhost/kaesa/login/?p=pP100083\">kenya swimming champion</a></li>
                    </ul>
                </section>
        
        ";
        break;

			case "newevent";



	echo"	
	<nav id=\"nav\">
                        <ul>
                          <!--  <li class='active'><a href=''><img src='http://localhost/kaesa/login/assets/API/uploads/<?php //echo\"$_TopCoachProfilePicName\";?>' id=\"p-pic\"  alt='<?php //echo\"$_CoachFName \";?>' title='<?php //echo\"$_CoachFName \";?>'></a></li>
                            <li class='active'><a href=''>HELLO <?php //echo\"$_CoachFName \";?></a></li>-->
                               <li><a href='http://localhost/kaesa/login/a-posts-board-addNewTP.php?RTYHbiugttrdRFGHvytrCRTYHJbuyTRTY=DRTDCvhgbbyfcrGUbCTYvb&ccTCYvvtrDTVbuytcrRTYV=<?php echo\"$_si\";?>&BlkKIbjbjbibH7687vVJVyugv6Z6vZVzUG234kjIH=<?php echo\"$_pu\";?>'>NEW POST </a></li>

                            <li class='active'><a href=\"#\">create event</a></li>
                            <li ><a href=\"http://localhost/kaesa/login/coach_players.php\">players</a></li>
                            <li><a href='http://localhost/kaesa/login/my_money.php'>my money</a></li>


                            <li><a href='http://localhost/kaesa/posts/assets/API/logout.coach.inc.php'>LOGOUT</a></li>
                        </ul>
					</nav>
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

        </div><br>
		
		
		
		";
                $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if(strpos($url, "register=success") == true){
                    echo "the player has been registered succefully";
                    exit();
                }elseif (strpos($url, "register=failed") == true) {
                    echo "there was an error the player has not register. try again";
                    exit();
                } elseif (strpos($url, "addevent=success") == true) {
                    echo "<div id='flash-msg' class=\"alert alert-success alert-dismissible\"> 
<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
<strong>SUCCESS!</strong> the match was added Successfully";
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
                }elseif (strpos($url, "suspend=failed") == true) {
                    echo "there was an error during suspension please try again later";
                    exit();
                }elseif (strpos($url, "suspend=success") == true) {
                    echo "success";
                    exit();
                }

echo "</div><BR><BR>";

                break;


    case "p=suspend";


        echo"	
		<!-- Main -->
		

			<!-- Extra -->
			<p><center><b>suspend player </b></center></p>
      
      
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

			case "pP10006";
			//Player Login and Registration Forms

	echo"	
	<nav id=\"nav\">
	<ul>
	<li >
		<li class='active' ><a href=\"#\">Register Coach</a></li>
		
                            <li ><a href=\"http://localhost/kaesa/login/?p=pP10009\">post an article</a></li>
							<li ><a href=\"http://localhost/kaesa/login/a-module/payment.php?p=
						
							

							<li ><a href=\"http://localhost/kaesa/login/a-module/assets/API/logout.a.inc.php\">Logout</a></li>
						</ul>
						</nav>
		
		
	<div id='marketing' class='container'>
		<div id='card' class='container'>
		<h1><br><a href=''> <center>COACH REGISTRATION </center></a> </h1> <hr>
		<div id='signup' width='40%' align='center' clear='right'>   
          <h1>SIGN UP</h1>
          
          <form action='assets/API/CoachRegistration.php' method='post' enctype='multipart/form-data'>
          
          <div class='top-row'>
            <div class='field-wrap'>
              <label>
                First Name<span class='req'>*</span><br>
              </label>
              <input type='text' required autocomplete='on' size='40' name='coach_f_name' maxlength='40'/>
            </div>
        
            <div class='field-wrap'>
              <label>
                Last Name<span class='req'>*</span><br>
              </label>
              <input type='text'required autocomplete='on' size='40' name='coach_l_name' maxlength='40'/>
            </div>
          </div>

          <div class='field-wrap'>
            <label>
              Email Address<span class='req'>*</span><br>
            </label>
            <input type='email'required autocomplete='on' size='40' name='coach_username' maxlength='40'/>
          </div>
		  
		   <div class='field-wrap'>
            <label>
              Profile Photo<span class='req'>*</span><br>
            </label>
            <input type='file' size='40' required name='profile_pic' accept='image/*' />
          </div>
          
          <div class='field-wrap'>
            <label>
              Set A Password<span class='req'>*</span><br>
            </label>
            <input type='password'required autocomplete='on' size='40' name='coach_password' maxlength='40'/>
          </div>
		  
		  <div class='field-wrap'>
            <label>
              Select a Sport<span class='req'>*</span><br>
            </label>
            <select name='sport' required >
			<option value='Football'> Football</option>
			<option value='American Football'> American Football</option>
			<option value='Volley Ball'> Volley Ball</option>
			<option value='Basket Ball'> Basket Ball</option>
			<option value='Athletics'> Athletics</option>
			<option value='Chess'> Chess</option>
			<option value='Scrabble'>Scrabble</option>
			<option value='Skating'>Skating</option>
			<option value='Swimming'>Swimming</option>
			<option value='Table Tennis'>Table Tennis</option>
			<option value='Loan Tennis'>Load Tennis</option>
			</select>
          </div>
		  <div>
       <button type='submit' class='button button-block' >GET STARTED</button>
       <!--<button onclick=\"JSalert()\">Show an Alert</button>-->
          <div>
          </form>

        </div>
        </div>
		</div>
		</div>
		
		
		
		</div><BR><BR>
<!-- tab-content -->
      

				
			
			<!-- /Extra -->
			
				
			

		</div>
	<!-- /Main -->";
	break;
    case "pP10009";
        //Player Login and Registration Forms

        echo"	
	<nav id=\"nav\">
	<ul>
	<li ><a href=\"http://localhost/kaesa/login/?p=pP10006\">Register Coach</a></li>
                            
	
		<li class='active' ><a href=\"#\">post an article</a></li>
							
							

							<li ><a href=\"http://localhost/kaesa/login/a-module/assets/API/logout.a.inc.php\">Logout</a></li>
						</ul>
						</nav>
		
		
	<div id='marketing' class='container'>
		<div id='card' class='container'>
		<h1><br><a href=''> <center>NEW ARTICLE </center></a> </h1> <hr>
		<div id='signup' width='40%' align='center' clear='right'>   
          <h1>article</h1>
          
          <form action='assets/API/article.php' method='post' enctype='multipart/form-data'>
          
          <div class='top-row'>
            <div class='field-wrap'>
              <label>
               <span class='req'></span><br>
              </label>
              <input type='text' required autocomplete='on' placeholder='article title...' size='40' name='title' maxlength='40'/ >
            </div>
            <div class='field-wrap'>
            <label>
              Upload a Photo<span class='req'></span><br>
            </label>
            <input type='file' size='40' required name='post_image' accept='image/*' /><br>
          </div>
        
            <div class='field-wrap'>
              <label>
                <span class='req'></span><br>
              </label><br>
             <textarea name='content' id='content' placeholder='write or paste the content of the article here... ' rows=\"8\" cols=\"50\"  required>
</textarea>
  
            </div>
          </div>

         
       <button type='submit' class='button button-block' >POST</button>
       <!--<button onclick=\"JSalert()\">Show an Alert</button>-->
          <div>
          </form>

        </div>
        </div>
		</div>
		</div>
		
		
		
		</div><BR><BR>
<!-- tab-content -->
      

				
			
			<!-- /Extra -->
			
				
			

		</div>
	<!-- /Main -->";

			break;

			case "pP10002";
			//Player Login and Registration Forms

	echo"	
		<!-- Main -->
		<nav id=\"nav\" style=\"background-color:green\";>
            <ul>
                <li><a href=\"http://localhost/kaesa/home.php?login=success\">HOME</a></li>
                <li><a href=\"http://localhost/kaesa/sports.php\">Our Sports</a></li>
                <li ><a href=\"http://localhost/kaesa/login/a-module/events.php\">Events</a></li>
                <li ><a href=\"http://localhost/kaesa/login/?p=pP10001\">Coach login</a></li>
                <li class='active' ><a href=\"#\">Player Login</a></li>
                <li ><a href=\"http://localhost/kaesa/login/a-module/\">ADMIN</a></li>
            </ul>
        </nav>
		

			<!-- Extra -->
			<p><center><b>THE PLAYER </b></center></p>
      
      
		<div id='card' class='container'>
        <h1><a href=''> <center>PLAYER LOGIN </a> <center></h1><hr>
        <div id='login' width='40%' align='center'>   
          
          <form action='assets/API/PlayerLogin.php' method='post'>
          
            <div class='field-wrap'>
			<label > <font color='#FF0000'> $_LoginUnsuccessful </font><br>
            <label>
              Email Address <span class='req'>*</span><br>
            </label>
            <input type='email'required autocomplete='on' name='player_username' size='40' maxlength='40'/>
          </div>
          
          <div class='field-wrap'>
            <label>
              Password<span class='req'>*</span><br>
            </label>
            <input type='password'required autocomplete='on' size='40' name='player_password' maxlength='40'/>
          </div>
          
          
          
          <button class='button button-block'/>LOG IN</button>
          
          
          
          </form>
          

        </div>
		</div><BR><BR>
		
		
		
	<div id='marketing' class='container'>
		<div id='card' class='container'>
		<h1><br><a href=''> <center>PLAYER REGISTRATION </center></a> </h1> <hr>
		<div id='signup' width='40%' align='center' clear='right'>   
          <h1>SIGN UP</h1>
          
          <form id='myform' action='assets/API/PlayerRegistration.php' method='post' enctype='multipart/form-data'>
          
          <div class='top-row'>
            <div class='field-wrap'>
              <label>
                First Name<span class='req'>*</span><br>
              </label>
              <input type='text' required autocomplete='on' size='40' name='player_f_name' maxlength='40'/>
            </div>
        
            <div class='field-wrap'>
              <label>
                Last Name<span class='req'>*</span><br>
              </label>
              <input type='text'required autocomplete='on' size='40' name='player_l_name' maxlength='40'/>
            </div>
          </div>

          <div class='field-wrap'>
            <label>
              Email Address<span class='req'>*</span><br>
            </label>
            <input type='email'required autocomplete='on' size='40' name='player_username' maxlength='40'/>
          </div>
		  
		   <div class='field-wrap'>
            <label>
              Profile Photo<span class='req'>*</span><br>
            </label>
            <input type='file' size='40' name='profile_pic'  required accept='image/*'/>
          </div>
          
          <div class='field-wrap'>
            <label>
              Set A Password<span class='req'>*</span><br>
            </label>
            <input type='password'required autocomplete='on' size='40' name='player_password' maxlength='40'/>
          </div>
		  
		  <div class='field-wrap'>
            <label>
              Select a Sport<span class='req'>*</span><br>
            </label>
            <select name='sport' required >
			<option value='Football'> Football</option>
			<option value='American Football'> American Football</option>
			<option value='Volley Ball'> Volley Ball</option>
			<option value='Basket Ball'> Basket Ball</option>
			<option value='Athletics'> Athletics</option>
			<option value='Chess'> Chess</option>
			<option value='Scrabble'>Scrabble</option>
			<option value='Skating'>Skating</option>
			<option value='Swimming'>Swimming</option>
			<option value='Table Tennis'>Table Tennis</option>
			<option value='Loan Tennis'>Load Tennis</option>
			</select>
          </div>
		  <div>
          <button type='submit' class='button button-block'/>GET STARTED</button>
          <div>
          </form>

        </div>
        </div>
		</div>
		</div>
		</div><BR><BR>
<!-- tab-content -->
			<!-- /Extra -->
		</div>
	<!-- /Main -->";
			break;
			
			default:
				header('location:http://localhost/kaesa/');
				
			}

?>
<?php
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(strpos($url, "register=success") == true){
    echo "<script type=\"text/javascript\">

    swal(\"registration successful!\", \"you are now a registered member login to access the players board!\", \"success\");

</script>";
    exit();
}elseif (strpos($url, "register=failed") == true) {
    echo "there was an error the player has not register. try again";
    exit();
} elseif (strpos($url, "addevent=success") == true) {
    echo "<div id='flash-msg' class=\"alert alert-success alert-dismissible\"> 
<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
<strong>SUCCESS!</strong> the match was added Successfully";
    exit();

}elseif (strpos($url, "addevent=failed") == true) {
    echo "there was an error adding the event try again";
    exit();
}
elseif (strpos($url, "article=failed") == true) {
    echo "<script type=\"text/javascript\">

    swal(\"failed!\", \"failed to post the article please try again!\", \"error\");

</script>";
    exit();
}
elseif (strpos($url, "article=success") == true) {
    echo "<script type=\"text/javascript\">

    swal(\"success!\", \"the article is posted successfully!\", \"success\");

</script>";
    exit();
}




elseif (strpos($url, "coach=success") == true) {
    echo "<div id='flash-msg' class=\"alert alert-success alert-dismissible\"> 
<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>

<script type=\"text/javascript\">

    swal(\"success!\", \"the coach is registered successfully!\", \"success\");

</script>

</script>
<strong>SUCCESS!</strong> the coach is registered Successfully";
    exit();
}elseif (strpos($url, "coach=failed") == true) {
    echo "<div id='flash-msg' class=\"alert alert-success alert-dismissible\"> 
<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
<strong>SUCCESS!</strong> there was an error in registration try again";
exit();
}elseif (strpos($url, "suspend=failed") == true) {
    echo "there was an error during suspension please try again later";
    exit();
}elseif (strpos($url, "suspend=success") == true) {
    echo "success";
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