<?php
@session_start();
include ("controllers/c_gio_hang.php");
include ("models/m_san_pham.php");
$c_gio_hang=new C_gio_hang();
$m_san_pham = new M_san_pham();
if(isset($_POST['id']))
{
	$ma_san_pham = $_POST['id'];
	$don_gia = ((double)$_POST['dongia']);
	$ten_san_pham = $m_san_pham->Doc_san_pham_theo_ma($ma_san_pham);
	$ten_san_pham = $ten_san_pham->ten_san_pham;
	$c_gio_hang->xoaMatHang($ma_san_pham,$don_gia);
	$arrGioHang = array('kq'=>'Đã xóa sản phẩm ', 'ma_san_pham'=>$ten_san_pham);
	echo json_encode($arrGioHang);
}
?>

