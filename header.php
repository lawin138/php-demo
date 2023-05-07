<?php
session_start();
include "./stock.php"; 
include "./dbConnect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>   
    <link rel="stylesheet" href="./all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>美麗鐘錶</title>
</head>

<body>
    <div class="wrap">
            <div class="nav">
                <ul class="clientMenu">
                    <li><a href="./index.php">首頁</a></li>
                    <li><a href="./about.php">關於</a></li>
                   
                        
                </ul>
                <ul class="clientMenu-1">
                    <?php
                    if($_SESSION)
                    {
                        echo'
                        <li class="clientWord"><a href="./allOrders.php">所有訂單</a></li>
                        <li class="clientWord"><a href="./function.php?0p=logout">登出</a></li>';
                    }
                    else
                    {
                        echo '<li class="logIn"><a href="./login.php">職員登入</a></li>';
                    }
                    ?>
                </ul>
                <br/>
             <div class="social-bar">
            <img src="./image/FB.png"  alt="#">
            <span><a href="#">join-us</a></span>

            <img src="./image/twitter.png "  alt="#">
            <span><a href="#">join-us</a></span>

            <img src="./image/instagrem.png"  alt="#">
            <span><a href="#">join-us</a></span>

            <img src="./image/line.png" alt="#">
            <span><a href="#">join-us</a></span>
            </div>
            <div class="postPic">
           </div>
           <br/>
        </div>
        


         
