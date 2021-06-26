<?php
include "db.php";
$SQL_string = "SELECT * from product where ProductStatus = 1 and ProductQuantity > 0;";
$dsgm= $db ->prepare($SQL_string);
$dsgm ->execute();
	$dsgm_rowsdata = $dsgm -> fetchAll();
	$line_number = sizeof($dsgm_rowsdata);
	$page_size = 6;
	if($line_number%$page_size == 0)
		$page_number = $line_number / $page_size;
		else
			$page_number = (int)($line_number/$page_size)+1;
	if(isset($_GET['tranghientai']))
		$tranghientai= $_GET['tranghientai'];
	else $tranghientai =1 ;
	
	$SQL_string_paging = "SELECT * from product where ProductStatus = 1 limit :x,:y";
	$dsgm_paging =  $db ->prepare($SQL_string_paging);
	$dsgm_paging ->bindValue(':x',($tranghientai-1)*$page_size,PDO::PARAM_INT);
	$dsgm_paging -> bindValue(':y',$page_size,PDO::PARAM_INT);
	$dsgm_paging -> execute();
	$dsgm_paging_rowsdata = $dsgm_paging -> fetchAll();
?>