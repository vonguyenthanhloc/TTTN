<?php
	require_once("controllers/c_product.php");
	$C_product = new C_product();

	if(isset($_POST['binhLuan'])){
		$C_product->Cap_nhat_binh_luan();
	}
	else{
		$C_product->Hien_thi_product_detail();
	}
	

?>