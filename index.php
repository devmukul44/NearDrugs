<?php
session_start();
ob_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>NearDrugs | Home</title>
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
<!-- header -->
	<?php include("headtop.php"); ?>
<!--cart-->
	<?php include("headbottom.php"); ?>
<!------>
	<?php include("navbar.php"); ?>
<!---->
<!--<div class="content">
	 
		 <div class="slider">
				<ul class="rslides" id="slider1">
				  <li><img src="images1/banner1.jpg" alt=""></li>
				  <li><img src="images1/banner2.jpg" alt=""></li>
				  <li><img src="images1/banner4.jpg" alt=""></li>
				  <li><img src="images1/banner5.jpg" alt=""></li>
				  <li><img src="images1/banner11.jpg" alt=""></li>
				  <li><img src="images1/banner3.jpeg" alt=""></li>
				</ul>
		 
	 </div>
</div>-->

<div id="sliderFrame">

        <div id="slider">
             <img src="images1/image17.jpg" alt="" />
            <img src="images1/imag16.jpg" />
            <img src="images1/image15.jpg" alt="" />
            <img src="images1/image20.jpg" alt="" />
            <!--<img src="images1/banner1.jpeg" />-->
        </div>
        <div id="htmlcaption" style="display: none;">
            <em>HTML</em> caption. Link to <a href="http://www.google.com/">Google</a>.
        </div>
    </div>
<!--
<div class="bottom_content">
	 <div class="container">
		 <div class="sofas">
			 <div class="col-md-6 sofa-grid">
				 <img src="images/t1.jpg" alt=""/>
				 <h3>IMPORTED DINING SETS</h3>
				 <h4><a href="products.html">SPECIAL ACCENTS OFFER</a></h4>
			 </div>
			 <div class="col-md-6 sofa-grid sofs">
				 <img src="images/t2.jpg" alt=""/>
				 <h3>SPECIAL DESIGN SOFAS</h3>
				 <h4><a href="products.html">FABFURNISHING MELA</a></h4>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>

<div class="new">
	 <div class="container">
		 <h3>specially designed for Furnyish</h3>
		 <div class="new-products">
		 <div class="new-items">
			 <div class="item1">
				 <a href="products.html"><img src="images/s1.jpg" alt=""/></a>
				 <div class="item-info">
					 <h4><a href="products.html">Brown Furny Seater</a></h4>
					 <span>ID: SR5421</span>
					 <a href="single.html">Buy Now</a>
				 </div>
			 </div>
			 <div class="item4">
				 <a href="products.html"><img src="images/s4.jpg" alt=""/></a>
				  <div class="item-info4">
					 <h4><a href="products.html">Dream Furniture Bed</a></h4>
					 <span>ID: SR5421</span>
					 <a href="single.html">Buy Now</a>
				 </div>			 
			 </div>
		 </div>
		 <div class="new-items new_middle">
			 <div class="item2">			 
				 <div class="item-info2">
					 <h4><a href="products.html">Georgia Sofa Set</a></h4>
					 <span>ID: GS7641</span>
					<a href="single.html">Buy Now</a>
				 </div>
				 <a href="products.html"><img src="images/s2.jpg" alt=""/></a>
			 </div>
			 <div class="item5">	
				 <a href="products.html"><img src="images/s5.jpg" alt=""/></a>
				 <div class="item-info5">
					 <h4><a href="products.html">BlackBurn Law Set</a></h4>
					 <span>ID: SR5421</span>
					 <a href="single.html">Buy Now</a>
				 </div>	
			 </div>
		 </div>		  
		 <div class="new-items new_last">
			 <div class="item3">	
				 <a href="products.html"><img src="images/s3.jpg" alt=""/></a>
				 <div class="item-info3">
					 <h4><a href="products.html">Shefan Dinning Set</a></h4>
					 <span>ID: SR5421</span>
					 <a href="single.html">Buy Now</a>
				 </div>			 
			 </div>
			 <div class="item6">	
				 <a href="products.html"><img src="images/s6.jpg" alt=""/></a>
				 <div class="item-info6">
					 <h4><a href="products.html">Irony Sofa Set</a></h4>
					 <span>ID: SR5421</span>
					 <a href="single.html">Buy Now</a>
				 </div>
				 				 
			 </div>
		 </div>
		 <div class="clearfix"></div>	
		 </div>
	 </div>		 
</div>

<div class="top-sellers">
	 <div class="container">
		 <h3>TOP - SELLERS</h3>
		 <div class="seller-grids">
			 <div class="col-md-3 seller-grid">
				 <a href="products.html"><img src="images/ts2.jpg" alt=""/></a>
				 <h4><a href="products.html">Carnival Doublecot Bed</a></h4>
				 <span>ID: DB4790</span>
				 <p>Rs. 25000/-</p>
			 </div>
			 <div class="col-md-3 seller-grid">
				 <a href="products.html"><img src="images/ts11.jpg" alt=""/></a>
				 <h4><a href="products.html">Home Bar Furniture</a></h4>
				 <span>ID: BR4822</span>
				 <p>Rs. 5000/-</p>
			 </div>
			 <div class="col-md-3 seller-grid">
				 <a href="products.html"><img src="images/ts3.jpg" alt=""/></a>
				 <h4><a href="products.html">L-shaped Fabric Sofa set</a></h4>
				 <span>ID: LF8560</span>
				 <p>Rs. 45000/-</p>
			 </div>
			 <div class="col-md-3 seller-grid">
				 <a href="products.html"><img src="images/ts4.jpg" alt=""/></a>
				 <h4><a href="products.html">Ritz Glass Dinning Table </a></h4>
				 <span>ID: DB4790</span>
				 <p>Rs. 18000/-</p>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>

-->
<!--
<div class="recommendation">
	 <div class="container">
		 <div class="recmnd-head">
			 <h3>RECOMMENDATIONS FOR YOU</h3>
		 </div>
		 <div class="bikes-grids">			 
			 <ul id="flexiselDemo1">
				 <li>
					 <a href="products.html"><img src="images/ts1.jpg" alt=""/></a>	
					 <h4><a href="products.html">King Size Bed</a></h4>	
					 <p>ID: KS3989</p>
				 </li>
				 <li>
					 <a href="products.html"><img src="images/r2.jpg" alt=""/></a>	
					 <h4><a href="products.html">Elite Diwan Seater</a></h4>	
					 <p>ID: KS3989</p>
				 </li>
				 <li>
					 <a href="products.html"><img src="images/r3.jpg" alt=""/></a>
					 <h4><a href="products.html">Dior Corner Sofa</a></h4>	
					 <p>ID: KS3989</p>
				 </li>
				 <li>
					 <a href="products.html"><img src="images/r4.jpg" alt=""/></a>
					 <h4><a href="products.html">Alia Modular Sofa</a></h4>	
					 <p>ID: KS3989</p>
				 </li>
				 <li>
					 <a href="products.html"><img src="images/r5.jpg" alt=""/></a>	
					 <h4><a href="products.html">King Size Bed</a></h4>	
					 <p>ID: KS3989</p>					 
				 </li>
		    </ul>
			<script type="text/javascript">
			 $(window).load(function() {			
			  $("#flexiselDemo1").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover:true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>			 
	 </div>
	 </div>
</div>
-->
<div class="recommendation">
	 <div class="container">
		 <div class="recmnd-head">
			 <h3>RECENTLY ORDERED MEDICINE</h3>
		 </div>
		 <div class="bikes-grids">			 
			 <ul id="flexiselDemo2">
				 <li>
					 <a href="single.php?query=49533"><img src="images2/tab1.jpg" alt=""/></a>	
					 <br>
					 <h4><a href="single.php?query=49533">ACE PROXYVON TAB 10'S</a></h4>
                      <p>PAIN KILLER</p>					 
					 <p>ID:49533</p>
				 </li>
				 <li>
					 <a href="single.php?query=54870"><img src="images2/tuby.jpg" alt=""/></a>
<br>					 
					 <h4><a href="single.php?query=54870">ACNELAK CL Z CREAM 15GM</a></h4>
					 <p>ACNE</p>
					 <p>ID:54870</p>
				 </li>
				 <li>
					 <a href="single.php?query=33178"><img src="images2/syp.jpg" alt=""/></a>
					 <br>
					 <h4><a href="single.php?query=33178">ALEX SYP 50ML</a></h4>	
					 <p>Skin Allergy</p>
					 <p>ID:33178</p>
				 </li>
				 <li>
					 <a href="single.php?query=100041"><img src="images2/tab1.jpg" alt=""/></a>
					 <h4><a href="single.php?query=100041">AMLIP  2.5MG TAB 10'S</a></h4>	
					 <p>CHEST PAIN</p>
					  <p>ID:100041</p>
				 </li>
				 <li>
					 <a href="single.php?query=3835"><img src="images2/capsule.jpg" alt=""/></a>	
					 <h4><a href="single.php?query=3835">ATEN  25MG TAB 14'S(ATENOLOL)</h4>	</a>
					 <p>Headache</p>	
                      <p>ID:3835</p>					 
				 </li>
		    </ul>
			<script type="text/javascript">
			 $(window).load(function() {			
			  $("#flexiselDemo2").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover:true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>			 
	 </div>
	 </div>
</div>
<!---->
<?php include("foottop.php"); ?>
<!---->
<?php include("footbottom.php"); ?>
<!---->
</body>
</html>