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
        table{
            width: 100%;
        }
        table, th, td {
            border: 1px solid #ddd;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
        }
        th {
            height: 50px;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        tr:hover {background-color: #f5f5f5}
        tr:nth-child(even) {background-color: #f2f2f2}
        th{background-color: #009688;
            color: white;}



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
        <nav id="nav">

                <ul>
                   <!-- <li class='active'> <a href=''><img src='http://localhost/kaesa/login/assets/API/uploads/<?php echo"$_PlayerProfilePicNameInitializer";?>' id="p-pic" alt='Fred' title='<?php echo"$_PlayerFName ";?>'></a></li>
                    <li class='active'><a href=''>HELLO <?php //echo"$_PlayerFName ";?></a></li>-->
                    <li class="active"><a href='#'>main team</a></li>
                    <li><a href='http://localhost/kaesa/login/my_moneyplayer.php'>my money</a></li>
                    <li><a href='http://localhost/kaesa/posts/assets/API/logout.player.inc.php'>LOGOUT</a></li>
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
            <div style="width: 100%">
                <table>
                       <tr><th>PLAYER emailAddress </th> <th>FIRST NAME </th> <th>LAST NAME </th> </tr>



<?php
//include ('config/config.php');



session_start();
$game = $_SESSION['username'];


$c_sql_query= "SELECT * FROM `players` WHERE player_username = '$game'  ";

$c_post_content_result=mysql_query($c_sql_query);

if ($c_post_content_result || mysql_num_rows($c_post_content_result) > 0) {

    while ($c_content_puller = mysql_fetch_assoc($c_post_content_result)) {


        $_id = $c_content_puller['sport_id'];


        $query = "SELECT * FROM `mainteam` WHERE sport_id = '$_id'  ";

        $result = mysql_query($query);


        if ($result || mysql_num_rows($result) > 0) {

            while ($puller = mysql_fetch_assoc($result)) {


                 $f_name = $puller['f_name'];
                 $l_name= $puller['last_name'];
                $email = $puller['email'];


                echo "


            

        
    

		
       <tr><td>$email</td><td>$f_name</td> <td>$l_name </td> 
        
       
		
    ";


            }

        }
    }
}
?>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>

