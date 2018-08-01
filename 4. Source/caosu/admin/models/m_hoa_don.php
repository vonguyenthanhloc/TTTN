<?php 
	require_once("database.php");
	class M_hoa_don extends database
	{
		function Lay_hoa_don($vt=-1,$limit=-1)
		{
			if($vt>=0 && $limit>0)	
				$sql = "SELECT * FROM `hoa_don` ORDER BY so_hoa_don DESC LIMIT $vt,$limit";
			else
				$sql = "select * from hoa_don ORDER BY so_hoa_don DESC";
			$this->setQuery($sql);
			return $this->loadAllRows();	
		}
		function Tim_san_pham_trong_hoa_don($text)
		{
			$sql = "SELECT hd.so_hoa_don, hd.thoi_gian, hd.ngay_hd, hd.tri_gia, hd.tinh_trang, hd.ghi_chu, hd.thanh_toan  FROM hoa_don hd,ct_hoa_don ct where hd.so_hoa_don = ct.so_hoa_don and ct.ma_san_pham = (select ma_san_pham from san_pham where ten_san_pham like '%$text%') and hd.tinh_trang = 0";
			$this->setQuery($sql);
			return $this->loadAllRows();	
		}
		function getChiTietHoaDon($so_hoa_don){
			$sql ="select sp.ma_san_pham, sp.ten_san_pham, sp.hinh, sp.gia,ct.so_luong
				   from san_pham sp,ct_hoa_don ct,hoa_don hd
				   where sp.ma_san_pham = ct.ma_san_pham and ct.so_hoa_don = hd.so_hoa_don and hd.so_hoa_don = ? ";
            $this->setQuery($sql);
            return $this->loadAllRows(array($so_hoa_don));
        }	
		function Cap_nhat_tinh_trang_hoa_don($ma_hoa_don,$tinh_trang)
		{
			$sql="update hoa_don set tinh_trang=? where so_hoa_don=?";
			$this->setQuery($sql);
			return $this->execute(array($tinh_trang,$ma_hoa_don));
		}
		function Tim_ma_nguoi_dung_co_trong_hd($so_hoa_don)
		{
			$sql = "SELECT DISTINCT nd.* from hoa_don hd,nguoi_dung nd where hd.ma_khach_hang=nd.ma_nguoi_dung and hd.so_hoa_don=?";
			$this->setQuery($sql);
			return $this->loadRow(array($so_hoa_don));
		}
		function Tim_ma_khach_hang_co_trong_hd($so_hoa_don)
		{
			$sql = "SELECT DISTINCT kh.* from hoa_don hd,khach_hang kh where hd.ma_khach_hang=kh.ma_khach_hang and hd.so_hoa_don=?";
			$this->setQuery($sql);
			return $this->loadRow(array($so_hoa_don));
		}
		function Doc_hoa_don($so_hoa_don)
		{
			$kq = $this->Tim_ma_nguoi_dung_co_trong_hd($so_hoa_don);
			if($kq)
			{
				return $this->Tim_ma_nguoi_dung_co_trong_hd($so_hoa_don);	
			}
			else 
			{
				return $this->Tim_ma_khach_hang_co_trong_hd($so_hoa_don);	
			}
		}
		function Doc_hoa_don_theo_so_hd($so_hoa_don)
    	{
        
			$sql="select * from hoa_don where so_hoa_don=?";
			$this->setQuery($sql);
			return $this->loadRow(array($so_hoa_don));
		}
		function Thong_ke_hoa_don()
		{
			$sql='SELECT concat(Month(ngay_hd),"-",Year(ngay_hd)) as ThangSau,sum(tri_gia) as tong  FROM `hoa_don` 
					where tinh_trang in(1,2) group by Month(ngay_hd),Year(ngay_hd) order by Month(ngay_hd),Year(ngay_hd)';
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		function Cap_nhat_CTHD($so_luong,$so_hoa_don,$ma_san_pham)
		{
			$sql = "UPDATE `ct_hoa_don` SET `so_luong`=? WHERE `so_hoa_don`=? and `ma_san_pham`=?";
			$this->setQuery($sql);
			return $this->execute(array($so_luong,$so_hoa_don,$ma_san_pham));
		}
		
		function capNhatTongTien($so_hoa_don)
        {
            $query = "UPDATE hoa_don
					SET tri_gia = (SELECT SUM( so_luong * don_gia ) AS tt FROM ct_hoa_don WHERE ct_hoa_don.so_hoa_don = hoa_don.so_hoa_don)
					WHERE so_hoa_don = ?";
            $this->setQuery($query);
            $this->execute(array($so_hoa_don));
        }
		
		function Delete_CTHD($so_hoa_don,$ma_san_pham)
		{
			$sql = "DELETE FROM `ct_hoa_don` WHERE `so_hoa_don`=? and `ma_san_pham`=?";
			$this->setQuery($sql);
			return $this->execute(array($so_hoa_don,$ma_san_pham));
		}
		function Count_CTHD($so_hoa_don)
		{
			$sql = "SELECT count(ct_hd.so_hoa_don) as so_hd
					FROM hoa_don hd,ct_hoa_don ct_hd
					WHERE hd.so_hoa_don = ct_hd.so_hoa_don and ct_hd.so_hoa_don = ?";
			$this->setQuery($sql);
			return $this->loadRow(array($so_hoa_don));	
		}
		function Add_CTHD($so_hoa_don,$ma_san_pham,$so_luong,$don_gia)
		{
			$sql = "INSERT INTO `ct_hoa_don`(`stt`, `so_hoa_don`, `ma_san_pham`, `so_luong`, `don_gia`) VALUES (NULL,?,?,?,?)";
			$this->setQuery($sql);
			return $this->execute(array($so_hoa_don,$ma_san_pham,$so_luong,$don_gia));	
		}
	}
/*	$m_hoa_don = new M_hoa_don();
	$hoa_dons = $m_hoa_don->Count_CTHD(38);
	echo '<pre>',print_r($hoa_dons),'</pre>';*/
?>