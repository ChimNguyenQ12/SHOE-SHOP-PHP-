<?php 
$FullName = $_POST['load_name'];
$Email = $_POST['load_email'];
$City = $_POST['load_city'];
$DateOfBirth = $_POST['load_date'];
$Phone = $_POST['load_phone'];
$Street = $_POST['load_street'];
$UserName = $_POST['load_username'];
$PassWord = $_POST['load_password'];

echo "Add Successful" ."<br />"."<br />";
echo "Personal Details" ."<br />"."<br />";
echo "FullName: " .$FullName ."<br />" ;
echo "Email:    ".$Email ."<br />" ;
echo "Phone: ".$Phone ."<br />" ;
echo "Date: ".$DateOfBirth ."<br />" ;
echo "Street:".$Street."<br />" ;
echo "City:".$City ."<br />" ;

echo "Image information" .  "<br />" .  "<br />";
echo "Img_Name: " .$_FILES["fileupload"]["name"] .  "<br />";
echo "Type: " .$_FILES["fileupload"]["type"] .  "<br />";
echo "Size: " .($_FILES["fileupload"]["size"] /1024) .  "<br />";
echo "Temp file: " .$_FILES["fileupload"]["tmp_name"] .  "<br />";
move_uploaded_file($_FILES['fileupload']['tmp_name'],"uploads_member/".$_FILES['fileupload']['name']);

$conn = mysqli_connect("localhost","root","","members");
if(mysqli_connect_errno()){
	echo "fail";
}
else{
	
	$upload_sql = $conn->prepare("insert into add_member(FullName,Email,Phone,DateOfBirth,Street,City,UserName,PassWord) values(?,?,?,?,?,?,?,?)");
	$upload_sql->bind_param("ssssssss",$FullName,$Email,$Phone,$DateOfBirth,$Street,$City,$UserName,$PassWord);
	$upload_sql->execute();

	$upload_sql->close();
	$conn->close();
}



?>