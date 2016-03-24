<?Php
session_start();
ob_start();
?>
<?php
		
		$query = $_GET['query'];
		include("connection.php");
		$sql ="Select * from med_data where Product_Code='$query'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) 
		{
		$row = mysqli_fetch_row($result);
		}
?>
<html>
<head>
<title><?php echo $row[1]; ?></title>
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
<!--etalage-->
<link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>


<!-- //etalage-->
  
</head>
<body>
<!-- header -->
	<?php include("headtop.php"); ?>
<!--cart-->
	<?php include("headbottom.php"); ?>
<!------>
	<?php include("navbar.php"); ?>
<!---->
<!---->
<div class="single-sec">
	 <div class="container">
		 <ol class="breadcrumb">
			 <li><a href="index.html">Home</a></li>
			 <li class="active">Products</li>
		 </ol>
		 <!-- start content -->	
			<div class="col-md-9 det">
				  <div class="single_left">
					 <div class="grid images_3_of_2">
						 <ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="images2/2.jpg" class="img-responsive" />
									<img class="etalage_source_image" src="images2/2.jpg" class="img-responsive" title="" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="images2/9.jpg" class="img-responsive" "/>
								<img class="etalage_source_image" src="images2/9.jpg" class="img-responsive" title="" />
							</li>							
						    <li>
								<img class="etalage_thumb_image" src="images2/others.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="images2/others.jpg"class="img-responsive"  />
							</li>
						 </ul>
						 <div class="clearfix"></div>		
				      </div>
				  </div>
				  <div class="single-right">
					 <h3><?php echo $row[1]; ?></h3>
					 <div class="id"><h4>ID: <?php echo $row[0]; ?></div>
					  <form action="" class="sky-form">
						     <fieldset>					
							   <section>
							     <div class="rating">
									<input type="radio" name="stars-rating" id="stars-rating-5">
									<label for="stars-rating-5"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-4">
									<label for="stars-rating-4"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-3">
									<label for="stars-rating-3"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-2">
									<label for="stars-rating-2"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-1">
									<label for="stars-rating-1"><i class="icon-star"></i></label>
									<div class="clearfix"></div>
								 </div>
							  </section>
						    </fieldset>
					  </form>
					  <div class="cost">
						 <div class="prdt-cost">
							 <ul>
								 <li>MRP: <del>Rs <?php echo $row[5]; ?></del></li>							 
								 <li>Sellling Price:</li>
								 <li class="active">Rs <?php $discount = $row[5]-$row[5]/10;if($discount == 0)
																						{
																						$discount = "N/A";
																						} echo $discount; ?>
																						</li>
								 <a href="#">BUY NOW</a>
								
							 </ul>
						 </div>
						<!-- <div class="check">
							 <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Enter pin code for delivery & availability</p>
							 <form class="navbar-form navbar-left" role="search">
								  <div class="form-group">
									<input type="text" class="form-control" placeholder="Enter Pin code">
								  </div>
								  <button type="submit" class="btn btn-default">Verify</button>
							 </form>
						
						 </div>
						 -->
						 <div class="clearfix"></div>
					  </div>
				<!--	  <div class="item-list">
						 <ul>
							 <li>Material: Solid Wood</li>
							 <li>Color: Brown</li>
							 <li>Style: Solid Wood</li>
							 <li>Brand: Corelle</li>
							 <li><a href="#">Click here for more details</a></li>
						 </ul>
					  </div>
				-->
					  <div class="single-bottom1">
						<h6>Details</h6>
						<p class="prod-desc"><?php echo $row[6]; ?></p>
					 </div>					 
				  </div>
				  <div class="clearfix"></div>			  					
		    </div>
			
		</div>	     				
		     <div class="clearfix"></div>
	  </div>	 
</div>
<!---->
<!---->
<?php include("foottop.php"); ?>
<!---->
<?php include("footbottom.php"); ?>
<!---->
</div>
<!---->
</body>
</html>