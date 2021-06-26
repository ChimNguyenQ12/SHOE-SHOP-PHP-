<?php
$level="../";

$MemberID = $_GET['id'];

$conn = mysqli_connect("localhost","root","","members");
if(mysqli_connect_errno()){
	echo "fail";
}
if(isset($_GET['id'])){
	$query = "UPDATE `member`  SET MemberStatus=0 where ID = '$MemberID'";
	$query_run = mysqli_query($conn,$query);


	header('location:../user.php');
}

/* $upload_sql = $conn->prepare("insert into product(ProductImage,ProductType,ProductName,ProductPrice,ProductQuantity,ProductCode,ProductStatus) 
	// values(?,?,?,?,?,?,?)");
	// $upload_sql->bind_param("sssssss",$ProductImage,$ProductType,$ProductName,$ProductPrice,$ProductQuantity,$ProductCode,1);
	// $upload_sql->execute();
	// $upload_sql->close();
	*/ 
?>
