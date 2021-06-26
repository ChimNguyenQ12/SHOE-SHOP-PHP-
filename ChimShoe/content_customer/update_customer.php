<?php
$level="../";
include ($level."db_login.php");
$id= $_GET['id'];

$Sql_dssp ="select * from add_client where ID=:id";

$ct_taikhoan = $db ->prepare($Sql_dssp);
$ct_taikhoan -> bindValue(':id',$id,PDO::PARAM_INT);
$ct_taikhoan -> execute();
$ct_taikhoan_rowsdata = $ct_taikhoan ->fetchAll();
?>