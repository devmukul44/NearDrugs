<?Php
session_start();
ob_start();
?>

<?Php
while (list ($key, $val) = each ($_SESSION['cart'])) { 
unset($_SESSION['cart'][$key]);
}
//header("location:javascript://history.go(-1)");
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>