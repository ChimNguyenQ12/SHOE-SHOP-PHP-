<?php 

if (isset ($_GET ["search"])){
    $key = $_GET["search"];
    $stringSQL = "select * from product where ProductStatus = 1 && ProductCode like '%$key%'";
    $dssp_paging = $db ->prepare($stringSQL);
    $dssp_paging -> execute();
    $dssp_paging_rowsdata = $dssp_paging -> fetchAll();
	}
	
	if (isset ($_GET ["az"])){
				$key = $_GET["search"];
    $stringSQL = "select * from product where ProductStatus = 1 &&  ProductCode like '%$key%' order by ProductName" ;
    $dssp_paging = $db ->prepare($stringSQL);
    $dssp_paging -> execute();
    $dssp_paging_rowsdata = $dssp_paging -> fetchAll();
	}
	if (isset ($_GET ["za"])){
				$key = $_GET["search"];
    $stringSQL = "select * from product where ProductStatus = 1 && ProductCode like '%$key%' order by ProductName DESC";
    $dssp_paging = $db ->prepare($stringSQL);
    $dssp_paging -> execute();
    $dssp_paging_rowsdata = $dssp_paging -> fetchAll();
	}
	if (isset ($_GET ["brand"])){
		$a = $_GET['brand'];
		$key = $_GET["search"];
    $stringSQL = "select * from product where ProductStatus = 1 && ProductType like '%$a%' && ProductCode like '%$key%' ";
    $dssp_paging = $db ->prepare($stringSQL);
    $dssp_paging -> execute();
    $dssp_paging_rowsdata = $dssp_paging -> fetchAll();
	}
	

?>