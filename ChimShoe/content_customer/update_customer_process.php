<?php

$NewPassWord = $_POST['new_password'];
$RepeatPassWord = $_POST['repeat_password'];
$ID = $_POST['txt_id_customer'];
$Status = "1";
$conn = mysqli_connect("localhost","root","","login");
if(mysqli_connect_errno()){
	echo "fail";
}
if(isset($_POST['update'])){
	if($NewPassWord == $RepeatPassWord){
	$query = "UPDATE `add_client` SET PassWord='$RepeatPassWord',Status = '$Status' where ID = '$ID'";
	$query_run = mysqli_query($conn,$query);

	if($query_run){
		header('location:../customer.php');
	}
}
else
    echo '<script type="text/javascript"> alert("Update Failed") 
</script>';

}
?>