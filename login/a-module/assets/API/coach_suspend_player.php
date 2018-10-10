<!DOCTYPE HTML>

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
                <li><a href='http://localhost/kaesa/login/a-posts-board-addNewTP.php?RTYHbiugttrdRFGHvytrCRTYHJbuyTRTY=DRTDCvhgbbyfcrGUbCTYvb&ccTCYvvtrDTVbuytcrRTYV=<?php echo"$_si";?>&BlkKIbjbjbibH7687vVJVyugv6Z6vZVzUG234kjIH=<?php echo"$_pu";?>'>NEW POST </a></li>

                <li ><a href="http://localhost/kaesa/login/?p=newevent">create event</a></li>
                <li ><a href="http://localhost/kaesa/login/coach_players.php">players</a></li>
                <li><a href='http://localhost/kaesa/login/my_money.php'>my money</a></li>

                <li class="active" ><a href="#">Suspend player</a></li>
                <li><a href='http://localhost/kaesa/posts/assets/API/logout.coach.inc.php'>LOGOUT</a></li>
            </ul>
        </nav>

    </div>
</div>
<!-- Header -->

<?php
/*
The Following Code has been created and is the Sole Property of TRIOPOINT IT SOLUTIONS.
Any Modifications made to the code to improve or change functionality are allowed on condition
 That they maintain the above licence statement giving credit to the creators of this library:
 .................................
 CREDITS:
KAESA EDWIN
 .................................
*/
include ('config/config.php');
require ('core.inc.php');




error_reporting(0);
ini_set("display_errors","off");

$name = $_POST['sus'];
$date = $_POST['sus_date'];
$value = $_POST['sus_value'];

$player_username = $_GET['player_username'];

if(trim($_GET['player_username']) == "" ){


    $_SESSION['error'] = 'Fields cannot be empty!';
    echo"<meta http-equiv='refresh' content='0;url=http://localhost/kaesa/login/a-module/'>";
    exit();
}
else {
if (!empty($player_username && $name && $date && $value)) {
    $delete_sql = "INSERT INTO suspended_players(suspension_date, reason,sus_length, player_name )
								
							
						  					VALUES('$date', '$value', '$name', '$player_username')";

    $delete_result = mysql_query($delete_sql);

    // $credentials_delete_sql = "DELETE FROM `player_credentials` WHERE player_username = '$player_username' ";

    // $credentials_delete_result = mysql_query($credentials_delete_sql);
    $query = "INSERT INTO `notifications` (`id`, `name`, `type`, `message`, `status`, `date`) VALUES (NULL, '$player_username', 'comment', '  you have been suspended you', 'unread', CURRENT_TIMESTAMP)";
}

    $sqlnot = mysql_query($query);

    if (!$delete_result) {
        //$player_username = $_GET['player_username'];
      // header("location: http://localhost/kaesa/login/a-module/assets/API/coach_suspend_player.php?player_username=$player_username?suspend=failed ");
       // http://localhost/kaesa/login/a-module/assets/API/coach_suspend_player.php?player_username=$_PlayerUsername
      //  exit();

       // header("location: http://localhost/kaesa/login/coach_players.php?suspend=failed");
        //exit();
        echo "Could Not Delete" . mysql_error();
    } else {

        header("location: http://localhost/kaesa/login/coach_players.php?suspend=success ");
        exit();
       ////header("location: http://localhost/kaesa/login/a-module/assets/API/coach_suspend_player.php?player_username=$player_username?suspend=success");
       //exit();
       // exit();
        //echo"Delete Successful";
       // echo "<meta http-equiv='refresh' content='5;url=http://localhost/kaesa/posts/a-posts-coach-board.php'>";
    }
}
    ?>

<div id='page'>
    <div id='marketing' class='container'>



        <!-- Main -->


        <!-- Extra -->
        <p><center><b> </b></center></p>


        <div id='card' class='container' style="margin-top: 100px;">
            <h1><a href=''> <center>suspend a player </a> <center></h1><hr>
            <div id='login' width='40%' align='center'>

                <form action='' method='post' enctype='multipart/form-data'>
                    <div class='field-wrap'>
                        <label > <font color='#FF0000'>  </font><br>
                            <label>
                                suspension length <span class='req'>*</span><br>
                            </label>
                            <input type='text'required autocomplete='on' name='sus'  maxlength='40'/>
                    </div>

                    <div class='field-wrap' id='form-row show-inputbtns'>
                        <label > <font color='#FF0000'>  </font><br>
                            <label>
                                from <span class='req'>*</span><br>
                            </label>
                            <!--<input type='text'required autocomplete='off' name='_game_date' size='40' maxlength='40'/-->
                            <input type="date" data-date-inline-picker="false" data-date-open-on-focus="true" name='sus_date' required autocomplete='on'/>
                    </div>

                    <div class='field-wrap'>
                        <label>
                            reason<span class='req'>*</span><br>
                        </label>
                        <input type='text'required autocomplete='on' size='40' name='sus_value' maxlength='40' placeholder="reason for suspension"/>
                    </div>



                    <a href='http://localhost/kaesa/login/a-module/assets/API/coach_suspend_player.php?player_username=$_PlayerUsername'><button class='button'>SUSPEND</button></a>
                </form>

            </div>
        </div><BR><BR>

        <?php


        $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
       if (strpos($url, "suspend=failed") == true) {
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