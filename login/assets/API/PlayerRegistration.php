<?php
			include ('config/config.php');
			include ('PlayerProfilePicUpload.php');
					
					error_reporting(0);
					ini_set("display_errors","off");

					$player_username=$_POST['player_username']; 
					$player_f_name=$_POST['player_f_name'];
					$player_l_name=$_POST['player_l_name'];
					$sport=$_POST['sport'];
					$pass = $_POST['player_password'];

					$salt = 'Jjkjkbjk&%^*tgyT*87gBkvVFYU&^r7fKUgjh';
					$player_password = sha1($salt.$pass);
					
					switch($sport){
					
					case "Football";
						$sport_id = 1;
						
						break;
						
					case "American Football";
					
						$sport_id = 2;
						
						break;
					case "Volley Ball";
					
						$sport_id = 3;
						
						break;
					case "Basket Ball";
					
						$sport_id = 4;
						
						break;
					case "Athletics";
					
						$sport_id = 5;
						
						break;
						
					case "Chess";
					
						$sport_id = 6;
						
						break;
						
					case "Scrabble";
					
						$sport_id = 7;
						
						break;
						
					case "Skating";
					
						$sport_id = 8;
						
						break;
					case "Swimming";
					
						$sport_id = 9;
						
						break;
						
					case "Table Tennis";
					
						$sport_id = 10;
						
						break;
						
					case "Loan Tennis";
					
						$sport_id = 11;
						
						break;
					default:
						
						$sport_id = 0;
					}
					
					
					if(trim($_POST['player_username']) == "" && trim($_POST['player_f_name']) =="" && trim($_POST['player_l_name']) ==""){

				  
				   $_SESSION['error'] = 'Fields cannot be empty!';
				   echo"<meta http-equiv='refresh' content='0;url=http://localhost/kaesa/'>";
				   exit();
				}
				else{
					
					$playerRegistrationQuery ="INSERT INTO players(player_username, player_f_name, player_l_name, player_profile_pic, sport_id )
								
												VALUES('$player_username', '$player_f_name', '$player_l_name', '$target_file_name', '$sport_id')";
												
					$playerRegistrationCredentialsQuery ="INSERT INTO player_credentials(player_username, player_password)
								
												VALUES('$player_username', '$player_password')";
												
												
					$playerRegistrationQueryResult 				= 	mysql_query($playerRegistrationQuery);
					$playerRegistrationCredentialsQueryResult 	= 	mysql_query($playerRegistrationCredentialsQuery);
					
					
					if($playerRegistrationQueryResult && $playerRegistrationCredentialsQueryResult){
					//echo"Success";
					//header("location: http://localhost/kaesa/login/?p=pP10002");

                     //   header("location:" .$_SERVER['HTTP_REFERER']);

                        //echo "<script>alert('the registration was successful and you can now log in !');</script>";


                       // header( "refresh:5;url=http://localhost/kaesa/login/?p=pP10002" );


                        header("location: http://localhost/kaesa/login/?p=pP10002&register=success");
                        exit();
                       // header("location: http://localhost/kaesa/login/coach_players.php?register=success ");
                       // exit();
					
					}
					
					else{
                        header("location: http://localhost/kaesa/login/?p=pP10002&register=failed");
                        exit();
					//echo"Not Successful".mysql_error();
					//header("location: http://localhost/kaesa/login/?p=pP10002");
					}
					}
?>