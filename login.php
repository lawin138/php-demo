<?php include('./header.php'); ?>

<div style="text-align:center">
<h1 class="logone">職員登入欄</h1>
</div>

<form class="form" action="./function.php?op=checkLogin" method="post">
<br/>
<label class="label" for="email">網址Email: </label><br/>
<input type="email" id="email" name="email" require></br>
<br/>
<label class="label" for="email">密碼password: </label><br/>
<input type="password" id="password" name="password" min="1" max="5"><br/>
<br/>

<input class="buyBtn" type="submit" value="職員登入">
</form>





<?php include('./footer.php'); 