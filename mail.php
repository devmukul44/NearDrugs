<?php
include("connection.php");
$from = "sellers@neardrugs.com";
$to = "sellervellore@gmail.com";
$headers = "Content-Type: text/html; charset=UTF-8";
$headers .="From:".$from;

$product = $_POST["product"];
$number = $_POST["number"];
$order_id = $_POST["order_id"];

$date = $_POST["date"];
$subject = "Order at: ".$date." | ID: ".$order_id;

//$message = "Content-Type: text/html; charset=UTF-8";
$message = "<html><head></head><body>";
$message .="Date: ".$_POST["date"]."<br>";
$message .="Order ID: ".$order_id."<br><br>";
$message .="Name: ".$_POST["name"]."<br>";
$message .="Address: ".$_POST["address"]."<br>";
$message .="City: ".$_POST["city"]."<br>";
$message .="State: ".$_POST["state"]."<br>";
$message .="pincode: ".$_POST["pincode"]."<br>";
$message .="phone number: ".$_POST["phoneno"]."<br><br><br>";


$parts = explode(";",$product);
$parts1 = explode(";",$number);
for($i=0; $i<count($parts); $i++)
{
$sql ="Select * from med_data where Product_Code = '$parts[$i]'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_row($result);
		
$message .="product".($i+1).": ".$row[1]." number:".$parts1[$i]."<br>";
}
$message .="</body></html>";

//echo $message;
mail($to,$subject,$message,$headers);
//mail($to,$subject,$message,"From:".$from);
//header("location:cart.php?err=sent&q=".$order_id);
echo "<script>window.location.href='cart.php?err=sent&q=".$order_id."';</script>";
?>