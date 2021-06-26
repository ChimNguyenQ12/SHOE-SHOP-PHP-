<?php
include "db_shoes_new.php";
$SQL_string = "SELECT * from shoes_new where ProductStatus = 1";
$dssp= $db ->prepare($SQL_string);
$dssp ->execute();
	$dssp_rowsdata = $dssp -> fetchAll();

?>