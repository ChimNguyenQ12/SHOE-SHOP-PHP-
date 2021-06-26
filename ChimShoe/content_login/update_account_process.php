<?php
$Username = $_POST['username'];
$FullName = $_POST['fullname_account'];
$Email = $_POST['email_account'];
$Phone = $_POST['phone_account'];
$Address = $_POST['address_account'];
$RepeatPassWord = $_POST['repeat_password_account'];
$NewPassWord = $_POST['new_password_account'];
$ID = $_POST['id'];
echo $Username;
echo $ID;
$conn = mysqli_connect("localhost","root","","login");
if(mysqli_connect_errno()){
	echo "fail";
}
if($RepeatPassWord == $NewPassWord){
if(isset($_POST['update'])){
	echo "cc";
	$query = "UPDATE `add_client` SET UserName = '$Username',FullName='$FullName',Email='$Email',
	Phone='$Phone',Address='$Address',PassWord='$RepeatPassWord',Status='1' where ID = '$ID'";
	$query_run = mysqli_query($conn,$query);

	if($query_run){
		echo '<script type="text/javascript"> alert("Update Successfully") </script>';
		header('location:content_account.php?username='.$Username);
	}
	
}
}
else {
	echo '<script> alert("Password incorrect")
      window.location.assign("content_account.php");
	</script>';
	
}
?>