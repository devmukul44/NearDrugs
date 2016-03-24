<?php
session_start();
ob_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>NearDrugs|Login-Register</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Montserrat|Raleway:400,200,300,500,600,700,800,900,100' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/simpleCart.min.js"> </script>
</head>
<body>
<!-- header -->
	<?php include("headtop.php"); ?>
<!--cart-->
	<?php include("headbottom.php"); ?>
<!--nav bar -->
	<?php include("navbar.php"); ?>
<!---->
<?php
if(isset($_SESSION["uname"]))
{
	header("location:new_acc.php");
}
?>
<?php
	if(isset($_GET['err']))
	{
    if ($_GET['err']=="signup_no") 
		{
        echo '<script>
            alert("Email Already Exists! Please Login!");
        </script>';
		}
	}
	if(isset($_GET['err']))
	{
    if ($_GET['err']=="signin_no") 
		{
        echo '<script>
            alert("Invalid Email or Password!_ Login Again.");
        </script>';
		}
	}
	if(isset($_GET['err']))
	{
    if ($_GET['err']=="em")
		{
        echo '<script>
            alert("Please Login Or Signup!");
        </script>';
		}
	}
?>
	
<!---->
<div class="container">
	  <ol class="breadcrumb">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">Account</li>
		 </ol>
	 <div class="registration">
		 <div class="registration_left">
			 <h2>new user? <span> create an account </span></h2>
			 <!-- [if IE] 
				< link rel='stylesheet' type='text/css' href='ie.css'/>  
			 [endif] -->  
			  
			 <!-- [if lt IE 7]>  
				< link rel='stylesheet' type='text/css' href='ie6.css'/>  
			 <! [endif] -->  
			 </script>
			 <div class="registration_form">
			 <!-- Form -->
				<form id="registration_form" action="signup.php" method="POST">
					<div>
						<label>
							<input placeholder="first name:" type="text" tabindex="1" name="firstname" required autofocus>
						</label>
					</div>
					<div>
						<label>
							<input placeholder="last name:" type="text" tabindex="2" name="lastname" required autofocus>
						</label>
					</div>
					<div>
						<label>
							<input placeholder="email address:" type="email" tabindex="3" name="email" required>
						</label>
					</div>
					<div>
						<label>
							<input placeholder="Mobile:" type="text" tabindex="4" name="mobile" required>
						</label>
					</div>					
						<div class="sky_form1">
							<ul>
								<li><label class="radio left"><input type="radio" name="gender" value="male" checked=""><i></i>Male</label></li>
								<li><label class="radio"><input type="radio" name="gender" value="female"><i></i>Female</label></li>
								<div class="clearfix"></div>
							</ul>
						</div>					
					<div>
						<label>
							<input placeholder="password" type="password" tabindex="5" name="password" required>
						</label>
					</div>						
					<div>
						<label>
							<input placeholder="retype password" type="password" tabindex="5" required>
						</label>
					</div>

					<div class="sky-form">
						<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>I agree to medica.com &nbsp;<a class="terms" href="termsandconditions.php"> Terms of service</a> </label>
					</div>	
					<div>
						<input type="submit" value="create an account" id="register-submit">
					</div>
				</form>
				<!-- /Form -->
			 </div>
		 </div>
		 <div class="registration_left">
			 <h2>Existing user</h2>
			 <div class="registration_form">
			 <!-- Form -->
				<form id="registration_form" action="signin.php" method="POST">
					<div>
						<label>
							<input placeholder="email:" type="email" tabindex="6" name="email" required>
						</label>
					</div>
					<div>
						<label>
							<input placeholder="password" type="password" tabindex="7" name="password" required>
						</label>
					</div>						
					<div>
						<input type="submit" value="sign in" id="register-submit">
					</div>
					<div class="forget">
						<a href="#">forgot your password</a>
					</div>
				</form>
			 <!-- /Form -->
			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!-- end registration -->
<!---->
<?php include("foottop.php"); ?>
<!---->
<?php include("footbottom.php"); ?>
<!---->
</div>
<!---->
</body>
</html>
</body>
</html>