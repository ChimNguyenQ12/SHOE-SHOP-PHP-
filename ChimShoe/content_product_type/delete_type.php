<?php
$level="../";
include $level."db.php";

$ProductID = $_GET['id'];
$conn = mysqli_connect("localhost","root","","products");
if(mysqli_connect_errno()){
	echo "fail";
}
if(isset($_GET['id'])){
	$query = "UPDATE `product_typee`  SET Status=0 where ID = '$ProductID'";
	$query_run = mysqli_query($conn,$query);



	header('location:../product_type.php');
}
?>