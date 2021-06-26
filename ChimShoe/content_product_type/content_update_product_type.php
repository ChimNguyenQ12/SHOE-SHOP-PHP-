<?php
$level ="../";
include "update_product_type.php";
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
            <h1>Update Product Type</h1>
            <hr/>
        </div>
       <form class="form-horizontal" action="update_product_type_process.php" enctype="multipart/form-data" method = "POST">
<fieldset>
<input type ="text" name="txt_id_product" hidden ="true" value ="<?php echo $sanphamchitiet_rowsdata[0]['ID']; ?>">

<!-- Form Name -->
<div  class="nav";
 <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../admin.php">Admin</a></li>
              <li class="breadcrumb-item"><a href="../product_type.php">Product Type</a></li>
              <li class="breadcrumb-item active" aria-current="page">Update Product</li>
            </ol>
          </nav>
</div>
<style> .nav{
	margin-bottom:40px;
	
} </style>
<!-- Text input-->
<?php foreach($sanphamchitiet_rowsdata as $chitiet) { ?>
<div class="form-group">
  <label class="col-md-4 control-label" for="product_id">PRODUCT CODE</label>  
  <div class="col-md-4">
  <input  name="product_code" value="<?php echo $chitiet['ProductTypeCode']; ?>" class="form-control input-md"  type="text">
  </div>
</div>

<?php } ?>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_categorie">PRODUCT CATEGORY</label>
  <div class="col-md-4">
    <input name="product_categorie" value="<?php echo $chitiet['ProductTypeName']; ?>" class="form-control input-md" type="text">
  </div>
</div>



<!-- Button -->
<div class="form-group">
  <div class="col-md-4">
    <button  style="margin-left:190%;margin-top:10%;"  id="singlebutton" name="update" type="submit"   class="btn btn-primary">Update</button>
  </div>
  </div>
</fieldset>
</form>
</body>

</html>