<?php	

include "../db_login.php";
$SQL_string = "SELECT * from add_client where  Status=1" ;
$list_client= $db ->prepare($SQL_string);
$list_client ->execute();
	$list_client_rowsdata = $list_client -> fetchAll();

$FullName = "";
$Address ="";
$UserName = $_POST['username'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];
$PassWord = $_POST['password'];
$RePassWord = $_POST['repeat_password'];
$Status = "1";
foreach($list_client_rowsdata as $list){
if($UserName == $list['UserName']){
	echo '
<script>
alert("Username Already Exist");  
window.location.assign("../register.php");
</script>
' ;
break;	
}
}
if ($UserName !== $list['UserName']){ 
$conn = mysqli_connect("localhost","root","","login");
if(mysqli_connect_errno()){
	echo "fail";
}
else if($PassWord == $RePassWord){
$upload_sql = $conn->prepare("insert into add_client(UserName,FullName,Email,Phone,Address,PassWord,Status) 
	values(?,?,?,?,?,?,?)");
	$upload_sql->bind_param("sssssss",$UserName,$FullName,$Email,$Phone,$Address,$PassWord,$Status);
	$upload_sql->execute();
	$upload_sql->close();
	$conn->close();
	
echo '
<script>
alert("Create Successfully");  
window.location.assign("../login.php");
</script>
' ;
}
else{
		echo '
<script>
alert("Password Incorrect");  
window.location.assign("../register.php");
</script>
' ;
}
}
?>