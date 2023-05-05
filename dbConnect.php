<?php

$dbConnection = mysqli_connect("localhost", "root", "" ,"php_jewelly");

//檢查連線是否成功
 if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL:" .mysqli_connect_error();
    exit();
}

//echo "成功連線"; 

//要把文字,中文編碼加上utf8
mysqli_set_charset($dbConnection, "utf8");



