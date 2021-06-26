<?php

include "db_login.php";
$SQL_string = "SELECT * from add_client where  Status=1" ;
$list_client= $db ->prepare($SQL_string);
$list_client ->execute();
	$list_client_rowsdata = $list_client -> fetchAll();

?>