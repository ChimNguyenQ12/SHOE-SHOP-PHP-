<?php
include ("detail_data.php");
var_dump ($sanphamchitiet_rowsdata);
foreach($sanphamchitiet_rowsdata as $chitiet);
$id = $chitiet['ID'] 
header("Location:add_cart_no_trans.php?id=".$id);
?>
<form action="add_cart_no_trans.php" action="get" >		
						<input hidden=true name="id" value ="<?php echo $chitiet['ID'] ?> " />
						<div class="action">
					<button type="submit" class="add-to-cart btn btn-default" type="button">Add to cart</button> 
							<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
						</div>
						</form>