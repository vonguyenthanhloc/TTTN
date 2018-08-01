<?php 
	require_once("models/m_user.php");
	$m_user = new M_user();
	
	if(isset($_POST['ten']))
	{
		$ten = $_POST['ten'];
		$users = $m_user->Tim_ten_user($ten);
    $kq = "";
		if($users)
		{
			$kq.='<table class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>LOẠI ND</th>
                    <th>TÊN ND</th>
                    <th>ĐỊA CHỈ</th>
                    <th>ĐIỆN THOẠI</th>
                    <th>Email</th>
                    <th>HÀNH ĐỘNG</th>
                  </tr>
                </thead>
                <tbody>';
                if(isset($users)){ foreach($users as $user ){
				if($user->ma_nguoi_dung == 1) $tyfe = "Admin"; else $tyfe = "Khách";
               $kq.='<tr>
                    <td>'.$user->ma_nguoi_dung.'</td>
                    <td>'.$tyfe.'</td>
                    <td>'.$user->ten.'</td>
                    <td>'.$user->dia_chi.'</td>
                    <td>'.$user->so_dien_thoai.'</td>
                    <td>'.$user->email.'</td>
                    <td class="text-right"><a href="user.php?edit='.$user->ma_nguoi_dung.'" class="btn btn-default btn-xs"><i class="icon-pencil"></i> edit</a> <a href="#" class="btn btn-danger btn-xs"><i class="icon-remove"></i></a></td>
                  </tr>';
				}}
                
			   $kq .='</tbody>
              </table>';
			  
			  echo $kq;	
		}	
	}
	
?>