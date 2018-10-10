<!DOCTYPE HTML>
<?php

include ('assets/include/config.inc/config.php');


//include("functions.php");

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
    <noscript>
        <link rel="stylesheet" href="css/skel-noscript.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-desktop.css" />
    </noscript>
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
</head>
<body class="homepage">


<!-- Header -->
<div id="header">
    <div class="container">

        <!-- Logo -->
        <div id="logo">

            <h1><a href="#">The NoticeBoard</a></h1>
        </div>




        <!-- Nav -->
        <nav id="nav" style="background-color:green";>
            <ul>




                <li class="active"><a href="http://localhost/kaesa/home.php?login=success">Home</a></li>
                <li><a href="http://localhost/kaesa/sports.php">Our Sports</a></li>
                <li ><a href="http://localhost/kaesa/login/a-module/events.php">events</a></li>

                <li><a href="login?p=pP10001">Coach Login</a></li>
                <li><a href="login?p=pP10002">Player Login</a></li>
                <li ><a href="http://localhost/kaesa/login/a-module/">ADMIN</a></li>


                <li class="dropdown"><a href="#">
                        <div >
                            <?php
                            //include("notification.php");
                            ?>
                        </div>

                    </a></li>
            </ul>

        </nav>


    </div>



</div>
<!-- Header -->

<!-- Banner -->
<div id="banner" >
    <div class="container" ><br>
        <section id="ban"style="color:#33CCCC";>
            <header>
                <h2>THE NOTICEBOARD </h2>
                <span class="byline" >Sports information right when you need it.</span>
            </header>
            <p style="color:#33CCCC"> His is the official Page for students to be interactive and learn more about JKUAT sports
                This shall contain sample information about the Sports Notice Board Web App.
            </p>
            <a href="http://localhost/kaesa/sports.php" class="but" >More Details</a>

        </section>
    </div>
</div>
<!-- /Banner -->


<!-- Main -->
 <!--<div id="page">

    <!-- Extra
    <div id="marketing" class="container">
        <div class="row">
            <div class="3u">
                <section id="card">
                    <header>
                        <h2>Football</h2>
                    </header>
                    <p class="subtitle">A Forum for the football players to share information and ideas.A Forum for the football players to share information and ideas. </p>
                    <p><a href="#"><img src="images/pics13.jpg" alt="" height="165px" width="250px" ></a></p><center>
                        <a href="#" class="button">More</a></center>
                </section>
            </div>
            <div class="3u">
                <section id="card">
                    <header>
                        <h2>Basket Ball</h2>
                    </header>
                    <p class="subtitle">A Forum for the football players to share information and ideas. A Forum for the football players to share information and ideas. </p>
                    <p><a href="#"><img src="images/pics14.jpg" alt="" height="165px" width="250px"></a></p><center>
                        <a href="#" class="button">More</a></center>
                </section>
            </div>
            <div class="3u">
                <section id="card">
                    <header>
                        <h2>Skating</h2>
                    </header>
                    <p class="subtitle">A Forum for the Skating players to share information and ideas. A Forum for the football players to share information and ideas.</p>
                    <p><a href="#"><img src="images/pics15.jpg" alt="" height="165px" width="250px"></a></p><center>
                        <a href="#" class="button">More</a></center>
                </section>
            </div>
            <div class="3u">
                <section >
                    <header>
                        <h2>More Games</h2>
                    </header>
                    <p class="subtitle">A Forum for the our players and coaches to share information and ideas.A Forum for the football players to share information and ideas.</p><center>
                        <p><a href="#"><img src="images/pics16.jpg" alt="" height="165px" width="250px"></a></p>
                        <a href="#" class="button">More</a></center>
                </section>
            </div>
        </div>
    </div>
    <!-- /Extra -->

    <!-- Main
    <div id="main" class="container">
        <div class="row">
            <div class="6u">
                <section>
                    <header>
                        <h2>THE NOTICEBOARD</h2>
                        <span class="byline">Sports information right when you need it.</span>
                    </header>
                    <p>Sports are usually governed by a set of rules or customs, which serve to ensure fair competition,
                        and allow consistent adjudication of the winner.
                        winning can be determined by physical events such as scoring goals or crossing a line first.
                        It can also be determined by judges who are scoring elements of the sporting performance,
                        including objective or subjective measures such as technical performance or artistic impression.Records of
                        performance are  often kept, and for popular sports, this information may be widely announced or reported in sport news. </p>
                    <p>
                        Sport is generally recognised as system of activities which are based in physical athleticism or physical dexterity,
                        with the largest major competitions such as the Olympic Games admitting only sports meeting this definition,[3]
                        and other organisations such as the Council of Europe using definitions precluding activities without a physical
                        element from classification as sports.[2] However, a number of competitive, but non-physical, activities claim
                        recognition as mind sports.</p>

                    <a href="#" class="button">More Details</a>
                </section>
            </div>
            <div class="3u">
                <section class="sidebar">
                    <header>
                        <h2>Recent Posts</h2>
                    </header>
                    <ul class="style2">
                        <li>
                            <a href="#"><img src="images/pics07.jpg" alt=""></a>
                            <p>Olympic Rio Venues. </p>
                        </li>
                        <li>
                            <a href="#"><img src="images/pics08.jpg" alt=""></a>
                            <p>Wrestling is underway ext.</p>
                        </li>
                        <li>
                            <a href="#"><img src="images/pics09.jpg" alt=""></a>
                            <p>New planning and East Africa Games coming to JKUAT .</p>
                        </li>
                        <li>
                            <a href="#"><img src="images/pics10.jpg" alt=""></a>
                            <p>NExt venues for the games will be communicated.</p>
                        </li>
                    </ul>
                </section>
            </div>
            <div class="3u">
                <section class="sidebar">
                    <header>
                        <h2>Latest News Articles</h2>
                    </header>
                    <ul class="style1">
                        <li><a href="#">Link to a New Article </a></li>
                        <li><a href="#">Link to a New Article </a></li>
                        <li><a href="#">Link to a New Article</a></li>
                        <li><a href="#">Link to a New Article</a></li>
                        <li><a href="#">Link to a New Article</a></li>
                    </ul>
                </section>
                <section class="sidebar">
                    <header>
                        <h2>Player and Coach Reviews</h2>
                    </header>
                    <ul class="style1">
                        <li><a href="#">Link to a Player/Coach Review</a></li>
                        <li><a href="#">Link to a Player/Coach Review</a></li>
                        <li><a href="#">Link to a Player/Coach Review</a></li>
                        <li><a href="#">Link to a Player/Coach Review</a></li>
                        <li><a href="#">Link to a Player/Coach Review</a></li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
    <!-- Main

</div>
<!-- /Main -->





<!-- Copyright -->
<div id="copyright" class="container">
    SPORTS NOTICEBOARD - EDWIN KAESA - ALL RIGHTS RESERVED &COPY; 2016
</div>


<!--<script src="boots3/js/jquery.js"></script>
<script src="boots3/js/refresh.js"></script>
-->

</body>
</html>