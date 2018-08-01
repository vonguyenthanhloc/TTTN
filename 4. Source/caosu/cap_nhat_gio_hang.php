<?php 
	require_once("controllers/c_gio_hang.php");
	$c_gio_hang = new C_gio_hang();
	if(isset($_POST["id"]))
	{
		//cập nhật lại giỏ hàng
		$giohang= $c_gio_hang->layGioHang();
		if($giohang)
		{
			if(isset($_POST["soluong_moi"]))
			{
				$soluong_moi = $_POST["soluong_moi"];
				$c_gio_hang->capNhatGioHang($_POST["id"],$soluong_moi,$_POST["dongiagiohang"]);
				$arrGioHang = array('kq'=>'Đã cập nhật giỏ hàng ');
				echo json_encode($arrGioHang);
			}
		}
	}
?>