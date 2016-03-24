<?php
$from = "sellers@neardrugs.com";
$to = "sellervellore@gmail.com";
$headers = "Content-Type: text/html; charset=UTF-8";
$headers .="From:".$from;

$order_id = $_POST["order_id"];

$date = $_POST["date"];
$subject = "Order at: ".$date." | ID: ".$order_id;

$message = "<html><head></head><body>";
$message .="Date: ".$_POST["date"]."<br>";
$message .="Order ID: ".$order_id."<br><br>";
$message .="Name: ".$_POST["name"]."<br>";
$message .="Address: ".$_POST["address"]."<br>";
$message .="City: ".$_POST["city"]."<br>";
$message .="State: ".$_POST["state"]."<br>";
$message .="pincode: ".$_POST["pincode"]."<br>";
$message .="phone number: ".$_POST["phoneno"]."<br><br>";

//$message .="<img src=http://localhost/RetailManagement/medica/imgup/".$_POST["image"]."><br>";
$message .="<img src=http://neardrugs.com/imgup/".$_POST["image"]."><br>";
$message .="</body></html>";
//echo $message;
mail($to,$subject,$message,$headers);
//mail($to,$subject,$message,"From:".$from);
//header("location:upload.php?err=sent&q=".$order_id);
echo "<script>window.location.href='cart.php?err=sent&q=".$order_id."';</script>";
?>