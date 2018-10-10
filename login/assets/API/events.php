<?php
include ('config/config.php');



/*error_reporting(0);
ini_set("display_errors","off");*/

echo $teams=$_POST['_teams'];
echo $gamedate=$_POST['_game_date'];
echo $time=$_POST['game_time'];

echo $venue=$_POST['_venue'];
//$game='football';
$now = new DateTime();
$now->setTimezone(new DateTimeZone('Africa/Nairobi'));
$created_at=$now->format('Y-m-d H:i');
$updated_at=$now->format('Y-m-d H:i');

//echo $now->format('Y-m-d H:i:s');
session_start();
 $game = $_SESSION['username'];


//var_dump($_SESSION);
$c_sql_query= "SELECT * FROM `coach` WHERE coach_username = '$game'  ";

$c_post_content_result=mysql_query($c_sql_query);

if ($c_post_content_result || mysql_num_rows($c_post_content_result) > 0) {

    while($c_content_puller=mysql_fetch_assoc($c_post_content_result)){


        $_id = $c_content_puller['sport_id'];



        $query= "SELECT * FROM `sport` WHERE sport_id = '$_id'  ";

        $result=mysql_query($query);

        if ($result || mysql_num_rows($result) > 0) {

            while($puller=mysql_fetch_assoc($result)) {


                echo $sport_title = $puller['sport_title'];

                $add_sql = "select * FROM `players` WHERE sport_id = '$_id' ";

                $add_result = mysql_query($add_sql);
                $rows = array();
               /* while($rows[] = mysql_fetch_array($add_result)) ;
                {


                    // print_r( $rows );
                    foreach ($rows as $row) {
                        $player_username = $row['player_username'];
                        // echo $row['player_username'] .'  '. $row['sport_id'] .'<br>';
                        echo $player_username . '<br>';
                        if (!empty($player_username)) {*/

                            $events = "INSERT INTO events(game, team_game, game_date, game_time, game_venue, created_at, updated_at )
								
												VALUES('$sport_title', '$teams', '$gamedate', '$time', '$venue', '$created_at', '$updated_at')";

                            $query = "INSERT INTO `notifications` (`id`, `name`, `type`, `message`, `status`, `date`) VALUES (NULL, '$player_username', 'comment', 'there is a new $sport_title event', 'unread', CURRENT_TIMESTAMP)";


                            $sqlevents = mysql_query($events);
                            $sqlnot = mysql_query($query);



                        if ($sqlevents && $sqlnot) {
                            echo " the match was added Successfully ";
                            //header("location: http://localhost/kaesa/login/?p=newevent");
                            // header( "refresh:20;url=http://localhost/kaesa/login/?p=newevent" );
                            // exit;

                            header("location: http://localhost/kaesa/login/?p=newevent&addevent=success");
                             exit();
                        } else {
                            echo "Not Successful" . mysql_error();
                            //header("location: http://localhost/kaesa/login/?p=pP10001");
                            header("location: http://localhost/kaesa/login/?p=newevent&addevent=failed");
                            exit();

                        }
                        }

                  /*  }
                }
            }*/
        }else{
            header('Location: http://localhost/kaesa/');
        }


    }
}else{
    header('Location: http://localhost/kaesa/');
}





