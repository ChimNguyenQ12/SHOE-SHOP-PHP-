<?php include "../db_cart.php";
$SQL_string = "SELECT * from bill where Status = 1";
$bill= $db ->prepare($SQL_string);
$bill ->execute();
	$bill_rowsdata = $bill -> fetchAll();
	?>