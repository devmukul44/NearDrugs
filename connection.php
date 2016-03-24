<?php
$user="root";
$pass="";
$db="medica";
$conn=mysqli_connect("localhost",$user,$pass) or die("Cannot connect to host");
mysqli_select_db($conn,$db) or die("Cannot select db");
?>