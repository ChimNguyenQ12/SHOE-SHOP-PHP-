<?php
$level="../";
include $level."db.php";

$ProductID = $_GET['id'];

$conn = mysqli_connect("localhost","root","","comment");
if(mysqli_connect_errno()){
	echo "fail";
}
if(isset($_GET['id'])){
	$query = "UPDATE `comment`  SET Status=0 where ID = '$ProductID'";
	$query_run = mysqli_query($conn,$query);



	header('location:../comment.php');
}
?>
