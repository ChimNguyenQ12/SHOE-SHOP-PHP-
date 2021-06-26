
<?php
var_dump($_POST);	
$level ="../";
include($level."db.php");
$ProductImage = $_FILES['fileupload']['name'];
$ProductType = $_POST['product_categorie'];
$ProductName = $_POST['product_name'];
$ProductPrice = $_POST['product_price'];
$ProductQuantity = $_POST['available_quantity'];
$ProductStatus = "1";
$ProductCode = $_POST['product_code'];
$ProductSize = $_POST['product_size'];
$ProductDescription = $_POST['product_description'];
$ProductColor = $_POST['product_color'];
$conn = mysqli_connect("localhost","root","","products");
if(mysqli_connect_errno()){
	echo "fail";
}
else{
	echo "<script type='text/javascript'>alert('Add Successfully'); </script>";
$upload_sql = $conn->prepare("insert into product(ProductImage,ProductType,ProductName,ProductPrice,ProductQuantity,ProductCode,ProductSize,ProductDescription,ProductColor,ProductStatus) 
	values(?,?,?,?,?,?,?,?,?,?)");
	$upload_sql->bind_param("ssssssssss",$ProductImage,$ProductType,$ProductName,$ProductPrice,$ProductQuantity,$ProductCode,$ProductSize,$ProductDescription,$ProductColor,$ProductStatus);
	$upload_sql->execute();
	$upload_sql->close();
	$conn->close();
	

}
  move_uploaded_file($_FILES['fileupload']['tmp_name'],$level."img_product/".$_FILES['fileupload']['name']);
header('location:../product.php');
 	 
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


