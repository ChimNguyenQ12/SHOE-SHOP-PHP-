<?php

include "db_cart.php";
$SQL_string = "SELECT * from bill where  Status=1 or Status = 2" ;
$dssp= $db ->prepare($SQL_string);
$dssp ->execute();
	$dssp_rowsdata = $dssp -> fetchAll();


?>