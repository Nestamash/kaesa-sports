<!DOCTYPE html>

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

$player_username = $_GET['player_username'];

if(trim($_GET['player_username']) == "" ){


    $_SESSION['error'] = 'Fields cannot be empty!';
    echo"<meta http-equiv='refresh' content='0;url=http://localhost/kaesa/login/a-module/'>";
    exit();
}
else{

    $delete_sql = "DELETE FROM `mainteam` WHERE email = '$player_username' ";

    $delete_result=mysql_query($delete_sql);

   // $credentials_delete_sql = "DELETE FROM `player_credentials` WHERE player_username = '$player_username' ";

   // $credentials_delete_result = mysql_query($credentials_delete_sql);
    $query ="INSERT INTO `notifications` (`id`, `name`, `type`, `message`, `status`, `date`) VALUES (NULL, '$player_username', 'comment', '  you have been removed from the main team', 'unread', CURRENT_TIMESTAMP)";



    $sqlnot	= 	mysql_query($query);

    if(!$delete_result ){
        header("location: http://localhost/kaesa/login/coach_players.php?removed=failed");
        exit();

        echo"Could Not Delete".mysql_error();
    }
    else
    {
        header("location: http://localhost/kaesa/login/coach_players.php?removed=success");
        exit();
        //echo"Delete Successful";
       // echo"<meta http-equiv='refresh' content='5;url=http://localhost/kaesa/posts/a-posts-coach-board.php'>";
    }
}