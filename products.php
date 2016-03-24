<?Php
session_start();
ob_start();
?>
<html>
<head>
<title>NearDrugs : Products: <?php echo $_GET['query']; ?></title>
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
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>
<!-- header -->
	<?php include("headtop.php"); ?>
<!--cart-->
	<?php include("headbottom.php"); ?>
<!------>
	<?php include("navbar.php"); ?>
<!---->
<!--header//-->
<div class="product-model">	 
	 <div class="container">
			<ol class="breadcrumb">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">Products</li>
		 </ol>
			<h2>OUR PRODUCTS</h2>
			<div class="col-md-12 product-model-sec">
			
	<?php
		$img = array('2.jpg','3.jpg','4.jpg','5.jpg','6.jpg','7.jpg','8.jpg','9.jpg','11.jpg','14.jpg');
		include("connection.php");
		$query = $_GET['query'];
		$lim = $_GET['lim'];
		$cat = $_GET['cat'];
		$sql1 ="Select * from med_data where Product_Name LIKE '%$query%' AND cat LIKE '%$cat%'";
		$result1 = mysqli_query($conn, $sql1);
		$number = mysqli_num_rows($result1);
		$nop = $number / 16;
		//echo $nop;
		if($lim < 17)
		{
		$sql ="Select * from med_data where Product_Name LIKE '%$query%' AND cat LIKE '%$cat%' LIMIT 16";
		}
		else
		{
			$offset = $lim - 16;
			$sql ="Select * from med_data where Product_Name LIKE '$query' AND cat LIKE '%$cat%' LIMIT 16 OFFSET ".$offset;
		}
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) 
		{
		while($row = mysqli_fetch_row($result)) 
		{
			$discount = $row[5]-$row[5]/10;
			if($discount == 0)
			{
				$discount = "N/A";
			}
			shuffle($img);
		echo '<a href="single.php?query='.$row[0].'"><div class="product-grid love-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="images2/'.$img[1].'" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">					
							<button class="btns"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Quick View</button>
							</h4>
							</div>
						</div></a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4>'. $row[1].'</h4>
								<p>ID:'. $row[0].'</p>
								<span class="item_price">Rs.'.$discount.'</span>
								<form action="addcart.php" name="'. $row[1].'" method="GET">		
								<input type="number" name="number" class="item_quantity" value="1" min="1">
								<input type="hidden" name="add" value="'. $row[0].'">
								<input type="submit" class="item_add items" value="ADD">
								</form>
							</div>													
							<div class="clearfix"> </div>
						</div>
					</div>';
		}
		}
		else 
		{
		echo "<center>It's Lonely In Here :(</center><br><br><br>";
		}
		
		?>
		<div class="container">
		<div class="col-md-12">
		<ul class="pagination">
		<?php
		$active = $lim / 16;
		$a = 1;
		while($a < $nop)
		{
			if($a == $active)
			{
			echo '<li class="active">';
			echo '<a href="products.php?query='.$query.'&cat='.$cat.'&lim='.($a*16).'">';
			echo $a;
			echo '</a>';
			echo '</li>';
			$a = $a+1;
			}
			else
			{
			echo '<li>';
			echo '<a href="products.php?query='.$query.'&cat='.$cat.'&lim='.($a*16).'">';
			echo $a;
			echo '</a>';
			echo '</li>';
			$a = $a+1;
			}
		}
		?>
		</ul>
		</div>
		</div>
		</div>
		<!--<div class="rsidebar span_1_of_left">
				 <section  class="sky-form">
					 <div class="product_right">
						 <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Categories</h4>
						 <div class="tab1">
							 <ul class="place">								
								 <li class="sort">Furniture</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>Sofas</p></a>
									<a href="#"><p>Fabric Sofas</p></a>
									<a href="#"><p>Love Seats</p></a>
									<a href="#"><p>Dinning Sets</p></a>
						     </div>
					      </div>						  
						  <div class="tab2">
							 <ul class="place">								
								 <li class="sort">Decor</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>Shelves</p></a>
									<a href="#"><p>Wall Racks</p></a>
									<a href="#"><p>Curios</p></a>
									<a href="#"><p>Ash Trays</p></a>
						     </div>
					      </div>
						  <div class="tab3">
							 <ul class="place">								
								 <li class="sort">Lighting</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>Table Lamps</p></a>
									<a href="#"><p>Tube Lights</p></a>
									<a href="#"><p>Study Lamps</p></a>
									<a href="#"><p>Usb Lamps</p></a>
						     </div>
					      </div>
						  <div class="tab4">
							 <ul class="place">								
								 <li class="sort">Bed & Bath</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>Towels</p></a>
									<a href="#"><p>Bath Roles</p></a>
									<a href="#"><p>Mirrors</p></a>
									<a href="#"><p>Soap Stands</p></a>
						     </div>
					      </div>
						  <div class="tab5">
							 <ul class="place">								
								 <li class="sort">Fabric</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>Sofas</p></a>
									<a href="#"><p>Fabric Sofas</p></a>
									<a href="#"><p>Beds</p></a>
									<a href="#"><p>Relax Chairs</p></a>
						     </div>
					      </div>
						  
						  
						<script>
							$(document).ready(function(){
								$(".tab1 .single-bottom").hide();
								$(".tab2 .single-bottom").hide();
								$(".tab3 .single-bottom").hide();
								$(".tab4 .single-bottom").hide();
								$(".tab5 .single-bottom").hide();
								
								$(".tab1 ul").click(function(){
									$(".tab1 .single-bottom").slideToggle(300);
									$(".tab2 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
								})
								$(".tab2 ul").click(function(){
									$(".tab2 .single-bottom").slideToggle(300);
									$(".tab1 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
								})
								$(".tab3 ul").click(function(){
									$(".tab3 .single-bottom").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})
								$(".tab4 ul").click(function(){
									$(".tab4 .single-bottom").slideToggle(300);
									$(".tab5 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})	
								$(".tab5 ul").click(function(){
									$(".tab5 .single-bottom").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})	
							});
						</script>				 
				 </section>
				 <section  class="sky-form">
					 <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>DISCOUNTS</h4>
					 <div class="row row1 scroll-pane">
						 <div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Upto - 10% (20)</label>
						 </div>
						 <div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>40% - 50% (5)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (7)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (2)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other(50)</label>
						 </div>
					 </div>
				 </section> 				 				 
				   <section  class="sky-form">
						<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Price</h4>
							<ul class="dropdown-menu1">
								 <li><a href="">								               
								<div id="slider-range"></div>							
								<input type="text" id="amount" style="border: 0; font-weight: NORMAL;   font-family: 'Arimo', sans-serif;" />
							 </a></li>			
						  </ul>
				   </section>
				   
					 <section  class="sky-form">
						<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Type</h4>
							<div class="row row1 scroll-pane">
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Sofa Cum Beds (30)</label>
								</div>
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Dinner Sets   (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>3+1+1 Sofa Sets (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Sofa Chairs     (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>2 Seater Sofas  (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Display Units   (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>L-shaped Sofas  (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>3 Seater Sofas  (30)</label>
								</div>
							</div>
				   </section>
				   		<section  class="sky-form">
						<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Brand</h4>
							<div class="row row1 scroll-pane">
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Roadstar</label>
								</div>
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Tornado</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Kissan</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Oakley</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Manga</label>
									<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Wega</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Kings</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Zumba</label>
								</div>
							</div>
				   </section>			
			 </div>				 
	      </div>-->
					
</div>
		</div>
<!---->
<!---->
<?php include("foottop.php"); ?>
<!---->
<?php include("footbottom.php"); ?>
<!---->
</body>
</html>