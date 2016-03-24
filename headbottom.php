	<?php
	if(!isset($_SESSION['cart']))
	{
		$_SESSION['cart']=array(); 
	}
	?>
<div class="header_top">
	 <div class="container">
		 <div class="logo">
		 	<a href="index.php"><img src="images/logo.png" alt="" style="height:60px;width:150px"/></a>			 
		 </div>
		 <div class="header_right">	
			 <div class="login">
				 <a href="login.php">LOGIN</a>
			 </div>
			 <div class="cart box_1">
				<a href="cart.php">
					<h3> &nbsp &nbsp(<?php echo sizeof($_SESSION['cart']); ?> &nbsp items)<img src="images/bag.png" alt=""></h3>
				</a>	
				<p><a href="cart-remove-all.php" class="simpleCart_empty">Empty cart</a></p>
				<div class="clearfix"> </div>
			 </div>				 
		 </div>
		  <div class="clearfix"></div>	
	 </div>
</div>