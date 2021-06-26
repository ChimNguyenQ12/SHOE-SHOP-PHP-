<?php 
 $date = "2021-05-06";
	 
	 $time  = strtotime($date);
$day   = date('d',$time);
$month = date('m',$time);
$year  = date('Y',$time);

echo $day;
?>