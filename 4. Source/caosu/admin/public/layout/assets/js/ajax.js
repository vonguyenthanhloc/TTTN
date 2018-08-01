function Update_Cthd($so_hoa_don,$ma_san_pham)
{
	var $soluonginput="#soluongsp"+$ma_san_pham;
	var $soLuong=$($soluonginput).val();	
	$(document).ready(function() {
		var form_data = {
			so_luong    : $soLuong,
			ma_san_pham : $ma_san_pham,
			so_hoa_don : $so_hoa_don
		};
			$.ajax({
				url:"sreach_order_item.php",
				type: 'POST',
				async : false,
				data: form_data,
				dataType: 'text',
				success: function(data){
					alert("Cập nhật thành công");
					window.location="order.php?order="+$so_hoa_don;               
				},
				error: function(error){
					alert(error.statusText)	
				}
			});
			return false;		
	});	
}



function Xoa_cthd($so_hoa_don,$ma_san_pham)
{
	var $kq = confirm("Bạn có chắc muốn xóa sản phẩm ?");
	if($kq == true)
	{
		$(document).ready(function() {
		var form_data = {
			ma_san_pham_dl   : $ma_san_pham,
			so_hoa_don_dl : $so_hoa_don
		};
			$.ajax({
				url:"sreach_order_item.php",
				type: 'POST',
				async : false,
				data: form_data,
				dataType: 'text',
				success: function(data){
					if(data == "No")
						alert("Một hóa đơn không thể không có CTHD");
					else
						window.location="order.php?order="+$so_hoa_don;                 
				},
				error: function(error){
					alert(error.statusText)	
				}
			});
			return false;		
		});			
	}	
}
function Xoa_SP($ma_san_pham)
{
	var $kq = confirm("Bạn có chắc muốn xóa sản phẩm ?");
	if($kq == true)
	{
		$(document).ready(function() {
		var form_data = {
			ma_san_pham    : $ma_san_pham
		};
			$.ajax({
				url:"sreach_product.php",
				type: 'POST',
				async : false,
				data: form_data,
				dataType: 'text',
				success: function(data){
					window.location="product.php";              
				},
				error: function(error){
					alert(error.statusText)	
				}
			});
			return false;		
		});			
	}
}
function Tim_ct_hd($ct_hd)
{
	$(document).ready(function() {
		var form_data = {
			so_hd    : $ct_hd
		};
			$.ajax({
				url:"sreach_order_item.php",
				type: 'POST',
				async : false,
				data: form_data,
				dataType: 'text',
				success: function(data){
					$('.widget').html(data);               
				},
				error: function(error){
					alert(error.statusText)	
				}
			});
			return false;		
	});	
}
$(document).ready(function() {	
	$('#timUser').keyup(function() {
		var $txt = $(this).val();
		if($txt != '')
		{
				var form_data = {
					ten : $txt
				};
				$.ajax({
					url:"sreach_user.php",
					type: 'POST',
					async : false,
					data: form_data,
					dataType: 'text',
					success: function(data){
						$('.padded').html(data);               
					},
					error: function(error){
						alert(error.statusText)	
					}
				});
				return false;	
		}
	}); //click
	$('.timHD').keyup(function() {
		var $txt = $(this).val();
		if($txt != '')
		{
				var form_data = {
					id    : $txt
				};
				$.ajax({
					url:"sreach_order_item.php",
					type: 'POST',
					async : false,
					data: form_data,
					dataType: 'text',
					success: function(data){
						$('.padded').html(data);               
					},
					error: function(error){
						alert(error.statusText)	
					}
				});
				return false;	
		}
	}); //click
	
	
	$('.xemCTHD').click(function() {
		var $so_hoa_don = $(this).attr("id");
		//alert($so_hoa_don);
		var form_data = {
			so_hd    : $so_hoa_don
		};
			$.ajax({
				url:"sreach_order_item.php",
				type: 'POST',
				async : false,
				data: form_data,
				dataType: 'text',
				success: function(data){
					$('.widget').html(data);               
				},
				error: function(error){
					alert(error.statusText)	
				}
			});
			return false;	
	}); //click
	
	$('#timSP').keyup(function() {
		var $txt = $(this).val();
		if($txt != '')
		{
				var form_data = {
					ten_san_pham    : $txt
				};
				$.ajax({
					url:"sreach_product.php",
					type: 'POST',
					async : false,
					data: form_data,
					dataType: 'text',
					success: function(data){
						$('.padded').html(data);               
					},
					error: function(error){
						alert(error.statusText)	
					}
				});
				return false;	
		}
	}); //click
}); // ready