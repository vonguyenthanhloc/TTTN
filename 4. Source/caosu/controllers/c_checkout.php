<?php 
	@session_start();
	class C_checkout
	{
		function Hien_thi_checkout()
		{
			//models 
			// require_once("models/m_san_pham.php");
			// require_once("models/m_tai_khoan.php");
			// $m_san_pham = new M_san_pham();
			// $m_tai_khoan = new M_tai_khoan();
			//views
			$view = "views/checkout/checkout.php";
			require_once("public/content.php");	
		}
		function Hien_thi_confirmation()
		{
			//views
			$view = "views/checkout/confirmation.php";
			require_once("public/content.php");	
		}		
	}
?>