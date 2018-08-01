<div class="col-md-9">
  <div class="content-wrapper">
    <div class="content-inner">
      <div class="page-header">
        <?php require_once("header.php"); ?>
        <h1><i class="icon-table"></i>Bảng sản phẩm</h1>
      </div>
      <div class="main-content">
        <div class="widget">
          <div class="col-sm-12">
            <div id="DataTables_Table_0_filter" class="dataTables_filter text-center">
              <label>TÌM KIẾM SẢN PHẨM
                <input type="search" id="timSP" class="form-control input-sm" placeholder="" aria-controls="DataTables_Table_0">
              </label>
              <a href="#" class="btn btn-default btn-xs"><i class="icon-search"></i></a> </div>
            </div>
          </div>
          <div class="widget-content-white glossed">
            <div class="padded">
              <table class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Tên SẢN PHẨM</th>
                    <th>HÌNH</th>
                    <th>GIÁ</th>
                    <th>MÔ TẢ TÓM TẮT</th>
                    <th>HÀNH ĐỘNG</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(isset($san_phams)){ foreach($san_phams as $san_pham ){ ?>
                  <tr>
                    <td><?php echo $san_pham->ma_san_pham; ?></td>
                    <td style="text-transform:capitalize"><?php echo $san_pham->ten_san_pham; ?></td>
                    <td><img src="../public/layout/images/product/<?php echo $san_pham->hinh; ?>" width="150" height="100"/></td>
                    <td><?php echo $san_pham->gia; ?></td>
                    <td><?php echo $san_pham->mo_ta_tom_tat; ?></td>
                    <td class="text-left"><a href="product.php?edit=<?php echo $san_pham->ma_san_pham; ?>" class="btn btn-default btn-xs"><i class="icon-pencil"></i> edit</a> <a href="javascript:void(0)" onclick="Xoa_SP(<?php echo $san_pham->ma_san_pham; ?>)" class="btn btn-danger btn-xs"><i class="icon-remove"></i></a></td>
                  </tr>
                  <?php }} ?>
                  <form method="post" action="product.php">
                  <tr><td colspan="8" align="center"><input type="submit" class="btn btn-warning" name="btnThemSP" value="THÊM SẢN PHẨM"/></td></tr>
                  </form>
                </tbody>
              </table>
              <div class="row">
                <div class="col-sm-7">
                  <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                    <ul class="pagination">
                     <?php echo $list_sp; ?>
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
