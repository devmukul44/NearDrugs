<?Php
session_start();
ob_start();
?>
<html>
<head>
<title>NearDrugs | Upload</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->

<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
<script src="themes/1/js-image-slider.js" type="text/javascript"></script>
<link href="generic.css" rel="stylesheet" type="text/css" />
	
	
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
<?php include("headtop.php"); ?>
<!--cart-->
	<?php include("headbottom.php"); ?>
<!------>
	<?php include("navbar.php"); ?>
<!---->

<?php
if(!isset($_SESSION["uname"]))
{
	header("location:login.php?err=em");
}

					include("connection.php");
					$email = $_SESSION["uname"];
					$sql="Select * from address where username='$email'";
					$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) 
					{
						
					}
					else
					{
						header("location:new_page_profile_settings.php?err=ship");
					}
					
if(isset($_GET['err']))
	{
    if ($_GET['err']=="sent") 
		{
			$order_id = $_GET['q'];
        echo '<script>
            alert("Order Successfull! | Order ID: '.$order_id.' \nPlease Refer your DashBoard to Check Order Details");
        </script>';
		}
	}
?>

<br>
<br>
<br>
<br>
<div class="container">
<center><h2>Upload prescription</h2></center>
</div>
<br>
<br>
<div style="margin-left:450px">
<form action="upload_php.php" method="post" enctype="multipart/form-data">
<input style="border-style:groove" type="file" name="file" required></div>
<div style="margin-left:800px"><input  type="submit" value="Submit"></div>
<!---->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php include("foottop.php"); ?>
<!---->
<?php include("footbottom.php"); ?>
<!---->
<form>
</body>
</html>

