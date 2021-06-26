<?php 
ob_start();
$level="content_customer/";
include $level."index_data_customer.php";
include "index_data_member_login.php";
session_start();
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" href="css/login.css">

	
</head>
<body

 <div> 
 <a href="index.php" >  <img class="icon_back" src="https://image.flaticon.com/icons/png/512/60/60577.png" > </a>
 </div>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form action ="" method ='post'>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input name="username" type="text" class="form-control" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input name="password" type="password" class="form-control" placeholder="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="register.php">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<?php 
foreach($list_client_rowsdata as $list){
if(isset($_POST['username']) and isset($_POST['password'])){
$username = $_POST['username'];
$password = $_POST['password'];
	if( $username == $list['UserName'] and $password==$list['PassWord']){
		header("Location:index.php?username=".$username);
		unset($_SESSION['cart']);
	}
	else if( $username == "admin" and $password== 123){
	    header("Location:admin.php");
	}
}
}
foreach($dstv_rowsdata as $list){
if(isset($_POST['username']) and isset($_POST['password'])){
$username = $_POST['username'];
$password = $_POST['password'];
	if( $username == $list['MemberUserName'] and $password==$list['MemberPassWord']){
		header("Location:admin.php?username=".$username);
		unset($_SESSION['cart']);
	}
	else if( $username == "admin" and $password== 123){
	    header("Location:admin.php");
	}
}
}
foreach($dstv_1_rowsdata as $list){
if(isset($_POST['username']) and isset($_POST['password'])){
$username = $_POST['username'];
$password = $_POST['password'];
	if( $username == $list['MemberUserName'] and $password==$list['MemberPassWord']){
		echo '
<script>
alert("Your account has been locked ");  
</script>
' ;
		unset($_SESSION['cart']);
	}
	else if( $username == "admin" and $password== 123){
	    header("Location:admin.php");
	}
}
}
if(!empty($_POST['username']) and !empty($_POST['password'])){
if( $username !== $list['UserName'] or $password !==$list['PassWord']){
		echo "<script type='text/javascript'>alert('Login Failed'); </script>";
	
	}
}
if(isset($_POST['username']) and isset($_POST['password'])){
if( $username == "" and $password==""){
		echo '
<script>
alert("Enter username or password");  
</script>
' ;
	}
}
?>