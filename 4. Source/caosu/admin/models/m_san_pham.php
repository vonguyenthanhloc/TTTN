<?php
	require_once("database.php");
	class M_san_pham extends database
	{
		function Lay_san_pham($vt=-1,$limit=-1)
		{
			if($vt>=0 && $limit>0)	
				$sql = "select * from san_pham limit $vt,$limit";
			else
				$sql = "select * from san_pham";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		function Lay_san_pham_theo_ma($ma_san_pham)
		{
			$sql = "select * from san_pham where ma_san_pham=?";
			$this->setQuery($sql);
			return $this->loadRow(array($ma_san_pham));
		}
		//UPDATE `san_pham` SET `ma_loai`=?,`ten_san_pham`=?,`hinh`=?,`gia`=?,`mo_ta_tom_tat`=?,`mo_ta_chi_tiet`=? WHERE `ma_san_pham`=?
		function Sua_san_pham($ma_loai,$ten_san_pham,$hinh,$gia,$mo_ta_tom_tat,$mo_ta_chi_tiet,$ma_san_pham)
		{
			$sql = "UPDATE `san_pham` SET `ma_loai`=?,`ten_san_pham`=?,`hinh`=?,`gia`=?,`mo_ta_tom_tat`=?,`mo_ta_chi_tiet`=? WHERE `ma_san_pham`=?";
			$this->setQuery($sql);
			return $this->execute(array($ma_loai,$ten_san_pham,$hinh,$gia,$mo_ta_tom_tat,$mo_ta_chi_tiet,$ma_san_pham));
		}
		function Tim_ma_san_pham_max()
		{
			$sql = "select MAX(ma_san_pham) as Max_sp from san_pham";
			$this->setQuery($sql);
			return $this->loadRow();
		}
		function Lay_loai_san_pham()
		{
			$sql = "select * from loai_san_pham";
			$this->setQuery($sql);
			return $this->loadAllRows();	
		}
		function Them_san_pham($ma_loai,$ten_san_pham,$hinh,$gia,$mo_ta_tom_tat,$mo_ta_chi_tiet)
		{
			$sql = "insert into san_pham values(?,?,?,?,?,?,?)";
			$this->setQuery($sql);
			return $this->execute(array(NULL,$ma_loai,$ten_san_pham,$hinh,$gia,$mo_ta_tom_tat,$mo_ta_chi_tiet));	
		}
		function Xoa_san_pham($ma_san_pham)
		{
			$sql = "DELETE FROM `san_pham` WHERE ma_san_pham = ?";
			$this->setQuery($sql);
			return $this->execute(array($ma_san_pham));	
		}
		function Tim_ten_san_pham($text)
		{
			$sql = "select * from san_pham where ten_san_pham like '%$text%'";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
	}
	
	
	/*$m_san_pham = new M_san_pham();
	$san_pham = $m_san_pham->Them_san_pham(1,1,1,1,1,1);
	echo '<pre>',print_r($san_pham),'</pre>';*/
?>