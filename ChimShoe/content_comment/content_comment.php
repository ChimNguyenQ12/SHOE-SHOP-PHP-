<?php 
include "index_data_comment.php";

?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>

.img{
	max-width:100%;
	max-height:50%;
}


.page-header { position: relative; }
.reviews {
    color: #555;    
    font-weight: bold;
    margin: 10px auto 20px;
}
.notes {
    color: #999;
    font-size: 12px;
}
.media .media-object { max-width: 120px; }
.media-body { position: relative; }
.media-date { 
    position: absolute; 
    right: 25px;
    top: 25px;
}
.media-date li { padding: 0; }
.media-date li:first-child:before { content: ''; }
.media-date li:before { 
    content: '.'; 
    margin-left: -2px; 
    margin-right: 2px;
}
.media-comment { margin-bottom: 20px; }
.media-replied { margin: 0 0 20px 50px; }
.media-replied .media-heading { padding-left: 6px; }

.btn-circle {
    font-weight: bold;
    font-size: 12px;
    padding: 6px 15px;
    border-radius: 20px;
}
.btn-circle span { padding-right: 6px; }
.embed-responsive { margin-bottom: 20px; }
.tab-content {
    padding: 50px 15px;
    border: 1px solid #ddd;
    border-top: 0;
    border-bottom-right-radius: 4px;
    border-bottom-left-radius: 4px;
}


</style>
<div  class="nav";
 <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin.php">Admin</a></li>
              <li class="breadcrumb-item"><a  href="comment.php">Comment Management</a></li>
            </ol>
          </nav>
</div>
<html lang="en">
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <title>Comment</title>
  </head>

  <body>
	
  </body>
</html>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1" id="logout">
        <div class="page-header">
            <h3 class="reviews">Comment Management</h3>
      
        </div>
        <div class="comment-tabs">                  
            <div class="tab-content">
			<?php foreach($cmt_rowsdata as $cmt){ ?>
                <div class="tab-pane active" id="comments-logout">                
                    <ul class="media-list">
                      <li class="media">
                        <a class="pull-left" href="#">
                          <img style="max-width:50px;max-height:50px;" class="media-object img-circle" src="<?php echo 'image_comment/'.$cmt['CommentImage'] ?>" alt="profile">
                        </a>
                        <div class="media-body">
                          <div class="well well-lg">

                              <h4 class="media-heading text-uppercase reviews"> <?php echo $cmt['Commentator'] ?> </h4>
                              <ul class="media-date text-uppercase reviews list-inline">
                                <li class="dd"> <?php echo $cmt['CommentDate'] ?>  </li>
                            
                              </ul>
                              <p class="media-comment">
                                <?php echo $cmt['CommentContent'] ?>
                              </p>
                     
                              <a class="btn btn-danger btn-circle text-uppercase" style="margin-left:750px;"  href="<?php echo "content_comment/delete_comment.php?id=".$cmt['ID'] ?>"><span class="glyphicon glyphicon-comment"></span> Delete</a>
                          </div>              
                        </div>
                        
			<?php }?>
               
			
        </div>
    </div>
  </div>
  <div class="page-header text-center">
   
</div>
