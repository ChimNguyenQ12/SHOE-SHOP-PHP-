<?php 
$level_img="images/";
include"index_data_shoes_new.php";
?>
<style> 
.img{
	margin-left:20px;
	width:180px;
	height:180px;
	}
</style>
    <div class="layout_padding gallery_section">
    	<div class="container">
    		<div class="row">
			<?php foreach($dssp_rowsdata as $list_shoes)
			{ ?>
				<div class="col-sm-4">
    				<div class="best_shoes">
    					<p class="best_text"> <?php  echo $list_shoes['ProductName'] ?> </p>
    					<div class="shoes_icon"><img class="img" src=<?php echo $level_img.$list_shoes['ProductImage'] ?>></div>
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
    							<div class="shoes_price">$ <span style="color: #ff4e5b;"> <?php echo $list_shoes['ProductPrice'] ?></span></div>
    						</div>
    					</div>
    				</div>
    			</div> 
			<?php 
			}
			?>
    			
    		</div>
    		<div class="row">
    			
    			
    			
    		</div>
    		<div class="buy_now_bt">
    			<a href="shoes.php"><button class="buy_text">Buy Now</button></a>
    		</div>
    	</div>
    </div>