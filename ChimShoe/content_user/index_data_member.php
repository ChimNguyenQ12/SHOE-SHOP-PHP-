<?php
include "db_members.php";
$SQL_string = "SELECT * from member where MemberStatus = 1";
$dstv= $db ->prepare($SQL_string);
$dstv ->execute();
	$dstv_rowsdata = $dstv -> fetchAll();
	
?>