<?php 
$ProductCode = $_POST["product_code"];
$ProductName = $_POST["product_name"];
$ProductCategory = $_POST["product_categorie"];
$ProductQuantity = $_POST["available_quantity"];
$ProductWeight = $_POST["product_weight"];
$ProductDescription = $_POST["product_description"];
$ProductDate = $_POST["online_date"];
$PersonAdd = $_POST["author"];
$ProductComment = $_POST["comment"];




echo "Add Successful" ."<br />"."<br />";
echo "Product Details" ."<br />"."<br />";
echo "Product Code: " .$ProductCode ."<br />" ;
echo "Product Name: " .$ProductName ."<br />" ;
echo "Product Category:    ".$ProductCategory ."<br />" ;
echo "Quantity: ".$ProductQuantity ."<br />" ;
echo "Product Weight: ".$ProductWeight ."<br />" ;
echo "Product Description:".$ProductDescription ."<br />" ;
echo "Product Date:".$ProductDate ."<br />" ;
echo "Product Author:".$PersonAdd ."<br />" ;
echo "Comment Product:".$ProductComment ."<br />"  ."<br />"."<br />";

echo "Image information" .  "<br />" .  "<br />";
echo "Img_Name: " .$_FILES["fileupload"]["name"] .  "<br />";
echo "Type: " .$_FILES["fileupload"]["type"] .  "<br />";
echo "Size: " .($_FILES["fileupload"]["size"] /1024) .  "<br />";
echo "Temp file: " .$_FILES["fileupload"]["tmp_name"] .  "<br />";
move_uploaded_file($_FILES['fileupload']['tmp_name'],"uploads_product/".$_FILES['fileupload']['name']);


$conn = mysqli_connect("localhost","root","","products");
if(mysqli_connect_errno()){
	echo "fail";
}
else{
	$upload_sql = $conn->prepare("insert into add_product(ProductCode,ProductName,ProductCategory,ProductQuantity,ProductWeight,ProductDescription,ProductDate,PersonAdd,ProductComment) 
	values(?,?,?,?,?,?,?,?,?)");
	$upload_sql->bind_param("sssssssss",$ProductCode,$ProductName,$ProductCategory,$ProductQuantity,
	$ProductWeight,$ProductDescription,$ProductDate,$PersonAdd,$ProductComment);
	$upload_sql->execute();

	$upload_sql->close();
	$conn->close();
}



?>