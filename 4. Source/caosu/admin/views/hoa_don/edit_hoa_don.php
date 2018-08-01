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
                                        <div class="widget-content-white glossed">
                                            <div class="padded">
                                                <form action="user.php" method="post">
                                                    <div class="widget-controls pull-right">
                                                        <a href="#" class="widget-link-remove"><i class="icon-minus-sign"></i></a>
                                                        <a href="#" class="widget-link-remove"><i class="icon-remove-sign"></i></a>
                                                    </div>
                                                    <h3 class="form-title form-title-first"><i class="icon-terminal"></i> Basic Form</h3>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>STT Order</label>
                                                                <input type="text" name="ma_nguoi_dung" class="form-control" value="<?php echo $user->ma_nguoi_dung; ?>" required="required" placeholder="STT User">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Product</label>
                                                                <input type="text" name="ten" value="<?php echo $user->ten; ?>" class="form-control" placeholder="Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Product</label>
                                                                <select name="DataTables_Table_0_length" class="form-control input-sm">
                                                                	<option value="0">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="2">3</option>
                                                                    <option value="3">4</option>
                                                                    <option value="4">5</option>
                                                                 </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  
                                                    <input type="submit" class="btn btn-primary" name="btnCapNhatUser" value="Primary Button">
                                                    <button class="btn btn-default"><a herf="user.php"> Cancel Button </a></button>
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