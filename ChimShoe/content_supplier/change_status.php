<?php
$ID = $_GET['id'];
$conn = mysqli_connect("localhost","root","","cart");
if(mysqli_connect_errno()){
	echo "fail";
}
if(isset($_GET['id'])){
	$query = "UPDATE `bill`  SET Status=1 where ID_bill = '$ID'";
	$query_run = mysqli_query($conn,$query);



	header('location:../supplier.php');
}
?>