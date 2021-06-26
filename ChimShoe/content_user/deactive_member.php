<?php
$status = $_GET['status'];
$MemberID = $_GET['id'];

$conn = mysqli_connect("localhost","root","","members");
if(mysqli_connect_errno()){
	echo "fail";
}
if(isset($_GET['status'])){
	$query = "UPDATE `member` SET MemberStatusAccount='0' where ID = '$MemberID'";
	$query_run = mysqli_query($conn,$query);
	if($query_run){
		echo '<script type="text/javascript"> alert("Update Successfully") </script>';
		header('location:../user.php');
	}
	
}
?>