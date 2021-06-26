<?php
include "insert_product_type_2.php";
$level ="../";
include $level."db.php";
include "update_product.php";
foreach($sanphamchitiet_rowsdata as $sanpham);
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="text-center">
            <h1>Update product information</h1>
            <hr/>
        </div>
       <form class="form-horizontal" action="update_product_process.php" enctype="multipart/form-data" method = "POST">
<fieldset>
<input type ="text" name = "txt_id_product" hidden ="true" value ="<?php echo $sanphamchitiet_rowsdata[0]['ID']; ?>">
<input type ="text" name = "txt_img_product" hidden ="true" value ="<?php echo $sanphamchitiet_rowsdata[0]['ProductImage']; ?>">

<!-- Form Name -->
<div  class="nav";
 <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../admin.php">Admin</a></li>
              <li class="breadcrumb-item"><a href="../product.php">Product Management</a></li>
              <li class="breadcrumb-item active" aria-current="page">Update Product</li>
            </ol>
          </nav>
</div>

<!-- Text input-->
<?php foreach($sanphamchitiet_rowsdata as $chitiet) { ?>
<div class="form-group">
  <label class="col-md-4 control-label" for="product_id">PRODUCT CODE</label>  
  <div class="col-md-4">
  <input  name="product_code" value="<?php echo $chitiet['ProductCode']; ?>" class="form-control input-md"  type="text">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>  
  <div class="col-md-4">
  <input  name="product_name"   value="<?php echo $chitiet['ProductName']; ?>"   class="form-control input-md" required="" type="text">
    
  </div>
</div>
<?php } ?>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_categorie">PRODUCT CATEGORY</label>
  <div class="col-md-4">
    <select  name="product_categorie" class="form-control">
	<?php foreach ($loaisanpham_rowsdata as $loai)
	{ 
	?>
	<option name="product_categorie"  value="<?php echo $loai['ProductTypeName'] ?> " 

       <?php 
	   if($loai['ProductTypeName']==$sanpham['ProductType'])
	   echo "selected";  ?> >
	   <?php echo $loai['ProductTypeName']; ?>
	</option>
	<?php }  ?>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">AVAILABLE QUANTITY</label>  
  <div class="col-md-4">
  <input id="available_quantity" value="<?php echo $chitiet['ProductQuantity']; ?>"  name="available_quantity"  class="form-control input-md"  type="text">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">PRODUCT PRICE</label>  
  <div class="col-md-4">
  <input id="available_quantity"value="<?php echo $chitiet['ProductPrice']; ?>"   name="product_price"  class="form-control input-md"  type="text">
    
  </div>
</div>

<!-- Text input-->


<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_description">PRODUCT DESCRIPTION</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="product_description"   name="product_description"><?php echo $chitiet['ProductDescription']; ?></textarea>
  </div>
</div>




<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="online_date">COLOR</label>  
  <div class="col-md-4">
  <input id="online_date" name="product_color" value="<?php echo $chitiet['ProductColor']; ?>" class="form-control input-md"  type="date">
    
  </div>
</div>
	<div class="form-group">
  <label class="col-md-4 control-label" for="online_date">SIZE</label>  
  <div class="col-md-4">
  <input id="online_date" name="product_size" value="<?php echo $chitiet['ProductSize']; ?>" class="form-control input-md"  type="date">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="approuved_by">Image Product</label>  
  <div class="col-md-4">
   
<input class="form-control"  name="fileupload" type="file" id="formFileMultiple" multiple />
<!-- Button -->
<div class="form-group">
  <div class="col-md-4">
    <button   id="singlebutton" name="update" type="submit" class="btn btn-primary">Update</button>
  </div>
  </div>
</fieldset>
</form>
</body>

</html>