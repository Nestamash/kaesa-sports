<?php
			include('config/config.php');
			include ('AddNewPostUploader.php');
					
					error_reporting(0);
					ini_set("display_errors","off");

					$coach_username=$_POST['coach_username']; 
					$sport_id=$_POST['sport_id'];
					$post_title=$_POST['post_title'];
					$post_content=$_POST['post_content'];
					
				
					
					
					if(trim($_POST['coach_username']) == "" && trim($_POST['sport_id']) =="" && trim($_POST['post_title']) =="" && trim($_POST['post_content']) ==""){

				  
				   $_SESSION['error'] = 'Fields cannot be empty!';
				   echo"<meta http-equiv='refresh' content='0;url=http://localhost/kaesa/login/?pP10001'>";
				   exit();
				}
				else {

                    $add_sql = "select * FROM `players` WHERE sport_id = '$sport_id' ";

                    $add_result = mysql_query($add_sql);
                    $rows = array();
                    while ($rows[] = mysql_fetch_array($add_result)) ;
                    {


                        // print_r( $rows );
                        foreach ($rows as $row) {
                            $player_username = $row['player_username'];
                            // echo $row['player_username'] .'  '. $row['sport_id'] .'<br>';
                          //  echo $player_username . '<br>';


                            // if($add_result ) {
                            //  while ($add_result = mysql_fetch_assoc($add_result)) {

                            // echo   $_PlayerUsername = $add_result['player_l_name'] .'<br>';
                            // echo  $_PlayerFName = $add_result['player_f_name'].'<br>';
                            //  echo  $_PlayerFName = $add_result['sport_id'].'<br>';}}

                            if (!empty($player_username)) {

                                $sql = "INSERT INTO `notifications` (`id`, `name`, `type`, `message`, `status`, `date`) VALUES (NULL, '$player_username', 'comment', 'coach added a new post $post_content  ', 'unread', CURRENT_TIMESTAMP)";


                                $sqlresult = mysql_query($sql);
                            }}}
                    $postUploadQuery = "INSERT INTO posts(coach_username, sport_id, post_title, post_image_name, post_content )
								
							
						  					VALUES('$coach_username', '$sport_id', '$post_title', '$target_file_name', '$post_content')";

                    $postUploadQueryResult = mysql_query($postUploadQuery);

                            if ($sqlresult && $postUploadQueryResult) {
                               // echo "success";
                                //header("location: http://localhost/kaesa/login/?p=pP10001");
                              echo"<meta http-equiv='refresh' content='0;url=http://localhost/kaesa/posts/a-posts-coach-board.php?BKJBJB8ynkjnkjb9IUHnjkH8Hbbh8=21232f297a57a5a743894a0e4a801fc3&NINknnknKNIInkjnJNkNkj=".$coach_username."&knNNknnknNKJNKnk=".$sport_id."'>";


                            }


                            return  mysql_error($postUploadQuery);
                            //header("location: http://localhost/kaesa/posts/assets/API/logout.coach.inc.php");
                        }




