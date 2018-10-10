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
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link href="boots3/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-panels.min.js"></script>
    <script src="js/init.js"></script>
    <script src="boots3/js/bootstrap.min.js"></script>
    <style>
        table, th, td {
            border: 1px solid #ddd;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
        }
        th {
            height: 50px;
            background-color: #f5f5f5;
        }

    </style>


    <!--script src="forms/forms.js"></script-->
    <noscript>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/skel-noscript.css" />
        <link rel="stylesheet" href="css/style-desktop.css" />
        <!--link rel="stylesheet" href="forms/form.css" /-->
    </noscript>
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
<script>
    $(document).ready(function () {
        $("#flash-msg").delay(4000).fadeOut("slow");
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
                <!--  <li class='active'><a href=''><img src='http://localhost/kaesa/login/assets/API/uploads/<?php //echo"$_TopCoachProfilePicName";?>' id="p-pic"  alt='<?php //echo"$_CoachFName ";?>' title='<?php //echo"$_CoachFName ";?>'></a></li>
                            <li class='active'><a href=''>HELLO <?php //echo"$_CoachFName ";?></a></li>-->
                <li><a href='http://localhost/kaesa/login/a-posts-board-addNewTP.php?RTYHbiugttrdRFGHvytrCRTYHJbuyTRTY=DRTDCvhgbbyfcrGUbCTYvb&ccTCYvvtrDTVbuytcrRTYV=<?php echo"$_si";?>&BlkKIbjbjbibH7687vVJVyugv6Z6vZVzUG234kjIH=<?php echo"$_pu";?>'>NEW POST </a></li>

                <li ><a href="http://localhost/kaesa/login/?p=newevent">create event</a></li>
                <li class="active"><a href="#">players</a></li>
                <li><a href='http://localhost/kaesa/login/my_money.php'>my money</a></li>


                <li><a href='http://localhost/kaesa/posts/assets/API/logout.coach.inc.php'>LOGOUT</a></li>
            </ul>
        </nav>

    </div>
</div>
// code to display error to user

<!-- Header -->
<div id='page'>
    <div id='marketing' class='container'>

                <!--
                Code to Retrieve all Registered Players From the Database

                -->

                <div id='card' class='container'>

                    <h1 id='players'><a href=''> <center>REGISTERED PLAYERS </a> <center></h1><hr>
                    <div style="overflow-x:auto;">
                        <table style="width:100%">
                            <tr><th>PLAYER USERNAME </th> <th>FIRST NAME </th> <th>LAST NAME </th>  <th colspan="3">ACTION </th> </tr>

                            <?PHP

                            session_start();
                           $game = $_SESSION['username'];
                            $c_sql_query= "SELECT * FROM `coach` WHERE coach_username = '$game'  ";

                            $c_post_content_result=mysql_query($c_sql_query);

                            if ($c_post_content_result || mysql_num_rows($c_post_content_result) > 0) {

                                while ($c_content_puller = mysql_fetch_assoc($c_post_content_result)) {


                                    $_id = $c_content_puller['sport_id'];


                                    $players_sql_query = "SELECT * FROM `players` WHERE sport_id = '$_id'   ORDER BY player_username ASC";

                                    $players_sql_query_result = mysql_query($players_sql_query);

                                    if ($players_sql_query_result || mysql_num_rows($players_sql_query_result) > 0) {

                                        while ($players_sql_query_result_puller = mysql_fetch_assoc($players_sql_query_result)) {

                                            $_PlayerUsername = $players_sql_query_result_puller['player_username'];
                                            $_PlayerFName = $players_sql_query_result_puller['player_f_name'];
                                            $_PlayerLName = $players_sql_query_result_puller['player_l_name'];
                                            $_SportId = $players_sql_query_result_puller['sport_id'];


                                            switch ($_SportId) {

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

                                            echo "									
		
          
		
        <tr><td>$_PlayerUsername</td> <td> $_PlayerFName </td> <td> $_PlayerLName </td> 
       <td><a href='http://localhost/kaesa/login/a-module/assets/API/coach_add_player.php?player_username=$_PlayerUsername'><button class='button'>ADD</button></a></td>
      <td><a href='http://localhost/kaesa/login/a-module/assets/API/coach_suspend_player.php?player_username=$_PlayerUsername'><button class='button'>SUSPEND</button></a></td>
      <td><a href='http://localhost/kaesa/login/a-module/assets/API/coach_action.php?player_username=$_PlayerUsername'><button class='button'>REMOVE</button></a></td>
        </tr>
		
        
		

	<!-- /Main -->";
                                        }
                                    }
                                }
                            }

                            ?>
                        </table>
                    </div>



                    <?php
                    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                    if(strpos($url, "player=success") == true){
                        echo '<div id=\'flash-msg\' class="alert alert-success alert-dismissible  ">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
<strong>SUCCESS!</strong>  the player  added successfully.
                    </div>
                     
                    </div>';



                        exit();
                    }elseif (strpos($url, "player=failed") == true) {
                        echo "there was an error the player has not added. try again";
                        exit();
                    }
                    if (strpos($url, "suspend=failed") == true) {
                        echo "there was an error during suspension please try again later";

                        exit();
                    }elseif (strpos($url, "suspend=success") == true) {
                        echo "<div id='flash-msg' class=\"alert alert-success alert-dismissible\"> 
<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
<strong>SUCCESS!</strong> the player has been suspended successfully";
                        exit();
                    }
                    if (strpos($url, "removed=failed") == true) {
                        echo "there was an error removing the player please try again later";

                        exit();
                    }elseif (strpos($url, "removed=success") == true) {
                        echo "<div id='flash-msg' class=\"alert alert-success alert-dismissible\"> 
<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>

<strong>SUCCESS!</strong> the player has been removed successfully";

                        exit();
                    }
                    /* if(isset($_GET['player'])){
        exit();
        }else {
        $playerCheck = $_GET['player'];
        if ($playerCheck == 'success') {
            echo "<p style='background-color: white'>the player has been added succefully</p>";
            exit();
        } elseif ($playerCheck == 'failed') {
            echo "<p style='background-color: white'>the player failed try again</p>";
            exit();
        }
        }*/
                    ?>
                </div><BR><BR>

    </div>

</div>

<!-- Copyright -->
<div id="copyright" class="container"><br>
    SPORTS NOTICEBOARD - EDWIN KAESA - ALL RIGHTS RESERVED &COPY; 2016
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

</body>
</html>