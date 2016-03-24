<?Php
session_start();
ob_start();
?>
<?php
include("connection.php");

$cpassword=$npasword=$cnewpassword='';
$allset=false;

if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if(!empty($_POST["cpassword"]))
	{
		$cpassword=test_input($_POST["cpassword"]);
		$allset=true;
	}
	if(!empty($_POST["npassword"]))
	{
		$npassword=test_input($_POST["npassword"]);
		$allset=true;
	}
	if(!empty($_POST["cnewpassword"])){
		$cnewpassword=test_input($_POST["cnewpassword"]);
		$allset=true;
	}
	if($allset){
		echo ":-)";
		pass_upd($conn, $cpassword,$npassword,$cnewpassword);
	}
}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

function pass_upd($conn, $cpassword,$npassword,$cnewpassword)
{
	$cnewpassword = md5($cnewpassword);
	$cpassword = md5($cpassword);
	$email = $_SESSION['uname'];
	echo $cpassword." ".$npassword." ".$cnewpassword." ".$_SESSION['uname'];
	
	$sql1 = "select * from users where username = '$email'";
	$result = mysqli_query($conn, $sql1);
	$row = mysqli_fetch_row($result);
	
	if($row[5] == $cpassword)
	{		
	$sql = "UPDATE users SET password='$cnewpassword' WHERE username = '$email' and password='$cpassword'"; //just demo
	if(mysqli_query($conn, $sql))
	{
		echo "done";
		header("location:new_page_profile_settings.php?err=em");
	}
		else
		{
		    echo "<br><br>Error " . mysqli_error($conn);
		}
	}
	else
	{
		header("location:new_page_profile_settings.php?err=em1");
	}
}
mysqli_close($conn);

?>