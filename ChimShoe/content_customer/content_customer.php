<?php 
$level="content_customer/";
include "index_data_customer.php";
?>
<!DOCTYPE html>

<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Customer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<style>
.img{
	width:80px;
	height:80px;
	margin-left: 17%;
}
.text{
	color:white;
}
.khoang_cach{
	margin-top:-70px;
}
</style>
<div  class="nav";
 <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin.php">Admin</a></li>
              <li class="breadcrumb-item"><a href="customer.php">Customer</a></li>
            </ol>
          </nav>
</div>
<body>
    <div class="container">
        <div class="text-center">
            <h1>List of Customers</h1>
            <hr/>
        </div>
       
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                
				   <a href="register.php" class="btn btn-success pull-right">	
                    <span> Add Customer </span>
					</a>
               
                <div  class="row mt-12">
				<form action="product_type.php" method="get">
                    <div   class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div  class="input-group">
                            <input type="text" type="submit" name= "search"class="form-control" placeholder="Enter code..." />
                            <span class="input-group-btn">
                                        <button class="btn btn-primary" type="submit">
                                            <span class="fa fa-search mr-5"></span>Search
                            </button>
                            </span>
                        </div>
                    </div>
					</form>
                    <div  class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Sort <span class="fa fa-caret-square-o-down ml-5"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li>
                                    <a role="button">
                                                <span class="fa fa-sort-alpha-asc pr-5">
                                                    Name A-Z
                                                </span>
                                            </a>
                                </li>
                                <li>
                                    <a role="button">
                                                <span class="fa fa-sort-alpha-desc pr-5">
                                                    Name Z-A
                                                </span>
                                            </a>
                                </li>
                              
                            </ul>
                        </div>
                    </div>
                </div>
                <div  class="row mt-15">
                    <div class="khoang_cach" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                     <th class="text-center"> Username</th>
                                    <th class="text-center">Email</th>
	                                 <th class="text-center">Phone</th>
									   <th class="text-center">Password</th>
                                    <th class="text-center">Action</th>
									
                                </tr>
                            </thead>
								<?php foreach($list_client_rowsdata as $list)
			{
			?>	
                            <tbody>
                                <tr>
                                  <br/>
                                 
                                </tr>
                                <tr>
                                    <td><?php echo $list['UserName']  ?></td>
									 
                                   
                                    <td class="text-center"> <?php echo $list['Email']  ?></td>
									     <td class="text-center"> <?php echo $list['Phone']  ?></td>
										 
									   <td  class="text-center"> <input style="border:none" type="password" value=" <?php echo $list['PassWord'] ?>"/></td>
                                    <td class="text-center">
                                       <a   class="text" href ="<?php echo $level."content_update_customer.php?id=".$list['ID'] ?>">  <button class="btn btn-warning">
                                           Update 
                                        </button>
										</a>
                                        &nbsp;
                                        <a   class="text" href ="<?php echo $level."delete_customer.php?id=".$list['ID'] ?>">  <button  type="button"class="btn btn-warning">
                                           Delete
                                        </button>
										</a>
                                    </td>
									
                                </tr>
                            </tbody>
								<?php 
			}
				?>
                        </table>
                    </div>
                </div>
			
            </div>
        </div>
    </div>
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>

</html>
