<?php
    @session_start();
	class C_san_pham
	{
		function Hien_thi_san_pham()
		{
			//models 
			require_once("models/m_san_pham.php");
			$m_san_pham = new M_san_pham();
			$san_phams = $m_san_pham->Lay_san_pham();
			
			//phan trang 
			require_once("Pager.php");
			$page = new pager();
			$limit = 5;
			$count_sp = count($san_phams);
			$vt = $page->findStart($limit);
			$page_sp = $page->findPages($count_sp,$limit);
			$curpage = $_GET["page"];
			$list_sp = $page->pageList($curpage,$page_sp);
			$san_phams = $m_san_pham->Lay_san_pham($vt,$limit);
			//echo '<pre>',print_r($san_phams),'</pre>';
			
			//views
			$view = "views/san_pham/san_pham.php";
			$footer = "views/san_pham/footer.php";
			require_once("public/content.php");	
		}
		function Hien_thi_ct_san_pham()
		{
			if(isset($_GET['edit']))
			{
				$ma_san_pham = $_GET['edit'];
				require_once("models/m_san_pham.php");
				$m_san_pham = new M_san_pham();
				$san_pham = $m_san_pham->Lay_san_pham_theo_ma($ma_san_pham);
				
				$view = "views/san_pham/edit_san_pham.php";
				$footer = "views/san_pham/footer_edit_san_pham.php";
				require_once("public/content.php"); 	
			}
		}
		function Sua_san_pham()
		{
			$ma_san_pham = $_POST['ma_san_pham'];
			$ma_loai = $_POST['ma_loai'];
			$ten_san_pham = $_POST['ten_san_pham'];
			$gia = $_POST['gia'];
			$mo_ta_tom_tat = $_POST['mo_ta_tom_tat'];
			$mo_ta_chi_tiet = $_POST['mo_ta_chi_tiet'];
			$hinh = $_FILES["hinh"]["error"]==0 ? $_FILES["hinh"]["name"] : $_POST['ten_hinh'];
			require_once("models/m_san_pham.php");
			$m_san_pham = new M_san_pham();
			$kq = $m_san_pham->Sua_san_pham($ma_loai,$ten_san_pham,$hinh,$gia,$mo_ta_tom_tat,$mo_ta_chi_tiet,$ma_san_pham);
			if($kq)
			{
				if($_FILES["hinh"]["error"] == 0)
				{
					$kqa = move_uploaded_file($_FILES["hinh"]["tmp_name"],"../public/layout/images/product/$hinh");				
				}
				echo "<script>alert('Sửa thành công')</script>";
				echo "<script>window.location='product.php'</script>";		
			}		
		}
		function Hien_thi_them_san_pham()
		{
			//models
			require_once("models/m_san_pham.php");
			$m_san_pham = new M_san_pham();
			if(isset($_POST['btnAddSP']))
			{
				$ma_loai = $_POST['ma_loai'];
				$ten_san_pham = $_POST['ten_san_pham'];
				$gia = $_POST['gia'];
				$mo_ta_tom_tat = $_POST['mo_ta_tom_tat'];
				$mo_ta_chi_tiet = $_POST['mo_ta_chi_tiet'];
				$hinh = $_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:"";			
				$kq = $m_san_pham->Them_san_pham($ma_loai,$ten_san_pham,$hinh,$gia,$mo_ta_tom_tat,$mo_ta_chi_tiet);
				if($kq)
				{
					if($_FILES["hinh"]["error"]==0)
					{
						$kqa=move_uploaded_file($_FILES["hinh"]["tmp_name"],"../public/layout/images/product/$hinh");
							
					}
					echo "<script>alert('Thêm thành công')</script>";
					echo "<script>window.location='product.php'</script>";	
				}
			}
			$san_pham = $m_san_pham->Tim_ma_san_pham_max();
			$loai_sp = $m_san_pham->Lay_loai_san_pham();
			//echo '<pre>',print_r($san_pham),'</pre>';
			//views
			$view = "views/san_pham/add_san_pham.php";
			$footer = "views/san_pham/footer_edit_san_pham.php";
			require_once("public/content.php");	
		}	
	}
?>