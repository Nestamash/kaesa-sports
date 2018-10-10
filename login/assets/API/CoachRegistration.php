<?php
			include ('config/config.php');
			include ('CoachProfilePicUpload.php');
					
					/*error_reporting(0);
					ini_set("display_errors","off");*/

					$coach_username=$_POST['coach_username']; 
					$coach_f_name=$_POST['coach_f_name'];
					$coach_l_name=$_POST['coach_l_name'];
					$sport=$_POST['sport'];
					$pass = $_POST['coach_password'];

					$salt = 'Jjkjkbjk&%^*tgyT*87gBkvVFYU&^r7fKUgjh';
					$coach_password = sha1($salt.$pass);
					
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
					
					
					if(trim($_POST['coach_username']) == "" && trim($_POST['coach_f_name']) =="" && trim($_POST['coach_l_name']) ==""){

				  
				   $_SESSION['error'] = 'Fields cannot be empty!';
				   echo"<meta http-equiv='refresh' content='0;url=http://localhost/kaesa/login/?pP10001'>";
				   exit();
				}
				else{
					
					$coachRegistrationQuery ="INSERT INTO coach(coach_username, coach_f_name, coach_l_name, coach_profile_pic, sport_id )
								
												VALUES('$coach_username', '$coach_f_name', '$coach_l_name', '$target_file_name', '$sport_id')";
												
					$coachRegistrationCredentialsQuery ="INSERT INTO coach_credentials(coach_username, coach_password)
								
												VALUES('$coach_username', '$coach_password')";
												
												
					$coachRegistrationQueryResult 				= 	mysql_query($coachRegistrationQuery);
					$coachRegistrationCredentialsQueryResult 	= 	mysql_query($coachRegistrationCredentialsQuery);
					
					
					if($coachRegistrationQueryResult && $coachRegistrationCredentialsQueryResult){
					//echo"Success     jhhjjjjjjjjjjj ";
					//header("location: http://localhost/kaesa/login/?p=pP10006");

                        header("location: http://localhost/kaesa/login/?p=pP10006&coach=success");


                        exit();
					}
					
					else{
					//echo"Not Successful".mysql_error();
					//header("location: http://localhost/kaesa/login/?p=pP10001");
                        header("location: http://localhost/kaesa/login/?p=pP10006&coach=failed");
                        exit();
					}
					}
?>