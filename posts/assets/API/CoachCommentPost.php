<?php
			include ('config/config.php');
					
					error_reporting(0);
					ini_set("display_errors","off");

					$player_username=$_POST['player_username']; 
					$sport_id=$_POST['sport_id'];
					$post_id=$_POST['post_id'];
					$comment_type=$_POST['comment_type'];
					$comment_content=$_POST['comment_content'];
					
					
					
					if(trim($_POST['player_username']) == "" && trim($_POST['comment_content']) =="" && trim($_POST['post_id']) ==""){

				  
				   $_SESSION['error'] = 'Fields cannot be empty!';
				   echo"<meta http-equiv='refresh' content='0;url=http://localhost/kaesa/login/?pP10001'>";
				   exit();
				}
				else{
					
					$CommentPostQuery ="INSERT INTO comments(player_username, sport_id, post_id, comment_type, comment_content )
								
												VALUES('$player_username', '$sport_id', '$post_id', '$comment_type', '$comment_content')";
		
					$CommentPostQueryResult 	= 	mysql_query($CommentPostQuery);
					
					
					if($CommentPostQueryResult){
					//echo"Success";
					
	echo"<meta http-equiv='refresh' content='0;url=http://localhost/kaesa/posts/a-posts-coach-board.php?BKJBJB8ynkjnkjb9IUHnjkH8Hbbh8=21232f297a57a5a743894a0e4a801fc3&NINknnknKNIInkjnJNkNkj=".$player_username."&knNNknnknNKJNKnk=".$sport_id."'>";				
	
					}
					
					else{
					echo"Not Successful".mysql_error();
					//header("location: http://localhost/kaesa/login/?p=pP10001");
					}
					}
?>