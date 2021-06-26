<?php
$level="../";
include $level."db.php";
$ProductCode = $_POST['product_code'];
$ProductName = $_POST['product_name'];
$ProductType = $_POST['product_categorie'];
$ProductQuantity = $_POST['available_quantity'];
$ProductPrice = $_POST['product_price'];
$ProductSize = $_POST['product_size'];
$ProductDescription = $_POST['product_description'];
$ProductColor = $_POST['product_color'];
if($_FILES['fileupload']['name']==""){
	$ProductImage = $_POST['txt_img_product'];
}
else $ProductImage=$_FILES['fileupload']['name'];
$ProductID = $_POST['txt_id_product'];
echo $ProductType;
$conn = mysqli_connect("localhost","root","","products");
if(mysqli_connect_errno()){
	echo "fail";
}
if(isset($_POST['update'])){
	$query = "UPDATE `product` SET ProductImage='$ProductImage',ProductType='$ProductType',ProductName='$ProductName',
	ProductPrice='$ProductPrice',ProductQuantity='$ProductQuantity',ProductCode='$ProductCode',ProductSize = '$ProductSize',ProductDescription='$ProductDescription',ProductColor='$ProductColor',ProductStatus='1' where ID = '$ProductID'";
	$query_run = mysqli_query($conn,$query);

	 move_uploaded_file($_FILES['fileupload']['tmp_name'],$level."img_product/".$_FILES['fileupload']['name']);
	if($query_run){
		echo '<script type="text/javascript"> alert("Update Successfully") </script>';
		header('location:../product.php?type='.$ProductType);
	}
	
}
?>