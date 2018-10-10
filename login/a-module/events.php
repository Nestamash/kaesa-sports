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
    <style>

        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 15px;
            text-align: left;
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
        <nav id="nav" style="background-color:green";>
            <ul>
                <li><a href="http://localhost/kaesa/home.php?login=success">HOME</a></li>
                <li><a href="http://localhost/kaesa/sports.php">Our Sports</a></li>
                <li class="active"><a href="#">Events</a></li>
                <li ><a href="http://localhost/kaesa/login/?p=pP10001">Coach login</a></li>
                <li ><a href="http://localhost/kaesa/login/?p=pP10002">Player Login</a></li>
                <li ><a href="http://localhost/kaesa/login/a-module/">ADMIN</a></li>
            </ul>
        </nav>

    </div>
</div>
<!-- Header -->
<div id='page'>
    <div id='marketing' class='container'>



                <div id='card' class='container' style="width: 900px">
                    <h1><a href=''> <center>events </a> <center></h1><hr>
                    <div style="overflow-x:auto;">
                        <table>
                            <tr><th>game </th><th>teams </th> <th>date </th><th>time </th><th>location </th><th>posted on  </th><th>map  </th> </tr>

                            <?PHP



                            $content_sql_query= "SELECT * FROM `events`  ORDER BY id DESC ";

                            $post_content_result=mysql_query($content_sql_query);

                            if($post_content_result || mysql_num_rows($post_content_result) > 0){

                                while($content_puller=mysql_fetch_assoc($post_content_result)){

                                    $_game = $content_puller['game'];
                                    $_team = $content_puller['team_game'];
                                    $_game_date = $content_puller['game_date'];
                                    $_time = $content_puller['game_time'];
                                    $_game_venue = $content_puller['game_venue'];
                                    $_created_at = $content_puller['created_at'];
                                    $_updated_at = $content_puller['updated_at'];

                                    $currentDateTime = $_created_at;
                                    $currentDate = $_time;
                                    $newDateTime = date('h:i A', strtotime($currentDate));
                                    //$currentDate = $_created_at;
                                    $newDate = date('h:i A', strtotime($currentDateTime));


                                    echo"									
		
          
		
        <tr><td>$_game</td> <td>$_team</td><td>$_game_date</td><td>$newDateTime </td> <td>  $_game_venue</td> <td>$newDate</td> <td><a href='http://localhost/kaesa/map/map1.php'><button class='button' >venue map</button></a></td></tr>
		
      ";
                                }
                            }

                            ?>
                        </table>
                    </div>
                </div><BR><BR>


<div id="copyright" class="container"><br>
    SPORTS NOTICEBOARD - EDWIN KAESA - ALL RIGHTS RESERVED &COPY; 2016
</div>
</body>
</html>