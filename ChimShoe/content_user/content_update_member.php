<?php

$level ="../";
include $level."db.php";
include "update_member.php";

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
            <h1>Members Information</h1>
            <hr/>
        </div>
       <form class="form-horizontal" action="update_member_process.php" enctype="multipart/form-data" method = "POST">
<fieldset>
<input type ="text" name = "txt_id_member" hidden ="true" value ="<?php echo $detail_member_rowsdata[0]['ID']; ?>">
<input type ="text" name = "txt_img_member" hidden ="true" value ="<?php echo $detail_member_rowsdata[0]['MemberImage']; ?>">

<!-- Form Name -->
<div  class="nav";
 <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../admin.php">Admin</a></li>
              <li class="breadcrumb-item"><a href="../user.php">All Members</a></li>
              <li class="breadcrumb-item active" aria-current="page">Members Infomation</li>
            </ol>
          </nav>
</div>

<!-- Text input-->
<?php foreach($detail_member_rowsdata as $detail) { ?>
<div class="form-group">
  <label class="col-md-4 control-label" for="product_id">NAME</label>  
  <div class="col-md-4">
  <input  name="load_name" value="<?php echo $detail['MemberName']; ?>" class="form-control input-md"  type="text">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">EMAIL</label>  
  <div class="col-md-4">
  <input  name="load_email"   value="<?php echo $detail['MemberEmail']; ?>"   class="form-control input-md" required="" type="text">
    
  </div>
</div>
<?php } ?>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">PHONE</label>  
  <div class="col-md-4">
  <input id="available_quantity" value="<?php echo $detail['MemberPhone']; ?>"  name="load_phone"  class="form-control input-md"  type="text">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="online_date">POSITION</label>  
  <div class="col-md-4">
  <input id="online_date"  value="<?php echo $detail['MemberPosition']; ?>"  name="load_position" class="form-control input-md"  type="date">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="online_date">HOURS WORKED</label>  
  <div class="col-md-4">
  <input id="online_date"  value="<?php echo $detail['MemberHours']; ?>"  name="load_hours" class="form-control input-md"  type="date">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="online_date">DAYS OFF</label>  
  <div class="col-md-4">
  <input id="online_date"  value="<?php echo $detail['MemberDaysOff']; ?>"  name="load_days" class="form-control input-md"  type="date">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="online_date">TOTAL TRANSACTIONS</label>  
  <div class="col-md-4">
  <input id="online_date"  value="<?php echo $detail['MemberTotal']; ?>"  name="load_transactions" class="form-control input-md"  type="date">
    
  </div>
</div>
	
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">USERNAME</label>  
  <div class="col-md-4">
  <input id="available_quantity"value="<?php echo $detail['MemberUserName']; ?>"   name="load_username"  class="form-control input-md"  type="text">
    
  </div>
</div>
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_description">PASSWORD</label>
  <div class="col-md-4">                     
    <input class="form-control" id="product_description" value="<?php  echo $detail['MemberPassWord'] ?>"  type="password" name="load_password">
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="product_description">CONFIRM PASSWORD</label>
  <div class="col-md-4">                     
    <input class="form-control" id="product_description" type="password" name="load_confirm_password">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="approuved_by">AVATAR</label>  
  <div class="col-md-4">
   
<input class="form-control"  name="fileupload" type="file" id="formFileMultiple" multiple /> </br>
<!-- Button -->
<div class="form-group">
  <div class="col-md-12">
    <button   id="singlebutton" name="update" type="submit" class="btn btn-primary btn-block">Update</button>
  </div>
  
  </div>
</fieldset>
</form>
 <a  class="link_delete" href = "<?php echo "delete_member.php?id=".$detail['ID'] ?>">
    <button   id="singlebutton"  class="btn btn-danger ">Delete Member</button>
	</a>
	<form action = 'deactive_member.php' method ='GET'>
	
	<?php 
       $cc= $_GET['status'];


	 if($cc ==1)  echo ' <button   id="singlebutton" style="margin-left:34%;margin-top:-34px;" class="btn btn-warning "> Deactive Account</button>';
	?>
   
	<input hidden=true name='status' value="deactive"/>
	<input hidden=true name='id' value="<?php echo $detail['ID'] ?>"/>
	</form>
	<form action = 'deactive_member_2.php' method ='GET'>
	
	<?php 
       $cc= $_GET['status'];
	if($cc==0) echo ' <button   id="singlebutton" style="margin-left:34%;margin-top:-55px;" class="btn btn-success "> Active Account</button>' ;

	?>
   
	<input hidden=true name='status' value="deactive"/>
	<input hidden=true name='id' value="<?php echo $detail['ID'] ?>"/>
	</form>
</body>

</html>
<style> .link_delete{
	margin-left:55%;
	
} 
.link_deactive{
	margin-left:-19%;
	position:absolute;
} </style>