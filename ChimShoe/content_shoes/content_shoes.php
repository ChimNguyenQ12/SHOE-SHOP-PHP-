<?php 

$level="content_shoes/";
include "index_data_shoes.php";
$level_img="img_product/";
include "search_data_shoes.php";
if(isset($_GET['username'])){
$username = $_GET['username'];
$user = $username;
}
else {
	$user ="Login";
}
?>
<style> .nav{
	width:100%;	
	  background-color:rgb(99, 91, 91);
	  padding-left:400px;
	  margin-top:-2%;
	  position:relative;
	  
}
.img_shoes{
	width:190px;
	height:180px;
	margin-left:20px;
	}
	.img_shoes:hover{ transform: scale(1.2);}
	
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
	#othersIntro{
		position:absolute;
		margin-left:82%;
		margin-top:5%;
		border:0.5px solid #CBC2C2;
		padding:40px;
	}
	.btn-filter{
		background-color:#E7DFDF;
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
                           <a class="nav-item nav-link active " href="<?php echo "shoes.php?username=".$user ?>">New </a>
                           <a class="nav-item nav-link" href="<?php echo "shoes.php" ?>">Men</a>
                           <a class="nav-item nav-link" href="<?php echo $level."content_shoes_women.php" ?>">Women</a>
                           <a class="nav-item nav-link" href="<?php echo $level."content_shoes_racing_boots.php" ?>">Racing_Boots</a>
                           <a class="nav-item nav-link" href="<?php echo $level."content_shoes_sport.php" ?>">Sport</a>
						   <a class="nav-item nav-link" href="<?php echo $level."content_shoes_best_sale.php" ?>">Best_Sale</a>
						   
						   <form action="shoes.php" method="get">
						 
						    <input style="height:40px;width:300px;margin-top:2%;border-radius:20px 20px 20px 20px" class="input_search" type="text" name="search" type="submit" value="" placeholder="Enter shoe name....">   
							 <img style="margin-top:-19%; margin-left:105%;" class="img_search" src="images/search_icon.png">
							
							
						
						   
						   
                        </div>
                    </div>
                    </nav>
				</div>
			</div>
		</div>
				  
		 <div id="othersIntro">
        <div id="filter-sticky">
		<button type="submit" class="btn-filter">
          <p id="filter-title">
            <b>
              <i class="fas fa-angle-double-down"></i> PRODUCT FILTER
              <i class="fas fa-angle-double-down"></i></b>
          </p>
		  </button>
          <div id="filter-cat">
            <p class="titleName" id="filter-brandTitle">
              <i class="fas fa-angle-double-down"></i> BRAND
              <i class="fas fa-angle-double-down"></i>
            </p>
            <div class="filter-submenu" id="filter-brand">
              <div>
                <input name="brand" type="checkbox" id="NIKE" value ="Nike" />
                <label>NIKE</label>
              </div>
              <div>
                <input name="brand" type="checkbox" id="ADIDAS" value ="Adidas" />
                <label>ADIDAS</label>
              </div>
              <div>
                <input name="brand" type="checkbox" id="NEW-BALANCE" value ="New Balance" />
                <label>NEW BALANCE</label>
              </div>
              <div>
                <input name="brand" type="checkbox" id="ASICS" value ="Bata" />
                <label>BATA</label>
              </div>
			   <div>
                <input name="brand" type="checkbox" id="ASICS" value ="Puma" />
                <label>PUMA</label>
              </div>
			   <div>
                <input name="brand" type="checkbox" id="ASICS" value ="Convert" />
                <label>CONVERT</label>
              </div>
			   <div>
                <input name="brand" type="checkbox" id="ASICS" value ="Custom" />
                <label>CUSTOM</label>
              </div>
            </div>
			<input hidden=true name="username" value="<?php echo $user ?>" />
            <p class="titleName" id="filter-colorTitle" onclick="dropItDown()">
              <i class="fas fa-angle-double-down"></i> COLOR
              <i class="fas fa-angle-double-down"></i>
            </p>
            <div class="filter-submenu" id="filter-color">
              <div>
                <input name="color" type="checkbox" id="white" value ="White" />
                <label>WHITE</label>
              </div>
			   <div>
                <input name="color" type="checkbox" id="white-black" value="Red" />
                <label>RED</label>
              </div>
              <div>
                <input name="color" type="checkbox" id="white-black" value="Black, White" />
                <label>BLACK-WHITE</label>
              </div>
              <div>
                <input name="color" type="checkbox" id="pink" value="Pink" />
                <label>PINK</label>
              </div>
              <div>
                <input name="color" type="checkbox" id="pink-white" value="Blue" />
                <label>BLUE</label>
              </div>
			  <div>
                <input name="color" type="checkbox" id="pink-white" value="Black" />
                <label>BLACK</label>
              </div>
            </div>
            <p class="titleName" id="filter-priceTitle">
              <i class="fas fa-angle-double-down"></i> PRICE
              <i class="fas fa-angle-double-down"></i>
            </p>
            <div class="filter-submenu" id="filter-price">
              <div>
                <input name="price" type="checkbox" id="cheap" value="a"  />
                <label>10-50k</label>
              </div>
              <div>
                <input name="price" type="checkbox" id="affordable" value="b"  />
                <label>50k-100k</label>
              </div>
              <div>
                <input name="price" type="checkbox" id="high" value="c" />
                <label>100k-500k</label>
              </div>
              <div>
                <input name="price" type="checkbox" id="expensive" value="d" />
                <label>>500k</label>
              </div>
            </div>
          </div>
        </div>
      </div>
		  </form>
		<?php //var_dump($dsgm_rowsdata) ?>
    <div class="layout_padding ">
    	<div class="container">
    		<div class="row">
			
			
			<?php foreach($dsgm_paging_rowsdata  as $list_shoes)
			{  
			// var_dump($dsgm_paging_rowsdata);
			if ($list_shoes['ProductQuantity'] >0){
				?>
			
			<a href="<?php echo $level."content_shoes_detail.php?username=$user&&id=".$list_shoes['ID'];  ?>  "> 
				<div class="col-sm-4">
    				<div class="best_shoes">
    					<div class="shoes_icon"><img class="img_shoes" src=<?php echo $level_img.$list_shoes['ProductImage'] ?>></div>
						<p class="best_text"> <?php  echo $list_shoes['ProductName'] ?> </p>
						
						<button type="button"  class="btn sbtn-secondary "><?php  echo $list_shoes['ProductType'] ?> </button> <span class="hihi"> </span>
						<a href="#popup1"
						<button type="button" class="btn btn-outline-success"><?php  echo $list_shoes['ProductColor'] ?></button> </a>
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
						<form action = 'content_shoes/add_cart_no_trans.php' method ='get' >
    					<div class="star_text">
						<input hidden=true name="username" value="<?php echo $user; ?>" >
    						<button name="id" value ="<?php echo $list_shoes['ID'] ?>" onclick="myFunction()" type="submit" class="btn btn-danger btn-lg btn-block">Buy Now</button> 
    					</div>
						
						</form>
    				</div>
    			</div> 
					</a> 		
<script>
function myFunction() {
  alert("Add To Card Successfully");
}
</script>

			<?php 
			}  }
			?>
			<?php if(isset($_GET['tranghientai'])) $page= $_GET['tranghientai']; else $page =1; ?> 
		 


<div id="popup1" class="overlay">
  <div class="popup">
    <h2>Add Successfully</h2>
    <a class="close" href="#">&times;</a>
    <div class="content">
      Thank you.
    </div>
  </div>
</div>

<style>
body {
  font-family: Arial, sans-serif;
  background-size: cover;
  height: 100vh;
}

h1 {
  text-align: center;
  font-family: Tahoma, Arial, sans-serif;
  color: #06D85F;
  margin: 80px 0;
}

.box {
  width: 40%;
  margin: 0 auto;
  background: rgba(255,255,255,0.2);
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}

.button {
  font-size: 1em;
  padding: 10px;
  color: #fff;
  border: 2px solid #06D85F;
  border-radius: 20px/50px;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
}
.button:hover {
  background: #06D85F;
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}
</style>
		 
		 
		 
		 
		 
		 
		 
		 
    		</div>
    		<div class="row">
            <div class="col-12">
                <div class="text-right">
                    <ul class="pagination pagination-split mt-0 float-right">
                        <li class="page-item"><a class="page-link" href="<?php echo "shoes.php"?>" aria-label="Previous"><span aria-hidden="true">«</span> <span class="sr-only">Previous</span></a></li>
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
    </div>
	

	<style> .section_footer{
    position: absolute;
  bottom: -150%;
  width: 100%;
 
} </style>
    <div class="section_footer">
    	<div  class="container">
    		<div class="mail_section">
    			<div class="row">
    				<div class="col-sm-6 col-lg-2">
    		<div class="logo"><a href="index.php"><img style="height:80px;width:150px;" src="images/logodark2.jpg"></a></div>
    				</div>
    				<div class="col-sm-6 col-lg-2">
    					<div class="footer-logo"><img src="images/phone-icon.png"><span class="map_text">(71) 1234567890</span></div>
    				</div>
    				<div class="col-sm-6 col-lg-3">
    					<div class="footer-logo"><img src="images/email-icon.png"><span class="map_text">cuteChildren@gmail.com</span></div>
    				</div>
    				<div class="col-sm-6 col-lg-3">
    					<div class="social_icon">
    						<ul>
    							<li><a href="#"><img src="images/fb-icon.png"></a></li>
    							<li><a href="#"><img src="images/twitter-icon.png"></a></li>
    							<li><a href="#"><img src="images/in-icon.png"></a></li>
    							<li><a href="#"><img src="images/google-icon.png"></a></li>
    						</ul>
    					</div>
    				</div>
    				<div class="col-sm-2"></div>
    			</div>
    	    </div> 
    	    <div class="footer_section_2">
		        <div class="row">
    		        <div class="col-sm-4 col-lg-2">
    		        	<p class="dummy_text"> Hello everyone.Welcome to website Shoes made by CuteChildren</p>
    		        </div>
    		        <div class="col-sm-4 col-lg-2">
    		        	<h2 class="shop_text">Address </h2>
    		        	<div class="image-icon"><img src="images/map-icon.png"><span class="pet_text">No 40 Baria Sreet 15/2 NewYork City, NY, United States.</span></div>
    		        </div>
    		        <div class="col-sm-4 col-md-6 col-lg-3">
    				    <h2 class="shop_text">Our Company </h2>
    				    <div class="delivery_text">
    				    	<ul>
    				    		<li>Delivery</li>
    				    		<li>Legal Notice</li>
    				    		<li>About us</li>
    				    		<li>Secure payment</li>
    				    		<li>Contact us</li>
    				    	</ul>
    				    </div>
    		        </div>
    			<div class="col-sm-6 col-lg-3">
    				<h2 class="adderess_text">Products</h2>
    				<div class="delivery_text">
    				    	<ul>
    				    		<li>Prices drop</li>
    				    		<li>New products</li>
    				    		<li>Best sales</li>
    				    		<li>Contact us</li>
    				    		<li>Sitemap</li>
    				    	</ul>
    				    </div>
    			</div>
    			<div class="col-sm-6 col-lg-2">
    				<h2 class="adderess_text">Newsletter</h2>
    				<div class="form-group">
                        <input type="text" class="enter_email" placeholder="Enter Your email" name="Name">
                    </div>
                    <button class="subscribr_bt">Subscribe</button>
    			</div>
    			</div>
    	        </div> 
	        </div>
    	</div>
    </div>
	
	
	



	