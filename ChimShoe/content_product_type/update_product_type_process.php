<?php
$level="../";
include $level."db.php";
$ProductCode = $_POST['product_code'];
$ProductType = $_POST['product_categorie'];
$ProductID = $_POST['txt_id_product'];
$Status = "1";
$conn = mysqli_connect("localhost","root","","products");
if(mysqli_connect_errno()){
	echo "fail";
}
if(isset($_POST['update'])){
	$query = "UPDATE `product_typee` SET ProductTypeName='$ProductType',ProductTypeCode='$ProductCode',Status = '$Status' where ID = '$ProductID'";
	$query_run = mysqli_query($conn,$query);

	if($query_run){
		echo '<script type="text/javascript"> alert("Update Successfully") </script>';
		header('location:../product_type.php');
	}
	
}
?>