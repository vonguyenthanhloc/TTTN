<?php
	@session_start();
	require_once("controllers/c_checkout.php");
	require_once("controllers/c_hoa_don.php");
	require_once("models/m_tai_khoan.php");
	$c_checkout = new C_checkout();
	$c_hoa_don = new C_hoa_don();
	$m_tai_khoan = new M_tai_khoan();
	// if(!isset($_SESSION['so_luong']))
	// {
	// 	echo '<script>alert("Bạn chưa chọn sản phẩm")</script>';
	// 	echo '<script>window.location="menu.php"</script>';
	// }
	if(isset($_POST['order']))
	{
		if(isset($_SESSION['ten_dang_nhap']))
		{
			$date = date('Y-m-d');
			$hour = date("H:i:s");
			$tinh_trang = 0;
			$tai_khoan = $m_tai_khoan->Kiem_tra_ten_dang_nhap($_SESSION['ten_dang_nhap']);
            $c_hoa_don->ThemHoaDon_CtHoaDon($hour,$date,$tai_khoan->ma_nguoi_dung,$tinh_trang,$tai_khoan->dia_chi,"Thanh toán khi nhận sản phẩm");
		}
		else
		{
			if(!empty($_POST['name']) || !empty($_POST['phone']) || !empty($_POST['email']) || !empty($_POST['gender']) || !empty($_POST['address']))
			{	
				$name = $_POST['name'];
				$phone = $_POST['phone'];
				$email = $_POST['email'];
				$gender = $_POST['gender'];
				$adress = $_POST['address'];
				$date = date('Y-m-d');
				$hour = date("H:i:s");
				$tinh_trang = 0;
				$ma_khach_hang = $m_tai_khoan->Lay_lastId();
				$m_tai_khoan->Them_khach_hang($ma_khach_hang,$name,$gender,$email,$phone);
				$c_hoa_don->ThemHoaDon_CtHoaDon($hour,$date,$ma_khach_hang,$tinh_trang,$adress,"Thanh toán khi nhận sản phẩm");	
			}else{
				echo '<script>alert("Bạn chưa nhập đủ thông tin")</script>';
			}
		}	
	}
	$c_checkout->Hien_thi_checkout();
?>