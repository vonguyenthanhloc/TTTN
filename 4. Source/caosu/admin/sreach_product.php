<?php
	require_once("models/m_san_pham.php");
	$m_san_pham = new M_san_pham();
	if(isset($_POST['ma_san_pham']))
	{
    $ma_san_pham = $_POST['ma_san_pham'];
		$delete_sp = $m_san_pham->Xoa_san_pham($ma_san_pham);
		if($delete_sp)
			echo "Ok";	
	}
	if(isset($_POST['ten_san_pham']))
	{
    $kq = "";
		$text = $_POST['ten_san_pham'];
		$san_phams = $m_san_pham->Tim_ten_san_pham($text);
		if($san_phams)
		{
			$kq .= '<table class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Name Product</th>
                    <th>Picture</th>
                    <th>Money</th>
                    <th>Brief Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>';
                if(isset($san_phams)){ foreach($san_phams as $san_pham ){
                $kq .=  '<tr>
                    <td>'.$san_pham->ma_san_pham.'</td>
                    <td>'.$san_pham->ten_san_pham.'</td>
                    <td><img herf="" /></td>
                    <td>'.$san_pham->gia.'</td>
                    <td>'.$san_pham->mo_ta_tom_tat.'</td>
                    <td class="text-right"><a href="product.php?edit='.$san_pham->ma_san_pham.'" class="btn btn-default btn-xs"><i class="icon-pencil"></i> edit</a> <a href="javascript:void(0)" onclick="Xoa_SP('.$san_pham->ma_san_pham.')" class="btn btn-danger btn-xs"><i class="icon-remove"></i></a></td>
                  </tr>';
                 }}                  
				$kq .= '<form method="post" action="product.php">
                  <tr><td colspan="8" align="center"><input type="submit" class="btn btn-warning" name="btnThemSP" value="Add Product"/></td></tr>
                  </form>
                </tbody>
              </table>';
			 
			 echo $kq;	
		}	
	}
?>