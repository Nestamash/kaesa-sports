<!DOCTYPE HTML>

<html>
	<head>
		<title>Sports NoticeBoard</title>
		<meta http-equiv='content-type' content='text/html; charset=utf-8' />
		<meta name='description' content='' />
		<meta name='keywords' content='' />
		<link rel='shortcut icon' href='images/Football_Ball.png' type='image/x-icon'>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700italic,400,300,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src='js/html5shiv.js'></script><![endif]-->
		<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
		<script src='js/skel.min.js'></script>
		<script src='js/skel-panels.min.js'></script>
		<script src='js/init.js'></script>
		<noscript>
			<link rel='stylesheet' href='css/style.css' />
			<link rel='stylesheet' href='css/skel-noscript.css' />
			<link rel='stylesheet' href='css/style-desktop.css' />
		</noscript>
		<!--[if lte IE 8]><link rel='stylesheet' href='css/ie/v8.css' /><![endif]-->
		<!--[if lte IE 9]><link rel='stylesheet' href='css/ie/v9.css' /><![endif]-->
		<script>
     var time = new Date().getTime();
     $(document.body).bind("mousemove keypress", function(e) {
         time = new Date().getTime();
     });

     function refresh() {
         if(new Date().getTime() - time >= 60000) 
             window.location.reload(true);
         else 
             setTimeout(refresh, 10000);
     }

     setTimeout(refresh, 10000);
</script>
	</head>
	<body class='homepage'>

	<!-- Header -->
		<div id='header'>
			<div class='container'>
					
				<!-- Logo -->
					<div id='logo'>
						<h1><a href='#'>The NoticeBoard</a></h1>
					</div>
<?php

include ('assets/include/config.inc/config.php');
require ('assets/API/core.inc.php');

if (isset ($_SESSION['username']) && !empty ($_SESSION['username'])){
		
		$_pu = $_SESSION['username'];
		}
else {
		header('location:http://localhost/kaesa/login/?p=pP10002');
		die();
}

		//$_pu = $_GET['NINknnknKNIInkjnJNkNkj'];
		$_pp = 'NINknnknKNIInkjnJNkNkj3knNNknnknNKJNKnk';
		$_si = $_GET['knNNknnknNKJNKnk'];
		$_kt = $_GET['BKJBJB8ynkjnkjb9IUHnjkH8Hbbh8'];
		
		switch($_pu){
			case "";
				header('location:http://localhost/kaesa/login/?p=pP10002');
			break;
			
			default:
				break;
				
			}
			
			switch($_si){
			case "";
				header('location:http://localhost/kaesa/login/?p=pP10002');
			break;
			
			default:
				break;
				
			}
			
			switch($_kt){
			case "";
				header('location:http://localhost/kaesa/login/?p=pP10002');
			break;
			
			case "21232f297a57a5a743894a0e4a801fc3";
			break;
			
			default:
				header('location:http://localhost/kaesa/login/?p=pP10002');
				
			}
		
		$player_sql_query= "SELECT * FROM `players` WHERE player_username = '$_pu'  ";
									
									$player_post_content_result=mysql_query($player_sql_query);
									
									if ($player_post_content_result || mysql_num_rows($player_post_content_result) > 0) {
									
									while($player_content_puller=mysql_fetch_assoc($player_post_content_result)){
											
											$_PlayerFName = $player_content_puller['player_f_name'];
											$_PlayerProfilePicNameInitializer = $player_content_puller['player_profile_pic'];
											//$_PlayerProfilePicExtInitializer = $player_content_puller['player_profile_pic_ext'];
									
									}
								}else{
									header('Location: http://localhost/kaesa/');
								}
?>							
									<!-- Nav -->
					<nav id='nav'>
						<ul>
							<li class='active'> <a href=''><img src='http://localhost/kaesa/login/assets/API/uploads/<?php echo"$_PlayerProfilePicNameInitializer";?>' id="p-pic" alt='Fred' title='<?php echo"$_PlayerFName ";?>'></a></li>
							<li class='active'><a href=''>HELLO <?php echo"$_PlayerFName ";?></a></li>
                            <li><a href='http://localhost/kaesa/login/main_team.php'>main team</a></li>
                            <li><a href='http://localhost/kaesa/login/my_moneyplayer.php'>my money</a></li>
<li><a>  <?php
        include("functions.php");
        include("notification.php");


        ?></a></li>

							<li><a href='http://localhost/kaesa/posts/assets/API/logout.player.inc.php'>LOGOUT</a></li>
						</ul>
					</nav>

			</div>
		</div>
	<!-- Header -->
<?php	
		
		$coach_sql_query= "SELECT * FROM `coach` WHERE sport_id=$_si  ";
									
									$coach_post_content_result=mysql_query($coach_sql_query);
									
			if ($coach_post_content_result || mysql_num_rows($coach_post_content_result) > 0) {
									
				while($coach_content_puller=mysql_fetch_assoc($coach_post_content_result)){
											
									$_CoachFNameInitializer = $coach_content_puller['coach_f_name'];
									$_CoachProfilePicNameInitializer = $coach_content_puller['coach_profile_pic'];
									$_CoachProfilePicExtInitializer = $coach_content_puller['coach_profile_pic_ext'];
									}
									}
									
		$sportName_sql_query= "SELECT * FROM `sport` WHERE sport_id=$_si  ";
									
									$sportName_content_result=mysql_query($sportName_sql_query);
									
			if ($sportName_content_result || mysql_num_rows($sportName_content_result) > 0) {
									
				while($sportName_content_result_puller=mysql_fetch_assoc($sportName_content_result)){
											
									$_SportName = $sportName_content_result_puller['sport_title'];
									
									}
									}else{
										$_SportName = '0 Results';
									}
									
									
		$content_sql_query= "SELECT * FROM `posts` WHERE sport_id=$_si ORDER BY post_id DESC LIMIT 0, 10";
									
									$post_content_result=mysql_query($content_sql_query);
									
			if (!$post_content_result) {
									$_PostId = '0 Results';
									$_PostContent='0 Results';
									$_PostTitle='0 Results';
									$_PostTime='0 Results';
									$_CoachUsername='0 Results';
									$_CoachFName = '0 Results';
									$_CoachProfilePicName = '0 Results';
									$_CoachProfilePicExt = '0 Results';
									$_PostPicName= '0 Results';
									$_PostPicExt= '0 Results';
			}
			
			else if($post_content_result || mysql_num_rows($post_content_result) > 0){
			
				while($content_puller=mysql_fetch_assoc($post_content_result)){
									
									$_PostId = $content_puller['post_id'];
									$_PostContent = $content_puller['post_content'];
									$_PostTitle = $content_puller['post_title'];
									$_PostTime = $content_puller['post_time'];
									$_CoachUsername = $content_puller['coach_username'];
									$_PostPicName = $content_puller['post_image_name'];
									//$_PostPicExt = $content_puller['post_image_ext'];
									$_CoachFName = $_CoachFNameInitializer;
									$_CoachProfilePicName = $_CoachProfilePicNameInitializer;
									//$_CoachProfilePicExt = $_CoachProfilePicExtInitializer;
									

?>
			

	<!-- Main -->
		<div id='page'>
					<h1 align='center'> <?php echo"$_SportName";?> PLAYER'S BOARD</h1>
			<!-- Extra -->
			
			<div id='marketing' class='container'>
				<div id='card' class='container'>
					<a href=''><img src='http://localhost/kaesa/login/assets/API/uploads/<?php echo"$_CoachProfilePicName";?>' id="p-pic" class='profile_pic'  alt='Fred' title='<?php echo"$_CoachFName";?>'></a>
						<p class='posting_name'><b> <?php echo"$_CoachFName";?> </b> <span class='posting_name_tile'>- Coach </span> <hr> 
						<img src='http://localhost/kaesa/login/assets/API/uploads/<?php echo"$_PostPicName";?>' id='post_pic' alt='Football'>
							<h2><b> <?php echo"$_PostTitle";?> </b></h2>
							<h4> POSTED AT: <?php echo"$_PostTime ";?></h4>
							<p>
							<?php echo"$_PostContent ";?>
							</p>
							
							<h3><b> Comments and Feedback </b></h3>
							<hr>
							
							<?php
						$comment_sql_query= "SELECT * FROM `comments` WHERE sport_id=$_si AND post_id = $_PostId ORDER BY comment_id ASC LIMIT 0, 20";

									$post_comment_result=mysql_query($comment_sql_query);
									
									if (!$post_comment_result) {
									$_CommentId = '0 Results';
									$_PlayerUsername = '0 Results';
									$_CommentContent = '0 Results';
									$_CommentTime = '0 Results';
									}
						else if($post_comment_result || mysql_num_rows($post_comment_result) > 0) {


                            while ($comment_puller = mysql_fetch_assoc($post_comment_result)) {

                                $_CommentId = $comment_puller['comment_id'];
                                $_CommentPlayerUsername = $comment_puller['player_username'];
                                $_CommentContent = $comment_puller['comment_content'];
                                $_CommentTime = $comment_puller['comment_time'];
                                $_CommentType = $comment_puller['comment_type'];

                                $post_id = $comment_puller['post_id'];




                                echo "
							<div id=$_PostId><div id='$_CommentType'>
							<span> <img src='assets/profiles/default-profile-pic-lady.png'> 
							<h4><b> $_CommentPlayerUsername </b></h4></span>
							<p> $_CommentContent </p>
							<label>Posted at: $_CommentTime</label>
							</div></div>";

                            }

                        }

							?>

							
							<!--Form, Message Back-->
							<div id="last-comment">
							<form method='post' id = "styled-form" action ='assets/API/PlayerCommentPost.php'>
							<h4>Leave a Comment here</h4>
							<input type='hidden' name='player_username' value='<?php echo"$_PlayerFName ";?>'>
							<input type='hidden' name='sport_id' value='<?php echo"$_si";?>'>
							<input type='hidden' name='post_id' value='<?php echo"$_PostId ";?>'>
							<input type='hidden' name='comment_type' value='comment'>
							<textarea name='comment_content' required id='styled' maxlength='150' placeholder='<?php echo"$_PlayerFName, ";?> enter your comment here...'></textarea>
							<button type='submit' id='styled-button' value='SEND MESSAGE'>SEND MESSAGE</button><br>
							</form>
							</div>
							<!--End Of Form -->
					</div>
				<!--Important Styling, Break Between DIVs Begin-->
					<br><br>
				<!--Important Styling, Break Between DIVs End-->
			<!-- /Extra -->
			</div>
			
			<!-- Main -->
		</div>
		<?php }} ?>

<div id='page'  style="background-color:#EEE;">
<h1 align='center'> <?php echo"$_SportName";?> PLAYER'S BOARD</h1>
	<div id='marketing' class='container' >
	<br><br><br>
				<div id='card' class='container'>
				
				<h4>NO POSTS YET</h4>
				<p>The Coach has not yet sent out any more posts.  </p>
				</div>
				</div>
				</div>
	<!-- Copyright -->
		<div id='copyright' class='container'>
			SPORTS NOTICEBOARD - EDWIN KAESA - ALL RIGHTS RESERVED &COPY; 2016
		</div>


	</body>
</html>