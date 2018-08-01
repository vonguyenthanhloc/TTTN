<meta charset="utf-8" />
<?php
	@session_start();
	class C_user
	{
		function Hien_thi_user()
		{
			//models
			require_once("models/m_user.php");
			$m_user = new M_user();
			$users = $m_user->Lay_user();
			
			//Phan Trang
			require_once("Pager.php");
			$page = new pager();
			$limit = 5;
			$count_user = count($users);
			$vt = $page->findStart($limit);
			$page_user = $page->findPages($count_user,$limit);
			$curpage = $_GET["page"];
			$list_user = $page->pageList($curpage,$page_user);
			$users = $m_user->Lay_user($vt,$limit);
			
			//views
			$view = "views/user/user.php";
			$footer = "views/user/footer.php";
			require_once("public/content.php");	
		}
		function Hien_thi_edit_user($ma_nguoi_dung)
		{
			//models
			require_once("models/m_user.php");
			$m_user = new M_user();
			$user = $m_user->Doc_user_theo_ma_nguoi_dung($ma_nguoi_dung);
			$loai_user = $m_user->Lay_loai_user();
			//views
			$view = "views/user/edit_user.php";
			$footer = "views/user/footer_edit_user.php";
			require_once("public/content.php");	
		}
		
		function Cap_nhat_tai_khoan()
		{
			//models 
			require_once("models/m_user.php");
			$m_user = new M_user();
			
			if(isset($_POST['btnCapNhatUser']))
			{
				$ma_nguoi_dung = $_POST['ma_nguoi_dung'];
				$ma_loai_nd = $_POST['loai_nguoi_sd'];
				$ten = $_POST['ten'];
				$email = $_POST['email']; 
				$so_dien_thoai = $_POST['so_dien_thoai'];
				$dia_chi = $_POST['dia_chi'];
				$gioi_tinh = $_POST['gioi_tinh'];
				$date = $_POST['ngay_sinh'];
				$m_user->capNhatThongTin($ma_nguoi_dung,$ma_loai_nd,$ten,$gioi_tinh,$email,$so_dien_thoai,$dia_chi,$date);
				//echo '<pre>',print_r($kq),'</pre>';
				echo '<script>alert("Cập nhật thành công !!")</script>';
				echo '<script>window.location="user.php";</script>';
			}	
		}
		function Xu_ly_login($ten_dang_nhap,$password)
		{
						//models
			require_once("models/m_user.php");
			$m_user = new M_user();
			$user = $m_user->Doc_user_theo_tenDn_pass($ten_dang_nhap,$password);
			if($user && $user->ma_loai_nd == 1)
			{
				$_SESSION['user'] = $user->ten_dang_nhap;
				header('location: index.php');	
			}
			else
				echo '<script>alert("Tài khoản không hợp lệ");</script>'; 		
		}
		
		function Hien_thi_customer()
		{
			//models
			require_once("models/m_user.php");
			$m_user = new M_user();
			$khach_hangs = $m_user->Lay_customer();
			
			//phan trang
			require_once("Pager.php");
			$page = new pager();
			$limit = 5;
			$count_custom = count($khach_hangs);
			$vt = $page->findStart($limit);
			$page_custom = $page->findPages($count_custom,$limit);
			$curpage = $_GET["page"];
			$list_custom = $page->pageList($curpage,$page_custom);
			$khach_hangs = $m_user->Lay_customer($vt,$limit);
			
			//views
			$view = "views/user/customer.php";
			$footer = "views/user/footer.php";
			require_once("public/content.php");	
		}	
	} 
?>