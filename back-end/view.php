<!DOCTYPE html>
<?php
session_start();
ob_start();
if($_SESSION["email"] == "")
{
	header("location:login.php?err=em");
}
?>
<?php
if(isset($_GET['err'])){
    if ($_GET['err']=="done") {
        echo '<script>
            alert("Update Successful!");
        </script>';
    }
}
?>
<html>
<head>
<title>SPDC | Dashboard</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery-ui.min.js"></script>
<meta charset="utf-8" />
		<meta name="language" content="en-us"/>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="description" content="STUDENT PROFESSIONAL DEVELOPMENT CONFERENCE(SPDC)-India 2016-The American Society of Mechanical Engineers(ASME)-VIT university,vellore WEBSITE. DEVELOPED BY- MUKUL DEV(DEVMUKUL44@GMAIL.COM),HIANSHU GUPTA(HIMANSHU199565@GMAIL.COM). " />
		<meta name="keywords" content="SPDC 2016,ASME 2016,SPDC,ASME,STUDENT PROFESSIONAL DEVELOPMENT CONFERENCE,SPDC VIT,VIT university VELLORE,VIT VELLORE,MUKUL DEV,HIMANSHU GUPTA,DEVMUKUL44@GMAIL.COM,MUKUL.DEV@OUTLOOK.COM,mukul.dev2013@vit.ac.in,HIMANSHU199565@GMAIL.COM,MUKUL DEV VIT,MUKUL DEV VIT VELLORE,DEVMUKUL44,HIMANSHU GUPTA VIT, Web Designing" />
		<meta name="distribution" content="Global" />
		<meta name="robots" content="index, follow" />
		<meta name="revisit-after" content="1 days"/>
		<meta name="publisher" content="ASME INDIA, VIT VELLORE, MUKUL DEV , HIMANSHU GUPTA" />
		<meta name="copyright" content="ASME INDIA 2016"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!------ Light Box ------>

    <!------ Eng Light Box ------>	
	
</head>
<body>
	<!-- header-section-starts -->
	<div class="header">
		<div class="top-header">
			<div class="container">
				<div class="logo">
					<a href="index.php"><img src="images/asme_logo1.png" class="img-responsive" alt="" /></a>			
				</div>
				<div class="top-menu ">
				  <span class="menu"> </span>
					<ul>
						<li><a href="index.php">HOME</a></li>
						<li><a href="index.php#portfolio">Student Design Competition</a></li>
						<li><a href="index.php#portfolio">Old Guard Competitions</a></li>
						<li><a href="index.php#contact-section">CONTACT US</a></li>
						<li><a href="main.php">REGISTER</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				 <!--script-nav-->
		 <script>
		 $("span.menu").click(function(){
		 $(".top-menu ul").slideToggle("slow" , function(){
		 });
		 });
		 </script>

<!-- 			<div class="clearfix"></div>
-->			</div>
		</div>
<nav class="navbar navbar-inverse navbar-fixed-top" style="position:relative;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="main.php">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Dashboard</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span style="color:red;">HELLO</span> &nbsp &nbsp <?php echo $_SESSION["email"];?></a></li>
		<li><a href="view.php">view profile</a></li>
        <li><a href="logout_php.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
</div>
<?php
					include("connection.php");
					$email = $_SESSION["email"];
					$sql="Select * from details where email='$email'";
                    $res=mysqli_query($con,$sql);
                    $row1=mysqli_fetch_row($res);
                    $fname = $row1[0];
					$lname = $row1[1];
					$phone = $row1[3];
					$gender = $row1[4];
					$colnm = $row1[5];
					$shirt = $row1[6];
					//echo $fname;
?>
<div class="container">
  <div class="jumbotron">
  <center>
    <h1>View Details</h1>
  </center>
  </div>
  </div>
<!-- Registration form - START -->
<div class="container">
    <div class="row">
        <form role="form" action="view_reg.php" method="post">
		<div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span style="color:red;" class="glyphicon glyphicon-asterisk"></span>&nbsp;Required Field</strong></div>
                
				<div class="form-group">
                    <label for="InputName">First Name:</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="fname" id="InputName" value=<?php echo $fname ?> required>
                        <span class="input-group-addon" style="color:red;"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div> 
				<div class="form-group">
                    <label for="InputName">Lirst Name:</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="lname" id="InputName" value=<?php echo $lname ?> required>
                        <span class="input-group-addon" style="color:red;"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>                
                <div class="form-group">
                    <label for="InputEmail">Enter Email</label>
                    <div class="input-group">
                   <?php echo '<input type="email" class="form-control" id="InputEmailFirst" name="email" value='.$_SESSION['email'].' disabled>'
				   ?>
                        <span class="input-group-addon" style="color:red;"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputName">Phone Number:</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="phone" id="InputName" value=<?php echo $phone ?> required>
                        <span class="input-group-addon" style="color:red;"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
				<div class="form-group">
                    <label for="InputName">Gender:(m/f)</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="gender" id="InputName" value=<?php echo $gender ?> required>
                        <span class="input-group-addon" style="color:red;"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
				<div class="form-group">
                    <label for="InputName">Enter College Name:</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="colnm" id="InputName" value=<?php echo $colnm ?> required>
                        <span class="input-group-addon" style="color:red;"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
				<div class="form-group">
                    <label for="InputName">T-shirt Size:</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="shirt" id="InputName" value=<?php echo $shirt ?> required>
                        <span class="input-group-addon" style="color:red;"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

					
					<div class="col-lg-3"></div>
					<div class="col-lg-6">
                <input type="submit" name="submit" id="submit" value="Update" class="btn btn-primary pull-right btn-block">
            </div>
			</div>
        </form>
        
</div>
<!-- Registration form - END -->

</div>
<p><br>
</p>
	<!-- footer-section-starts -->
	<div class="footer">
<!--
		<div class="top-footer">
			<div class="col-md-8 top-footer-left-grid">
					<div class="latest-tweets">
						<h4>Latest Tweets</h4>
						<div class="icon-3-square">
							<i class="square-3"></i>
						</div>
						<div class="icon-text">
							<p><span>about 16 hours ago</span> we replied to @<a href="#">daiburchell</a> Donec malesuada vel nulla in vehicula. Quisque facilisis nibh sagittis vestibulum dignissim</p>
						</div>
						<div class="clearfix"></div>
						<div class="icon-3-square">
							<i class="square-3"></i>
						</div>
						<div class="icon-text">
							<p><span>about 16 hours ago</span> we replied to @<a href="#">hugobrien</a> Donec malesuada vel nulla in vehicula. Quisque facilisis nibh sagittis vestibulum dignissim</p>
						</div>
						<div class="clearfix"></div>
						<div class="icon-3-square">
							<i class="square-3"></i>
						</div>
						<div class="icon-text">
							<p><span>about 16 hours ago</span> we replied to @<a href="#">danwright</a> Hello Donec malesuada vel nulla in vehicula. Quisque facilisis nibh sagittis vestibulum dignissim</p>
						</div>
						<div class="clearfix"></div>
			        </div>
					<div class="flickr">
					    <h4>Flickr Photostream</h4>
						<ul>
							<li><img src="images/1.jpg" style="width:1%;height:1%"></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</div>
					<div class="clearfix"></div>
			</div>
			<div class="col-md-4 top-footer-right-grid">
				<h4>NEWSLETTER signup</h4>
				<p>Sign up for our newsletter and for daily updates!</p>
				<input type="text" class="text" value="Your name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your name';}">
				<input type="text" class="text" value="Your Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email Address';}">
				<input type="button" value="subscribe">
			</div>
			<div class="clearfix"></div>
		</div>
-->
		<div class="bottom-footer">
			<div class="col-md-8 copy-rights">
				<p>Copyright &copy; 2015  <a href="#">ASME INDIA
				</a></p>
				<p>
				Developed By: <a href="https://www.facebook.com/devmukul44" target="_blank">Mukul Dev</a> , <a href="https://www.facebook.com/gupta.himanshu19" target="_blank">Himanshu Gupta
				</p>
			</div>
			<div class="col-md-4 fax">
					<div class="social-icons">
						<a href="https://www.facebook.com/AsmeVit" target="_blank"><i class="facebook"></i></a>
						<a href="https://twitter.com/ASMEVIT" target="_blank"><i class="twitter"></i></a>
						<a href="#"><i class="dribble"></i></a>
						<a href="#"><i class="pinterest"></i></a>
						<a href="#"><i class="feed"></i></a>
						</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- footer-section-ends -->
</body>
</html>