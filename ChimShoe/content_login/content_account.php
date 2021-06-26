<!DOCTYPE html>
<?php $username=$_GET['username']; 
$u = $username;
include "index_data_client.php";
include "index_data_client_bill_detail.php";
//var_dump($list_bill_detail_rowsdata);
foreach($list_client_rowsdata as $list);
// var_dump ($list_client_rowsdata);
$fullname= $list['FullName'];
include "index_data_client_bill.php";
// var_dump($list_bill_rowsdata);
foreach($list_bill_rowsdata as $detail);
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Profile </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    	body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

    </style>
</head>
<body>
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <a  style="padding-bottom:50px;" href="<?Php echo "../index.php?username=".$u ?>"> Continue Shopping</a>
          <!-- /Breadcrumb -->
    <h1> Profile </h1>
	<form action="update_account_process.php" method = "post" >
	<input name="id" value="<?php echo $list['ID'] ?>" hidden=true  />
	<input name="username" value="<?php echo $list['UserName'] ?>" hidden=true  />
          <div class="row gutters-sm">
          
            <div class="col-md-12">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Username</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" disabled value ="<?php echo $list['UserName']  ?>"> </input> <button name="update" type="submit" style="margin-left:80%;position:absolute;width:90px;"  > <img style="width:20px;height:20px;" src="../images/add.jpg"  />Update</button>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">FullName</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                   <input type="text" name="fullname_account" value ="<?php echo $list['FullName']  ?>"> </input>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                         <input type="text" name="email_account" value ="<?php echo $list['Email']  ?>"> </input>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                         <input type="text" name="phone_account" value ="<?php echo $list['Phone']  ?>"> </input>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                         <input type="text" name="address_account" value ="<?php echo $list['Address']  ?>"> </input>
                    </div>
                  </div>
				  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                         <input type="password" disabled  name="password_account" value ="<?php echo $list['PassWord']  ?>"> </input>
                    </div>
                  </div>
				  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">New Password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                         <input type="password" name="new_password_account" value =""> </input>
                    </div>
                  </div>
				  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Repeat PassWord</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                         <input type="password" name="repeat_password_account" value =""> </input>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
		  </form>
		   <h1> Purchase order </h1>
		   
    <div class="page-header">
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
<?php if(!empty($list_bill_rowsdata)){ ?>
<div class="container bootdey">
<div class="row invoice row-printable">
    <div class="col-md-12">
        <!-- col-lg-12 start here -->
		
		<?php foreach($list_bill_rowsdata as $list) {?>
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
                                    <li><strong>Invoice Date:</strong> <?php echo $list['BillDate']?></li>
                                
                                    <li><strong>Status:</strong> <span class="label label-danger"><?php  echo "Processing" ?></span></li>
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
                    
							
                        </div>
                    </div>
                    <!-- col-lg-12 end here -->
                </div>
				
            
            </div>
		
		
				
        </div>
		 <?php } ?>
		</br>
			
			
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


		<a href="<?php echo '../index.php?session=unset' ?>" 
<button style="margin-left:90%;" type="button" class="btn btn-danger">Log-out</button>
</a>
    </div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>