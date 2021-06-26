
<?php
var_dump($_POST);	
$level ="../";
include($level."db_members.php");
$MemberImage = $_FILES['fileupload']['name'];
$MemberName = $_POST['load_name'];
$MemberPosition = $_POST['load_position'];
$MemberPhone = $_POST['load_phone'];
$MemberEmail = $_POST['load_email'];
$MemberUserName = $_POST['load_username'];
$MemberPassWord = $_POST['load_password'];
$MemberTotal = "0";
$MemberHours = "0";
$MemberDaysOff = "0";
$MemberStatus = "1";
$MemberStatusAccount = "1";
$conn = mysqli_connect("localhost","root","","members");
if(mysqli_connect_errno()){
	echo "fail";
}
else{
	echo "<script type='text/javascript'>alert('Add Successfully'); </script>";
$upload_sql = $conn->prepare("insert into member(MemberUserName,MemberPassWord,MemberImage,MemberName,MemberPosition,MemberPhone,MemberEmail,MemberHours,MemberDaysOff,MemberTotal,MemberStatus,MemberStatusAccount) 
	values(?,?,?,?,?,?,?,?,?,?,?,?)");
	$upload_sql->bind_param("ssssssssssss",$MemberUserName,$MemberPassWord,$MemberImage,$MemberName,$MemberPosition,$MemberPhone,$MemberEmail,$MemberHours,$MemberDaysOff,$MemberTotal,$MemberStatus,$MemberStatusAccount);
	$upload_sql->execute();
	$upload_sql->close();
	$conn->close();
	
echo"ccc";
}
  move_uploaded_file($_FILES['fileupload']['tmp_name'],$level."img_member/".$_FILES['fileupload']['name']);
header('location:../user.php');
 	 
/* 
$sql = "insert into product(ProductImage,ProductType,ProductName,ProductPrice,ProductQuantity,ProductCode,ProductStatus) 
	values(:ProductImage,:ProductType,:ProductName,:ProductPrice,:ProductQuantity,:ProductCode,:ProductStatus)";
	$ketqua = $db ->prepare($sql);
	$ketqua ->bindValue(':ProductImage',$ProductImage,PDO::PARAM_STR);
	$ketqua ->bindValue(':ProductType',$ProductType,PDO::PARAM_STR);
	$ketqua ->bindValue(':ProductName',$ProductName,PDO::PARAM_STR);
	$ketqua ->bindValue(':ProductPrice',$ProductPrice,PDO::PARAM_STR);
	$ketqua ->bindValue(':ProductQuantity',$ProductQuantity,PDO::PARAM_STR);
	$ketqua ->bindValue(':ProductCode',$ProductCode,PDO::PARAM_STR);
	$ketqua ->bindValue(':ProductStatus',$ProductStatus,PDO::PARAM_STR);
*/  
?>


