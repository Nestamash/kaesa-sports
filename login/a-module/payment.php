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
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link href="http://kaesa/boots3/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-panels.min.js"></script>
    <script src="js/init.js"></script>

    <link rel="stylesheet" type="text/css" href="sweetalert/dist/sweetalert.css">
    <script src="sweetalert/dist/sweetalert.min.js"></script>
    <!--script src="forms/forms.js"></script-->
    <noscript>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/skel-noscript.css" />
        <link rel="stylesheet" href="css/style-desktop.css" />
        <!--link rel="stylesheet" href="forms/form.css" /-->
    </noscript>
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
    <script src="htt://kaesa/boots3/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#flash-msg").delay(10000).fadeOut("slow");
        });

    </script>

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


                <li ><a href="http://localhost/kaesa/login/?p=pP10006">Register Coach</a></li>
                <li ><a href="http://localhost/kaesa/login/a-module/payment.php?p=
							<?php
                    session_start();
                    $_pu = $_SESSION['admin_username']; echo $_pu?>">payment</a></li>

                <li ><a href="http://localhost/kaesa/login/a-module/assets/API/logout.a.inc.php">Logout</a></li>
            </ul>
        </nav>

    </div>
</div>
<!-- Header -->
<div id='page'>
    <div id='marketing' class='container'>



                <!--
                Code to Retrieve all Registered Players From the Database

                -->

                <div id='card' class='container'>
                    <h1 id='players'><a href=''> <center>REGISTERED PLAYERS </a> <center></h1><hr>
                    <div style="overflow-x:auto;">
                        <table>
                            <tr><th>PLAYER USERNAME </th> <th>FIRST NAME </th> <th>LAST NAME </th> <th>SPORT </th> <th>ACTION </th> </tr>

                            <?PHP

                            $date= new DateTime();
                            date_default_timezone_set("Africa/nairobi");
                            $date =  date("Y-m-d h:i:sa");



                            $players_sql_query = "SELECT * FROM `players`  ORDER BY player_username ASC";

                            $players_sql_query_result = mysql_query($players_sql_query);

                            if($players_sql_query_result || mysql_num_rows($players_sql_query_result) > 0){

                                while($players_sql_query_result_puller=mysql_fetch_assoc($players_sql_query_result)){

                                    $_PlayerUsername = $players_sql_query_result_puller['player_username'];
                                    $_PlayerFName = $players_sql_query_result_puller['player_f_name'];
                                    $_PlayerLName = $players_sql_query_result_puller['player_l_name'];
                                    $_SportId = $players_sql_query_result_puller['sport_id'];


                                    switch($_SportId){

                                        case "1";
                                            $_Sport = 'Football';

                                            break;

                                        case "2";

                                            $_Sport = 'American Football';

                                            break;
                                        case "3";

                                            $_Sport = 'Volley Ball';

                                            break;
                                        case "4";

                                            $_Sport = 'Basket Ball';

                                            break;
                                        case "5";

                                            $_Sport = 'Athletics';

                                            break;

                                        case "6";

                                            $_Sport = 'Chess';

                                            break;

                                        case "7";

                                            $_Sport = 'Scrabble';

                                            break;

                                        case "8";

                                            $_Sport = 'Skating';

                                            break;
                                        case "9";

                                            $_Sport = 'Swimming';

                                            break;

                                        case "10";

                                            $_Sport = 'Table Tennis';

                                            break;

                                        case "11";

                                            $_Sport = 'Loan Tennis';

                                            break;

                                        default:

                                            $_Sport = 'None';

                                    }



                                    echo"									
		
          
		
    <tr><td>$_PlayerUsername</td> <td> $_PlayerFName </td> <td> $_PlayerLName </td> <td>$_Sport</td> <td><a href='http://localhost/kaesa/login/a-module/assets/API/pay_a_player.php?player_username=$_PlayerUsername'><button class='button'>pay</button></a>
     <!--<a href='http://localhost/kaesa/login/a-module/assets/API/a-delete-player.php?player_username=$_PlayerUsername'><button class='button'>REMOVE</button></a></td></tr>
	
		-->

	<!-- /Main -->";
                                }
                            }

                            ?>
                            <?php


                            ?>
                        </table>
                    </div>
                </div><BR><BR>

                <!--
                Code to Retrieve all Registered Coaches From the Database

                -->

                <div id='card' class='container'>
                    <h1 id='coaches'><a href=''> <center>REGISTERED COACHES </a> <center></h1><hr>
                    <div style="overflow-x:auto;">
                        <table>
                            <tr><th>COACH EMAIL </th> <th>FIRST NAME </th> <th>LAST NAME </th> <th>SPORT </th> <th>ACTION </th> </tr>

                            <?PHP



                            $coach_sql_query = "SELECT * FROM `coach`  ORDER BY sport_id ASC";

                            $coach_sql_query_result = mysql_query($coach_sql_query);

                            if($coach_sql_query_result || mysql_num_rows($coach_sql_query_result) > 0){

                                while($coach_sql_query_result_puller=mysql_fetch_assoc($coach_sql_query_result)){

                                    $_CoachUsername = $coach_sql_query_result_puller['coach_username'];
                                    $_CoachFName = $coach_sql_query_result_puller['coach_f_name'];
                                    $_CoachLName = $coach_sql_query_result_puller['coach_l_name'];
                                    $_SportId = $coach_sql_query_result_puller['sport_id'];


                                    switch($_SportId){

                                        case "1";
                                            $_Sport = 'Football';

                                            break;

                                        case "2";

                                            $_Sport = 'American Football';

                                            break;
                                        case "3";

                                            $_Sport = 'Volley Ball';

                                            break;
                                        case "4";

                                            $_Sport = 'Basket Ball';

                                            break;
                                        case "5";

                                            $_Sport = 'Athletics';

                                            break;

                                        case "6";

                                            $_Sport = 'Chess';

                                            break;

                                        case "7";

                                            $_Sport = 'Scrabble';

                                            break;

                                        case "8";

                                            $_Sport = 'Skating';

                                            break;
                                        case "9";

                                            $_Sport = 'Swimming';

                                            break;

                                        case "10";

                                            $_Sport = 'Table Tennis';

                                            break;

                                        case "11";

                                            $_Sport = 'Loan Tennis';

                                            break;

                                        default:

                                            $_Sport = 'None';

                                    }

                                    echo"									
		
          
		
        <tr><td>$_CoachUsername</td> <td> $_CoachFName </td> <td> $_CoachLName </td> <td>$_Sport</td> <td><a href='http://localhost/kaesa/login/a-module/assets/API/pay_a_coach.php?coach_username=$_CoachUsername'><button class='button'>pay</button></a>
         <!--<a href='http://localhost/kaesa/login/a-module/assets/API/a-delete-coach.php?coach_username=$_CoachUsername'><button class='button'>REMOVE</button></a> </td></tr>
		
		-->
        
        
		

	<!-- /Main -->";
                                }
                            }

                            ?>
                        </table>
                    </div>
                    <?php


                    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    if (strpos($url, "pay=failed") == true) {

                        echo "there was an error in payment please try again later";

                        exit();
                    }elseif (strpos($url, "pay=success") == true) {
                        echo '<script type="text/javascript">

    swal("success!", "the payment was successful!", "success");

</script>
                    </div>
                     
                    </div>';



                        exit();
                    }
                    ?>
                </div><BR><BR>


    </div>

</div>
<!-- Copyright -->
<div id="copyright" class="container"><br>
    SPORTS NOTICEBOARD - EDWIN KAESA - ALL RIGHTS RESERVED &COPY; 2016
</div>
</body>
