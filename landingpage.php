<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" href="../../../../favicon.ico">


    <title>kaesa-sports</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/landingpage.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="boots3/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#flash-msg").delay(4000).fadeOut("slow");
        });

    </script>
    <style>
        .notice {
            margin: auto;
            width: 60%;
            background-color: ;
            padding: 10px;
        }
        .nb{
            margin: auto;
            width: 60%;

            padding: 10px;
            background-color: white;

        }
        ul{
            background: white;
            list-style-type: circle;
            margin: 0;
            padding: 0;
        }
        li {
            font-family: "Times New Roman", Times, serif;
            text-align: center;
            font-style: italic;
        }

        li:last-child {
            border: none;
        }

    </style>
</head>

<body class="text-center">
<div class="notice">
    <div class="nb">
    <h1>welcome to jkuat sports noticeboard</h1>
        <ul>
            <li>make sure your email address is active</li>
            <li>login using your student email address</li>
            <li>login using your staff email address  </li>

        </ul>

    </div>



<form action='login/assets/API/members.php' class="form-signin" method="post">
    <img class="mb-4" src="images/t.jpg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="username" name="username" class="form-control" placeholder="Email address" required autofocus><br>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>

</form>
    <?php
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if(strpos($url, "login=success") == true){
        echo "the player has been registered succefully";
        exit();
    }elseif (strpos($url, "login=failed") == true) {
        echo "<div id='flash-msg' class=\"alert alert-danger alert-dismissible\"> 
<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
<strong>Failed!</strong> Wrong username or password";
        exit();
    } elseif (strpos($url, "addevent=success") == true) {
        echo "the match was added Successfully";
        exit();
    }elseif (strpos($url, "addevent=failed") == true) {
        echo "there was an error adding the event try again";
        exit();
    }
    ?>


</div>
</body>
</html>
