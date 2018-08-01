$(document).ready(function() {
            $('.btnCN').click(function() {
			var $key=$(this).attr("id");
            var $soluonginput="#soluonggiohang"+$key;
            var $soLuong=$($soluonginput).val();
            
            var $dongiainput="#dongiagiohang"+$key;
            var $dongia=$($dongiainput).val();

            var form_data = {
                id    : $key,
                soluong_moi : $soLuong,
                dongiagiohang  : $dongia,
                };
			$.ajax({
                    url:"cap_nhat_gio_hang.php",
                    type: 'POST',
                    async : false,
                    data: form_data,
                    dataType: 'json',
                	success: function(data){  
						alert(data['kq']);
						window.location="cart.php";                             
                	},
					error: function(error){
						alert(error.statusText)	
					}
            });
            return false;
      }); //click
  }); // ready