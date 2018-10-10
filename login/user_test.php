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
<?php
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URL]";
if(strpos($url, "player=success") == true){
    echo "the player has been added succefully";
    exit();
}elseif (strpos($url, "player=failed") == true) {
    echo "there was an error the player has not added. try again";
    exit();
}
?>
<p><center><b>THE COACH </b></center></p>


<div id='card' class='container'>
    <h1><a href=''> <center>COACH LOGIN </a> <center></h1><hr>
    <div id='login' width='40%' align='center'>


        <form action='user_feedback.php' method='post'>

            <div class='field-wrap'>
                <label > <font color='#FF0000'>  </font><br>
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

            <button class='button button-block'  onsubmit="_printMessages(); "/>LOG IN</button>

        </form>

    </div>
</div><BR><BR>
</body>
</html>