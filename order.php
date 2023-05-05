<?php include ('./header.php'); ?>
<div class="form-space">
<form class="form" action="./function.php ?op=createOrder" method="post">
 <br/>

 <label for="gem_name" class="label">預定產品名稱 </label><br/>
 <input type="hidden" id="gem_id" name="gem_id" ></input><br/>
 <h2 class="h2Order"><?php echo  $gems[$_GET['gem_id']-1]['name'];?></h2>
 <br/>

 <lable for="name" class="label">客人姓名(全名)：</label><br/>
 <input type="text" id="name" name="name" ></input><br/>
 <br/>

 <label for="email" class="label">電郵Email：</label><br/>
 <input type="email" id="email" name="email" require></input><br/>
 <br/>

 <label for="quantity" class="label">購買數量：</label><br/>
 <input type="number" id="quantity" name="quantity" min="1" max="5" value="1">
 <br/>

 <input class="buyBtn" type="submit" value="下單預訂">
</form>

</div>






<?php include ('./footer.php'); ?>


