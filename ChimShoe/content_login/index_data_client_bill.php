<?php
include "../db_cart.php";
$SQL_string = "SELECT * from bill where  Status=1 && Biller like '%$fullname%'" ;
$list_bill= $db ->prepare($SQL_string);
$list_bill ->execute();
	$list_bill_rowsdata = $list_bill -> fetchAll();


?>