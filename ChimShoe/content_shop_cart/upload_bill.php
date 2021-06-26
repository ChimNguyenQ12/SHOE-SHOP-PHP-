<?php
if(isset($_POST['username'])){
	$username = $_POST['username'];
	$user = $username;
}	
$Biller = $_POST['name'];
$BillDate = $_POST['date'];
$BillTotal = $_POST['total'];
$Status = "2";
$conn = mysqli_connect("localhost","root","","cart");
if(mysqli_connect_errno()){
	echo "fail";
}
else{
	echo "<script type='text/javascript'>alert('Add Successfully'); </script>";
$upload_sql = $conn->prepare("insert into bill(Biller,BillDate,BillTotal,Status) 
	values(?,?,?,?)");
	$upload_sql->bind_param("ssss",$Biller,$BillDate,$BillTotal,$Status);
	$upload_sql->execute();
	$upload_sql->close();
	$conn->close();
}
header('location:upload_bill_detail.php?username='.$user);
?>