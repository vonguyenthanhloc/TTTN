<div class="col-md-9">
<div class="content-wrapper">
  <div class="content-inner">
    <div class="page-header">
      <?php require_once("header.php");?>
      <h1><i class="icon-bar-chart"></i> CẬP NHẬT ĐƠN HÀNG </h1>
    </div>
    <div class="main-content">
      <div class="row">
        <div class="widget">
          <div class="widget-content-white glossed">
          <div class="padded">
            <div class="clear"></div>
            <hr />
            <table class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th>STT SẢN PHẨM</th>
                  <th>TÊN SẢN PHẨM</th>
                  <th>HÌNH</th>
                  <th>GIÁ SẢN PHẢM</th>
                  <th>SỐ LƯỢNG</th>
                  <th>HÀNH ĐỘNG</th>
                </tr>
              </thead>
              <tbody>
              <?php if(isset($ct_hoa_don)){ foreach($ct_hoa_don as $ct_hd){ ?>
                <tr>
                  <td><?php echo $ct_hd->ma_san_pham ?></td>
                  <td><?php echo $ct_hd->ten_san_pham ?></td>
                  <td><img herf="public/layout/assets/img/photos/<?php echo $ct_hd->hinh ?>"></td>
                  <td class="text-left"><?php echo number_format($ct_hd->gia)?></td>
                  <td><input type="text" value="<?php echo $ct_hd->so_luong ?>" size="10" id="soluongsp<?php echo $ct_hd->ma_san_pham; ?>" /></td>
                  <td><input type="button" class="btn btn-warning btn-xs" onClick="Xoa_cthd(<?php echo $so_hoa_don ?>,<?php echo $ct_hd->ma_san_pham ?>)" value="Xóa"> <input type="button" class="btn btn-success btn-xs" onClick="Update_Cthd(<?php echo $so_hoa_don ?>,<?php echo $ct_hd->ma_san_pham ?>)" value="Cập nhật"></td>
                </tr>
                <?php }}?>
              </tbody>
              </form>
            </table>
            <p style="float:right;">Total: <?php echo number_format($hoa_don->tri_gia) ?> VNĐ</p>
            <center>
              <td class="text-right"><a href="order.php?add=<?php echo $so_hoa_don;?>" class="btn btn-primary btn-xs">THÊM SẢN PHẨM</a><a href="order.php" class="btn btn-danger btn-xs">QUAY LẠI</a>
            </center>
            </div>
            <div class="col-md-6"> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
