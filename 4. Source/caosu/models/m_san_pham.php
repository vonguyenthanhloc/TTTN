<?php 
	require_once("database.php");
	class M_san_pham extends database
	{
		function Hien_thi_san_pham_theo_loai($ma_loai)
		{
			$sql = "SELECT * FROM san_pham where ma_loai=?";
			$this->setQuery($sql);
			return $this->loadAllRows(array($ma_loai));	
		}
		function lay_san_pham_cho_gio_hang($chuoi)
        {
            $sql = "Select * from san_pham where ma_san_pham in($chuoi)";
			$this->setQuery($sql);
			return $this->loadAllRows();
        }
		function Doc_san_pham_theo_ma($ma_san_pham)
		{
			$sql = "select * from san_pham where ma_san_pham=?";
			$this->setQuery($sql);
			return $this->loadRow(array($ma_san_pham));	
		}
		function Hien_thi_loai_san_pham()
		{
			$sql ="Select * from loai_san_pham";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		function Hien_thi_ban()
		{
			$sql ="Select * from ban";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		function Hien_thi_san_pham()
		{
			$sql ="Select * from san_pham";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
	}
	/*$m_san_pham = new M_san_pham();
	$san_pham = $m_san_pham->Hien_thi_san_pham_theo_loai(1);
	echo '<pre>',print_r($san_pham),'</pre>';*/
?>