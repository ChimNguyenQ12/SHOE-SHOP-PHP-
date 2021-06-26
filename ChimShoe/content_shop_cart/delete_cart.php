<?php
if(isset($_POST['username'])){
$username = $_POST['username'];
$user = $username;
}
else 
	$user = "Login";
session_start();
$cart = $_SESSION['cart'];
$id = $_GET['id'];

if($id == 0){
	unset($_SESSION['cart']);
}
else{
	unset($_SESSION['cart'][$id]);
}
echo $user;
	header('Location:content_shop_cart.php?username='.$user);
?>