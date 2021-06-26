<?php
$level="../";
include ($level."db.php");
$idsanpham= $_GET['id'];
$Sql_dssp ="select * from product where ID=:idsanpham";

$sanphamchitiet = $db ->prepare($Sql_dssp);
$sanphamchitiet -> bindValue(':idsanpham',$idsanpham,PDO::PARAM_INT);
$sanphamchitiet -> execute();
$sanphamchitiet_rowsdata = $sanphamchitiet ->fetchAll();


?>