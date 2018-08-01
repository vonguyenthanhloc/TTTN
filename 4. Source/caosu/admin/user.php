<?php 
	require_once("controllers/c_user.php");
	$c_user = new C_user();
	if(isset($_GET['edit']))
	{
		$ma_nguoi_dung = $_GET['edit'];
		$c_user->Hien_thi_edit_user($ma_nguoi_dung);	
	}
	if(isset($_POST['btnCapNhatUser']))
	{
		$c_user->Cap_nhat_tai_khoan();	
	}
	if(isset($_POST['btnCapNhatUserPassword']))
	{
		$ma_nguoi_dung = $_POST["ma_nguoi_dung"];
		$ten_dang_nhap = $_POST["ten_dang_nhap"];
		$passowrd = $_POST["password"];
		require_once("models/m_user.php");
		$m_user = new M_user();
		$m_user->capNhatPassword($ten_dang_nhap,$passowrd);
		echo '<script>alert("Cập nhật thành công !!")</script>';
		echo '<script>window.location="user.php?edit='.$ma_nguoi_dung.'";</script>';
	}
	$c_user->Hien_thi_user();
?>