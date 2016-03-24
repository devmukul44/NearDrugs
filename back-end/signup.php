<!DOCTYPE html>
<?php
session_start();
ob_start();
?>
<?php
if(isset($_GET['err'])){
    if ($_GET['err']=="em") {
        echo '<script>
            alert("email already exists! try with different email or LOGIN");
        </script>';
    }
}
?>
<html>	
<head>
<title>SIGNUP | SPDC2016</title>


<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->

    <!------ Eng Light Box ------>	
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
<meta name="keywords" content="" />
<link href="logincss/signup.css" rel='stylesheet' type='text/css' />
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:700,300,600,800,400' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Marvel:400,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->

<script>
function validate()
{
if(document.form1.pass.value == document.form1.cpass.value)
{
return true;
}
else
{
alert("password dosenot match!");
return false;
}
}
</script>
<script>
function validate1()
{
if(document.form1.gender.value == "1")
{
alert( "Select Gender");
return false;
}
else if(document.form1.shirt.value == "1")
{
alert("enter password!");
return false;
}
}
</script>
</head>
<body>
	<!-- header-section-starts -->
	<div class="header">
		<div class="top-header navbar-fixed-top">
			<div class="container">
				<div class="logo">
					<a href="index.php"><img src="images/asme_logo1.png" class="img-responsive" alt="" /></a>			
				</div>
				<div class="top-menu">
				  <span class="menu"> </span>
					<ul>
						<li><a href="index.php#home" class="scroll">Home</a></li>
						<li><a href="index.php#portfolio" class="scroll">Student Design Competition</a></li>
						<li><a href="index.php#portfolio" class="scroll">Old Guard Competitions</a></li>
						<li><a href="index.php#contact-section" class="scroll">Contact Us</a></li>
						<li><a href="#" class="scroll">Register</a></li>
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

    <!-- header-section-ends --> 

	<div class="login-form">
	<h2> Register | SPDC2016 </h2>
			<div class="form-info">
					<form action="signup_php.php" method="post" name="form1" onsubmit="return validate();return validate1();">
							<input type="text" name="fname" class="email" placeholder="First Name" required=""/>
							<input type="text" name="lname" class="email" placeholder="Last Name" required=""/>
							<input type="email" name="email" class="email" placeholder="Email Address" required=""/>
							<input type="text" name="phone" class="email" placeholder="Phone Number" required=""/>
							
							<select class="form-control" name="gender" id="InputName" required>
							<option value="1"> -- Gender -- </option>
							<option value="m"> Male </option>
							<option value="f"> Female </option>
							</select>
							<br><br>
							
							<input type="text" name="cname" class="email" placeholder="College Name" required=""/>
							
							<select class="form-control" name="shirt" id="InputName" required>
							<option value="1"> -- T_Shirt Size -- </option>
							<option value="S"> S </option>
							<option value="M"> M </option>
							<option value="L"> L </option>
							<option value="XL"> XL </option>
							<option value="XXL"> XXL </option>
							</select>
							<br><br>
							<input type="password" name="pass" class="password" placeholder="Password" required=""/>
							<br><br>
							<input type="password" name="cpass" class="password" placeholder="Confirm Password" required=""/>
						<ul class="login-buttons">
							<li style="width:105%;"><input type="submit" value="REGISTER"></li>
							<div class="clear"> </div>
						</ul>
					</form>
			</div>
	</div>
<!--copyrights-->
<!--/copyrights-->
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