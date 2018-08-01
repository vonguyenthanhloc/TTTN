<meta charset="utf-8"/>
<?php 
	@session_start();
	require_once("controllers/c_account.php");
	require_once("models/m_tai_khoan.php");
	$c_account = new C_account();
	$m_tai_khoan = new M_tai_khoan();
	if(isset($_POST['signup']))
	{
		$c_account->Hien_thi_sign_up();	
	}
	else if(isset($_POST['login']))
	{
		$c_account->Hien_thi_panel_account();
	}
	else if(isset($_POST['login_checkout']))
	{
		$c_account->Hien_thi_account();
	}
	else if(isset($_SESSION['ten_dang_nhap']))
	{
		$c_account->Hien_thi_panel_account();	
	}
	if(isset($_GET['logout']))
	{
		$c_account->thoat_dang_nhap();	
	}
	if(isset($_POST['sign_up']))
	{
		$username = $_POST['username']; 
		$password = md5($_POST['password']); 
		$name = $_POST['name'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$date = $_POST['date'];
		$gender = $_POST['gender'];
		$ma_nguoi_dung = $m_tai_khoan->Lay_lastId();
		$m_tai_khoan->Them_nguoi_dung($ma_nguoi_dung,$name,$username,$password,$address,$email,$phone,$gender,$date);
		$c_account->Hien_thi_account();
		echo '<script>alert("Đăng ký thành công")</script>';
	}
	if(isset($_POST['update_account']))
	{
		$username = $_POST['username']; 
		$password = $_POST['password']; 
		$name = $_POST['name'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$date = $_POST['date'];
		$gender = $_POST['gender'];
		$m_tai_khoan->capNhatThongTin($username,$name,$gender,$password,$email,$phone,$address,$date);
		echo '<script>alert("Cập nhật thành công")</script>';
		echo '<script>window.location="update_account.php";</script>';

	}
	$c_account->Hien_thi_account();
?>