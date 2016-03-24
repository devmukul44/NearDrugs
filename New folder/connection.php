<?php
$user="neardrug_dev";
$pass="(o83bu4*t3wi";
$db="neardrug_medica";
$conn=mysqli_connect("localhost",$user,$pass) or die("Cannot connect to host");
mysqli_select_db($conn,$db) or die("Cannot select db");
?>