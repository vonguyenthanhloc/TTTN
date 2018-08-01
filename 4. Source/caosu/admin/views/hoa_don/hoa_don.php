<div class="col-md-9">
  <div class="content-wrapper">
    <div class="content-inner">
      <div class="page-header">
        <?php require_once("header.php"); ?>
        <h1><i class="icon-bar-chart"></i>BẢNG ĐƠN HÀNG</h1>
      </div>
      <div class="main-content">
        <div class="widget">
          <div class="col-sm-12 text-center">
            <div id="DataTables_Table_0_filter" class="dataTables_filter">
              <label>TÌM SẢN PHẨM THEO ĐƠN HÀNG
                <input type="text" class="form-control input-sm timHD" placeholder="Nhập tên sản phẩm ...">
              </label>
              <a href="#" class="btn btn-default btn-xs"><i class="icon-search"></i></a> </div>
          </div>
          <div class="widget-content-white glossed">
            <div class="padded">
              <table class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>STT ĐƠN HÀNG</th>
                    <th>THỜI GIAN</th>
                    <th>NGÀY THÁNG</th>
                    <th>GIÁ TRỊ</th>
                    <th>GHI CHÚ</th>
                    <th>THANH TOÁN</th>
                    <th>TRẠNG THÁI</th>
                    <th>HÀNH ĐỘNG</th>
                  </tr>
                </thead>
                <form method="post">
                <tbody>
                  <?php if(isset($hoa_dons)){ foreach($hoa_dons as $hoa_don){ ?>
                  <tr>
                    <td><?php echo $hoa_don->so_hoa_don; ?></td>
                    <td><?php echo $hoa_don->thoi_gian; ?></td>
                    <td><?php echo $hoa_don->ngay_hd; ?></td>
                    <td class="text-right"><?php echo number_format($hoa_don->tri_gia); ?></td>
                    <td><span class="label label-primary"><?php echo $hoa_don->ghi_chu; ?></span></td>
                    <td><span class="label label-success"><?php echo $hoa_don->thanh_toan; ?></span></td>
                    <td><div class="form-group">
                        <select class="form-control chosen" name="ds[]">
                          <option value="0" <?php echo($hoa_don->tinh_trang==0)?"selected":"" ?>>ĐANG LẤY GIỐNG</option>
                          <option value="1" <?php echo($hoa_don->tinh_trang==1)?"selected":"" ?>>ĐÃ ĐÓNG GÓI</option>
                          <option value="2" <?php echo($hoa_don->tinh_trang==2)?"selected":"" ?>>CHUYỂN SẢN PHẨM</option>
                          <option value="3" <?php echo($hoa_don->tinh_trang==3)?"selected":"" ?>>CHƯA THANH TOÁN</option>
                          <option value="4" <?php echo($hoa_don->tinh_trang==3)?"selected":"" ?>>ĐÃ THANH TOÁN</option>
                          <option value="5" <?php echo($hoa_don->tinh_trang==3)?"selected":"" ?>>CẬP NHẬT ĐƠN HÀNG</option>
                          <option value="6" <?php echo($hoa_don->tinh_trang==4)?"selected":"" ?>>HỦY</option>
                          <option value="7" <?php echo($hoa_don->tinh_trang==5)?"selected":"" ?>>HOÀN TIẾN</option>
                        </select>
                      </div></td>
                      <input type="hidden" value="<?php echo $hoa_don->so_hoa_don ?>" name="so_hoa_don[]" />
                    <td class="text-right">
                    	<a href="order.php?order=<?php echo $hoa_don->so_hoa_don ?>" class="btn btn-default btn-xs"><i class="icon-zoom-in">Cập nhật ĐH</i></a>

                        <a href="javascript:void(0)" id="<?php echo $hoa_don->so_hoa_don; ?>" class="btn btn-default btn-xs xemCTHD"><i class="icon-zoom-in">Xem ĐH</i></a
                    ></td>
                  </tr>
                  <?php }} ?>
                  <tr><td colspan="8" align="center"><input type="submit" class="btn btn-warning" name="btnCapnhat" value="CẬP NHẬT ĐƠN HÀNG"/></td></tr>
                </tbody>
                </form>
              </table>
              <div class="row">
                <div class="col-sm-7">
                  <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                    <ul class="pagination">
                    	<?php echo $list_hd; ?>
                    </ul>                   	
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
