<div class="top_bg">
	
		<div class="header_top-sec">
			<div class="top_right">
			 <div class="product-model">
				<ul>
					<li><h2><a href="index.php">Near Drugs</a></li></h2>
				</ul>
			</div>
			</div>
			<div class="top_left">
				<ul>
				<?php
				//$email = $_SESSION["uname"];
				if(isset($_SESSION["uname"]))
				{
					echo '<li class="top_link">Email:<a href="info:'.$_SESSION["uname"].'">'.$_SESSION["uname"].'</a></li>|';
					echo '<li class="top_link"><a href="logout.php">Logout</a></li>|';
				}
				else
				{
					echo '<li class="top_link">Email:<a href="info:info@vitmedica.com">info(at)example.com</a></li>|';
				}
				?>
					<li class="top_link"><a href="new_acc.php">My Account</a></li>|			
				</ul>
				<div class="social">
					<ul>
						<li><a href="https://www.facebook.com/neardrugs"><i class="facebook"></i></a></li>
						<!--<li><a href="#"><i class="twitter"></i></a></li>
						<li><a href="#"><i class="dribble"></i></a></li>-->	
						<li><a href="#"><i class="google"></i></a></li>										
					</ul>
				</div>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>