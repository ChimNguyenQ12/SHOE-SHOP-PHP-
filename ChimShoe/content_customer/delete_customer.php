<?php

$ID = $_GET['id'];
$conn = mysqli_connect("localhost","root","","login");
if(mysqli_connect_errno()){
	echo "fail";
}
if(isset($_GET['id'])){
	$query = "UPDATE `add_client`  SET Status=0 where ID = '$ID'";
	$query_run = mysqli_query($conn,$query);



	header('location:../customer.php');
}
?>