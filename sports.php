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
    <script type="text/javascript">
        function ReplaceContentInContainer(id,content) {
            var container = document.getElementById(id);
            container.innerHTML = content;
        }
       </script>
    <script type="text/javascript">
        function ContentInContainer(id,content) {
            var container = document.getElementById(id);
            container.innerHTML = content;
        }
    </script>
    <script type="text/javascript">
        function imageInContainer(id,content) {
            var container = document.getElementById(id);
            container.innerHTML = content;
            container.src='http://localhost/kaesa/login/assets/API/uploads/' + content;

        }
    </script>
    <style>
        #pic{
            width: 100px;
            height: 100px;
        }
        a:link {
            text-decoration: none;

        }
        a:hover{
            text-decoration: underline;
        }
        #spa{
            color: #009688;

        }
        #sasa{

            text-indent: 50px;
            text-align: justify;
            letter-spacing: 2px;

        }
        #pic {
            border-radius: 8px;

            height: auto;
        }
        #imgdiv{
            max-width: 300px;
            height: auto;
        }
        #check{
            width: 300%;
            height: 100px;
            border: #00BCD4;
        }
    </style>

<style>

        #pic{
            padding: 5px;
            margin: 5px;
            float: left;
            width: 500px;



        }
        #pic{
            border-radius: 8px;
            display: block;
            float: left;



        }
        #pic:hover {
            -webkit-transform: scaleX(-1);
            transform: scaleX(-1);
        }


    </style>

</head>
<body class="homepage">


<!-- Header -->
<div id="header" style="width: 100%">
    <div class="container">

        <!-- Logo -->
        <div id="logo">

            <h1><a href="#">The NoticeBoard</a></h1>
        </div>




        <!-- Nav -->
        <nav id="nav" style="background-color:green";>
            <ul>




                <li ><a href="http://localhost/kaesa/home.php?login=success">Home</a></li>
                <li class="active" ><a href="#">Our Sports</a></li>
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

<!-- /Banner -->


<!-- Main -->
<div id="page">

    <!-- Extra -->
    <div id="marketing" class="container">
        <div class="row">
            <div class="3u">
                <section id="card">
                    <header>
                        <h2>Football</h2>
                    </header>
                    <p class="subtitle">A Forum for the football players to share information and ideas.A Forum for the football players to share information and ideas. </p>
                    <p><a href="#"><img src="images/pics13.jpg" alt="" height="165px" width="250px" ></a></p><center>
                        <a href="http://localhost/kaesa/login/?p=pP100060" class="button">More</a></center>
                </section>
            </div>
            <div class="3u">
                <section id="card">
                    <header>
                        <h2>Basket Ball</h2>
                    </header>
                    <p class="subtitle">A Forum for the football players to share information and ideas. A Forum for the football players to share information and ideas. </p>
                    <p><a href="#"><img src="images/pics14.jpg" alt="" height="165px" width="250px"></a></p><center>
                        <a href="http://localhost/kaesa/login/?p=pP100062" class="button">More</a></center>
                </section>
            </div>
            <div class="3u">
                <section id="card">
                    <header>
                        <h2>Skating</h2>
                    </header>
                    <p class="subtitle">A Forum for the Skating players to share information and ideas. A Forum for the football players to share information and ideas.</p>
                    <p><a href="#"><img src="images/pics15.jpg" alt="" height="165px" width="250px"></a></p><center>
                        <a href="http://localhost/kaesa/login/?p=pP100063" class="button">More</a></center>
                </section>
            </div>
            <div class="3u">
                <section >
                    <header>
                        <h2>More Games</h2>
                    </header>
                    <p class="subtitle">A Forum for the our players and coaches to share information and ideas.A Forum for the football players to share information and ideas.</p><center>
                        <p><a href="#"><img src="images/pics16.jpg" alt="" height="165px" width="250px"></a></p>
                        <a href="http://localhost/kaesa/login/?p=pP100061" class="button">More</a></center>
                </section>
            </div>
        </div>
    </div>
    <!-- /Extra -->

    <!-- Main -->


<div id="check">

</div>
    <div id="main" class="container"  >
        <div class="row"  >
            <div class="6u" style="width: 70%;">
                <section>
                    <header>
                        <h2 id="header">THE NOTICEBOARD</h2>
                        <span id="spa" class="byline">Sports information right when you need it.</span>
                    </header>

                    <div id="imgdiv">
                        <img src='http://localhost/kaesa/login/assets/API/uploads/d.jpg' id='pic' >
                    </div>
                    <p id="sasa">Sports are usually governed by a set of rules or customs, which serve to ensure fair competition,
                        and allow consistent adjudication of the winner.
                        winning can be determined by physical events such as scoring goals or crossing a line first.
                        It can also be determined by judges who are scoring elements of the sporting performance,
                        including objective or subjective measures such as technical performance or artistic impression.Records of
                        performance are  often kept, and for popular sports, this information may be widely announced or reported in sport news.

                        Sport is generally recognised as system of activities which are based in physical athleticism or physical dexterity,
                        with the largest major competitions such as the Olympic Games admitting only sports meeting this definition,[3]
                        and other organisations such as the Council of Europe using definitions precluding activities without a physical
                        element from classification as sports.[2] However, a number of competitive, but non-physical, activities claim
                        recognition as mind sports.</p>

                <!--    <a href="#" class="button">More Details</a>-->
                </section>
            </div>

            <div class="3u">
                <section class="sidebar">
                    <header>
                        <h2>Latest News Articles</h2>
                    </header>
                    <ul class="style1">
                        <?PHP


                        $players_sql_query = "SELECT * FROM `articles`   ORDER BY id desc ";

                        $players_sql_query_result = mysql_query($players_sql_query);

                        if ($players_sql_query_result || mysql_num_rows($players_sql_query_result) > 0) {

                            while ($players_sql_query_result_puller = mysql_fetch_assoc($players_sql_query_result)) {

                                $title = $players_sql_query_result_puller['title'];
                                $content = $players_sql_query_result_puller['content'];
                                $article_image = $players_sql_query_result_puller['article_image'];



                                echo "

         
                        <li> <a href=\"javascript:ReplaceContentInContainer('sasa', '$content'); javascript:ContentInContainer('spa', '$title'); javascript:imageInContainer('pic', '$article_image') \">$title
                        
                       </a></li>
                      
                  
        
		";

                            }
                        }



                        ?>
                    </ul>
                </section>


            </div>
        </div>
    </div>


    <!-- Main -->

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
