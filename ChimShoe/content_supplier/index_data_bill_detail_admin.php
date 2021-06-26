<?php
	$id = $_GET['id'];
include "../db_cart.php";
$SQL_string = "SELECT * from bill_detail where ID_bill = $id " ;
$bill_detail= $db ->prepare($SQL_string);
$bill_detail ->execute();
	$bill_detail_rowsdata = $bill_detail -> fetchAll();

?>