<?php
include_once "./dbConnect.php";

$op = 'none';
if (isset($_GET['op'])) $op = $_GET['op'];

if($op == 'createOrder') 
{
    createOrder();
}
if($op == 'checkLogin') 
{
    checkLogin($_POST['email'], $_POST['password']);
}
if($op == 'logout') 
{
    logout();
}function isStaff()
{
    return isset($_SESSION['email']);
}
function logout()
{
    session_start();
    session_destroy();
    header("Location:./index.php");
}


function checkLogin($email, $password)
{
   /* global $dbConnection;
   $staffQ = mysqli_query($dbConnection, "SELECT * FROM `staff` WHERE `email` = '".$email."'");
   $staff = mysqli_fetch_assoc($staffQ); */
 $staffEmail     =  "lawin19699@gmail.com";
$staffPassword  =  "lawin42611";   

 if($email == $staffEmail && $staffPassword == $password)
 {
    session_start();
    $_SESSION['email'] = $email;

    header("Location:./allOrders.php");
 }
 else{
    header("Location:./login.php");
 }
}
function createOrder(){
 /* global $dbConnection;

    $sql = "INSERT INTO `php_gem`.`order` (
        `client_name`, 
        `client_email`,
         `quantity`, 
         `order_time`, 
         `gem_id`
         ) VALUES (
         '{$_POST['name']}', 
         '{$_POST['email']}',
         {$_POST['quantity']}, 
         '" . date('Y-m-d H:i:s') . "',
         {$_POST['gem_id']})";


    $sql = "INSERT INTO `php_morepic`.`order` (
        `client_name`, 
        `client_email`,
         `quantity`, 
         `order_time`, 
         `morepic_id`
         ) VALUES (
         '{$_POST['name']}', 
         '{$_POST['email']}',
         {$_POST['quantity']}, 
         '" . date('Y-m-d H:i:s') . "',
         {$_POST['morepic_id']})";
    

         if(mysqli_query($dbConnection, $sql))
         {
            header("Location:./order-completed.php");
         }
         else{
            header("location:./index.php");
         } */
//接上CSV檔
$myfile = fopen("date.csv", "a") or die("末能開啟檔案");
$date = $_POST['gem_id']. ',' .$_POST['name']. ',' .$_POST['email']. ','
.$_POST['quantity']. ',' . date_default_timezone_set("Asia/Taipei").date("Y-m-d H:i:s")."\r\n";
fwrite($myfile, $date);
fclose($myfile); 

//轉頁到order-completed.php
header("location:./order-completed.php");
}
?>