<?php	
// chua truyen lai duoc
if(isset($_GET['username'])){
		$username = $_GET['username'];
		$user = $username;
	};
$level="../";
$id = $_POST['id'];
$Name =$_POST['name'];
$Comment = $_POST['comment'];
$Image = $_FILES['fileupload']['name'];
$Date = $_POST['date'];
$Status="1";
$conn = mysqli_connect("localhost","root","","comment");
if(mysqli_connect_errno()){
	echo "fail";
}
else{
$upload_sql = $conn->prepare("insert into comment(Commentator,CommentContent,CommentDate,CommentImage,Status) 
	values(?,?,?,?,?)");
	$upload_sql->bind_param("sssss",$Name,$Comment,$Date,$Image,$Status);
	$upload_sql->execute();
	$upload_sql->close();
	$conn->close();
	
}	
 move_uploaded_file($_FILES['fileupload']['tmp_name'],$level."image_comment/".$_FILES['fileupload']['name']);
 header('location:content_shoes_detail.php?username=tinhbu&&id='.$id);

?>