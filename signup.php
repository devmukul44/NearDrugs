<?Php
session_start();
ob_start();
?>
<?php
include ("connection.php");

$firstname=$lastname=$email=$mobile=$gender=$password='';
$allset=false;

if($_SERVER["REQUEST_METHOD"] == "POST") {
	
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
	if(!empty($_POST["email"]))
	{
		 $email = test_input($_POST["email"]);
	     // Validating e-mail address
	     if (!filter_var($email, FILTER_VALIDATE_EMAIL))
	     echo '<script>alert("Invalid email format");</script>'; 
	     else
	     	echo "email good";$allset=true;
	}
	if(!empty($_POST["mobile"]))
	{
		$mobile=test_input($_POST["mobile"]);
		echo $mobile." good";$allset=true;
	}
	if(!empty($_POST["gender"])){
		$gender=test_input($_POST["gender"]);
		echo $gender;
		echo "gen0";
		$allset=true;
	}
	if (!empty($_POST["password"])) {
		# code...
		$password=test_input($_POST["password"]);
		echo $password;$allset=true;
	}
	if($allset){
		echo ":-)";
		db_init_2($conn, $firstname,$lastname,$email,$mobile,$gender,md5($password));
		echo "signup page";
	}
}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

function db_init_2($conn, $firstname,$lastname,$username,$mobile,$gender,$password)
{

	$sql = "CREATE TABLE IF NOT EXISTS users ( firstname VARCHAR(42), lastname VARCHAR(40), username VARCHAR(40) PRIMARY KEY, mobile INTEGER(10), gender VARCHAR(1), password VARCHAR(32) )";

	if (mysqli_query($conn, $sql)) {
	    echo "Table Users created successfully";
	} else {
	    echo "Error creating table: " . mysqli_error($conn);
	}

	$sql = "INSERT INTO users (firstname,lastname,username,mobile,gender,password) VALUES ('{$firstname}','{$lastname}','{$username}','{$mobile}','{$gender}','{$password}')";
	if(mysqli_query($conn, $sql)){
		$_SESSION["uname"] = $_POST["email"];
		header("location:index.php");
	}
	else
	{
		header("location:login.php?err=signup_no");
	}
}
mysqli_close($conn);
?>
