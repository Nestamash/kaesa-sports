<style>
    h6{
        color: #1c7430;

    }
    body {
        margin: 0;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 25%;
        background-color: #f1f1f1;
        position: fixed;
        height: 100%;
        overflow: auto;
    }

    li a {
        display: block;
        color: #000;
        padding: 8px 16px;
        text-decoration: none;
    }

    li a.active {
        background-color: #4CAF50;
        color: white;
    }

    li a:hover:not(.active) {
        background-color: #009690;
        color: white;
    }
</style>




<!-- Page Content -->
<ul>
    <li><a class="active" href="#home">Notification</a></li>
    <li ><a href="http://localhost/kaesa/login/a-module/events.php">events</a></li>

    <li><a href="login?p=pP10001">Coach Login</a></li>
    <li><a href="login?p=pP10002">Player Login</a></li>

</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
    <h2>Notifications</h2>

    <p>
<?php

include("functions.php");

$id = $_GET['id'];

$query ="UPDATE `notifications` SET `status` = 'read' WHERE `id` = $id;";
performQuery($query);

$query = "SELECT * from `notifications` where `id` = '$id';";
if(count(fetchAll($query))>0){
    foreach(fetchAll($query) as $i){
        if($i['type']=='like'){
            echo ucfirst($i['name'])." liked your post. <br/>".$i['date'];
        }else{
            echo "Some commented on your post.<br/>".$i['message'];
        }
    }
}

?><br/>
<a href="index.php">Back</a>

    </p>
</div>