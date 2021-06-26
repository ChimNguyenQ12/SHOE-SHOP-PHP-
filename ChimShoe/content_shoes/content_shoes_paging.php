<?php 
$level="content_shoes/";
include "index_data_shoes_paging.php";
$level_img="img_product/";
include "search_data_shoes.php";
?>
<style> .nav{
	width:100%;	
	  background-color:rgb(99, 91, 91);
	  padding-left:400px;
	  margin-top:-2%;
	  
}
.img_shoes{
	width:190px;
	height:180px;
	margin-left:20px;
	}
	.input_search{
		margin-top:12px;
		margin-left:30px;
	}
	.img_search{
		margin-left:20px;
		height:30px;
		margin-top:10px;
	}
	.hihi{
		margin-left:120px;
	}
</style>
	<div  class="nav" class="container">
			<div  class="row">
				<div  class="col-sm-12">
					<nav class="navbar navbar-expand-lg navbar-light bg-dark">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                           <a class="nav-item nav-link active " href="<?php echo "shoes.php" ?>">New </a>
                           <a class="nav-item nav-link" href="<?php echo "shoes.php" ?>">Men</a>
                           <a class="nav-item nav-link" href="<?php echo $level."content_shoes_women.php" ?>">Women</a>
                           <a class="nav-item nav-link" href="<?php echo $level."content_shoes_racing_boots.php" ?>">Racing_Boots</a>
                           <a class="nav-item nav-link" href="<?php echo $level."content_shoes_sport.php" ?>">Sport</a>
						   <a class="nav-item nav-link" href="<?php echo $level."content_shoes_best_sale.php" ?>">Best_Sale</a>
						   
						   <form action="shoes.php" method="get">
						    <input class="input_search" type="text" name="search" type="submit" value="" placeholder="Enter your keyword....">   
						   </form>
						    <img class="img_search" src="images/search_icon.png">
                        </div>
                    </div>
                    </nav>
				</div>
			</div>
		</div>
		<?php //var_dump($dsgm_rowsdata) ?>
    <div class="layout_padding ">
    	<div class="container">
    		<div class="row">
			
			
			<?php foreach($dsgm_paging_rowsdata  as $list_shoes)
			{  
			if ($list_shoes['ProductQuantity'] >0){
				?>
			
			<a href="<?php echo $level."content_shoes_detail.php?id=".$list_shoes['ID'];  ?>  "> 
				<div class="col-sm-4">
    				<div class="best_shoes">
    					<div class="shoes_icon"><img class="img_shoes" src=<?php echo $level_img.$list_shoes['ProductImage'] ?>></div>
						<p class="best_text"> <?php  echo $list_shoes['ProductName'] ?> </p>
						
						<button type="button"  class="btn sbtn-secondary "><?php  echo $list_shoes['ProductType'] ?> </button> <span class="hihi"> </span>
						<button type="button" class="btn btn-outline-success"><?php  echo $list_shoes['ProductColor'] ?></button>
    					<div class="star_text">
    						<div class="left_part">
    							<ul>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    					</ul>
    						</div>
    						<div class="right_part">
    							<div class="shoes_price"> <span style="color: #ff4e5b; margin-left:-500px;"> <?php echo number_format($list_shoes['ProductPrice'],3)."$" ?></span></div>
    						</div>
    					</div>
    				</div>
    			</div> 
					</a> 
			<?php 
			}  }
			?>
		 
			
			
			
    			
    		</div>
    		<div class="row">
            <div class="col-12">
                <div class="text-right">
                    <ul class="pagination pagination-split mt-0 float-right">
                        <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span> <span class="sr-only">Previous</span></a></li>
                        <li class="page-item active"><a class="page-link" href="<?php echo "content_shoes/index_data_shoes_paging.php?tranghientai=".'1' ?>">1</a></li>
                        <li class="page-item"><a class="page-link" href="<?php echo "content_shoes/index_data_shoes_paging.php?tranghientai=".'2' ?>">2</a></li>
                        <li class="page-item"><a class="page-link" href="<?php echo "content_shoes/index_data_shoes_paging.php?tranghientai=".'3' ?>">3</a></li>
                        <li class="page-item"><a class="page-link" href="<?php echo "content_shoes/index_data_shoes_paging.php?tranghientai=".'4' ?>">4</a></li>
                        <li class="page-item"><a class="page-link" href="<?php echo "content_shoes/index_data_shoes_paging.php?tranghientai=".'5' ?>">5</a></li>
                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span> <span class="sr-only">Next</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    		
    	</div>
    </div>