<?php

include "../db_cart.php";
$SQL_string = "SELECT * from bill_detail" ;
$list_bill_detail= $db ->prepare($SQL_string);
$list_bill_detail ->execute();
	$list_bill_detail_rowsdata = $list_bill_detail -> fetchAll();


?>