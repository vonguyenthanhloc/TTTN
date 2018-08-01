<div class="col-md-9">
  <div class="content-wrapper">
    <div class="content-inner">
      <div class="page-header">
        <?php require_once("header.php"); ?>
        <h1><i class="icon-table"></i>BẢNG KHÁCH HÀNG</h1>
      </div>
      <div class="main-content">
        <div class="widget">
        <div class="col-sm-12 text-center">
          <div id="DataTables_Table_0_filter" class="dataTables_filter">
            <label>TÌM KHÁCH HÀNG
              <input type="search" id="timUser" class="form-control input-sm" placeholder="" aria-controls="DataTables_Table_0">
            </label>
            <a href="#" class="btn btn-default btn-xs"><i class="icon-search"></i></a> </div>
          </div>
        </div>
          <div class="widget-content-white glossed">
            <div class="padded">
              <table class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>TÊN KHÁCH HÀNG</th>
                    <th>GIỚI TÍNH</th>
                    <th>EMAIL</th>
                    <th>ĐIỆN THOẠI</th>
                    <!-- <th>HÀNH ĐỘNG</th> -->
                  </tr>
                </thead>
                <tbody>
                  <?php if(isset($khach_hangs)){ foreach($khach_hangs as $khach_hang ){ ?>
                  <tr>
                    <td><?php echo $khach_hang->ma_khach_hang; ?></td>
                    <td><?php echo $khach_hang->ho_ten;?></td>
                    <td><?php if($khach_hang->gioi_tinh == 0) echo "Man"; else echo "Woman"; ?></td>
                    <td><?php echo $khach_hang->email; ?></td>
                    <td><?php echo $khach_hang->so_dien_thoai; ?></td>
                    <!-- <td class="text-left"><a href="#" class="btn btn-danger btn-xs"><i class="icon-remove">Delete</i></a></td> -->
                  </tr>
                  <?php }} ?>
                </tbody>
              </table>
              <div class="row">
                <div class="col-sm-7">
                  <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                    <ul class="pagination">
                     <?php echo $list_custom; ?>
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
