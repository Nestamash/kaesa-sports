

<?php
/*$_SESSION['success']= array("unauthorised access");
header("location:" .$_SERVER['HTTP_REFERER']);
die(); exit();
*/

function _printMessages()
{

    if (isset($_POST['player_username']) == "" || isset($_POST['player_password']) == "") {


        header("location: http://localhost/kaesa/login/user_test.php?player=success");
        exit();
    }else{

    }
}
