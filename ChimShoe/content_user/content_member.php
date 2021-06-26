<?php 
$level_img = "img_member/";
$level = "content_user/";
include "index_data_member.php";
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Members</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	 <link rel="stylesheet" href="css/profile.css">
    <style type="text/css">
    	body{
    background:#DCDCDC;
    margin-top:20px;
}
.card-box {
    padding: 20px;
    border-radius: 3px;
    margin-bottom: 30px;
    background-color: #fff;
}

.social-links li a {
    border-radius: 50%;
    color: rgba(121, 121, 121, .8);
    display: inline-block;
    height: 30px;
    line-height: 27px;
    border: 2px solid rgba(121, 121, 121, .5);
    text-align: center;
    width: 30px
}

.social-links li a:hover {
    color: #797979;
    border: 2px solid #797979
}
.thumb-lg {
    height: 88px;
    width: 88px;
}
.img-thumbnail {
    padding: .25rem;
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: .25rem;
    max-width: 100%;
    height: auto;
}
.text-pink {
    color: #ff679b!important;
}
.btn-rounded {
    border-radius: 2em;
}
.text-muted {
    color: #98a6ad!important;
}
h4 {
    line-height: 22px;
    font-size: 18px;
}
    </style>
</head>
<style>
.img{
	
	width:100px;
	height:100px;
	margin:auto;
	border-radius:50%;
}

 </style>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="content">
  <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin.php">Admin</a></li>
              <li class="breadcrumb-item active" aria-current="page">All Members</li>
            </ol>
          </nav>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"><a href="add_member.php" class="btn btn-custom waves-effect waves-light mb-4" data-animation="fadein" data-plugin="custommodal" data-overlayspeed="200" data-overlaycolor="#36404a"><i class="mdi mdi-plus"></i> Add Members</a></div>
            <!-- end col -->
        </div>
        <!-- end row -->
        <div class="row">
		<?php foreach ($dstv_rowsdata as $list_member) 
		{
			?>
            <div class="col-lg-4">
                <div class="text-center card-box">
				      <?php if($list_member['MemberStatusAccount']=='1') echo '      <button   id="singlebutton" style="margin-left:84%;margin-top:-20px;" class="btn btn-success "> Active</button>'; else echo '  <button   id="singlebutton" style="margin-left:78%;margin-top:-20px;" class="btn btn-danger "> Deactive</button>' ?>
                    <div style="cc" class="member-card pt-2 pb-2">
                        <div><img  class="img" src="<?php echo $level_img.$list_member["MemberImage"] ?>" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                        <div class="">
                            <h4> <?php echo $list_member["MemberName"] ?></h4>
                            <p class="text-muted"><?php echo $list_member["MemberPosition"] ?> <span>| </span><span><a href="#" class="text-pink"><?php echo $list_member["MemberEmail"] ?></a></span></p>
                        </div>
                        <ul class="social-links list-inline">
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                        </ul>
						 <ul class="social-links list-inline">
                          <p class="text-muted"><?php echo $list_member["MemberPhone"] ?>
                        </ul>
						<form action="content_user/content_update_member.php" method ="get" >
						<input  hidden=true name="id" value="<?php echo $list_member['ID'] ?> "/>	
                        <input  hidden=true name="status" value="<?php if($list_member['MemberStatusAccount']=='0') echo 0 ?> "/>		
						  <input  hidden=true name="status" value="<?php if($list_member['MemberStatusAccount']=='1') echo 1 ?> "/>		
						<button type="submit" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">Member Details</button>
						
						</form>
                        
                        <div class="mt-4">
                            <div class="row">
                                <div class="col-4">
                                    <div class="mt-3">
                                        <h4><?php echo $list_member["MemberHours"] ?></h4>
                                        <p class="mb-0 text-muted">Hours Worked</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mt-3">
                                        <h4><?php echo $list_member["MemberDaysOff"] ?></h4>
                                        <p class="mb-0 text-muted">Days Off</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mt-3">
                                        <h4><?php echo $list_member["MemberTotal"] ?></h4>
                                        <p class="mb-0 text-muted">Total Transactions</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		<?php } ?>
       
           
            <!-- end col -->
        </div>
      
       <?php $page= 1 ?> 
		 
    		</div>
    		<div class="row">
            <div class="col-12">
                <div class="text-right">
                    <ul class="pagination pagination-split mt-0 float-right">
                        <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span> <span class="sr-only">Previous</span></a></li>
                        <li class="page-item <?php if($page=='1') echo 'active'; ?>"><a class="page-link" href="<?php echo "content_shoes/index_data_shoes_paging.php?tranghientai=".'1' ?>">1</a></li>
                        <li class="page-item <?php if($page=='2') echo 'active'; ?>"><a class="page-link" href="<?php echo "content_shoes/index_data_shoes_paging.php?tranghientai=".'2' ?>">2</a></li>
                        <li class="page-item <?php if($page=='3') echo 'active'; ?>"><a class="page-link" href="<?php echo "content_shoes/index_data_shoes_paging.php?tranghientai=".'3' ?>">3</a></li>
                        <li class="page-item <?php if($page=='4') echo 'active'; ?>"><a class="page-link" href="<?php echo "content_shoes/index_data_shoes_paging.php?tranghientai=".'4' ?>">4</a></li>
                        <li class="page-item <?php if($page=='5') echo 'active'; ?>"><a class="page-link" href="<?php echo "content_shoes/index_data_shoes_paging.php?tranghientai=".'5' ?>">5</a></li>
                        <li class="page-item <?php if($page=='next') echo 'active'; ?>"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span> <span class="sr-only">Next</span></a></li>
                    </ul>
                </div>
            </div>
          </div>
    </div>
    <!-- container -->
</div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>