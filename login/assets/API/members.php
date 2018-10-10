<?php
include ('config/config.php');
$msg = '';

if (isset($_POST['login']) && !empty($_POST['username'])
    && !empty($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql="SELECT email, password FROM members 
										
											WHERE email='$username' and password='$password' ";

    $result=mysql_query($sql);

    if(!$result || mysql_num_rows($result) <= 0){


        echo"<meta http-equiv='refresh' content='0;url=http://localhost/kaesa/landingpage.php?login=failed'>";
    }else{
        echo"<meta http-equiv='refresh' content='0;url=http://localhost/kaesa/home.php?login=success'>";
    }


    }else {
        echo 'Wrong username or password';
        echo"<meta http-equiv='refresh' content='0;url=http://localhost/kaesa/landingpage.php?login=failed'>";


    }

