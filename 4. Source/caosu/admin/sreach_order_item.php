<?php 
	require_once("models/m_hoa_don.php");
	$m_hoa_don = new M_hoa_don();
	if(isset($_POST['id']))
	{
		$text = $_POST['id'];
		$hoa_dons = $m_hoa_don->Tim_san_pham_trong_hoa_don($text);
		//echo '<pre>',print_r($hoa_dons),'</pre>';
		if($hoa_dons)
		{
			$kq .= '<form action="order.php" method="post"><table class="table table-striped table-bordered table-hover">
					<thead>
					  <tr>
						<th>STT Order</th>
						<th>Time</th>
						<th>Date</th>
						<th>Balance</th>
						<th>Note</th>
						<th>Payment</th>
						<th>Status</th>
						<th></th>
					  </tr>
					</thead>
					<tbody>';
					foreach($hoa_dons as $hoa_don){ 
						$kq .=  '<tr>
								<td>'.$hoa_don->so_hoa_don.'</td>
								<td>'.$hoa_don->thoi_gian.'</td>
								<td>'.$hoa_don->ngay_hd.'</td>
								<td class="text-right">'.number_format($hoa_don->tri_gia).'</td>
								<td><span class="label label-primary">'.$hoa_don->ghi_chu.'</span></td>
								<td><span class="label label-success">'.$hoa_don->thanh_toan.'</span></td>
								<td><div class="form-group">
									<select class="form-control chosen" name="ds[]">
									  <option value="0"'."if($hoa_don->tinh_trang==0)?'selected':''".'>Unpaid</option>
									  <option value="1"'."if($hoa_don->tinh_trang==1)?'selected':''".'>Paid</option>
									  <option value="2"'."if($hoa_don->tinh_trang==2)?'selected':''".'>Canel</option>
									  <option value="3"'."if($hoa_don->tinh_trang==3)?'selected':''".'>Pay Back</option>
									</select>
								  </div></td>
								  <input type="hidden" value="'.$hoa_don->so_hoa_don.'" name="so_hoa_don[]" />
								<td class="text-right">
									<a href="javascript:void(0)" id="'.$hoa_don->so_hoa_don.'" class="btn btn-default btn-xs" onClick="Tim_ct_hd('.$hoa_don->so_hoa_don.')"><i class="icon-zoom-in">Seen Order</i></a>
								</td>
							  </tr>';
					}
					$kq .='<tr><td colspan="8" align="center"><input type="submit" class="btn btn-warning" name="btnCapnhat" value="Update"/></td></tr>
                </tbody>
              </table></form>';
				echo $kq;
		}	
	}
	if(isset($_POST['so_hd']))
	{
		$so_hoa_don = $_POST['so_hd'];
		$ct_hoa_don = $m_hoa_don->getChiTietHoaDon($so_hoa_don);
		$user = $m_hoa_don->Doc_hoa_don($so_hoa_don);
		$hoa_don = $m_hoa_don->Doc_hoa_don_theo_so_hd($so_hoa_don);
//		echo '<pre>',print_r($hoa_don),'</pre>';
		if(empty($user->ten))
		{
			$ten_user = $user->ho_ten;
			$dia_chi = "";
		}
		else 
		{
			$ten_user = $user->ten;
			$dia_chi = '<label><span style="margin-left:20px">Địa chỉ: '.$hoa_don->ghi_chu.'</span></label>';
		}
		$kq = "";
		if($ct_hoa_don)
		{
			$kq .='<fieldset>
					  <strong>
					  <font color="#993300">
					  <p> 
						<label>STT đơn hàng: '.$so_hoa_don.'</label> 
						<label><span style="margin-left:50px">Ngày đặt: '.date("d/m/Y",strtotime($hoa_don->ngay_hd)).'</span></label>
					  </p>
					  <p> 
						<label>Tổng: '.number_format($hoa_don->tri_gia).' VNĐ</label>
					  </p>
					  <p>';
		    if(!($ten_user == " "))
            {
                $kq .= '<label>Tên khách hàng: '.$ten_user.'</label>';
            }

            $kq .= '</p>  
                  <p>';
		    if(!($user->so_dien_thoai == 0))
            {
                $kq .= '<label><span>Số điện thoại: '.$user->so_dien_thoai.'</span></label>';
            }
            if(!($user->email == " "))
            {
                $kq .= '<label><span style="margin-left:20px">Email: '.$user->email.'</span></label>';
            }

             $kq .=  $dia_chi.'
              </p>
              </font>
              <strong>
            </fieldset>
                <div class="clear"></div><hr />';
			$kq .= '<table class="table table-striped table-bordered table-hover">
					<thead>
					  <tr>
						<th>STT SẢN PHẨM</th>
						<th>TÊN SP</th>
						<th>TIỀN</th>
						<th>SỐ LƯỢNG</th>
					  </tr>
					</thead>
					<tbody>';
			foreach($ct_hoa_don as $ct_hd){		
				$kq .=  '<tr>
						<td>'.$ct_hd->ma_san_pham.'</td>
						<td>'.$ct_hd->ten_san_pham.'</td>
						<td class="text-left">'.number_format($ct_hd->gia).'</td>
						<td><span class="label label-primary">'.$ct_hd->so_luong.'</span></td>
						</tr>';
			}
			$kq .='</tbody></table> 
			<p style="float:right;">Tổng tiền: '.number_format($hoa_don->tri_gia).' VNĐ</p>
			<center><td class="text-right"><a class="btn btn-default btn-xs" onclick="window.print()"><i class="icon-print print">Print</i></a>   <a href="order.php" class="btn btn-default btn-xs"><i class="icon-chevron-right"></i>Canel</a></td></center>';
			echo $kq;	
		}		
	}
	
//	if(isset($_POST['so_cthd']))
//	{
//		$so_hoa_don = $_POST['so_cthd'];
//		$ct_hoa_don = $m_hoa_don->getChiTietHoaDon($so_hoa_don);
//		$user = $m_hoa_don->Doc_hoa_don($so_hoa_don);
//		$hoa_don = $m_hoa_don->Doc_hoa_don_theo_so_hd($so_hoa_don);
//		if(empty($user->ten))
//		{
//			$ten_user = $user->ho_ten;
//		}
//		else
//		{
//			$ten_user = $user->ten;
//			$dia_chi = '<label><span style="margin-left:20px">Địa chỉ: '.$user->dia_chi.'</span></label>';
//		}
//		$kq .='<fieldset>
//					  <strong>
//					  <font color="#993300">
//					  <p>
//						<label>STT Order: '.$so_hoa_don.'</label>
//						<label><span style="margin-left:20x">Date Order: '.date("d/m/Y",strtotime($hoa_don->ngay_hd)).'</span></label>
//					  </p>
//					  <p>';
//		if(!empty($ten_user))
//        {
//            $kq .= '<label>Name Customer: '.$ten_user.'</label>';
//        }
//
//        $kq .= '</p><p><label><span>Phone: '.$user->so_dien_thoai.'</span></label>';
//		if(!empty($user->email))
//        {
//            $kq .= '<label><span style="margin-left:20px">Email: '.$user->email.'</span></label>';
//        }
//
//		$kq .= $dia_chi.' </p></font><strong></fieldset><div class="clear"></div><hr />';
//			$kq .= '<table class="table table-striped table-bordered table-hover">
//					<thead>
//					  <tr>
//						<th>STT Product</th>
//						<th>Name</th>
//						<th>Picture</th>
//						<th>Balance</th>
//						<th>Price</th>
//						<th>Action</th>
//					  </tr>
//					</thead>
//					<tbody>';
//			foreach($ct_hoa_don as $ct_hd){
//				$kq .=  '<tr>
//						<td>'.$ct_hd->ma_san_pham.'</td>
//						<td>'.$ct_hd->ten_san_pham.'</td>
//						<td><img herf="public/layout/assets/img/photos/'.$ct_hd->hinh.'"></td>
//						<td class="text-left">'.number_format($ct_hd->gia).'</td>
//						<td><span class="label label-primary">'.$ct_hd->so_luong.'</span></td>
//						<td>
//							<a href="javascript:void(0)" class="btn btn-default btn-xs" onClick="Xoa_cthd('.$so_hoa_don.')"><i class="icon-chevron-right">Delect</i></a>
//							<a href="javascript:void(0)" class="btn btn-default btn-xs" onClick="Update_cthd('.$so_hoa_don.')><i class="icon-chevron-right">Update</i></a>
//						</td>
//						</tr>';
//			}
//			$kq .='</tbody></table>
//			<p style="float:right;">Total: '.number_format($hoa_don->tri_gia).' VNĐ</p>
//			<center><td class="text-right"><a class="btn btn-default btn-xs" onclick="window.print()"><i class="icon-print print">Print</i></a>
//			   <a href="javascript:void(0)" class="btn btn-default btn-xs"><i class="icon-chevron-right">Add</i></a>
//			   <a href="javascript:void(0)" class="btn btn-default btn-xs"><i class="icon-chevron-right">Canel</i></a>
//
//			</td></center>';
//			echo $kq;
//	}
	if(isset($_POST['ma_san_pham']))
	{
		$ma_san_pham = $_POST['ma_san_pham'];
		$so_luong = $_POST['so_luong'];
		$so_hoa_don = $_POST['so_hoa_don'];
		require_once("models/m_san_pham.php");
		$m_san_pham = new M_san_pham();
		$san_pham = $m_san_pham->Lay_san_pham_theo_ma($ma_san_pham);
		$m_hoa_don->Cap_nhat_CTHD($so_luong,$so_hoa_don,$ma_san_pham);
		$m_hoa_don->capNhatTongTien($so_hoa_don);			
	}
	if(isset($_POST['ma_san_pham_dl']))
	{
		$ma_san_pham = $_POST['ma_san_pham_dl'];
		$so_hoa_don = $_POST['so_hoa_don_dl'];
		$count = $m_hoa_don->Count_CTHD($so_hoa_don);
		if($count->so_hd == 1)
		{
			echo "No";
		}
		else
		{
			$m_hoa_don->Delete_CTHD($so_hoa_don,$ma_san_pham);
			$m_hoa_don->capNhatTongTien($so_hoa_don);
			echo "Yes";
		}
	}
?>