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
include ('coach_suspend_player.php');
$name = $_POST['sus'];
$date = $_POST['sus_date'];
$value = $_POST['sus_value'];
error_reporting(0);
ini_set("display_errors","off");

$player_username = $_GET['player_username'];




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
		
          
		
       $_PlayerFName
		
        
		

	<!-- /Main -->";



if(trim( $_PlayerUsername) == "" ){


    $_SESSION['error'] = 'Fields cannot be empty!';
    header("location: http://localhost/kaesa/login/a-module/assets/API/coach_suspend_player.php?suspend=failed");
    exit();
}
else{
    if (!empty($player_username)) {
        $postUploadQuery = "INSERT INTO suspended_players(suspension_date, reason,sus_length, player_name )
								
							
						  					VALUES('$date', '$value', '$name', '$player_username')";

        $postUploadQueryResult = mysql_query($postUploadQuery);
    }

    if ( $postUploadQueryResult) {


        echo 'success' . '$_PlayerUsername';
        echo $_PlayerUsername;
        header("location: http://localhost/kaesa/login/a-module/assets/API/coach_suspend_player.php?suspend=success ");
        exit();
    }

}}}}}

