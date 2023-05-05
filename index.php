<?php 
include("./header.php");
?>

<div class="mainPoint">
<h1>預訂名錶</h1>
    <h2><?php echo date('n');?>月優惠</h2>
</div>

<br/>
<!--顥示貨品-->
<!--以下是associative array-->
<div class="productList"> 
<?php
/* $gemQ = mysqli_query($dbConnection, "SELECT * FROM `gem` ");

while($gem = mysqli_fetch_assoc($gemQ)) */
 foreach($gems as $key => $gem) 
       {
        echo '
        <ul class="ul-2">
        <li class="liList">
        <img src="./image/' . $gem['image'] . '" width="248px" height="352px" />
        <p>
        名稱：'.$gem['name'].'<br/>
        價格：$'.$gem['price'].'<br/>
        <a href="./order.php?gem_id='.$gem['gem_id'].'" class="buyBtn">預訂：'.$gem['name'].'</a><br/>
        </li></ul>'; 
         
        }    
        ?>
        </div>

        <div class="listname">
            <h4 class="name-1"><a href="./morePic.php">更多名錶圖片</a></h4>
        </div>
      
        
<?php include('./footer.php'); ?>

    <!--  $gemQ = mysqli_query($dbConnection, "SELECT * FROM `gemwatch`");
    
    while ($gemwatchQ = mysqli_fetch_assoc($gemQ)){
       
     echo '
        <ul class="ul-2">
        <li class="liList">
        <img src="./image/' . $gem['image'] . '" width="248px" height="352px" />
        <p>
        名稱：' . $gem['name'] . '<br/>
        價格：$' . $gem['price'] . '<br/>
        <a href="./order.php?gem_id=' . $gem['gem_id'] . '" class="buyBtn">預訂：' . $gem['name'] . '</a><br/>
        
        </li></ul>'; 
    } --> 
        
         
       
       
    
    
    
    
    
    




    
