<?php 
// only date 
if(isset($_GET['date']) and empty($_GET['search']) ){
	 $date = $_GET["date"];
	 $time  = strtotime($date);
$day   = date('d',$time);
$month = date('m',$time);
$year  = date('Y',$time);
 $month = ltrim($month, '0');
 $day = ltrim($day, '0');

    $stringSQL = "select * from bill where DAY(BillDate) like '%$day%' && YEAR(BillDate) like '%$year%' && MONTH(BillDate) like '%$month%' && Status between 1 and 2 ";
    $dssp = $db ->prepare($stringSQL);
    $dssp -> execute();
    $dssp_rowsdata = $dssp -> fetchAll();
}


//   date and status
if(isset($_GET['date']) and !empty($_GET['search']) ){
	$key = $_GET['search'];
	 $date = $_GET["date"];
	 $time  = strtotime($date);
$day   = date('d',$time);
$month = date('m',$time);
$year  = date('Y',$time);
 $month = ltrim($month, '0');
 $day = ltrim($day, '0');
if($key=="unpaid"){
    $stringSQL = "select * from bill where DAY(BillDate) like '%$day%' && YEAR(BillDate) like '%$year%' && MONTH(BillDate) like '%$month%' && Status =2 ";
    $dssp = $db ->prepare($stringSQL);
    $dssp -> execute();
    $dssp_rowsdata = $dssp -> fetchAll();
}
}

//   date and status
if(isset($_GET['date']) and !empty($_GET['search']) ){
	$key = $_GET['search'];
	 $date = $_GET["date"];
	 $time  = strtotime($date);
$day   = date('d',$time);
$month = date('m',$time);
$year  = date('Y',$time);
 $month = ltrim($month, '0');
 $day = ltrim($day, '0');
if($key=="paid"){
    $stringSQL = "select * from bill where DAY(BillDate) like '%$day%' && YEAR(BillDate) like '%$year%' && MONTH(BillDate) like '%$month%' && Status =1 ";
    $dssp = $db ->prepare($stringSQL);
    $dssp -> execute();
    $dssp_rowsdata = $dssp -> fetchAll();
}
}


//  only status
if (isset ($_GET ["search"]) and empty($_GET['date'])){
    $key = $_GET["search"];
	if($key =="paid"){
    $stringSQL = "select * from bill where Status = 1";
    $dssp = $db ->prepare($stringSQL);
    $dssp -> execute();
    $dssp_rowsdata = $dssp -> fetchAll();
	}
	else if($key =="unpaid"){
    $stringSQL = "select * from bill where Status = 2";
    $dssp = $db ->prepare($stringSQL);
    $dssp -> execute();
    $dssp_rowsdata = $dssp -> fetchAll();
	}
}

	

?>