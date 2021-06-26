<!DOCTYPE html>
<?php  
if(isset($_GET['username'])){
$username = $_GET['username'];
}
else 
	$username = "Login";
session_start()?>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Shoes</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
	<!-- header section start -->
	<div class="header_section header_main">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="logo"><a href="<?php echo 'index.php?username='.$username ?>"><img style="height:80px;width:150px;" src="images/logodark2.jpg"></a></div>
				</div>
				<div class="col-sm-9">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                        <a class="nav-item nav-link" href="<?php echo 'index.php?username='.$username ?>">Home</a>
                           <a class="nav-item nav-link" href="<?php echo 'collection.php?username='.$username ?>">Collection</a>
                           <a class="nav-item nav-link" href="<?php echo 'shoes.php?username='.$username ?>">Shoes</a>
                           <a class="nav-item nav-link" href="<?php echo 'racing_boots.php?username='.$username ?>">Racing_Boots</a>
                           <a class="nav-item nav-link" href="<?php echo 'contact.php?username='.$username ?>">Contact</a>
 <?php if(!empty($_SESSION['cart']))
									{
										$item = $_SESSION['cart'];
										$b = count($item);
										} else $b=0;?>
                           <a class="nav-item nav-link last" href="<?php echo 'content_shop_cart/content_shop_cart.php?username='.$username ?>"><img src="images/shop_icon.png"></a> <span style="height:18px; " class="badge badge-danger"><?php echo $b ?></span>
						    <?php if($username =="Login") echo ' <a  style="margin-left:35%;" class="login" class="nav-item nav-link " href="login.php">Login</a>  <img class="icon_login" src="images/login.png"> '?> 
                                 <a  style="margin-left:25%;" class="login" class="nav-item nav-link " href="<?php echo 'content_login/content_account.php?username='.$username?>"> <?php echo ($username) ?> </a>
             						 
						   <img class="icon_login" src="images/login.png"> 
                        </div>
                    </div>
                    </nav>
				</div>
			</div>
		</div>
	</div>