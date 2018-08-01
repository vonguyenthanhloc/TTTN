<?php 
	@session_start();
	class C_product
	{
		function Hien_thi_product()
		{
			//models 
			require_once("models/m_san_pham.php");			
			$m_san_pham = new M_san_pham();
			$san_pham = $m_san_pham->Hien_thi_san_pham();
			//views
			$view = "views/product/product.php";
			require_once("public/content.php"); 	
		}
		
		function Hien_thi_product_detail()
		{
			//models 
			require_once("models/m_san_pham.php");
			require_once("models/m_comment.php");
			require_once("models/m_tai_khoan.php");
			$m_tan_khoan = new M_tai_khoan();
			$m_san_pham = new M_san_pham();	
			$m_comment = new M_comment();
			if(isset($_GET["ma_san_pham"])){

				$comment = $m_comment->Hien_thi_comment_theo_bai_viet_san_pham($_GET["ma_san_pham"]);
				require_once("models/m_san_pham.php");			
				$san_pham = $m_san_pham->Doc_san_pham_theo_ma($_GET["ma_san_pham"]);

				$san_pham_theo_loai = $m_san_pham->Hien_thi_san_pham_theo_loai($san_pham->ma_loai);

				$view = "views/product/product_detail.php";
				require_once("public/content.php"); 
			}
		}
		
		function Cap_nhat_binh_luan(){
			//models 
			require_once("models/m_comment.php");
			$m_comment = new M_comment();
			if(isset($_POST['binhLuan']) && isset($_SESSION['ten_dang_nhap'])){

				$ma_san_pham = $_POST['ma_san_pham'];
				$ma_nguoi_dung = $_POST['ma_nguoi_dung'];
				$noi_dung = $_POST['message'];
				$ngay_dang = date('m-d-y');
				$m_comment->Them_comment($ma_san_pham,$ma_nguoi_dung,$noi_dung,$ngay_dang);
				
				echo '<script>window.location="product_detail.php?ma_san_pham='.$ma_san_pham.'";</script>';
			}
		}
	}
?>