<?php 
if(isset($_POST['username'])){
	$username = $_POST['username'];
	$user = $username;
}
session_start();	
$cart = $_SESSION['cart'];
$sub_total = 0;
$Quantity = 0;
$Client= $_POST['client'];
$City= $_POST['city'];
$Country= $_POST['country'];
$Address= $_POST['address'];
$Phone= $_POST['phone'];
$Email = $_POST['email'];
?>
<?php if($user != "Login") { ?>
 <h2 ><a href="../shoes.php"><svg style="width: 1rem; height: 1rem;"><pol 9 ></svg>Continue Shopping</a></h2>
    <div class="page-header">
        <h1 style="text-align:center">Invoice</h1>
    </div>
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Receipt page - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    	body{
    margin-top:10px;
    background:#eee;    
}
    </style>
</head>
<form class="form-horizontal" action="upload_bill.php"    enctype="multipart/form-data" method = "POST">
<body>
<div class="container bootdey">
<div class="row invoice row-printable">
    <div class="col-md-12">
        <!-- col-lg-12 start here -->
        <div class="panel panel-default plain" id="dash_0">
            <!-- Start .panel -->
            <div class="panel-body p30">
                <div class="row">
                    <!-- Start .row -->
                    <div class="col-lg-6">
                        <!-- col-lg-6 start here -->
                        <div class="invoice-logo"><img width="100" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Invoice logo"></div>
                    </div>
                    <!-- col-lg-6 end here -->
                    <div class="col-lg-6">
                        <!-- col-lg-6 start here -->
                        <div class="invoice-from">
                            <ul class="list-unstyled text-right">
                                <li>name</li>
                                <li>phone</li>
                                <li>email</li>
                            </ul>
                        </div>
                    </div>
                    <!-- col-lg-6 end here -->
                    <div class="col-lg-12">
                        <!-- col-lg-12 start here -->
                        <div class="invoice-details mt25">
                            <div class="well">
                                <ul class="list-unstyled mb0">
                                    <li><strong>Invoice</strong>123</li>
                                    <li><strong>Invoice Date:</strong> <?php echo date("Y-m-d")?></li>
                                
                                    <li><strong>Status:</strong> <span class="label label-danger">UNPAID</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="invoice-to mt25">
                            <ul class="list-unstyled">
                                <li><strong>Invoiced To</strong></li>
                                <li><?php echo $Client ?></li>
                                <li><?php echo $Address." / ".$City." / ".$Country ?></li>
                                <li><?php echo $Phone ?></li>
                                <li><?php echo $Email ?></li>
                            </ul>
                        </div>
                        <div class="invoice-items">
                            <div class="table-responsive" style="overflow: hidden; outline: none;" tabindex="0">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="per70 text-center">Description</th>
                                            <th class="per5 text-center">Qty</th>
                                            <th class="per25 text-center">Total</th>
                                        </tr>
                                    </thead>
									<?php foreach($_SESSION['cart'] as $ds_bill)
									{ 
									?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $ds_bill['ProductName']?></td>
                                            <td class="text-center"><?php echo $ds_bill['count'] ?></td>
                                            <td class="text-center"><?php echo number_format($ds_bill['count']*$ds_bill['ProductPrice'],3)."USD";  ?> </td>
                                        </tr>
									
                                    </tbody>
									<?php 
									$sub_total+= $ds_bill['ProductPrice'] * $ds_bill['count']; 
									$vat_total = ($sub_total*20)/100;
									$total =  number_format(($sub_total+ $vat_total),3);
									$Quantity += $ds_bill['count'];
									}
									?>
                                    <tfoot>
                                        <tr>
                                            <th colspan="2" class="text-right">Sub Total:</th>
                                            <th class="text-center"><?php  echo number_format($sub_total,3).'USD'    ?></th>
                                        </tr>
                                        <tr>
                                            <th colspan="2" class="text-right">20% VAT:</th>
                                            <th class="text-center"><?php  echo number_format($vat_total,3).'USD'    ?></th>
                                        </tr>
                                        <tr>
                                            <th colspan="2" class="text-right">Discount:</th>
                                            <th class="text-center">$00.00 USD</th>
                                        </tr>
                                        <tr>
                                            <th colspan="2" class="text-right">Total:</th>
                                            <th class="text-center"><?php echo $total.'USD' ?></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
						<input name="date" value="<?php echo date("Y-m-d")?>" hidden="true" />
						<input name="total" value="<?php echo $total ?>" hidden="true" />
						<input name="name" value="<?php echo $Client ?>" hidden="true" />						
						<input name="address" value="<?php echo $Address?>" hidden="true" />
						<input name="username" value="<?php echo $user ?>" hidden="true" />
					     
					
					
                        <div class="invoice-footer mt25">
                            <p class="text-center"> <?php echo gmdate("l jS \of F Y ") . "<br>";  ?> </p>
							<button type="submit" class="btn btn-primary btn-block" >PAY</button>
                        </div>
                    </div>
                    <!-- col-lg-12 end here -->
                </div>
                <!-- End .row -->
            </div>
        </div>
        <!-- End .panel -->
    </div>
    <!-- col-lg-12 end here -->
</div>
</div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</form>
</html>
<?php  } else echo'<script>alert("Please Login")
 window.location.assign("content_shop_cart.php");
</script>'?>

