<?php 
	@session_start();
	class C_hoa_don
	{
		function ThemHoaDon_CtHoaDon($hour,$date,$ma_tai_khoan,$tinh_trang,$number_table,$thanh_toan)
		{
			require_once("models/m_hoa_don.php");
			require_once("controllers/c_gio_hang.php");
			require_once("controllers/c_checkout.php");
			$c_checkout = new C_checkout();
			$m_hoa_don = new M_hoa_don();
			$c_gio_hang = new C_gio_hang();
			$so_hoa_don = $m_hoa_don->themHoaDon($hour,$date,$ma_tai_khoan,$_SESSION['thanh_tien'],$tinh_trang,$number_table,$thanh_toan);
			if($so_hoa_don > 0)
			{
				$gio_hang = $_SESSION['gio_hang_mon_an'];
				//echo '<pre>',print_r($gio_hang),'</pre>';
				foreach($gio_hang as $san_pham)
				{
					$m_hoa_don->themChiTietHoaDon($so_hoa_don,$san_pham->ma_san_pham,$san_pham->so_luong,$san_pham->gia);
				}
				$c_gio_hang->xoaGioHang();
				echo '<script>window.location="index.php?success";</script>';
;			}	
		}

        public function m_hoa_don()
        {
        }
    }
?>