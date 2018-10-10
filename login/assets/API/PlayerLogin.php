<!DOCTYPE html>

<?php
/*
The Following Code has been created and is the Sole Property of TRIOPOINT IT SOLUTIONS.
Any Modifications made to the code to improve or change functionality are allowed on condition
 That they maintain the above licence statement giving credit to the creators of this library:
 .................................
 CREDITS:
 1. ALEX WOKABI (GREATS)
 2.	JACKSON MUTUA
 3. FREDRICK MWANGI
 .................................
*/
include ('config/config.php');
require ('core.inc.php');

						
						/*error_reporting(0);

						ini_set("display_errors","off");*/
						$player_username = $_POST['player_username'];
						$pass = $_POST['player_password'];
						$token = md5($player_username);

						$salt = 'Jjkjkbjk&%^*tgyT*87gBkvVFYU&^r7fKUgjh';
						$player_password = sha1($salt.$pass);

						
						if(trim($_POST['player_username']) == "" || trim($_POST['player_password']) ==""){

				  
				   $_SESSION['error'] = 'Fields cannot be empty!';
				   echo"<meta http-equiv='refresh' content='0;url=index.php'>";
				   exit();
				}
				else{
						
						$sql="SELECT player_username, player_password FROM player_credentials 
										
											WHERE player_username='$player_username' and player_password='$player_password' "; 
							
							$result = mysql_query($sql);
							
						
							if(!$result || mysql_num_rows($result) <= 0){
							
							
								//echo"Incorrect Login";
								echo"<meta http-equiv='refresh' content='0;url=http://localhost/kaesa/login/?p=pP10002&Message=HU879oisdnfsdnkjNKJDSNCDnkjndKJNkjnkNJbiujkkbJKbkBkbJkkIKBJHUgiujhg7yu87ygyuGygTDERDredyTGyuVyvyfTuvbYTfftVtftf6757ftYCYct'>";
							}
							else
							{
							//echo"Welcome $coach_username, Correct Login";
							
							$_SESSION['username'] = $player_username;
							
							$_url_sql="SELECT * FROM players WHERE player_username='$player_username' "; 
							
							$_url_result=mysql_query($_url_sql);
										
								while($_url_result_puller=mysql_fetch_assoc($_url_result)){
									
									$_si=$_url_result_puller['sport_id'];
									
							
//header('location:http://localhost/kaesa/posts/?BKJBJB8ynkjnkjb9IUHnjkH8Hbbh8=21232f297a57a5a743894a0e4a801fc3&NINknnknKNIInkjnJNkNkj=$player_username&knNNknnknNKJNKnk=$_si');
			
			echo"<meta http-equiv='refresh' content='0;url=http://localhost/kaesa/posts/?BKJBJB8ynkjnkjb9IUHnjkH8Hbbh8=21232f297a57a5a743894a0e4a801fc3&NINknnknKNIInkjnJNkNkj=".$player_username."&knNNknnknNKJNKnk=".$_si."'>";
			
}
}
}
