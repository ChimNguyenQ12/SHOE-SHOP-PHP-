<?php	
$ProductType = $_POST['product_categorie'];
$ProductCode = $_POST['product_code'];
$Status="1";
echo ($ProductType.$ProductCode);
$conn = mysqli_connect("localhost","root","","products");
if(mysqli_connect_errno()){
	echo "fail";
}
else{
$upload_sql = $conn->prepare("insert into product_typee(ProductTypeName,ProductTypeCode,Status) 
	values(?,?,?)");
	$upload_sql->bind_param("sss",$ProductType,$ProductCode,$Status);
	$upload_sql->execute();
	$upload_sql->close();
	$conn->close();
	

}
header('location:../product_type.php');
?>