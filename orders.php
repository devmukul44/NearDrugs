<?Php
session_start();
ob_start();
?>
<?php
if(!isset($_SESSION["uname"]))
{
	header("location:login.php?err=em");
}
?>
<?php
$count = 0;
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
						$count = 1;
					}
?>
<?php

if($count == 0)
{
	$product = $number ="";
		
	for ($row = 0; $row <  count($_SESSION['cart']); $row++)
	{
		$product .= $_SESSION['cart'][$row][0].";";
		$number .= $_SESSION['cart'][$row][1].";";
	}
	while (list ($key, $val) = each ($_SESSION['cart'])) 
	{ 
	unset($_SESSION['cart'][$key]);
	}
	
	$email = $_SESSION["uname"];
	$order_id = uniqid('',false);
	define('TIMEZONE', 'Asia/Calcutta'); // INDIA
	date_default_timezone_set(TIMEZONE);
	$date = date("jS F Y h:i:s A");
		$sql = "INSERT INTO orders values('$email','$order_id','$product','$number','null','$date')";
		$result = mysqli_query($conn, $sql);
		
		$email = $_SESSION['uname'];
		
		$sql1 ="Select * from address where username = '$email'";
		$result1 = mysqli_query($conn, $sql1);
		$row1 = mysqli_fetch_row($result1);
		
		$name = $row1[1];
		$streetaddress = $row1[2];
		$city = $row1[3];
		$state = $row1[4];
		$pincode = $row1[5];
		$phoneno = $row1[6];
	
}
?>
<html>
<body>
<form id="mail" action="mail.php" method="post">
<input type="hidden" name="email" value="<?php echo $email; ?>">
<input type="hidden" name="name" value="<?php echo $name; ?>">
<input type="hidden" name="address" value="<?php echo $streetaddress; ?>">
<input type="hidden" name="city" value="<?php echo $city; ?>">
<input type="hidden" name="state" value="<?php echo $state; ?>">
<input type="hidden" name="pincode" value="<?php echo $pincode; ?>">
<input type="hidden" name="phoneno" value="<?php echo $phoneno; ?>">
<input type="hidden" name="product" value="<?php echo $product; ?>">
<input type="hidden" name="number" value="<?php echo $number; ?>">
<input type="hidden" name="order_id" value="<?php echo $order_id; ?>">
<input type="hidden" name="date" value="<?php echo $date; ?>">
</form>

<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
    
    $(document).ready(function(){
         $("#mail").submit();
    });
</script>
</body>
</html>