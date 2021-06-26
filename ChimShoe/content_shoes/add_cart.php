<?php 
if(isset($_GET['username'])){
	$username = $_GET['username'];
	$user = $username;
	echo $user;
}
include "../db.php";
session_start();
$idsanpham = $_GET['id'];
$Sql_dssp ="select * from product where ID=:idsanpham";
$sanphamchitiet = $db ->prepare($Sql_dssp);
$sanphamchitiet -> bindValue(':idsanpham',$idsanpham,PDO::PARAM_INT);
$sanphamchitiet -> execute();
$sanphamchitiet_rowsdata = $sanphamchitiet ->fetchAll();
$ProductImage = $sanphamchitiet_rowsdata[0]['ProductImage'];
$ProductName = $sanphamchitiet_rowsdata[0]['ProductName'];
$ProductSize = $sanphamchitiet_rowsdata[0]['ProductSize'];
$ProductColor = $sanphamchitiet_rowsdata[0]['ProductColor'];
$ProductPrice = $sanphamchitiet_rowsdata[0]['ProductPrice'];	

if(isset($_SESSION['cart'][$idsanpham]))
{
	$_SESSION['cart'][$idsanpham]['count'] = $_SESSION['cart'][$idsanpham]['count'] +1;
	
}
else{
	$_SESSION['cart'][$idsanpham] = array ("ID"=>$idsanpham,"ProductName"=> $ProductName,"ProductImage"=>$ProductImage,"ProductSize"=>$ProductSize,"ProductColor"=>$ProductColor,
	"ProductPrice"=>$ProductPrice,"count"=>1);
	
}
// var_dump($_SESSION['cart']);
header('location:../content_shop_cart/content_shop_cart.php?username='.$user);
session_start();
?>