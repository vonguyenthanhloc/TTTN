<?php
	@session_start();
	class C_hoa_don
	{
		function Hien_thi_hoa_don()
		{
			//models
			require_once("models/m_hoa_don.php");
			$m_hoa_don = new M_hoa_don();
			$hoa_dons = $m_hoa_don->Lay_hoa_don();
			
			//Cap Nhat HD
			if(isset($_POST['btnCapnhat']) && isset($_POST['so_hoa_don']) && isset($_POST['ds']))
			{
				$dsTT = $_POST['ds'];
				$dsHoa_Don = $_POST['so_hoa_don'];
				for($i=0;$i<count($dsHoa_Don);$i++)
				{
					$so_hoa_don = $dsHoa_Don[$i];
					$tinh_trang = $dsTT[$i];
					$m_hoa_don->Cap_nhat_tinh_trang_hoa_don($so_hoa_don,$tinh_trang);	
				}
				header('location: order.php');	
			}
			
			//Phan Trang
			require_once("Pager.php");
			$page = new pager();
			$limit = 5;
			$coun_hd = count($hoa_dons);
			$vt = $page->findStart($limit);
			$page_hd = $page->findPages($coun_hd,$limit);
			$curpage = $_GET["page"];
			$list_hd = $page->pageList($curpage,$page_hd);
			$hoa_dons = $m_hoa_don->Lay_hoa_don($vt,$limit);
			
			//views
			$view = "views/hoa_don/hoa_don.php";
			$footer = "views/hoa_don/footer.php";
			require_once("public/content.php");	
		}

		function Hien_thi_don_hang_danh_cho_bartender()
        {
            //models
			require_once("models/m_hoa_don.php");
			$m_hoa_don = new M_hoa_don();
			$hoa_dons = $m_hoa_don->Lay_hoa_don();

            //Phan Trang
            require_once("Pager.php");
            $page = new pager();
            $limit = 5;
            $coun_hd = count($hoa_dons);
            $vt = $page->findStart($limit);
            $page_hd = $page->findPages($coun_hd,$limit);
            $curpage = $_GET["page"];
            $list_hd = $page->pageList($curpage,$page_hd);
            $hoa_dons = $m_hoa_don->Lay_hoa_don($vt,$limit);

            //views
            $script = "onload=\"JavaScript:AutoRefresh(1000);\"";
            $view = "views/hoa_don/bartender.php";
            $footer = "views/hoa_don/footer.php";
            require_once("public/content.php");
        }
		function Hien_thi_ct_hoa_don()
		{
			$so_hoa_don = $_GET['stt_order'];
			//models
			require_once("models/m_hoa_don.php");
			$m_hoa_don = new M_hoa_don();
			$ct_hoa_don = $m_hoa_don->getChiTietHoaDon($so_hoa_don);
			$user = $m_hoa_don->Doc_hoa_don($so_hoa_don);
			$hoa_don = $m_hoa_don->Doc_hoa_don_theo_so_hd($so_hoa_don);
			if(empty($user->ten))
			{
				$ten_user = $user->ho_ten;
			}
			else 
			{
				$ten_user = $user->ten;
				$dia_chi = '<label><span style="margin-left:20px">Địa chỉ: '.$user->dia_chi.'</span></label>';
			}
			
			//views
			$view = "views/hoa_don/ct_hoa_don.php";
			require_once("public/content.php");
		}
		function Hien_thi_edit_hoa_don()
		{
			//models
			require_once("models/m_san_pham.php");
			$m_san_pham = new M_san_pham();
			$san_pham = $m_san_pham->Lay_san_pham();
			//echo '<pre>',print_r($san_pham),'</pre>';
			//views 
			$view = "views/hoa_don/edit_hoa_don.php";
			$footer = "views/hoa_don/footer.php";
			require_once("public/content.php");		
		}
		function Hien_thi_Update_hoa_don()
		{
			//models
			$so_hoa_don = $_GET['order'];
			require_once("models/m_hoa_don.php");
			$m_hoa_don = new M_hoa_don();
			$ct_hoa_don = $m_hoa_don->getChiTietHoaDon($so_hoa_don);
			$user = $m_hoa_don->Doc_hoa_don($so_hoa_don);
			$hoa_don = $m_hoa_don->Doc_hoa_don_theo_so_hd($so_hoa_don);
			if(empty($user->ten))
			{
				$ten_user = $user->ho_ten;
			}
			else 
			{
				$ten_user = $user->ten;
				$dia_chi = '<label><span style="margin-left:20px">Địa chỉ: '.$user->dia_chi.'</span></label>';
			}
			
			//views
			$view = "views/hoa_don/Upload_HD.php";
			require_once("public/content.php");	
		}
		function Hien_thi_them_CTHD()
		{
			//models
			$so_hoa_don = $_GET['add'];
			require_once("models/m_hoa_don.php");
			require_once("models/m_san_pham.php");
			$m_san_pham = new M_san_pham();
			$m_hoa_don = new M_hoa_don();
			$san_phams = $m_san_pham->Lay_san_pham();

			//views
			$view = "views/hoa_don/Add_CTHD.php";
			require_once("public/content.php");
		}	
	}
?>