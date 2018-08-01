<?php
	@session_start(); 
	class C_home
	{
		function Hien_thi_home()
		{	
			//views
			$view = "views/home/home.php";
			$footer = "views/home/footer.php";
			require_once("public/content.php");	
		}	
	}
?>