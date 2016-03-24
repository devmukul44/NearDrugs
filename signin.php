<?Php
session_start();
ob_start();
?>
<?php
include('connection.php');

$emailErr=$passErr=$email=$upassword='';
$email = $_POST["email"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($email))
   {
     $emailErr="formInvalid";
   }
    else {
     $email = test_input($_POST["email"]);
     // Validating e-mail address
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       echo '<script>alert("Invalid email format");</script>'; 
     }
      if(empty($_POST["password"])){
   	$passErr="formInvalid";
   }
   else
   {
   		//MD5 Encryption for security
   		//$password=md5(test_input($_POST["password"]));
   		$password=$_POST["password"];
   		//echo $email."  ".$password;
   		db_check($conn,$email,md5($password));
   }
   }
}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

function db_check($conn,$email,$password)
{
$sql = "SELECT firstname, username, password FROM users where username='$email'"; //and password=md5('$upassword')";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) { 
    	if($row["password"] == $password)
    	{
			$_SESSION["uname"] = $email;
			echo "<b>".$_SESSION["uname"]."<b>";
    		header('Location: index.php');
    	}
    	else
    	{
        header('Location: login.php?err=signin_no');
    	}
    }
}
else
    	{
    		//echo "<script>alert('Looks Like you dont have an account');window.location.href='login-signup.php'</script>";
			header('Location: login.php?err=signin_no');
    	}
}
?>
