<?php
	@session_start();
	class C_account
	{
		function Hien_thi_account()
		{
			//views
			$view = "views/account/login.php";
			require_once("public/content.php");	
		}
		function Hien_thi_sign_up()
		{
			//views
			$view = "views/account/sign_up.php";
			require_once("public/content.php");	
		}
		function Hien_thi_panel_account()
		{	
			if(!isset($_SESSION['ten_dang_nhap'])){	
				$ten_dang_nhap = trim($_POST['username']);
				$password = trim($_POST['password']);
				
				//models
				require_once("models/m_tai_khoan.php");
				$m_tai_khoan = new M_tai_khoan();
				$user = $m_tai_khoan->Doc_user_theo_tenDn_pass($ten_dang_nhap,$password);
				//echo '<pre>',print_r($hoa_don),'</pre>';
				if($user)
				{
					$_SESSION['ten_dang_nhap'] = $user->ten_dang_nhap;
					//echo $_SESSION['ten_dang_nhap'];
					//views
					// $view = "views/account/panel_account.php";
					// require_once("public/content.php");
					echo '<script>window.location="index.php";</script>';
				}
				else
				{
					echo '<script>alert("Thông tin đăng nhập không hợp lệ")</script>';
				}
			}
			else
			{
				// $view = "views/account/panel_account.php";
				// require_once("public/content.php");	
				echo '<script>window.location="index.php";</script>';
			}
		}	
		function thoat_dang_nhap()
		{
			unset($_SESSION['ten_dang_nhap']);
			echo '<script>window.location="account.php";</script>';
		}

		function Update_account(){
			if(isset($_SESSION['ten_dang_nhap'])){
				require_once("models/m_tai_khoan.php");
				$m_tai_khoan = new M_tai_khoan();
				$tai_khoan = $m_tai_khoan->Kiem_tra_ten_dang_nhap($_SESSION['ten_dang_nhap']);

				$view = "views/account/update_account.php";
				require_once("public/content.php");	
			}
						
		}
	}
	//$c_account = new C_account();
	//echo $c_account->Lay_last_id();
?>