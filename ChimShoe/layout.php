<?php 
if($IsIndex == true){
	include ($level.header."header.php");
	include ($level.banner."banner.php");
	include ($level.new_collection."new_collection.php");
	include ($level.racing_boots_index."racing_boots.php");
	include ($level.new_arrivals."new_arrivals.php");
	include ($level.shoe."shoe.php");
	include ($level.contact_now."contact_now.php");
	include ($level.footer."footer.php");
}
if($IsCollection == true){
	include ($level.collection."header_collection.php");
	include ($level.collection."content_collection.php");
	include ($level.footer."footer.php");
}
if($IsShoes == true){
	include ($level.shoes."header_shoes.php");
	include ($level.shoes."content_shoes.php");
}
if($IsRacingBoots == true){
	include ($level.racing_boots."header_racing_boots.php");
	include ($level.racing_boots."content_racing_boots.php");
	include ($level.footer."footer.php");
}
if($IsContact == true){
	include ($level.contact."header_contact.php");
	include ($level.contact."content_contact.php");
	include ($level.footer."footer.php");
}
if($IsLogin == true){
	include ($level.login."content_login.php");
}
if($IsAdmin == true){
	include ($level.admin."content_admin.php");
}
if($IsUser == true){
	include ($level.user."content_member.php");
}
if($IsProduct == true){
	include ($level.product."content_product.php");
}
if($IsProfile == true){
	include ($level.profile."content_profile.php");
}
if($IsAddMember == true){
	include ($level.add_member."content_add_member.php");
}
if($IsAddProduct == true){
	include ($level.add_product."content_add_product.php");
}
if($IsRegister == true){
	include ($level.register."content_register.php");
}
if($IsSupplier == true){
	include ($level.supplier."content_supplier.php");
}
if($IsProductType == true){
	include ($level.product_type."content_product_type.php");
}
if($IsComment == true){
	include ($level.comment."content_comment.php");
}
if($IsCustomer == true){
	include ($level.customer."content_customer.php");
}

?>