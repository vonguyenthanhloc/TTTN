<?php 
	require_once("database.php");
	class M_user extends database
	{
		function Lay_user()
		{
			$sql = "select * from nguoi_dung";
			$this->setQuery($sql);
			return $this->loadAllRows();	
		}
		function Doc_user_theo_tenDn_pass($ten_dang_nhap,$password)
		{
			$sql = "select * from nguoi_dung where ten_dang_nhap=? and password=?";
			$this->setQuery($sql);
			return $this->loadRow(array($ten_dang_nhap,md5($password)));
		}
		function Doc_user_theo_ma_nguoi_dung($ma_nguoi_dung)
		{
			$sql = "select * from nguoi_dung where ma_nguoi_dung=?";
			$this->setQuery($sql);
			return $this->loadRow(array($ma_nguoi_dung));
		}	
		function Lay_customer($vt=-1,$limit=-1)
		{
			if($vt >= 0 && $limit >= 0)
				$sql = "select * from khach_hang limit $vt,$limit";
			else
				$sql = "select * from khach_hang";
			$this->setQuery($sql);
			return $this->loadAllRows();	
		}
		function Tim_ten_user($ten)
		{
			$sql = "select * from nguoi_dung where ten like '%$ten%'";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		function Lay_loai_user()
		{
			$sql = "select * from loai_nguoi_dung";
			$this->setQuery($sql);
			return $this->loadAllRows(); 	
		}
		function capNhatThongTin($ma_nguoi_dung,$ma_loai_nd,$ten,$gioi_tinh,$email,$so_dien_thoai,$dia_chi,$date)
		{
			$sql = "update nguoi_dung set ma_loai_nd=?, ten=?, gioi_tinh=?, email=?, so_dien_thoai=?, dia_chi=?, date=? where ma_nguoi_dung=?";
			$this->setQuery($sql);
			$param = array($ma_loai_nd,$ten,$gioi_tinh,$email,$so_dien_thoai,$dia_chi,$date,$ma_nguoi_dung);
			return $this->execute($param);	
		}
		function Kiem_tra_ten_dang_nhap($ten_dang_nhap)
		{
			$sql = "select *from nguoi_dung where ten_dang_nhap=?";
			$this->setQuery($sql);
			return $this->loadRow(array($ten_dang_nhap));
				
		}
		function capNhatPassword($ten_dang_nhap,$password)
		{
			$user = $this->Kiem_tra_ten_dang_nhap($ten_dang_nhap);
			if($user->password != $password)
			{
				$sql = "update nguoi_dung set password=? where ten_dang_nhap=?";
				$this->setQuery($sql);
				$param = array(md5($password),$ten_dang_nhap);
				$result = $this->execute($param);	
				if($result) 
					return $this->getLastId();
				else
					return false;
			}
		}
	}
	/*$m_user = new M_user();
	$users = $m_user->capNhatThongTin(1,1,"Le Tan Phat",0,"admin@gmail.com","01698833736","97 Man Thien",1996);
	echo '<pre>',print_r($users),'</pre>';*/
?>