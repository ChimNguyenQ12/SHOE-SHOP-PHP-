<?php	
if(isset($_GET['username'])){
	$username = $_GET['username'];
	$user = $username;
}
ob_start();
session_start();
include"index_data_bill_shop_cart.php";
var_dump($bill_rowsdata);
foreach($bill_rowsdata as $id){ echo $id['ID_bill'];} 
 var_dump($_SESSION);
 foreach($_SESSION['cart'] as $list_bill){
$conn = mysqli_connect("localhost","root","","cart");
if(mysqli_connect_errno()){
	echo "fail";
}
else{	 

	$upload_sql = $conn->prepare("insert into bill_detail(ID_product,ProductQuantity,ID_bill) 
	values(?,?,?)");
$upload_sql->bind_param("sss", $list_bill['ID'],$list_bill['count'],$id['ID_bill']);
	$upload_sql->execute();
	$upload_sql->close();
	$conn->close();
	
 }
}
echo $user;
session_destroy();  
 header('location:../shoes.php?username='.$user);
?>