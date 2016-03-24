<?Php
session_start();
ob_start();
?>
<?php

	//$_SESSION['cart']=array(); 
	if(!isset($_SESSION['cart']))
	{
		$_SESSION['cart']=array(); 
	}
	$newdata = array($_GET['add'],$_GET['number']);
	array_push($_SESSION['cart'],$newdata); 
		
	var_dump($_SESSION['cart']);
	

	//echo "Number of Items in the cart = ".sizeof($_SESSION['cart'])." <br>";
	echo "Number of Items in the cart = ".count($_SESSION['cart'])." <br>";
	
	header('Location: ' . $_SERVER['HTTP_REFERER']);

	
/*	//$_SESSION['cart']=array(); 
	if(!isset($_SESSION['cart']))
	{
		$_SESSION['cart']=array(); 
	}
	//$newdata = array("product" => $_GET['add'],"number" => $_GET['number']);
	//array_push($_SESSION['cart'],$newdata);
		   echo $_GET['add'];
		$newdata = array($_GET["add"] => $_GET['number']);
		$cart = $_SESSION['cart'];
		$_SESSION['cart'] = array_merge((array)$cart, (array)$newdata); 
		var_dump($_SESSION['cart']);
		print_r($_SESSION['cart']);
	

	//echo "Number of Items in the cart = ".sizeof($_SESSION['cart'])." <br>";
	echo "Number of Items in the cart = ".count($_SESSION['cart'])." <br>";
	
	//header('Location: ' . $_SERVER['HTTP_REFERER']);
	*/
?>