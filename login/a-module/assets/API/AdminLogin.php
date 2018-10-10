<!DOCTYPE html>

<?php
/*
The Following Code has been created and is the Sole Property of TRIOPOINT IT SOLUTIONS.
Any Modifications made to the code to improve or change functionality are allowed on condition
 That they maintain the above licence statement giving credit to the creators of this library:
 .................................
 CREDITS:
1. KAESA EDWIN
 .................................
*/
include ('config/config.php');
require ('core.inc.php');


						
						/*error_reporting(0);
						ini_set("display_errors","off");*/
						$admin_username=$_POST['admin_username']; 
						$admin_password=$_POST['admin_password'];
						$token = md5($admin_username);
						
						
						if(trim($_POST['admin_username']) == "" && trim($_POST['admin_password']) ==""){

				  
				   $_SESSION['error'] = 'Fields cannot be empty!';
				   echo"<meta http-equiv='refresh' content='0;url=index.php'>";
				   exit();
				}
				else{
						
						$sql="SELECT admin_username, admin_password FROM admin_credentials 
										
											WHERE admin_username='$admin_username' and admin_password='$admin_password' "; 
							
							$result=mysql_query($sql);
							
							if(!$result || mysql_num_rows($result) <= 0){
							
							
								//echo"Incorrect Login".mysql_error();
								echo"<meta http-equiv='refresh' content='0;url=http://localhost/kaesa/login/a-module/?Message=HU879oisdnfsdnkjNKJDSNCDnkjndKJNkjnkNJbiujkkbJKbkBkbJkkIKBJHUgiujhg7yu87ygyuGygTDERDredyTGyuVyvyfTuvbYTfftVtftf6757ftYCYct'>";
							}
							else
							{
							//echo"Welcome $admin_username, Correct Login";
							
							$_SESSION['admin_username'] = $admin_username;
							
							
							
							echo"<meta http-equiv='refresh' content='0;url=http://localhost/kaesa/login/a-module/TFYUVujhbytf-GJBubuTFYTyuv_VYVvyJhbh6787VhgvYTCtfvhgVygtchgVGhchc.php?BKJBJB8ynkjnkjb9IUHnjkH8Hbbh8=21232f297a57a5a743894a0e4a801fc3&NINknnknKNIInkjnJNkNkj=BKJBJB8ynkjnBKJBJB8ynkjn&knNNknnknNKJNKnk=BKJBJBBKJBJB8ynkjn8ynkjn'>";
}
}

?>