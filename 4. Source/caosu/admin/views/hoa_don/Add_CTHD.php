<div class="col-md-9">
  <div class="content-wrapper">
    <div class="content-inner">
      <div class="page-header">
        <?php require_once("header.php");?>
        <h1><i class="icon-bar-chart"></i> Forms</h1>
      </div>
      <div class="main-content">
        <div class="row">
          <div class="widget">
            <form action="order.php" method="post" role="form">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>STT ĐƠN HÀNG</label>
                    <input type="text" name="so_hoa_don_add" class="form-control" value="<?php echo $so_hoa_don; ?>" readonly="readonly">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>CHỌN GIỐNG</label>
                    <select class="form-control" name="san_pham_add">
                      <option value="0">CHỌN GIỐNG</option>
                      <?php foreach($san_phams as $sp){ ?>
                      <option value="<?php echo $sp->ma_san_pham ?>"><?php echo $sp->ten_san_pham; ?></option>
                      <?php }?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>SỐ LƯỢNG</label>
                    <input type="text" name="so_luong_add" class="form-control" placeholder="Nhập số lượng ...">
                  </div>
                </div>
                <div class="col-md-6" style="margin-top:25px">
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="AddCTHD" value="THÊM GIỐNG">
                    <button class="btn btn-default"><a herf="index.php"> Quay lại </a>
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
