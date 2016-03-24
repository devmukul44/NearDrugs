<?php
session_start();
ob_start();
?>

<?php
include("connection.php");

$sql = "INSERT INTO signup values('$_POST[fname]','$_POST[email]','$_POST[pass]')";
$sql1 = "INSERT INTO details values('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[phone]','$_POST[gender]','$_POST[cname]','$_POST[shirt]')";
mysqli_query($con, $sql1);
//echo '<div id="signup">';
//var_dump($_POST["fname"]);
if (mysqli_query($con, $sql)) 
		{

		// Start the session
		session_start();

		$_SESSION["name"] ="$_POST[fname]";
		$_SESSION["email"] ="$_POST[email]";
		header("location:main.php");
		}
else {
	header('location:signup.php?err=em');
	
	}

mysqli_close($con);
?>
