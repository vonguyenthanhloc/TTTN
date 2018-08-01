<?php
@session_start();
include ("controllers/c_gio_hang.php");
$c_gio_hang=new C_gio_hang();
$key = $_POST['id'];
$soLuong = ((int)$_POST['soluong']);
$donGia = ((double)$_POST['dongia']);

if($soLuong>=0 && $donGia>0)
   $c_gio_hang->themGioHang($key, $soLuong, $donGia);

$arrGioHang = array('sl'=>$c_gio_hang->so_luong(), 'st'=>number_format($c_gio_hang->thanh_tien()));

echo json_encode($arrGioHang);
?>

