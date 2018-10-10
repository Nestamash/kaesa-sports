<?php
include ('config/config.php');
include ('AddNewPostUploader.php');



$title=$_POST['title'];
$content=$_POST['content'];




    $coachRegistrationQuery ="INSERT INTO articles(title, content, article_image )
								
												VALUES('$title', '$content', '$target_file_name')";



    $coachRegistrationQueryResult 				= 	mysql_query($coachRegistrationQuery);


    if($coachRegistrationQueryResult){

      header("location: http://localhost/kaesa/login/?p=pP10009&article=success");

       exit();
    }

 else{
      echo mysql_error();
  //header("location: http://localhost/kaesa/login/?p=pP10009&article=failed");
     // exit();

}
?>