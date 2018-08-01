<div class="col-md-9">
                <div class="content-wrapper">
                    <div class="content-inner">
                        <div class="page-header">
                            <?php require_once("header.php");?>
                            <h1><i class="icon-bar-chart"></i> SỬA NGƯỜI DÙNG</h1>
                        </div>
                        <div class="main-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="widget">
                                        <div class="widget-content-white glossed">
                                            <div class="padded">
                                                <form action="user.php" method="post">
                                                    <div class="widget-controls pull-right">
                                                        <a href="#" class="widget-link-remove"><i class="icon-minus-sign"></i></a>
                                                        <a href="#" class="widget-link-remove"><i class="icon-remove-sign"></i></a>
                                                    </div>
                                                    <h3 class="form-title form-title-first"><i class="icon-terminal"></i> THÔNG TIN</h3>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>STT ND</label>
                                                                <input type="text" name="ma_nguoi_dung" class="form-control" readonly="readonly" value="<?php echo $user->ma_nguoi_dung; ?>" required="required" placeholder="STT User">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>LOẠI ND</label>
                                                                <select class="form-control" name="loai_nguoi_sd">
                                                                	<option value="0">Chosse</option>
                                                                    <option value="1" <?php if($user->ma_loai_nd == 1) echo "selected"; else echo ""; ?>>Quản Trị</option>
                                                                    <option value="2" <?php if($user->ma_loai_nd == 2) echo "selected"; else echo ""; ?>>Khách</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>TÊN ND</label>
                                                        <input type="text" name="ten" value="<?php echo $user->ten; ?>" class="form-control" placeholder="Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" name="email" value="<?php echo $user->email; ?>" class="form-control" placeholder="Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>ĐIỆN THOẠI</label>
                                                        <input type="text" name="so_dien_thoai" value="<?php echo $user->so_dien_thoai; ?>" class="form-control" placeholder="Phone">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>ĐỊA CHỈ</label>
                                                        <input type="text" name="dia_chi" value="<?php echo $user->dia_chi; ?>" class="form-control"  placeholder="Disabled Field Value">
                                                    </div>
													<div class="row">
                                                        <div class="col-md-6">			
                                                            <div class="form-group">
                                                                <label>GIỚI TÍNH</label>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="gioi_tinh" id="optionsRadios1" value="0" <?php if($user->gioi_tinh == 0) echo "checked";?>>
                                                                        Nam
                                                                    </label>
                                                                    </div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="gioi_tinh" id="optionsRadios2" value="1" <?php if($user->gioi_tinh == 1) echo "checked";?>>
                                                                        Nữ
                                                                    </label>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        <div class="col-md-6">			
                                                            <div class="form-group">
                                                                <label>NGÀY SINH</label><br>
																<input type="date" name="ngay_sinh" value="<?php echo $user->date; ?>"  />
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <input type="submit" class="btn btn-primary" name="btnCapNhatUser" value="CẬP NHẬT">
                                                    <button class="btn btn-default"><a herf="user.php"> QUAY LẠI </a></button>
                                                </form>
                                            </div>
                                            <div class="col-md-6">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="widget">
                                        <div class="widget-content-white glossed">
                                            <div class="padded">
                                                <form action="user.php" method="post" role="form" class="form-horizontal">
                                                    <div class="widget-controls pull-right">
                                                        <a href="#" class="widget-link-remove"><i class="icon-minus-sign"></i></a>
                                                        <a href="#" class="widget-link-remove"><i class="icon-remove-sign"></i></a>
                                                    </div>
                                                    <h3 class="form-title form-title-first"><i class="icon-th-list"></i> THÔNG TIN ĐĂNG NHẬP</h3>
                                                    <div class="form-group">
                                                     <input type="hidden" name="ma_nguoi_dung" class="form-control" value="<?php echo $user->ma_nguoi_dung; ?>" required="required" placeholder="STT User">
                                                        <label class="col-md-4 control-label">TÊN ĐĂNG NHẬP</label>
                                                        <div class="col-md-8">
                                                            <input type="text" name="ten_dang_nhap" value="<?php echo $user->ten_dang_nhap; ?>" class="form-control" placeholder="Username" readonly="readonly">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label">MẬT KHẨU</label>
                                                        <div class="col-md-8">
                                                            <input type="password" name="password" value="<?php echo $user->password; ?>" class="form-control" placeholder="Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-offset-4 col-md-8">
                                                            <input type="submit" class="btn btn-default" value="CẬP NHẬT" name="btnCapNhatUserPassword">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-md-6">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>