<?php
	require_once("controllers/c_hoa_don.php");
	$c_hoa_don = new C_hoa_don();
	if(isset($_GET['stt_order']))
	{
		$c_hoa_don->Hien_thi_ct_hoa_don();
	}
	if(isset($_GET['edit']))
	{
		$c_hoa_don->Hien_thi_edit_hoa_don();
	}
	if(isset($_GET['order']))
	{
		$c_hoa_don->Hien_thi_Update_hoa_don();	
	}
	if(isset($_GET['add']))
	{
		$c_hoa_don->Hien_thi_them_CTHD();	
	}
	if(isset($_POST['AddCTHD']))
	{
		require_once("models/m_hoa_don.php");
		require_once("models/m_san_pham.php");
		$m_san_pham = new M_san_pham();
		$m_hoa_don = new M_hoa_don();
		$so_hoa_don = $_POST['so_hoa_don_add'];
		$ma_san_pham = $_POST['san_pham_add'];
		$so_luong = $_POST['so_luong_add'];
		$san_pham = $m_san_pham->Lay_san_pham_theo_ma($ma_san_pham);
		$gia = $san_pham->gia;
		$m_hoa_don->Add_CTHD($so_hoa_don,$ma_san_pham,$so_luong,$gia);
		$m_hoa_don->capNhatTongTien($so_hoa_don);
		echo '<script>alert("Thêm thành công !!")</script>';
		echo '<script>window.location="order.php?order='.$so_hoa_don.'"</script>';
	}
	$c_hoa_don->Hien_thi_hoa_don();
?>