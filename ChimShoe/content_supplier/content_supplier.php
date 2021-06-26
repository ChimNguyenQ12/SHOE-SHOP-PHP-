<?php 
// session_start();
include"db_cart.php";
include"index_data_bill.php";
include "search_data_bill.php";
?>
<div  class="nav";
 <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin.php">Admin</a></li>
              <li class="breadcrumb-item"><a href="supplier.php">Report	</a></li>
            </ol>
          </nav>
</div>
    <div class="page-header">
        <h1 style="text-align:center">  
Invoice statistics </h1>
    </div>
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Report</title>
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
<form action="supplier.php" method="get">
 <div  style="margin-left:19.5%;width:870px;" class="col-xs-0 col-sm-3 col-md-3 col-lg-12">
                        <div  class="input-group">
                            <input type="text" type="submit" name= "search"class="form-control" placeholder="Enter status..." />
                            <span class="input-group-btn">
                                        <button class="btn btn-danger" type="submit">
                                            <span class="fa fa-search mr-5"></span>Search
                            </button>
                            </span>
                        </div>
                    </div>
					<div  style="margin-left:-1.6%;width:330px;" class="col-xs-0 col-sm-3 col-md-3 col-lg-12">
                        <div  class="input-group">
                            <input type="text" type="submit" name= "date"class="form-control" placeholder="Enter date...(yyyy-mm-dd)" />
                            <span class="input-group-btn">
                                        <button class="btn btn-danger" type="submit">
                                            <span class="fa fa-search mr-5"></span>Date
                            </button>
                            </span>
                        </div>
                    </div>
					</form>
					
<?php if(!empty($dssp_rowsdata)){ ?>
<div class="container bootdey">
<div class="row invoice row-printable">
    <div class="col-md-12">
        <!-- col-lg-12 start here -->
		
		<?php foreach($dssp_rowsdata as $list) {?>
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
                                    <li><strong>Invoice</strong> <?php echo $list['ID_bill'] ?></li> <a  href="<?php echo "content_supplier/change_status.php?id=".$list['ID_bill'] ?>" <button name="update" type="submit" style="position:absolute; margin-left:87%;margin-top:-2%;"> Change Status </button> </a>
                                    <li><strong>Invoice Date:</strong> <?php echo $list['BillDate']?></li>
                                
                                    <li><strong>Status:</strong> <?php if( $list['Status'] == 1){ echo "<span class='label label-success'>PAID</span>";} else if( $list['Status'] == 2) {echo "<span class='label label-danger'>UNPAID</span>";}else echo "DELETED" ?></li>
                                </ul>
								 <li><strong>Invoiced To</strong></li>
                                <p><?php echo $list['Biller'] ?></p>
									
								<a href="<?php echo"content_supplier/content_detail_bill.php?id=".$list['ID_bill'] ?>" <li><strong>Detail</strong></li> </a>
						
                            </div>
                        </div>
                    
                        <div class="invoice-items">
                            <div class="table-responsive" style="overflow: hidden; outline: none;" tabindex="0">
                                <table class="table table-bordered">
                                
									
                                    <tfoot>
                                      
                                        <tr>
                                            <th colspan="2" class="text-right">Total:</th>
                                            <th class="text-center"><?php echo $list['BillTotal'].'USD' ?></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
									
					
                        <div class="invoice-footer mt25">
                            <p class="text-center"> <?php echo $list['BillDate'] . "<br>";  ?> </p>
							<a href="<?php echo "content_supplier/delete_bill.php?id=" .$list['ID_bill']; ?>" <button type="button" class="btn btn-primary btn-block" >DELETE</button> </a>
                        </div>
                    </div>
                    <!-- col-lg-12 end here -->
                </div>
				
            
            </div>
		
		
				
        </div>
		</br>
			<?php } ?>
			
        <!-- End .panel -->
    </div>
    <!-- col-lg-12 end here -->
</div>
<?php } else{
echo '<h2 style="color:red; text-align:center;margin-bottom:20%;margin-top:5%;"> 
You dont have any invoice yet  </h2>'; }?>
</div>

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>

</body>
</html>

