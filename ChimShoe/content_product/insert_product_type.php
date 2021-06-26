<?php
include"db.php";
$Sql_loaisp = "Select * from product_typee where Status='1'";
$loaisanpham = $db -> prepare($Sql_loaisp);

$loaisanpham ->execute();
$loaisanpham_rowsdata = $loaisanpham -> fetchAll();
?>