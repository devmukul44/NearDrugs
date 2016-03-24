<?php
session_start();
ob_start();
?>
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
<?php
if(!isset($_SESSION["uname"]))
{
	header("location:login.php?err=em");
}

if(isset($_GET['err']))
	{
    if ($_GET['err']=="em")
		{
        echo '<script>
            alert("password Changed!");
        </script>';
		}
	}
if(isset($_GET['err']))
	{
    if ($_GET['err']=="em1")
		{
        echo '<script>
            alert("Please enter Correct Password!");
        </script>';
		}
	}	
if(isset($_GET['err']))
	{
    if ($_GET['err']=="ship")
		{
        echo '<script>
            alert("Please enter Shipping details");
        </script>';
		}
	}
?>
<!---->
<!---->
<div class="content">
<div class="container">
	  <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">My Account</li>
		  <div class="top_left nav" style="display:inline;color:black;">
		  <a href="new_acc.php">Dashboard</a> | <a href="new_page_profile_orders.php">Recent Orders</a> | <a href="new_page_profile_settings.php">Settings</a>
		  </div>
		 </ol>
	 <div class="registration">
		 <div class="registration_left">
			 <h2>Account Information</h2>
			 <div class="registration_form">
			 <!-- Form -->
			 <?php
					include("connection.php");
					$email = $_SESSION["uname"];
					$sql="Select * from users where username='$email'";
					$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) 
					{
					$row = mysqli_fetch_row($result);
					$fname = $row[0];
					$lname = $row[1];
					//echo $lname;
					$phone = $row[3];
					$gender = $row[4];
					}                    
			 ?>
				<form id="registration_form" action="account_info.php" method="POST" onSubmit="return validate_acc();">
					<div>
						<label>First Name
							<input placeholder="first name:" pattern="[a-zA-Z][a-zA-Z\s]*" type="text" value="<?php echo $fname; ?>" tabindex="1" name="firstname" required autofocus>
						</label>
					</div>
					<div>
						<label>Last Name
							<input placeholder="last name:" pattern="[a-zA-Z][a-zA-Z\s]*" type="text" value="<?php echo $lname; ?>" tabindex="2" name="lastname" required autofocus>
						</label>
					</div>
					<div>
						<label>Mobile No.
							<input placeholder="Mobile Number:" type="text" value=<?php echo $phone; ?> tabindex="3" name="mobile" required>
						</label>
					</div>
						<div class="sky_form1">
							<ul>
							<?php
							if($gender == "m")
							{
								echo '
								<li><label class="radio left"><input type="radio" name="gender" value="m" checked=""><i></i>Male</label></li>
								<li><label class="radio"><input type="radio" name="gender" value="f"><i></i>Female</label></li>
								';
							}
							else
							{
								echo '
								<li><label class="radio left"><input type="radio" name="gender" value="m"><i></i>Male</label></li>
								<li><label class="radio"><input type="radio" name="gender" value="f" checked=""><i></i>Female</label></li>
								';
							}
							?>
								<div class="clearfix"></div>
							</ul>
						</div>				
					<div style="margin-top:2%;">
						<input type="submit" value="Save" id="register-submit">
					</div>
				</form>
				<!-- /Form -->
			 </div>
		 </div>
		 <div class="registration_left">
			 <h2>Change Password</h2>
			 <div class="registration_form">
			 <!-- Form -->
				<form id="registration_form" action="pass_upd.php" method="POST" onSubmit="return validate_pass();">
					<div>
						<label>Current Password
							<input class="" id="cpassword" type="password" tabindex="6" name="cpassword" required>
						</label>
					</div>
					<div>
						<label>New Password
							<input id="npassword" type="password" tabindex="7" name="npassword" required>
						</label>
					</div>						
					<div>
						<label>Retype Password
							<input class="err" id="cnewpassword" type="password" tabindex="7" name="cnewpassword" required>
						</label>
					</div>	
					<div>
						<input type="submit" value="Change Password" id="register-submit">
					</div>
				</form>
			 <!-- /Form -->
			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>

<!-- Modify Address -->
					<?php
					include("connection.php");
					$email = $_SESSION["uname"];
					$sql="Select * from address where username='$email'";
					$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) 
					{
					$row = mysqli_fetch_row($result);
					$name = $row[1];
					$streetaddress = $row[2];
					$city = $row[3];
					$state = $row[4];
					$pincode = $row[5];
					$phoneno = $row[6];
					}
					?>
	 <div class="registration">
			 <h2>Shipping Address</h2>
			 <div class="registration_form">
			 <!-- onSubmit="return validate_modify_address();"-->
				<form action="modify_address.php" method="POST" >
					<div>
						<label>Name
							<input pattern="[a-zA-Z][a-zA-Z\s]*" id="Name" value="<?php echo $name; ?>" type="text" tabindex="7" name="Name" required>
						</label>
					</div>								
					<div>
						<label>Street Address
							<input pattern="[^'\x22]+" id="address" value="<?php echo $streetaddress; ?>" type="text" tabindex="7" name="stadr" required>
						</label>
					</div>						
					<div>
						<label>City
							<input id="city" type="text" pattern="[a-zA-Z][a-zA-Z\s]*" value="<?php echo $city; ?>" tabindex="7" name="city" required>
						</label>
					</div>						
					<div>
						<label>State
							<input id="state" pattern="[a-zA-Z][a-zA-Z\s]*" type="text" value="<?php echo $state; ?>" tabindex="7" name="state" required>
						</label>
					</div>						
					<div>
						<label>Pincode
							<input id="pincode" type="text" tabindex="7" name="pincode" value="<?php echo $pincode; ?>" maxlength="6" required>
						</label>
					</div>						
					<div>
						<label>Phoneno.
							<input id="phoneno" type="text" tabindex="7" name="phoneno" value="<?php echo $phoneno; ?>" maxlength="10" required>
						</label>
					</div>						
					<div>
						<input type="submit" value="Modify Address">
					</div>
				</form>
			 <!-- /Form -->
			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
	 </div>
</div>
<!-- end registration -->
<!---->
<?php include("foottop.php"); ?>
<!---->
<?php include("footbottom.php"); ?>
</body>