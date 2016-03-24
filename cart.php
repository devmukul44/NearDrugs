<?php
session_start();
ob_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>NearDrugs | Cart</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Montserrat|Raleway:400,200,300,500,600,700,800,900,100' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/simpleCart.min.js"> </script>
  <script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 1
      $("#slider1").responsiveSlides({
         auto: true,
		 nav: true,
		 speed: 500,
		 namespace: "callbacks",
      });
    });
  </script>
  
</head>
<body>
<!-- header -->
	<?php include("headtop.php"); ?>
<!--cart-->
	<?php include("headbottom.php"); ?>
<!------>
	<?php include("navbar.php"); ?>
<!---->

<?php
if(isset($_GET['err']))
	{
    if ($_GET['err']=="sent") 
		{
			$order_id = $_GET['q'];
        echo '<script>
            alert("Order Successfull! | Order ID: '.$order_id.'\nPlease Refer your DashBoard to Check Order Details");
        </script>';
		}
	}
?>

<!---->
<div class="cart_main">
	 <div class="container">
			 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Cart</li>
		 </ol>			
		 <div class="cart-items">
		 
			 <h2>My Shopping Bag (<?php echo count($_SESSION['cart']); ?>)</h2>
			   
			   <?php
			include("connection.php");
			$total = 0;
	for ($row = 0; $row <  count($_SESSION['cart']); $row++)
	{
		$product = $_SESSION['cart'][$row][0];
		$number = $_SESSION['cart'][$row][1];
		
		$sql ="Select * from med_data where Product_Code = '$product'";
		$result = mysqli_query($conn, $sql);
		$row1 = mysqli_fetch_row($result);
		
		$total = $total + $row1[5]*$number;
		if($row1[5]==0)
		{
			$show = "N/A";
		}
		else{ $show=$row1[5]; }
			echo  '<div class="cart-header">
				 <div class="cart-sec">
						<div class="cart-item cyc">
							 <img src="images2/others.jpg"/>
						</div>
					   <div class="cart-item-info">
							 <h3>'.$row1[1].'<span>Product Code: '.$row1[0].'</span></h3>
							 <h4><span>Rs. </span>'.$show.'<span style="color:red"> per unit</span></h4>
							 <p class="qty">Qty ::</p>
							 <input min="1" type="number" id="quantity" name="quantity" value="'.$number.'" class="form-control input-small" disabled>
							 <br>
							 <form action="removecart.php" method="GET">
							 <input type="hidden" value="'.$row.'" name="delete">
							 <input type="submit" value="remove" class="item_add items">
							 </form>
					   </div>
					   <div class="clearfix"></div>
						<div class="delivery">
							 <p>Service Charges:: Rs.0.00</p>							 
				        </div>
				  </div>
			 </div>
			 ';

	}
?>
		 </div>
		 
		 <div class="cart-total">
			 <div class="price-details">
				 <h3>Price Details</h3>
				 <span>Total</span>
				 <span class="total"><?php echo $total; ?></span>
				 <span>Discount</span>
				 <span class="total"><?php $discount=$total/10;echo $discount; ?>(10%)</span>
				 <span>Delivery Charges</span>
				 <span class="total">00.00</span>
				 <div class="clearfix"></div>				 
			 </div>	
			 <h4 class="last-price">TOTAL</h4>
			 <span class="total final"><?php $final=$total-$total/10;echo $final; ?></span>
			 <div class="clearfix"></div>
			 <a class="order" href="orders.php">Place Order</a>
			 <br>
			<!-- <div class="total-item">
				 <h3>OPTIONS</h3>
				 <h4>COUPONS</h4>
				 <a class="cpns" href="#">Apply Coupons</a>
				 <p><a href="#">Log In</a> to use accounts - linked coupons</p>
			 </div>
			 -->
			</div>
	 </div>
</div>
<!---->
<!---->
<?php include("foottop.php"); ?>
<!---->
<?php include("footbottom.php"); ?>
<!---->
</div>
<!---->
</body>
</html>
