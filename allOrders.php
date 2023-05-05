<?php include('./header.php');
include('function.php');
//不是職員的不可以觀看訂單

if (!isset($_SESSION['email']))
  header("Location:./login.php");
?>

<h1 class="h1-4">收到您的訂單</h1>
<h2 class="logone">你登入網址(email)是: <?php echo $_SESSION['email']; ?></h2><br/>


<div class="allOrder-1">
<?php

 /* $orderQ = mysqli_query($dbConnection, "SELECT * FROM `order`");

while ($order = mysqli_fetch_assoc($orderQ)) {

  $gemQ = mysqli_query($dbConnection, 'SELECT * FROM `gem` WHERE gem_id=' . $order['gem_id']);
  $gem = mysqli_fetch_assoc($gemQ);

  echo '<div class="order"><p>';
  echo '客戶稱呼 : ' . $order['client_name'] . '<br/>';
  echo '電郵email : ' . $order['client_email'] . '<br/>';
  echo '產品名稱 : ' . $gem['name'] . ' X ' . $order['quantity'] . '件 <br/>';
  echo '下單時間 : ' . $order['order_time'] . '<br/>';
  echo '</p></div>';

} */
 


 $orderDate = file_get_contents('./date.csv');
$orders = str_getcsv($orderDate , "\r\n");
 
foreach ($orders as $order) 
{
    $singleOrder = explode(",", $order);
   // var_dump($singleOrder);
   
    echo '<div class="order"><p>';
    echo '客戶稱呼:' . $singleOrder[1] . '<br><br/>';
    echo '電郵email:' . $singleOrder[2] . '<br><br/>';
    echo '產品名字:' . $gems[$singleOrder[3]-1]['name'] . ' x ' . $singleOrder[3] . '件 <br/><br/>';
    echo '下單時間:' . $singleOrder[4] . '<br><br/>';
    echo '</p></div>'; 
} 
?>
</div>
<?php include('./footer.php'); ?>