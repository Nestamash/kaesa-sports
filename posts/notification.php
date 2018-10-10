<!DOCTYPE html>
<html>
<head>

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

<li class="nav-item dropdown"
<li class="nav-item dropdown "
<a><img src="images/img.png" alt="Trolltunga Norway" style="width: 21px;">
    <?php
    $query = "SELECT * from `notifications` where `status` = 'unread' AND `name` = '$_pu' order by `date` DESC";
    if(count(fetchAll($query))>0){
        ?>
        <span class="badge badge-light"><?php echo count(fetchAll($query)); ?></span>
        <?php
    }
    ?>
</a>
<div class="dropdown-menu" aria-labelledby="dropdown01">
<?php

$query = "SELECT * from `notifications` where `name` = '$_pu' order by `status`='unread' DESC limit 7";
if(count(fetchAll($query))>0){
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
                echo $i['message'];
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
</body>
</html>


