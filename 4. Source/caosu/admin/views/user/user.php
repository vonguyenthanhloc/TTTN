<div class="col-md-9">
  <div class="content-wrapper">
    <div class="content-inner">
      <div class="page-header">
        <?php require_once("header.php"); ?>
        <h1><i class="icon-table"></i>BẢNG NGƯỜI DÙNG</h1>
      </div>
      <div class="main-content">
        <div class="widget">
          <div class="col-sm-12 text-center">
            <div id="DataTables_Table_0_filter" class="dataTables_filter">
              <label>TÌM NGƯỜI DÙNG
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
                    <th>LOẠI ND</th>
                    <th>TÊN ND</th>
                    <th>ĐỊA CHỈ</th>
                    <th>ĐIỆN THOẠI</th>
                    <th>Email</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(isset($users)){ foreach($users as $user ){ ?>
                  <tr>
                    <td><?php echo $user->ma_nguoi_dung; ?></td>
                    <td><?php if($user->ma_loai_nd == 1) echo "Admin"; else echo "Khách"; ?></td>
                    <td><?php echo $user->ten; ?></td>
                    <td><?php echo $user->dia_chi; ?></td>
                    <td><?php echo $user->so_dien_thoai; ?></td>
                    <td><?php echo $user->email; ?></td>
                    <td class="text-right"><a href="user.php?edit=<?php echo $user->ma_nguoi_dung; ?>" class="btn btn-default btn-xs"><i class="icon-pencil"></i> edit</a> <a href="#" class="btn btn-danger btn-xs"><i class="icon-remove"></i></a></td>
                  </tr>
                  <?php }} ?>
                </tbody>
              </table>
              <div class="row">
                <div class="col-sm-7">
                  <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                    <ul class="pagination">
 					<?php echo $list_user; ?>
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
