// JavaScript Document
$(document).ready(function() {
            $('.mua').click(function() {

			var $key=$(this).attr("id");
            var $soluonginput="#soluong"+$key;
            var $soLuong=$($soluonginput).val();
            
            var $dongiainput="#dongia"+$key;
            var $dongia=$($dongiainput).val();
            // console.log($key +"----"+ $soLuong +"----"+ $dongia);
            var form_data = {
                id    : $key,
                soluong : $soLuong,
                dongia  : $dongia,
                };
			$.ajax({
                    url:"mua_hang.php",
                    type: 'POST',
                    async : true,
                    data: form_data,
                    dataType: 'json',
                	success: function(data){  
						alert("Đã thêm vào giỏ hàng");
						window.location="cart.php";                             
                	},
					error: function(error){
						alert(error.statusText)	
					}
            });
            return false;
      }); //click
  }); // ready