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

    $add_sql = "select * FROM `players` WHERE player_username = '$player_username' ";

    $add_result=mysql_query($add_sql);



    if($add_result ) {
        while ($add_result = mysql_fetch_assoc($add_result)) {

           $_PlayerUsername = $add_result['player_username'];
           $_PlayerFName = $add_result['player_f_name'];
           $_PlayerLName = $add_result['player_l_name'];
           $_SportId = $add_result['sport_id'];

            $events="INSERT INTO mainteam(sport_id,f_name, last_name, email )
								
												VALUES('$_SportId', '$_PlayerLName', '$_PlayerFName', '$_PlayerUsername')";

            $query ="INSERT INTO `notifications` (`id`, `name`, `type`, `message`, `status`, `date`) VALUES (NULL, '$_PlayerUsername', 'comment', ' congratulation $_PlayerFName you have been added to the main team', 'unread', CURRENT_TIMESTAMP)";



            $sqlnot	= 	mysql_query($query);

            $sql	= 	mysql_query($events);


            if($sql && $sqlnot){
                header("location: http://localhost/kaesa/login/coach_players.php?player=success ");
                exit();

               // echo" player added Successfully ";
                //header("location: http://localhost/kaesa/login/?p=newevent");
              //  header( "refresh:20;url=http://localhost/kaesa/login/?p=newevent" );
              //  exit;
            }

            else{
                header("location: http://localhost/kaesa/login/coach_players.php?player=failed");
                exit();
             echo"Not Successful".mysql_error();
                //header("location: http://localhost/kaesa/login/?p=pP10001");

            }

        }
    }

}

