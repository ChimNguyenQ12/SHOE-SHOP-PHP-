
<?php 
session_start();
if(isset($_GET['username'])){
$username = $_GET['username'];
$user = $username;
}
else 
	$user = "Login";
$level="../img_product/";
include"index_data_client_shop_cart.php";
foreach($list_client_rowsdata as $list);


if(isset($_POST['submit']))
{
	foreach($_POST as $id=>$count)
	{
		if( ($count == 0) and (is_numeric($count))){
			unset ($_SESSION['cart'][$id]);
		}
		else if(($count >0) and (is_numeric($count))){
			$_SESSION['cart'][$id]['count'] =$count;
		}
	}
}
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Shop cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    	body{margin-top:20px;}
.cart-item-thumb {
    display: block;
    width: 10rem
}

.cart-item-thumb>img {
    display: block;
    width: 100%
}

.product-card-title>a {
    color: #222;
}

.font-weight-semibold {
    font-weight: 600 !important;
}

.product-card-title {
    display: block;
    margin-bottom: .75rem;
    padding-bottom: .875rem;
    border-bottom: 1px dashed #e2e2e2;
    font-size: 1rem;
    font-weight: normal;
}

.text-muted {
    color: #888 !important;
}

.bg-secondary {
    background-color: #f7f7f7 !important;
}

.accordion .accordion-heading {
    margin-bottom: 0;
    font-size: 1rem;
    font-weight: bold;
}
.font-weight-semibold {
    font-weight: 600 !important;
}
    </style>
</head>
<body>
<?php

$check= false;
$total = 0;
if(isset($_SESSION['cart'])){
	foreach($_SESSION['cart'] as $k){
		if(isset($k)){
			$check = true;
		}
	}
}
if($check == true)
{

?>

<div class="container pb-5 mt-n2 mt-md-n3">
    <div class="row">
	
        <div class="col-xl-9 col-md-8">

            <h2 class="h6 d-flex flex-wrap justify-content-between align-items-center px-4 py-3 bg-secondary"><span>My Cart</span><a class="font-size-sm" href="<?php echo'../shoes.php?username='.$user?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left" style="width: 1rem; height: 1rem;"><polyline points="15 18 9 12 15 6"></polyline></svg>Continue shopping</a></h2>
			
            <!-- Item--> 
			<?php $item = $_SESSION['cart'];		
            echo ' </br></br><h4 style="margin-top:-41px;" > You have '.count($item).' products in your cart  </h4>'		 ?>
			<form style="margin-top:100px;" action ="content_shop_cart.php" method ="post" >
			<?php foreach($_SESSION['cart'] as $list_shoes_cart) 
	{ 
	?>	    
	<input hidden=true name="username" value="<?php  echo $user?>" />
            <div class="d-sm-flex justify-content-between my-4 pb-4 border-bottom">
                <div class="media d-block d-sm-flex text-center text-sm-left">
                    <a class="cart-item-thumb mx-auto mr-sm-4" href="<?php echo "../content_shoes/content_shoes_detail.php?username=$user&&id=".$list_shoes_cart['ID']; ?>"><img src="<?php echo $level.$list_shoes_cart["ProductImage"] ?>" alt="Product"></a>
                    <div class="media-body pt-8">
                        <h3 class="product-card-title font-weight-semibold border-0 pb-0"><a href="#"><?php echo $list_shoes_cart["ProductName"] ?></a></h3>
                        <div class="font-size-sm"><span class="text-muted mr-4">Size  :<?php echo $list_shoes_cart['ProductSize'] ?></span> </div>
                        <div class="font-size-sm"><span class="text-muted mr-2">Color:</span><?php echo $list_shoes_cart['ProductColor']  ?></div>
                        <div class="font-size-lg text-primary pt-2"><?php echo number_format($list_shoes_cart['count']*$list_shoes_cart['ProductPrice'],3).".$";  ?>  </div>
                    </div>
                </div>
                <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left" style="max-width: 10rem;">
                    <div class="form-group mb-2">
                        <label for="quantity1">Quantity</label>
                        <input class="form-control form-control-sm" type="number" id="quantity1" name=" <?php echo $list_shoes_cart['ID'] ?>"
						value=" <?php echo $list_shoes_cart['count'] ?> ">
                    </div>
                    <button class="btn btn-outline-secondary btn-sm btn-block mb-2" name="submit" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw mr-1">
                            <polyline points="23 4 23 10 17 10"></polyline>
                            <polyline points="1 20 1 14 7 14"></polyline>
                            <path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>
                        </svg>Update cart</button>
                    <a onclick="myFunction()" href="<?php echo 'delete_cart.php?id='.$list_shoes_cart['ID'] ?>" <button class="btn btn-outline-danger btn-sm btn-block mb-2" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 mr-1">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                            <line x1="10" y1="11" x2="10" y2="17"></line>
                            <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg>Remove</button>
						</a>
                </div>
            </div>
			
	<?php  $total+=$list_shoes_cart['count'] * $list_shoes_cart['ProductPrice']; } ?>
                <a  href="delete_cart.php?id=0" <button class="btn btn-outline-danger btn-sm btn-block mb-2" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 mr-1">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                            <line x1="10" y1="11" x2="10" y2="17"></line>
                            <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg>Remove All</button>
						</a>
						
						<script>
function myFunction() {
  confirm("Are you sure delete?");
}
</script>
</form>      
        </div>
        <!-- Sidebar-->
        <div class="col-xl-3 col-md-4 pt-3 pt-md-0">
            <h2 class="h6 px-4 py-3 bg-secondary text-center">Subtotal</h2>
            <div class="h3 font-weight-semibold text-center py-3"><?php echo number_format($total,3)."$"?></div>
            <hr>
            <h3 class="h6 pt-4 font-weight-semibold"><span class="badge badge-success mr-2">Note</span>Additional comments</h3>
            <textarea class="form-control mb-3" id="order-comments" rows="5"></textarea>
            <a class="btn btn-primary btn-block" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card mr-2">
                    <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                    <line x1="1" y1="10" x2="23" y2="10"></line>
                </svg>Change Information</a>
            <div class="pt-4">
                <div class="accordion" id="cart-accordion">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="accordion-heading font-weight-semibold"><a href="#promocode" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="promocode">Apply promo code<span class="accordion-indicator"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg></span></a></h3>
                        </div>
                        <div class="collapse show" id="promocode" data-parent="#cart-accordion">
                            <div class="card-body">
                                <form class="needs-validation" novalidate="">
                                    <div class="form-group">
                                        <input class="form-control" type="text" id="cart-promocode" placeholder="Promo code" >
                                        <div class="invalid-feedback">Please provide a valid promo code!</div>
                                    </div>
                                    <button class="btn btn-outline-primary btn-block" type="submit">Apply promo code</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="accordion-heading font-weight-semibold"><a class="collapsed" href="#shipping" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="shipping">Shipping estimates<span class="accordion-indicator"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg></span></a></h3>
                        </div>
                        <div class="collapse" id="shipping" data-parent="#cart-accordion">
                            <div class="card-body">
                               <form action='content_bill' method="post">
                                    <div class="form-group">
                                        <select name="country" class="form-control custom-select" required="">
                                            <option value="">Choose your country</option>
                                            <option selected value="Vietnamese">Vietnam</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Finland">Finland</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="United States">United States</option>
                                        </select>
                                     
                                    </div>
                                    <div class="form-group">
                                        <select name="city" class="form-control custom-select" required="">
                                            <option value="">Choose your city</option>
                                            <option selected value="TP Hồ Chí Minh">TP Hồ Chí Minh</option>
                                            <option value="Hà Nội">Hà Nội</option>
                                            <option value="Hải Phòng">Hải Phòng</option>
                                            <option value="Đà Nẵng">Đà Nẵng</option>
                                            <option value="Thủ Đức">Thủ Đức</option>
                                            <option value="Vũng Tàu">Vũng Tàu</option>
											 <option value="Đà Nẵng">Lâm Đồng</option>
                                            <option value="Thủ Đức">Long An</option>
                                            <option value="Vũng Tàu">Châu Đốc</option>
                                          
                                        </select>
                                       
                                    </div>
                                  <div class="form-group">
                                        <input  class="form-control"type="text" name="client" value="<?php  if(isset($list)) echo $list['FullName']; else echo"";  ?>" placeholder="Name" >
                                      
                                    </div>
									  <div class="form-group">
                                        <input  class="form-control"type="email" name="email" value="<?php  if(isset($list)) echo $list['Email'];else echo "" ?>" placeholder="Email">
                                      
                                    </div>
									<div class="form-group">
                                        <input name="phone" class="form-control" type="text" value="<?php if(isset($list))echo $list['Phone'];else echo "" ?>"  placeholder="Phone Number" >                            
                                    </div>
									<div class="form-group">
                                        <input name="address" class="form-control" type="text" value ="<?php if(isset($list)) echo $list['Address'];else echo "" ?>" placeholder="Address" >
                                    </div>
									
									<button type="submit" class="btn btn-outline-primary btn-block" >PAY</button>
									
									<input hidden=true name="username" value="<?php echo $user ?>" />
                                  </form>
							
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }  else{
echo '
<form action="../shoes.php" method ="get" >
<button class="btn btn-success" type="submit"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left" style="width: 1rem; height: 1rem;"><polyline points="15 18 9 12 15 6"></polyline></svg>Continue shopping</button></h2>
</form>

';
echo '<h2 style="color:red; text-align:center;margin-bottom:20%;margin-top:5%;"> 
You have no products in your shopping cart :((
</h2>'; }?> 

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>