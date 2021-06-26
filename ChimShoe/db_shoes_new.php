<?php
$host = 'localhost';
$dbname= 'shoes';
$username= 'root';
$pass= '';
$connstring="mysql:host=$host;dbname=$dbname";
$options = array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
);
try{
$db = new PDO($connstring,$username,$pass);
}
catch(PDOExceptions $e){
echo $e->getMessage();
exit(1);
}
?>