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
<?php
if(!isset($_SESSION["uname"]))
{
	header("location:login.php?err=em");
}
?>

<div class="content">
<div class="container">
	  <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">My Account</li>
		  <div class="top_left nav" style="display:inline;color:black;">
		  <a href="new_acc.php">Dashboard</a> | <a href="new_page_profile_orders.php">Recent Orders</a> | <a href="new_page_profile_settings.php">Settings</a>
		  </div>
		 </ol>
<h3>Hello, <?php echo $_SESSION["uname"]; ?> </h3>
<br>
<div class="row">
<div class="col1 col-md-6">
	<h5><b>Contact Information</b></h5>
	<hr>
	<ul style="list-style:none;">
	<?php
	include("connection.php");
	$email = $_SESSION["uname"];
		$sql ="Select * from users where username='$email'";
		$result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result) > 0) 
		{
		while($row = mysqli_fetch_row($result)) 
		{
		echo $row[0]." ".$row[1]."</li>";
		echo"<li>Mobile No. :".$row[3]."</li>";
		if($row[4] == "m")
		{
			echo"<li>Gender : Male </li>";
		}
		else
		{
			echo"<li>Gender : Female </li>";
		}
		}
		}
		else 
		{
		echo "No Details Found! :(";
		}
		?>
	</ul>
</div>
<div class="col1 col-md-6">
	<h5><b>Shipping Information</b></h5>
	<hr>
	<ul style="list-style:none;">
		<?php
	include("connection.php");
	$email = $_SESSION["uname"];
		$sql ="Select * from address where username='$email'";
		$result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result) > 0) 
		{
		while($row = mysqli_fetch_row($result)) 
		{
		echo"<li><i>Name </i>: ".$row[1]."</li>";
		echo"<li><i>streetaddress </i>: ".$row[2]."</li>";
		echo"<li><i>city </i>: ".$row[3]."</li>";
		echo"<li><i>state </i>: ".$row[4]."</li>";
		echo"<li><i>pincode </i>: ".$row[5]."</li>";
		echo"<li><i>Mobile No. </i>: ".$row[6]."</li>";
		}
		}
		else 
		{
		echo "No Details Found! :(";
		}
		?>
		<br>
		<a href="new_page_profile_settings.php"><button class="btn btn-warning">Edit Information</button></a>
	</ul>
</div>
</div>
<br>
<br>
                                       <?php include("recent.php"); ?>
                                    </div>
                                </div>
</div>
</div>

<!---->
<?php include("foottop.php"); ?>
<!---->
<?php include("footbottom.php"); ?>
<!---->