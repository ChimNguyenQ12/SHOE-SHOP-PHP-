<?php

$ProductID = $_GET['id'];

$conn = mysqli_connect("localhost","root","","products");
if(mysqli_connect_errno()){
	echo "fail";
}
if(isset($_GET['id'])){
	$query = "UPDATE product  SET ProductStatus=0 where ID = '$ProductID'";
	$query_run = mysqli_query($conn,$query);



	header('location:../product.php');
}

/* $upload_sql = $conn->prepare("insert into product(ProductImage,ProductType,ProductName,ProductPrice,ProductQuantity,ProductCode,ProductStatus) 
	// values(?,?,?,?,?,?,?)");
	// $upload_sql->bind_param("sssssss",$ProductImage,$ProductType,$ProductName,$ProductPrice,$ProductQuantity,$ProductCode,1);
	// $upload_sql->execute();
	// $upload_sql->close();
	*/ 
?>
