<?php
$level="../";
include ($level."db_members.php");
$idmember= $_GET['id'];
$Sql_dstv ="select * from member where ID=:idmember";
$detail_member = $db ->prepare($Sql_dstv);
$detail_member -> bindValue(':idmember',$idmember,PDO::PARAM_INT);
$detail_member -> execute();
$detail_member_rowsdata = $detail_member ->fetchAll();


?>