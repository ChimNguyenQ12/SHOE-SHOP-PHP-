<?php  
include "db_comment.php";
$SQL_string = "SELECT * from comment where Status = 1";
$cmt= $db ->prepare($SQL_string);
$cmt ->execute();
	$cmt_rowsdata = $cmt -> fetchAll();
?>