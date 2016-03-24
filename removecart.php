<?Php
session_start();
ob_start();
?>
<?php
	$delete = $_GET['delete'];
	unset($_SESSION['cart'][$delete]);
	
	$tempcart = array();
	
	$c = count($_SESSION['cart']);
	$x = $x1 = $y = 0;
	while( $x1 < $c )
	{
		if($x != $delete)
		{
			$tempcart[$x1][0] = $_SESSION['cart'][$y][0];
			$tempcart[$x1][1] = $_SESSION['cart'][$y][1];
			$y = $y + 1;
			$x = $x + 1;
			$x1 = $x1 + 1;
		}
		else
		{
			$x = $x + 1;
			$y = $y + 1;
		}
	}
	
	
	var_dump($_SESSION['cart']);
	echo "Number of Items in the cart = ".count($_SESSION['cart'])." <br>";
	var_dump($tempcart);
	
	$_SESSION['cart'] = $tempcart;
	var_dump($_SESSION['cart']);
	
	
	header("location:cart.php");
?>