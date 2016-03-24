<?php
session_start();
ob_start();
if($_SESSION["email"] == "")
{
	header("location:login.php?err=em");
}
?>
<?php

				include("connection.php");
				$fname=$_POST['fname'];
				$lname=$_POST['lname'];
				$email=$_SESSION["email"];
                $phone=$_POST['phone'];
                $gender=$_POST['gender'];
                $colnm=$_POST['colnm'];
				$shirt=$_POST['shirt'];
					

                        $sql="UPDATE details SET first_name='".$fname."',last_name='".$lname."',phone_number='".$phone."',gender='".$gender."',college_name='".$colnm."',t_shirt_size='".$shirt."'WHERE email='".$email."'";
                        $res=mysqli_query($con,$sql);
					
                            //Payment gateway redirection
					header("location:view.php?err=done");
?>