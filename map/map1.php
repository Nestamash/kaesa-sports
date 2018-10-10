<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sports noticeboard</title>
    <link rel="shortcut icon" href="http://kaesa/images/Football_Ball.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="http://localhost/kaesa/map/maps/armory/stylez/default.css">
    <script src="http://maps.google.com/maps/api/js?v=3&key=AIzaSyB1fuJIdkyICFh3QLREPf3WGaXX4dW3708" type="text/javascript"></script>
    <script src="maps/armory/scripts/jquery.min.js"></script>
    <script src="maps/armory/scripts/placeloader.js"></script>

    <style type="text/css">

        ::selection { background-color: #E13300; color: white; }
        ::-moz-selection { background-color: #E13300; color: white; }
    </style>
</head>
<body>
<ul id="nav">

    <li ><a href="http://localhost/kaesa/login/a-module/">ADMIN</a></li>

    <li ><a href="http://localhost/kaesa/login/?p=pP10001">Coach login</a></li>
    <li ><a href="http://localhost/kaesa/login/?p=pP10002">Player Login</a></li>
    <li ><a href="http://localhost/kaesa/login/a-module/events.php">events</a></li>
    <li class="active"><a href="#">Venue map</a></li>
    <li><a href="http://localhost/kaesa/sports.php">Our Sports</a></li>

    <li><a href="http://localhost/kaesa/home.php?login=success">HOME</a></li>



</ul>
<div id="container">
    <div id="body">
        <code>
            <p>Find your  way</p>
            <label></label>From
            <select id="from">
            </select>
            <label></label>To
            <select id="to">
            </select>
            <button onclick="findway();">Find way</button><br><br>


            <div id="googleMap" style="width:700px;height:480px;margin:0px; border:0px; padding:0px;"></div>

        </code>
    </div>



    <p class = "footer">&copy;<strong> venue map </strong></p>
</div>

</body>
</html>
