<?php
include "db.php";
$SQL_string = "SELECT * from product_typee where Status = 1";
$dssp= $db ->prepare($SQL_string);
$dssp ->execute();
	$dssp_rowsdata = $dssp -> fetchAll();
?>