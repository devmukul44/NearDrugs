<?php
session_start();
ob_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Account</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Furnyish Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
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

    <script type="text/javascript" src="validate.js"></script>
<style type="text/css">
	h2
	{
		margin-top: 20px;
	}

</style>

</head>
<body>
<!-- header -->
	<?php include("headtop.php"); ?>
<!--cart-->
	<?php include("headbottom.php"); ?>
<!---->
	<?php include("navbar.php"); ?>
<!---->
<div class="content">
<div class="container">
	  <ol class="breadcrumb">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">My Account</li>
		  <div class="top_left nav" style="display:inline;color:black;">
		  <a href="new_acc.php">Dashboard</a> | <a href="new_page_profile_orders.php">Recent Orders</a> | <a href="new_page_profile_settings.php">Settings</a>
		  </div>
		 </ol>
	 <div class="registration">
		 <div class="registration_left">
			 <h2>Reset Password</h2>
			 <!-- [if IE] 
				< link rel='stylesheet' type='text/css' href='ie.css'/>  
			 [endif] -->  
			  
			 <!-- [if lt IE 7]>  
				< link rel='stylesheet' type='text/css' href='ie6.css'/>  
			 <! [endif] --> 
			 <div class="registration_form" style="float:center;">
			 <!-- Form -->
				<form id="registration_form" action="account_info.php" method="POST" onSubmit="return validate_acc();">
					<div>
						<label>New Password
							<input placeholder="New Password" type="password" tabindex="1" name="npassword" required autofocus>
						</label>
					</div>
					<div>
						<label>Confirm Password
							<input placeholder="Confirm Password" type="password" tabindex="2" name="cpassword" required autofocus>
						</label>
					</div>	
					<div style="margin-top:2%;">
						<input type="submit" value="Reset" id="register-submit">
					</div>
				</form>
				<!-- /Form -->
			 </div>
		 </div>
		 </div>
		 </div>
		 </div>
<!---->
<?php include("foottop.php"); ?>
<!---->
<?php include("footbottom.php"); ?>
</body>
</html>