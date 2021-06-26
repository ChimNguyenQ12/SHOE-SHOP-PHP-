<?php
 include "insert_product_type.php";
$level ="../";
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
            <h1>Add Product</h1>
            <hr/>
        </div>
       <form class="form-horizontal"action="content_product/upload_product.php"  enctype="multipart/form-data" method = "POST">
<fieldset>

<!-- Form Name -->
<div  class="nav";
 <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin.php">Admin</a></li>
              <li class="breadcrumb-item"><a href="product.php">Products</a></li>
              <li class="breadcrumb-item active" aria-current="page">Add Product</li>
            </ol>
          </nav>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_id">PRODUCT CODE</label>  
  <div class="col-md-4">
  <input id="product_code" name="product_code" placeholder="PRODUCT CODE" class="form-control input-md"  type="text">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>  
  <div class="col-md-4">
    <input  name="product_name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_categorie">PRODUCT CATEGORY</label>
  <div class="col-md-4">
     <select id="product_categorie"  name="product_categorie"  class="form-control">
	<?php foreach ($loaisanpham_rowsdata as $loai) { ?>
	<option  value="<?php echo $loai['ProductTypeName'] ?>"  ><?php    echo $loai['ProductTypeName'] ?>
	<?php }  ?>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">AVAILABLE QUANTITY</label>  
  <div class="col-md-4">
  <input id="available_quantity" name="available_quantity" placeholder="AVAILABLE QUANTITY" class="form-control input-md"  type="text">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">PRODUCT PRICE</label>  
  <div class="col-md-4">
  <input id="available_quantity" name="product_price" placeholder="PRODUCT PRICE" class="form-control input-md"  type="text">
    
  </div>
</div>

<!-- Text input-->


<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_description">PRODUCT DESCRIPTION</label>
  <div class="col-md-4">                     
        <textarea class="form-control" id="product_description" name="product_description"></textarea>
  </div>
</div>




<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="online_date">COLOR</label>  
  <div class="col-md-4">
   <input id="author" name="product_color" placeholder="COLOR" class="form-control input-md"  type="text">
    
  </div>
</div>
	<div class="form-group">
  <label class="col-md-4 control-label" for="online_date">SIZE</label>  
  <div class="col-md-4">
  <input id="online_date" name="product_size" placeholder="SIZE" class="form-control input-md"  type="text">
    
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
     <button   id="singlebutton" type ="submit" name="singlebutton" class="btn btn-primary">Add Product</button>
  </div>
  </div>
</fieldset>
</form>
</body>

</html>