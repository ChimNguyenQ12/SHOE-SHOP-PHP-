<?php
include "db_members.php";
$SQL_string = "SELECT * from member where MemberStatus = 1 and MemberStatusAccount=1";
$dstv= $db ->prepare($SQL_string);
$dstv ->execute();
	$dstv_rowsdata = $dstv -> fetchAll();
	
	$SQL_string = "SELECT * from member where MemberStatus = 1 and MemberStatusAccount =0";
$dstv_1= $db ->prepare($SQL_string);
$dstv_1 ->execute();
	$dstv_1_rowsdata = $dstv_1 -> fetchAll();
	
?>