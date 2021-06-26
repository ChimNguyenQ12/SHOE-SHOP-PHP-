<?php
include "db.php";
$SQL_string = "SELECT * from product where ProductStatus = 1";
$dssp= $db ->prepare($SQL_string);
$dssp ->execute();
	$dssp_rowsdata = $dssp -> fetchAll();
$line_number = sizeof($dssp_rowsdata);
	$page_size = 6;
	if($line_number%$page_size == 0)
		$page_number = $line_number / $page_size;
		else
			$page_number = (int)($line_number/$page_size)+1;
	if(isset($_GET['tranghientai']))
		$tranghientai= $_GET['tranghientai'];
	else $tranghientai =1 ;
	
	$SQL_string_paging = "SELECT * from product where ProductStatus = 1 limit :x,:y";
	$dssp_paging =  $db ->prepare($SQL_string_paging);
	$dssp_paging ->bindValue(':x',($tranghientai-1)*$page_size,PDO::PARAM_INT);
	$dssp_paging -> bindValue(':y',$page_size,PDO::PARAM_INT);
	$dssp_paging -> execute();
	$dssp_paging_rowsdata = $dssp_paging -> fetchAll();
?>