<?Php
session_start();
ob_start();
?>
<?php
$email = $_SESSION["uname"];
include "connection.php";
$name=$streetaddress=$city=$state=$pincode=$phoneno='';
$allset=false;

if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if(!empty($_POST["Name"]))
	{
		$name=test_input($_POST["Name"]);
		$allset=true;
	}
	if(!empty($_POST["stadr"]))
	{
		$streetaddress=test_input($_POST["stadr"]);
		$allset=true;
	}
	if(!empty($_POST["city"]))
	{
		 $city = test_input($_POST["city"]);
	     	$allset=true;
	}

	if(!empty($_POST["state"]))
	{
		 $state = test_input($_POST["state"]);
	     	$allset=true;
	}
	if(!empty($_POST["pincode"])){
		$pincode=test_input($_POST["pincode"]);
		$allset=true;
	}
	if(!empty($_POST["phoneno"])){
		$phoneno=test_input($_POST["phoneno"]);
		$allset=true;
	}
	if($allset){
		//echo ":-)";
		db_upd($conn,$name,$streetaddress,$city,$state,$pincode,$phoneno,$email);
	}
}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

function db_upd($conn,$name,$streetaddress,$city,$state,$pincode,$phoneno,$email)
{
	//echo $name." ".$streetaddress." ".$city." ".$state." ".$pincode." ".$pincode." ".$phoneno;
	$sql = "CREATE TABLE IF NOT EXISTS address (username VARCHAR(42),name VARCHAR(42), streetaddress VARCHAR(200), city VARCHAR(30), state VARCHAR(30), pincode int(6), phoneno varchar(10))";

	if (mysqli_query($conn, $sql)) {
	    //echo "<br>success";
	} else {
	   // echo "Error creating table: " . mysqli_error($conn);
	}
	
				$sql = "Select * from address where username='$email'";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) 
				{
					$sql = "UPDATE address SET name='$name',streetaddress='$streetaddress',city='$city',state='$state',pincode='$pincode', phoneno='$phoneno' WHERE username='$email'";
					if(mysqli_query($conn, $sql))
					{
					echo "<script>alert('Details Updated');window.location.href='new_page_profile_settings.php';</script>";
					//header("location:new_page_profile_settings.php");
					}
					else
					{

					//echo "<br><br>Error Upadating Values: " . mysqli_error($conn);
					header("location:new_page_profile_settings.php");
					}
				}
				else
				{
				$sql="INSERT INTO address values('$email','$name','$streetaddress','$city','$state','$pincode','$phoneno')";
                if(mysqli_query($conn,$sql))
				{
					//echo "<br>inserted";
				}
				else
				{
					echo "<br>insertion error". mysqli_error($conn);
				}
				}
	

}
mysqli_close($conn);


?>