<?php
$level="../";
include $level."db_members.php";
$MemberName = $_POST['load_name'];
$MemberEmail = $_POST['load_email'];
$MemberPhone = $_POST['load_phone'];
$MemberPositon = $_POST['load_position'];
$MemberUserName = $_POST['load_username'];
$MemberPassWord = $_POST['load_password'];
$MemberHours= $_POST['load_hours'];
$MemberDaysOff = $_POST['load_days'];
$MemberTotal = $_POST['load_transactions'];
if($_FILES['fileupload']['name']==""){
	$MemberImage = $_POST['txt_img_member'];
}
else $MemberImage=$_FILES['fileupload']['name'];
$MemberID = $_POST['txt_id_member'];

$conn = mysqli_connect("localhost","root","","members");
if(mysqli_connect_errno()){
	echo "fail";
}
if(isset($_POST['update'])){
	$query = "UPDATE `member` SET MemberUserName='$MemberUserName',MemberPassWord='$MemberPassWord',MemberImage='$MemberImage',
	MemberName='$MemberName',MemberPosition='$MemberPositon',MemberPhone='$MemberPhone',MemberEmail='$MemberEmail',MemberHours='$MemberHours',
	MemberDaysOff='$MemberDaysOff',MemberTotal='$MemberTotal',MemberStatus='1',MemberStatusAccount='1' where ID = '$MemberID'";
	$query_run = mysqli_query($conn,$query);

	 move_uploaded_file($_FILES['fileupload']['tmp_name'],$level."img_member/".$_FILES['fileupload']['name']);
	if($query_run){
		echo"dau buoi";
		echo '<script type="text/javascript"> alert("Update Successfully") </script>';
		header('location:../user.php');
	}
	
}
?>