<?php
class pager
{
	function findStart($limit)
	{
		if ((!isset($_GET['page'])) || ($_GET['page'] == "1"))
		{
			$start = 0;
			$_GET['page'] = 1;
		}
		else
		{
			$start = ($_GET['page']-1) * $limit;
		}
		
		return $start;
	}
	function findPages($count, $limit)
	{
		$pages = (($count % $limit) == 0) ? $count / $limit : floor($count / $limit) + 1;
		return $pages;
	}
	function removeQueryString()
	{
			$p="";
			$get=$_GET;
			foreach($get as $k=>$v)
			{
				if($k=="page")
					unset($get[$k]);	
			}
			if(count($get)>0){
				
				$str=http_build_query($get);
				$p=$str."&amp;";
			}
			return $p;
	}
	function pageList($curpage, $pages)
	{
			$querystring="";
			$page_list="";
			
			if(!empty($_SERVER["QUERY_STRING"]))
			{
				$args = explode("&",$_SERVER["QUERY_STRING"]);
				foreach($args as $arg) {
					$keyval = explode("=",$arg);
					if($keyval[0] != "page") $querystring .= $arg . "&" ;
				}
			}
			//$p=$this->removeQueryString();
			
			if(($curpage!=1)&&($curpage))
			{
				$page_list.='<li class="paginate_button previous" id="DataTables_Table_0_previous">'."<a href =\"".$_SERVER['PHP_SELF']."?".$querystring."page=1\"".'aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0">Previous</a></li>';
			}
			if(($curpage-1)>0)
			{
				//$page_list.='<span class="div_trang">'."<a href =\"".$_SERVER['PHP_SELF']."?".$querystring."page=".($curpage-1)."\" title=\"Về trang trước\"><</a></span>";
			}
			
			$vtdau=max($curpage-2,1);
			$vtcuoi=min($curpage+2,$pages);

			
			if($vtdau>1){
			$page_list.='<li class="paginate_button active">'."<a href ='".$_SERVER['PHP_SELF']."?".$querystring."page=".($vtdau-1)."' title='Trang ".($vtdau-1)."'aria-controls='DataTables_Table_0' data-dt-idx='6' tabindex='0'>…</a></li>";
			}
			if($curpage == 1)
				$page_list.='<li class="paginate_button previous" id="DataTables_Table_0_previous">'."<a href =\"".$_SERVER['PHP_SELF']."?".$querystring."page=1\"".'aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0">Previous</a></li>';

			
				for($i=$vtdau;$i<=$vtcuoi;$i++)
				{
					if($i==$curpage)
					{
						$page_list.='<li class="paginate_button active">'."<a href ='".$_SERVER['PHP_SELF']."?".$querystring."page=".$i."' aria-controls='DataTables_Table_0' data-dt-idx='".$i."' tabindex='0' title='Trang ".$i."' >".$i."</a></li>";
					}
					else
					{
						$page_list.='<li class="paginate_button">'."<a href ='".$_SERVER['PHP_SELF']."?".$querystring."page=".$i."' aria-controls='DataTables_Table_0' data-dt-idx='".$i."' tabindex='0' title='Trang ".$i."' >".$i."</a></li>";
					}
				}

			if($vtcuoi<$pages){
				$page_list.='<li class="paginate_button" id="DataTables_Table_0_ellipsis">'."<a href ='".$_SERVER['PHP_SELF']."?".$querystring."page=".($vtcuoi+1)."' title='Trang ".($vtcuoi+1)."' aria-controls='DataTables_Table_0' data-dt-idx='".$i."' tabindex='0'>...</a></li>";
			}


			if(($curpage+1)<=$pages)
			{
				$page_list.='<li class="paginate_button next" id="DataTables_Table_0_next">'."<a href =\"".$_SERVER['PHP_SELF']."?".$querystring."page=".($curpage+1)."\" aria-controls=\"DataTables_Table_0\" data-dt-idx=\"8\" tabindex=\"0\">Next</a></li>";
				//$page_list.='<span class="div_trang">'."<a href =\"".$_SERVER['PHP_SELF']."?".$querystring."page=".$pages."\" title=\"Đến trang cuối\"></a></span>";
			}
			return $page_list;
	}

	function nextPrev($curpage,$pages)//chỉ hiển thị 2 nút Truoc và Sau
		{
			$next_prev="";
			if(($curpage-1)<=0)
			{
				$next_prev.="Về trang trước";
			}
			else
			{
				$next_prev.="<a href =\"".$_SERVER['PHP_SELF']."?page=".($curpage-1)."\">Về trang trước</a>";
			}
			$next_prev.=" | ";
			if(($curpage+1)>$pages)
			{
				$next_prev.="Đến trang sau";
			}
			else
			{
				$next_prev.="<a href =\"".$_SERVER['PHP_SELF']."?page=".($curpage+1)."\">Đến trang sau</a>";
			}
			return $next_prev;
		}
}
?>