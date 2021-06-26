<?php 
$level_img = "img_product/";
$level = "content_product/";
include "index_data.php";
include "search_data_product.php";
?>
<!DOCTYPE html>

<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product</title>
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
</style>
<div  class="nav";
 <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin.php">Admin</a></li>
              <li class="breadcrumb-item"><a href="product.php">Product Management</a></li>
            </ol>
          </nav>
</div>
<body>
    <div class="container">
        <div class="text-center">
            <h1>Product Management</h1>
            <hr/>
        </div>
       
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                
				   <a href="add_product" class="btn btn-success pull-right">	
                    <span> Add Product  </span>
					</a>
               
                <div  class="row mt-12">
				<form action="product.php" method="get">
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
					
                    <div  class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Sort <span class="fa fa-caret-square-o-down ml-5"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li>
                                     <button style="border: none;background-color:white;padding-left:20px;" name="az" role="button" type="submit">
                                                <span class="fa fa-sort-alpha-asc pr-5">
                                                    Name A-Z
                                                </span>
                                            </button>
                                </li>
                                <li>
                                    <button style="border: none;background-color:white;padding-left:20px;" name="za" role="button" type="submit">
                                                <span class="fa fa-sort-alpha-asc pr-5">
                                                    Name Z-A
                                                </span>
                                            </button>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li> <button style="border: none;background-color:white;padding-left:20px;" name="brand" value="Adidas" role="button" type="submit">
                                                <span class="fa fa-sort-alpha-asc pr-5">
                                                    Adidas
                                                </span>
                                            </button></li>
                                <li> <button style="border: none;background-color:white;padding-left:20px;" name="brand" value="Nike" role="button" type="submit">
                                                <span class="fa fa-sort-alpha-asc pr-5">
                                                    Nike
                                                </span>
                                            </button></li>
								   <li> <button style="border: none;background-color:white;padding-left:20px;" name="brand"value="New Balance" role="button" type="submit">
                                                <span class="fa fa-sort-alpha-asc pr-5">
                                                    New Balance
                                                </span>
                                            </button></li>
                                <li> <button style="border: none;background-color:white;padding-left:20px;" value="Bata" name="brand" role="button" type="submit">
                                                <span class="fa fa-sort-alpha-asc pr-5">
                                                  Bata
                                                </span>
                                            </button></li>
								   <li> <button style="border: none;background-color:white;padding-left:20px;" name="brand" value="Puma" role="button" type="submit">
                                                <span class="fa fa-sort-alpha-asc pr-5">
                                                    Puma
                                                </span>
                                            </button></li>
                                <li> <button style="border: none;background-color:white;padding-left:20px;" value="Custom" name="brand" role="button" type="submit">
                                                <span class="fa fa-sort-alpha-asc pr-5">
                                                    Custom
                                                </span>
                                            </button></li>
								 <li> <button style="border: none;background-color:white;padding-left:20px;" value="Convert" name="brand" role="button" type="submit">
                                                <span class="fa fa-sort-alpha-asc pr-5">
                                                    Convert
                                                </span>
                                            </button></li>
                            </ul>
                        </div>
                    </div>
					</form>
                </div>
                <div  class="row mt-15">
                    <div class="khoang_cach" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                     <th class="text-center">Code</th>
									  <th class="text-center">Image</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Type</th>
                                    <th class="text-center">Quantity</th>
									 <th class="text-center">Price</th>
									  <th class="text-center">Size</th>
									 <th class="text-center">Color</th>
									 <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
									
                                </tr>
                            </thead>
								<?php foreach($dssp_paging_rowsdata as $list)
			{
			?>	
                            <tbody>
                                <tr>
                                  <br/>
                                 
                                </tr>
                                <tr>
                                    <td><?php echo $list['ProductCode']  ?></td>
									 <td>  <img  class="img" src=" <?php echo $level_img.$list['ProductImage'] ?> " alt ="">   </td>
                                    <td> <?php echo $list['ProductName']  ?></td>
                                    <td class="text-center"> <?php echo $list['ProductType']  ?></td>
									 <td class="text-center"> <?php echo $list['ProductQuantity']  ?></td>
									  <td class="text-center"> <?php echo $list['ProductPrice']  ?></td>
									   <td class="text-center"> <?php echo $list['ProductSize']  ?></td>
									  <td class="text-center">
                                      
                                                  <?php echo $list['ProductColor']  ?>
                                          
                                    </td>
									<td class="text-center">
                                       
                                                  <?php if($list['ProductQuantity']==0) echo "<span class='label label-danger'> 0 </span>"; else echo "<span class='label label-success'> 1 </span>"   ?>
                                            
                                    </td>
                                    <td class="text-center">
                                       <a   class="text" href ="<?php echo $level."content_update_product.php?id=".$list['ID'] ?>">  <button class="btn btn-warning">
                                           Update 
                                        </button>
										</a>
                                        &nbsp;
                                        <a   class="text" href ="<?php echo $level."delete_product.php?id=".$list['ID'] ?>">  <button class="btn btn-danger">
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
		<?php if(isset($_GET['tranghientai'])) $page= $_GET['tranghientai']; else $page =1; ?> 
		 
    		</div>
    		<div class="row">
            <div class="menu_paging" class="col-12">
                <div class="text-right">
                    <ul class="pagination pagination-split mt-0 float-right">
                        <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span> <span class="sr-only">Previous</span></a></li>
                        <li class="page-item <?php if($page=='1') echo 'active'; ?>"><a class="page-link" href="<?php echo "content_product/index_data_product_paging.php?tranghientai=".'1' ?>">1</a></li>
                        <li class="page-item <?php if($page=='2') echo 'active'; ?>"><a class="page-link" href="<?php echo "content_product/index_data_product_paging.php?tranghientai=".'2' ?>">2</a></li>
                        <li class="page-item <?php if($page=='3') echo 'active'; ?>"><a class="page-link" href="<?php echo "content_product/index_data_product_paging.php?tranghientai=".'3' ?>">3</a></li>
                        <li class="page-item <?php if($page=='4') echo 'active'; ?>"><a class="page-link" href="<?php echo "content_product/index_data_product_paging.php?tranghientai=".'4' ?>">4</a></li>
                        <li class="page-item <?php if($page=='5') echo 'active'; ?>"><a class="page-link" href="<?php echo "content_product/index_data_product_paging.php?tranghientai=".'5' ?>">5</a></li>
                        <li class="page-item <?php if($page=='next') echo 'active'; ?>"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span> <span class="sr-only">Next</span></a></li>
                    </ul>
                </div>
            </div>
          </div>
    </div>
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
<style>
.menu_paging{
	margin-right:20%;
}
</style>
</html>
