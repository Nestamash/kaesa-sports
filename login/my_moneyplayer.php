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
        th{background-color: #4CAF50;
            color: white;}
        h6 {
            word-spacing: 185px;
            color: #4CAF50;
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
        <nav id="nav">
            <ul>
                <!--  <li class='active'><a href=''><img src='http://localhost/kaesa/login/assets/API/uploads/<?php //echo"$_TopCoachProfilePicName";?>' id="p-pic"  alt='<?php //echo"$_CoachFName ";?>' title='<?php //echo"$_CoachFName ";?>'></a></li>
                            <li class='active'><a href=''>HELLO <?php //echo"$_CoachFName ";?></a></li>-->
              <li><a href='http://localhost/kaesa/login/main_team.php'>main team</a></li>

                <li class="active"><a href='#'>my money</a></li>


                <li><a href='http://localhost/kaesa/posts/assets/API/logout.coach.inc.php'>LOGOUT</a></li>
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
            <h1 id='coaches'><a href=''> <center>MY MONEY </a> <center></h1><hr>
            <div style="overflow-x:auto;">
                <table style="width:100%">
                    <tr><th>PAID ON</th><th>PAYMENT </th> <th>AMOUNT </th>  <!--<th>ACTION </th>--> </tr>



                    <?php
                    //include ('config/config.php');



                    session_start();
                    $game = $_SESSION['username'];


                    $c_sql_query= "SELECT * FROM `payments` WHERE username = '$game'  ";

                    $c_post_content_result=mysql_query($c_sql_query);

                    if ($c_post_content_result || mysql_num_rows($c_post_content_result) > 0) {

                        while ($c_content_puller = mysql_fetch_assoc($c_post_content_result)) {


                            $payment_type = $c_content_puller['payment_type'];
                            $amount = $c_content_puller['amount'];
                            $date = $c_content_puller['created_at'];
//$sum = $mount + $amount;

                            echo "


            

        
    

		
        <tr><td>$date</td><td>$payment_type</td> <td>$amount </td> 
        
       
		
    ";
                        }
                    }
                    ?>
                    <?php
                    //"SELECT * FROM `payments` WHERE username = '$game'  ";
                    $sql = "SELECT sum(amount) FROM payments WHERE username = '$game' ";
                    $q = mysql_query($sql);
                    if ($q === false){
                        echo mysql_error();
                    }
                    $row = mysql_fetch_array($q);
                    $amount = $row[0];

                    echo"
                     <tr ><th > TOTAL AMOUNT </th ><td colspan='2' ><h6>KSH.  $amount</h6></td >  <!--<td ><a href = '#' ><button class='button' > withdraw</button ></a ></td >--></tr >

      
                    ";

                    ?>

                </table>
            </div >
        </div ><BR ><BR >




