<?php 
if(isset($_GET['username'])){
	$username = $_GET['username'];
}
  include("db.php");
    //search
if (isset ($_GET ["search"])){
    $key = $_GET["search"];
    $stringSQL = "select * from product where ProductStatus = 1 && ProductName like '%$key%'";
    $dsgm_paging = $db ->prepare($stringSQL);
    $dsgm_paging -> execute();
    $dsgm_paging_rowsdata = $dsgm_paging -> fetchAll();
	}
	
	    //search and color
if (isset ($_GET ["search"]) and isset ($_GET ["color"])){
    $key = $_GET["search"];
	$a = $_GET['color'];
    $stringSQL = "select * from product where ProductStatus = 1 && ProductName like '%$key%' && ProductColor like'%a%'";
    $dsgm_paging = $db ->prepare($stringSQL);
    $dsgm_paging -> execute();
    $dsgm_paging_rowsdata = $dsgm_paging -> fetchAll();
	}
	
	
	
	
	//brand
	
	if (isset ($_GET ["brand"])){
		$a = $_GET['brand'];
    $stringSQL = "select * from product where ProductStatus = 1 && ProductType like '%$a%'";
    $dsgm_paging = $db ->prepare($stringSQL);
    $dsgm_paging -> execute();
    $dsgm_paging_rowsdata = $dsgm_paging -> fetchAll();
	}
	
	//color
	if (isset ($_GET ["color"])){
		$a = $_GET['color'];
    $stringSQL = "select * from product where ProductStatus = 1 && ProductColor like '%$a%'";
    $dsgm_paging = $db ->prepare($stringSQL);
    $dsgm_paging -> execute();
    $dsgm_paging_rowsdata = $dsgm_paging -> fetchAll();
	}
	
	//color and brand
	if (isset ($_GET ["color"]) and isset($_GET['brand'])){
		$a = $_GET['color'];
		$b = $_GET['brand'];
    $stringSQL = "select * from product where ProductStatus = 1 && ProductColor like '%$a%' && ProductType like'%$b%'";
    $dsgm_paging = $db ->prepare($stringSQL);
    $dsgm_paging -> execute();
    $dsgm_paging_rowsdata = $dsgm_paging -> fetchAll();
	}

    // price and brand	
	if (isset ($_GET ["price"]) and isset ($_GET['brand'])){
		$a=$_GET['price'];
		$b=$_GET['brand'];
		if($a =='a'){
    $stringSQL = "select * from product where ProductStatus = 1 && ProductType like '%$b%' && ProductPrice between 10 and 50 ";
    $dsgm_paging = $db ->prepare($stringSQL);
    $dsgm_paging -> execute();
    $dsgm_paging_rowsdata = $dsgm_paging -> fetchAll();
		}
	}
	
		if (isset ($_GET ["price"]) and isset ($_GET['brand'])){
		$a=$_GET['price'];
		$b=$_GET['brand'];
		if($a =='b'){
    $stringSQL = "select * from product where ProductStatus = 1 && ProductType like '%$b%' && ProductPrice between 50 and 100 ";
    $dsgm_paging = $db ->prepare($stringSQL);
    $dsgm_paging -> execute();
    $dsgm_paging_rowsdata = $dsgm_paging -> fetchAll();
		}
	}
	if (isset ($_GET ["price"]) and isset ($_GET['brand'])){
		$a=$_GET['price'];
		$b=$_GET['brand'];
		if($a =='c'){
    $stringSQL = "select * from product where ProductStatus = 1 && ProductType like '%$b%' && ProductPrice between 100 and 500 ";
    $dsgm_paging = $db ->prepare($stringSQL);
    $dsgm_paging -> execute();
    $dsgm_paging_rowsdata = $dsgm_paging -> fetchAll();
		}
	}
		if (isset ($_GET ["price"]) and isset ($_GET['brand'])){
		$a=$_GET['price'];
		$b=$_GET['brand'];
		if($a =='d'){
    $stringSQL = "select * from product where ProductStatus = 1 && ProductType like '%$b%' && ProductPrice > 500";
    $dsgm_paging = $db ->prepare($stringSQL);
    $dsgm_paging -> execute();
    $dsgm_paging_rowsdata = $dsgm_paging -> fetchAll();
		}
	}
	
	//price and color
	if (isset ($_GET ["price"]) and isset ($_GET['color'])){
		$a=$_GET['price'];
		$b=$_GET['color'];
		if($a =='a'){
    $stringSQL = "select * from product where ProductStatus = 1 && ProductColor like '%$b%' && ProductPrice between 10 and 50";
    $dsgm_paging = $db ->prepare($stringSQL);
    $dsgm_paging -> execute();
    $dsgm_paging_rowsdata = $dsgm_paging -> fetchAll();
		}
	}
	
	if (isset ($_GET ["price"]) and isset ($_GET['color'])){
		$a=$_GET['price'];
		$b=$_GET['color'];
		if($a =='b'){
    $stringSQL = "select * from product where ProductStatus = 1 && ProductColor like '%$b%' && ProductPrice between 50 and 100";
    $dsgm_paging = $db ->prepare($stringSQL);
    $dsgm_paging -> execute();
    $dsgm_paging_rowsdata = $dsgm_paging -> fetchAll();
		}
	}
	
	if (isset ($_GET ["price"]) and isset ($_GET['color'])){
		$a=$_GET['price'];
		$b=$_GET['color'];
		if($a =='c'){
    $stringSQL = "select * from product where ProductStatus = 1 && ProductColor like '%$b%' && ProductPrice between 100 and 500";
    $dsgm_paging = $db ->prepare($stringSQL);
    $dsgm_paging -> execute();
    $dsgm_paging_rowsdata = $dsgm_paging -> fetchAll();
		}
	}
	
	if (isset ($_GET ["price"]) and isset ($_GET['color'])){
		$a=$_GET['price'];
		$b=$_GET['color'];
		if($a =='d'){
    $stringSQL = "select * from product where ProductStatus = 1 && ProductColor like '%$b%' && ProductPrice >500";
    $dsgm_paging = $db ->prepare($stringSQL);
    $dsgm_paging -> execute();
    $dsgm_paging_rowsdata = $dsgm_paging -> fetchAll();
		}
	}
	
	
     // brand and color and price
	 if (isset ($_GET ["price"]) and isset ($_GET['color']) and isset ($_GET['brand'])){
		$a=$_GET['price'];
		$b=$_GET['color'];
		$c=$_GET['brand'];
		if($a =='a'){
    $stringSQL = "select * from product where ProductStatus = 1 && ProductType like '%$c%' &&ProductColor like '%$b%' && ProductPrice between 10 and 50";
    $dsgm_paging = $db ->prepare($stringSQL);
    $dsgm_paging -> execute();
    $dsgm_paging_rowsdata = $dsgm_paging -> fetchAll();
		}
	}
	
	 if (isset ($_GET ["price"]) and isset ($_GET['color']) and isset ($_GET['brand'])){
		$a=$_GET['price'];
		$b=$_GET['color'];
		$c=$_GET['brand'];
		if($a =='b'){
    $stringSQL = "select * from product where ProductStatus = 1 && ProductType like '%$c%' &&ProductColor like '%$b%' && ProductPrice between 50 and 100";
    $dsgm_paging = $db ->prepare($stringSQL);
    $dsgm_paging -> execute();
    $dsgm_paging_rowsdata = $dsgm_paging -> fetchAll();
		}
	}
	
	 if (isset ($_GET ["price"]) and isset ($_GET['color']) and isset ($_GET['brand'])){
		$a=$_GET['price'];
		$b=$_GET['color'];
		$c=$_GET['brand'];
		if($a =='c'){
    $stringSQL = "select * from product where ProductStatus = 1 && ProductType like '%$c%' &&ProductColor like '%$b%' && ProductPrice between 100 and 500";
    $dsgm_paging = $db ->prepare($stringSQL);
    $dsgm_paging -> execute();
    $dsgm_paging_rowsdata = $dsgm_paging -> fetchAll();
		}
	}
	
	 if (isset ($_GET ["price"]) and isset ($_GET['color']) and isset ($_GET['brand'])){
		$a=$_GET['price'];
		$b=$_GET['color'];
		$c=$_GET['brand'];
		if($a =='d'){
    $stringSQL = "select * from product where ProductStatus = 1 && ProductType like '%$c%' &&ProductColor like '%$b%' && ProductPrice >500";
    $dsgm_paging = $db ->prepare($stringSQL);
    $dsgm_paging -> execute();
    $dsgm_paging_rowsdata = $dsgm_paging -> fetchAll();
		}
	}
	 
	 
	 // only checked price
	if (isset ($_GET ["price"]) and empty($_GET['brand']) and empty($_GET['color'])){
	$a=$_GET['price'];
		if($a=='a'){
    $stringSQL = "select * from product where ProductStatus = 1 && ProductPrice between 10 and 50";
    $dsgm_paging = $db ->prepare($stringSQL);
    $dsgm_paging -> execute();
    $dsgm_paging_rowsdata = $dsgm_paging -> fetchAll();
	    }
	}
	if (isset ($_GET ["price"]) and empty($_GET['brand']) and empty($_GET['color'])){
	$a=$_GET['price'];
		if($a=='b'){
    $stringSQL = "select * from product where ProductStatus = 1 && ProductPrice between 50 and 100";
    $dsgm_paging = $db ->prepare($stringSQL);
    $dsgm_paging -> execute();
    $dsgm_paging_rowsdata = $dsgm_paging -> fetchAll();
	    }
	}
	if (isset ($_GET ["price"]) and empty($_GET['brand'])and empty($_GET['color'])){
	$a=$_GET['price'];
		if($a=='c'){
    $stringSQL = "select * from product where ProductStatus = 1 && ProductPrice between 100 and 500";
    $dsgm_paging = $db ->prepare($stringSQL);
    $dsgm_paging -> execute();
    $dsgm_paging_rowsdata = $dsgm_paging -> fetchAll();
	    }
	}
	if (isset ($_GET ["price"]) and empty($_GET['brand'])and empty($_GET['color'])){
	$a=$_GET['price'];
		if($a=='d'){
    $stringSQL = "select * from product where ProductStatus = 1 && ProductPrice >500";
    $dsgm_paging = $db ->prepare($stringSQL);
    $dsgm_paging -> execute();
    $dsgm_paging_rowsdata = $dsgm_paging -> fetchAll();
	    }
	}
	
	
	
	

?>