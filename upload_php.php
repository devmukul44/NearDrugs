<?Php
session_start();
ob_start();
?>
<?php
if(!isset($_SESSION["uname"]))
{
	header("location:login.php?err=em");
}				
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if(isset($_FILES['file']))
 {
  $file=$_FILES['file'];
  //print_r($file);
  $file_name=$file['name'];
  $file_tmp=$file['tmp_name'];
  $file_size=$file['size'];
  $file_error=$file['error'];
  $file_ext=explode('.',$file_name);
  $file_ext=strtolower(end($file_ext));
  //print_r($file_ext);
  $allowed=array("jpeg","jpg","png","JPEG","JPG","PNG");
  if(in_array($file_ext,$allowed))
  {
     if($file_error==0)
	   {
	      if($file_size<=2097152)
		{
		 $file_name_new=uniqid('',false).'.'. $file_ext; 
         		 //echo $file_name_new;
	     $file_destination='imgup/'.$file_name_new;
		 
		 if(move_uploaded_file($file_tmp,$file_destination))
		 {
		  $file_destination;
          echo $file_tmp;
		}
		}
		}
	include("connection.php");
	$email = $_SESSION["uname"];
	$order_id = uniqid('',false);
	define('TIMEZONE', 'Asia/Calcutta'); // INDIA
	date_default_timezone_set(TIMEZONE);
	$date = date("jS F Y h:i:s A");
	$sql = "INSERT INTO orders values('$email','$order_id','null','null','$file_name_new','$date')";
	//$result = mysqli_query($conn, $sql);
    if (mysqli_query($conn,$sql))
      {
	echo "file uploaded";
	
		$email = $_SESSION['uname'];
		$sql1 ="Select * from address where username = '$email'";
		$result1 = mysqli_query($conn, $sql1);
		$row1 = mysqli_fetch_row($result1);
		
		$name = $row1[1];
		$streetaddress = $row1[2];
		$city = $row1[3];
		$state = $row1[4];
		$pincode = $row1[5];
		$phoneno = $row1[6];
	}
	}
	else
	{
	   echo "please select file";
	}
	  }
	  }
    ?>
	
<form id="mail" action="img_mail.php" method="post">
<input type="hidden" name="email" value="<?php echo $email; ?>">
<input type="hidden" name="name" value="<?php echo $name; ?>">
<input type="hidden" name="address" value="<?php echo $streetaddress; ?>">
<input type="hidden" name="city" value="<?php echo $city; ?>">
<input type="hidden" name="state" value="<?php echo $state; ?>">
<input type="hidden" name="pincode" value="<?php echo $pincode; ?>">
<input type="hidden" name="phoneno" value="<?php echo $phoneno; ?>">
<input type="hidden" name="image" value="<?php echo $file_name_new; ?>">
<input type="hidden" name="order_id" value="<?php echo $order_id; ?>">
<input type="hidden" name="date" value="<?php echo $date; ?>">
</form>

<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
    
    $(document).ready(function(){
         $("#mail").submit();
    });
</script>
</body>
</html>