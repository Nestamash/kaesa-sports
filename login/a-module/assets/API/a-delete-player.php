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

if (isset ($_SESSION['admin_username']) && !empty ($_SESSION['admin_username'])){
		
		$_pu = $_SESSION['admin_username'];
		}
else {
		header('location:http://localhost/kaesa/login/a-module/');
		die();
}
						
						error_reporting(0);
						ini_set("display_errors","off");
						
						$player_username = $_GET['player_username'];
						
						if(trim($_GET['player_username']) == "" ){

				  
				   $_SESSION['error'] = 'Fields cannot be empty!';
				   echo"<meta http-equiv='refresh' content='0;url=http://localhost/kaesa/login/a-module/'>";
				   exit();
				}
				else{
						
						$delete_sql = "DELETE FROM `players` WHERE player_username = '$player_username' "; 
							
							$delete_result=mysql_query($delete_sql);
							
						$credentials_delete_sql = "DELETE FROM `player_credentials` WHERE player_username = '$player_username' "; 
							
							$credentials_delete_result = mysql_query($credentials_delete_sql);
							
							if(!$delete_result || !$credentials_delete_result){
							
								echo"Could Not Delete".mysql_error();
							}
							else
							{
							//echo"Delete Successful";
							echo"<meta http-equiv='refresh' content='0;url=http://localhost/kaesa/login/a-module/TFYUVujhbytf-GJBubuTFYTyuv_VYVvyJhbh6787VhgvYTCtfvhgVygtchgVGhchc.php?BKJBJB8ynkjnkjb9IUHnjkH8Hbbh8=21232f297a57a5a743894a0e4a801fc3&NINknnknKNIInkjnJNkNkj=BKJBJB8ynkjnBKJBJB8ynkjn&knNNknnknNKJNKnk=BKJBJBBKJBJB8ynkjn8ynkjn&players?playerdelete=success'>";
}
}

?>