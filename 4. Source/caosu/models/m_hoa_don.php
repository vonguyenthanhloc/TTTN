<?php
	require_once("database.php");
	class M_hoa_don extends database
	{
		function themHoaDon($thoi_gian,$ngay_hd,$ma_khach_hang,$tri_gia,$tinh_trang,$ghi_chu,$thanh_toan) 
		{
            $query = "INSERT INTO hoa_don VALUES(?,?,?,?,?,?,?,?)";
            $this->setQuery($query);
            $result = $this->execute(array(NULL,$thoi_gian, $ngay_hd,$ma_khach_hang,$tri_gia,$tinh_trang,$ghi_chu,$thanh_toan));
            if($result) 
                return $this->getLastId();
            else
                return false;
        }
		function themChiTietHoaDon($so_hoa_don, $ma_san_pham, $so_luong, $don_gia) {
            $query = "INSERT INTO ct_hoa_don VALUES(?,?,?,?,?)";
            $this->setQuery($query);
            $result = $this->execute(array(NULL,$so_hoa_don, $ma_san_pham, $so_luong, $don_gia));
			if($result) 
                return $this->getLastId();
            else
                return false;
        }
		function getChiTietHoaDon($so_hoa_don){
			$sql ="select sp.ten_san_pham, sp.hinh, sp.gia,ct.so_luong
				   from san_pham sp,ct_hoa_don ct,hoa_don hd
				   where sp.ma_san_pham = ct.ma_san_pham and ct.so_hoa_don = hd.so_hoa_don and hd.so_hoa_don = ? ";
            $this->setQuery($sql);
            return $this->loadAllRows(array($so_hoa_don));
        }
        public function lay_hoa_don($key)
        {
            $query = "select hd.ngay_hd, hd.thoi_gian, hd.tri_gia, hd.so_hoa_don, hd.tinh_trang
					  from nguoi_dung nd, hoa_don hd,ct_hoa_don ct 
					  where nd.ma_nguoi_dung = hd.ma_khach_hang and hd.so_hoa_don = ct.so_hoa_don and nd.ma_nguoi_dung=?";
            $this->setQuery($query);
            return $this->loadAllRows(array($key));
        }
		public function Xem_hoa_don_khach_hang($key)
        {
            $query = "select hd.ngay_hd, hd.thoi_gian, hd.tri_gia, hd.so_hoa_don, hd.tinh_trang from nguoi_dung nd, hoa_don hd where nd.ma_nguoi_dung = hd.ma_khach_hang and nd.ma_nguoi_dung=?";
            $this->setQuery($query);
            return $this->loadAllRows(array($key));
        }	
	}
	/*$m_hoa_don = new M_hoa_don();
	$hoa_don = $m_hoa_don->getChiTietHoaDon(33);
	echo '<pre>',print_r($hoa_don),'</pre>';*/
?>