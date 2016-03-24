<?php
session_start();
ob_start();
?>

<?php
include("connection.php");

$sql = "SELECT * FROM signup";
$result = mysqli_query($con, $sql);
$f = 0;
    // output data of each row
    while($row = mysqli_fetch_row($result)) 
	{    
		if($row[1] == $_POST["email"] && $row[2] == $_POST["pass"])
		{
		global $f;
		//echo $row[0];
		$f=1;
		break;
    }
	}
 //var_dump($row[0]);
 //var_dump($_POST["uname"]);

if($f==1)
{
		// Start the session
		session_start();
		$_SESSION["name"] ="$_POST[uname]";
		$_SESSION["email"] ="$_POST[email]";
		header("location:main.php");
}

else
{
		header("location:login.php?err=em");
		 //var_dump($row[0]);
		//var_dump($_POST["uname"]);
		//echo $_SESSION["name"];
		//echo $_SESSION["email"];
}

mysqli_close($con);
?>
