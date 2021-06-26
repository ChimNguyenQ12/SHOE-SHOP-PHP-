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
       <form class="form-horizontal"action="upload_product_type.php"  enctype="multipart/form-data" method = "POST">
<fieldset>
<style> .nav{
	
	margin-bottom:50px;
}  
.form-group{
	text-align:center;
}</style>
<!-- Form Name -->
<div  class="nav";
 <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../admin.php">Admin</a></li>
              <li class="breadcrumb-item"><a href="../product_type.php">Product Type</a></li>
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


<div class="form-group">
  <label class="col-md-4 control-label" for="product_categorie">PRODUCT CATEGORY</label>
  <div class="col-md-4">
     <input id="product_code" name="product_categorie" placeholder="PRODUCT TYPE" class="form-control input-md"  type="text">
  </div>
</div>

<div class="form-group">
  <div class="col-md-4">
     <button style="margin-left:180%;"  id="singlebutton" type ="submit" name="singlebutton" class="btn btn-primary">Add Type</button>
  </div>
  </div>
</fieldset>
</form>
</body>

</html>