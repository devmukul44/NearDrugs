<?Php
session_start();
ob_start();
?>

<?php
include("connection.php");
$fname=$lname=$gender='';
$allset=false;

if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$email = $_SESSION["uname"];
	
	if(!empty($_POST["firstname"]))
	{
		$firstname=test_input($_POST["firstname"]);
		echo $firstname;
		$allset=true;
	}
	if(!empty($_POST["lastname"]))
	{
		$lastname=test_input($_POST["lastname"]);
		echo $lastname;$allset=true;
	}
	if(!empty($_POST["mobile"]))
	{
		 $number = test_input($_POST["mobile"]);
	     	$allset=true;
	}
	if(!empty($_POST["gender"])){
		$gender=test_input($_POST["gender"]);
		echo $gender;
		$allset=true;
	}
	if($allset){
		echo ":-)";
		db_upd($conn,$firstname,$lastname,$number,$gender,$email);
	}
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

function db_upd($conn, $fname,$lname,$number,$gender,$username)
{	
	$sql = "UPDATE users SET firstname='$fname',lastname='$lname',mobile='$number',gender='$gender' WHERE username='$username'";
	if(mysqli_query($conn, $sql))
	{
		//echo "<script>alert('Details Updated');</script>";
		header("location:new_page_profile_settings.php");
	}

}
mysqli_close($conn);

?>