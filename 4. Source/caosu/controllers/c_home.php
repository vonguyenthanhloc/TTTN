<?php 
	class C_home
	{
		function Hien_thi_home()
		{
			//models 
			require_once("models/m_san_pham.php");			
			$m_san_pham = new M_san_pham();
			$san_pham = $m_san_pham->Hien_thi_san_pham();	
			//views
			$view = "views/home/home.php";
			require_once("public/content.php"); 	
		}	
	}
?>