<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link href="boots3/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="boots3/css/style.css" />
    <script src="boots3/js/bootstrap.min.js"></script>

    <style>
        .nav-item dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 12px 16px;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }
        .dropdown-menu a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-menu a:hover {background-color: #f1f1f1}
        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
        .dropdown-menu {
            right: 0;
        }
        li a, .dropbtn {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        li a:hover, .dropdown:hover .dropbtn {
            background-color: #009690;
        }
        li.dropdown {
            display: inline-block;
        }
        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }
        .badge {
            color: #FF0000;

        }


    </style>

</head>
<body>
<li class="nav-item dropdown "
<a><img src="images/img.png" alt="Trolltunga Norway" style="width: 21px;">

<?php
include ('config/config.php');
if (isset($_POST['login']) && !empty($_POST['username'])
&& !empty($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
}

    $query = "SELECT * from `notifications` where `status` = 'unread' && 'name'='$username' order by `date` DESC";
    if(count(fetchAll($query))>0){

        ?>
        <span class="badge badge-light" id="badge"><?php echo count(fetchAll($query)); ?></span>
        <?php
    }
    ?>
</a>
<div class="dropdown-menu" aria-labelledby="dropdown01">

    <?php
    $query = "SELECT * from `notifications` where 'name'='$username' order by `status` DESC limit 7";
    if(count(fetchAll($query))>2){
        //$second_count=count(fetchAll($query));
        foreach(fetchAll($query) as $i){
            ?>
            <a style ="

            <?php
            if($i['status']=='unread'){
                echo "font-weight:bold;";
            }
            ?>
                    " class="dropdown-item" href="view.php?id=<?php echo $i['id'] ?>">
                <small><i><?php echo date('F j, Y, g:i a',strtotime($i['date'])) ?></i></small><br/>
                <?php


                if($i['type']=='comment'){
                    echo "Someone commented on your post.";

                }else if($i['type']=='like'){
                    echo ucfirst($i['name'])." liked your post.";
                }

                ?>
            </a>

            <div class="dropdown-divider"></div>
            <?php
        }
    }else{
        echo "No Records yet.";
    }
    ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="boots3/js/bootstrap.min.js"></script>
</body>
</html>


