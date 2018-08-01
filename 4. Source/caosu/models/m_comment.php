<?php 
	require_once("database.php");
	class M_comment extends database
	{
		function Hien_thi_comment_theo_bai_viet_san_pham($ma_san_pham)
		{
			$sql = "SELECT * FROM comment where ma_san_pham=?";
			$this->setQuery($sql);
			return $this->loadAllRows(array($ma_san_pham));	
        }
        
        function Them_comment($ma_san_pham,$ma_nguoi_dung,$noi_dung,$ngay_dang)
        {
            $sql = "insert into comment values(?,?,?,?,?)";
			$this->setQuery($sql);
			return $this->execute(array(NULL,$ma_san_pham,$ma_nguoi_dung,$noi_dung,$ngay_dang));
        }
	}
	/*$m_san_pham = new M_san_pham();
	$san_pham = $m_san_pham->Hien_thi_san_pham_theo_loai(1);
	echo '<pre>',print_r($san_pham),'</pre>';*/
?>