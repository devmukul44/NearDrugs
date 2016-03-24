<!DOCTYPE html>
<?php
session_start();
ob_start();
?>
<?php
if(isset($_GET['err'])){
    if ($_GET['err']=="em") {
        echo '<script>
            alert("email or password do not exists!");
        </script>';
    }
}
?>
<html>	
<head>
<title>LOGIN | SPDC2016</title>

<!--/web-fonts-->

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

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
<link href="logincss/style.css" rel='stylesheet' type='text/css' />
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<script>
function validate()
{
if(document.form1.email.value == "Email")
{
alert( "enter valid Email address!");
document.form1.email.focus() ;
return false;
}
else if(document.form1.pass.value == "Password")
{
alert("enter password!");
document.form1.pass.focus() ;
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
	
<!--User-Login-->
<h1>User Login</h1>
<div class="avtar">
	<img src="loginimages/avtar.png" />
</div>
	<div class="login-form">
		<p>New user?<a href="signup.php">Register here!</a></p>
			<form name="form1" action="login_php.php" method="post">
				<div class="form-text">
					<input type="text" name="email" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
					<input type="password" name="pass" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
				</div>
					<input type="submit" value="GO" onclick="return validate();">
			</form>
	</div>
	<br><br><br><br><br><br><br>
<!--/User-Login-->
<!--start-copyright-->
<!--
<div class="copy-right">
	<p>&copy; 2016 SPDC. All rights reserved | Developed by  <a href="www.facebook.com/devmukul44" target="_blank">  Mukul Dev </a></p>
</div>
-->
<!--//end-copyright-->	
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