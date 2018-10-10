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

$host="localhost";
$username="root"; 
$password="";
$db_name="kaesa-sports"; 


// Connect to server and select database. 
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB"); 

//mysql_close(); 
?>
