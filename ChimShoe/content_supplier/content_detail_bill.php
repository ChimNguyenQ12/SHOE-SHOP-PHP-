<?php 
// session_start();
include"../db_cart.php";
include"index_data_bill_detail_admin.php";
?>
<div  class="nav";
 <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../admin.php">Admin</a></li>
              <li class="breadcrumb-item"><a href="../supplier.php">Report	</a></li>
			   <li class="breadcrumb-item"><a href="content_supplier/content_detail_bill.php">Detail Report	</a></li>
            </ol>
          </nav>
</div>
    <div class="page-header">
        <h1 style="text-align:center">  
Invoice Detail </h1>
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
<body>
<div class="container bootdey">
<div class="row invoice row-printable">
    <div class="col-md-12">
        <!-- col-lg-12 start here -->
		
	<?php foreach($bill_detail_rowsdata as $list) {?>
	<?php } ?>
        <div class="panel panel-default plain" id="dash_0">
            <!-- Start .panel -->
			
            <div class="panel-body p30">
                <div class="row">
				
                    <!-- col-lg-6 end here -->
                    <div class="col-lg-12">
                        <!-- col-lg-12 start here -->
                        <div class="invoice-details mt25">
                            <div class="well">
                                <ul class="list-unstyled mb0">
                                    <li><strong>Invoice</strong> <?php echo $list['ID_bill'] ?></li>
                                   
                                </ul>
								
								 <li><strong>ID Product</strong></li> 
										<?php foreach($bill_detail_rowsdata as $list) {?>
								<li><?php echo $list['ID_product'	].":Quantity:".$list['ProductQuantity'] ?></li>
										<?php } ?>
                            </div>
                        </div>
                    
                        <div class="invoice-items">
                            <div class="table-responsive" style="overflow: hidden; outline: none;" tabindex="0">
                                <table class="table table-bordered">
                                
									
                                    <tfoot>
                                      
                                        <tr>
                                           
                                          
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
									
					
                        <div class="invoice-footer mt25">
                            <p class="text-center"> <?php echo gmdate("l jS \of F Y ") . "<br>";  ?> </p>
				
                        </div>
                    </div>
                    <!-- col-lg-12 end here -->
                </div>
				
            
            </div>
		
		
				
        </div>
		</br>

			
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
</html>

