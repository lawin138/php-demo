<?php 
include("./header.php"); 
?>

<div class="morepic"> 
<?php
/* $morepicQ = mysqli_query($dbConnection, "SELECT * FROM `morepic`");

while($morepic = mysqli_fetch_assoc($morepicQ)) */
foreach($morepics as $key => $morepic) 
       {
        echo '
        <ul class="ul-2">
        <li class="liList">
        <img src="./image/'.$morepic['image'].'" width="248px" height="352px" />
        <p>
        名稱：'.$morepic['name'].'<br/>
        價格：$'.$morepic['price'].'<br/>
        <a href="./morepicOrder.php?morepic_id='.$morepic['morepic_id'].'" class="buyBtn">預訂：'.$morepic['name'].'</a><br/>
        </li></ul>'; 
         
        }  
        ?>
        </div> 


<?php include("./footer.php"); ?>