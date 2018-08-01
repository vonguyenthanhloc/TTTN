<?php 
	require_once("database.php");
	class M_tai_khoan extends database
	{
		function Kiem_tra_ten_dang_nhap($ten_dang_nhap)
		{
			$sql = "select *from nguoi_dung where ten_dang_nhap=?";
			$this->setQuery($sql);
			return $this->loadRow(array($ten_dang_nhap));
				
		}

		function get_Thong_Tin_Nguoi_Dung($ma_nguoi_dung)
		{
			$sql = "select *from nguoi_dung where ma_nguoi_dung=?";
			$this->setQuery($sql);
			return $this->loadRow(array($ma_nguoi_dung));
		}

		function Them_khach_hang($ma_khach_hang,$ho_ten, $gioi_tinh, $email, $so_dien_thoai)
		{
			$sql = "insert into khach_hang values(?,?,?,?,?)";
			$this->setQuery($sql);
			$param = array($ma_khach_hang,$ho_ten,$gioi_tinh,$email,$so_dien_thoai);
			$result = $this->execute($param);
			 if($result)
                return $this->getLastId();  //If query execute successful, the system will return lastID in table khach_hang
            else
                return false;
		}
		function Them_nguoi_dung($ma_nguoi_dung, $ten, $ten_dang_nhap, $password, $dia_chi, $email, $so_dien_thoai, $gioi_tinh, $date)
		{	
			
			$sql = "insert into nguoi_dung values(?,?,?,?,?,?,?,?,?,?)";
			$this->setQuery($sql);
			$param = array($ma_nguoi_dung,2,$ten,$ten_dang_nhap,$password,$dia_chi,$email,$so_dien_thoai,$gioi_tinh,$date);
			$result = $this->execute($param);
			if($result)
				return $this->getLastId();  //If query execute successful, the system will return lastID in table khach_hang
			else
				return false;
		}
		function Doc_user_theo_tenDn_pass($ten_dang_nhap,$password)
		{
			$sql = "select * from nguoi_dung where ten_dang_nhap=? and password=?";
			$this->setQuery($sql);
			return $this->loadRow(array($ten_dang_nhap,md5($password)));
		}
		function Cap_nhat_tai_khoan($ten_dang_nhap)
		{
			$sql = "update nguoi_dung set active=? where ten_dang_nhap=?";
			$this->setQuery($sql);
			$param = array(1,$ten_dang_nhap);
			$result = $this->execute($param);
			if($result) 
                return $this->getLastId();
            else
                return false;
		}
		function capNhatThongTin($ten_dang_nhap,$ten,$gioi_tinh,$password,$email,$so_dien_thoai,$dia_chi,$date)
		{
			$user = $this->Kiem_tra_ten_dang_nhap($ten_dang_nhap);
			if($user->password == $password)
			{
				$sql = "update nguoi_dung set ten=?, password=?, gioi_tinh=?, email=?, so_dien_thoai=?, dia_chi=?, date=? where ten_dang_nhap=?";
				$this->setQuery($sql);
				$param = array($ten,$password,$gioi_tinh,$email,$so_dien_thoai,$dia_chi,$date,$ten_dang_nhap);
				$result = $this->execute($param);	
				if($result) 
					return $this->getLastId();
				else
					return false;
			}
			else
			{
				$sql = "update nguoi_dung set ten=?, password=?, gioi_tinh=?, email=?, so_dien_thoai=?, dia_chi=?, date=? where ten_dang_nhap=?";
				$this->setQuery($sql);
				$param = array($ten,md5($password),$gioi_tinh,$email,$so_dien_thoai,$dia_chi,$date,$ten_dang_nhap);
				$result = $this->execute($param);	
				if($result) 
					return $this->getLastId();
				else
					return false;
			}
		}
		function Nguoi_dung()
		{
			$sql = "SELECT * FROM nguoi_dung order by ma_nguoi_dung DESC limit 0,1";
			$this->setQuery($sql);
			return $this->loadRow();
		}
		function khach_hang()
		{
			$sql = "SELECT * FROM khach_hang order by ma_khach_hang DESC limit 0,1";
			$this->setQuery($sql);
			return $this->loadRow();
		}
		function Lay_lastId()
		{
			$id_nd = $this->Nguoi_dung();
			$id_kh = $this->khach_hang();
			if($id_kh->ma_khach_hang > $id_nd->ma_nguoi_dung)
				return $id_kh->ma_khach_hang+1;
			else
				return $id_nd->ma_nguoi_dung+1;
		}
	}
	//$m_tai_khoan = new M_tai_khoan();
	//$user = $m_tai_khoan->capNhatThongTin("admin","Phat",0,"123456","tanphathihi@gmail.com","01698833736","97 Man Thien,Quan 9","");
	//echo '<pre>',print_r($user),'</pre>';
?>