<div class="col-md-9">
    <div class="content-wrapper">
        <div class="content-inner">
            <div class="page-header">
                <?php require_once("header.php");?>
                <h1><i class="icon-bar-chart"></i> SỬA SẢN PHẨM</h1>
            </div>
            <div class="main-content">
                <div class="row">
                        <div class="widget">
                                    <form action="product.php" method="post" role="form" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>STT SẢN PHẨM</label>
                                                    <input type="text" name="ma_san_pham" class="form-control" value="<?php echo $san_pham->ma_san_pham; ?>" readonly="readonly" placeholder="STT Sản phẩm">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>LOẠI SẢN PHẨM</label>
                                                    <input type="text" name="ma_loai" class="form-control" value="<?php echo $san_pham->ma_loai; ?>" readonly="readonly"  placeholder="STT User">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>TÊN SẢN PHẨM</label>
                                                    <input type="text" name="ten_san_pham" value="<?php echo $san_pham->ten_san_pham; ?>" class="form-control" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>GIÁ</label>
                                                    <input type="text" name="gia" value="<?php echo $san_pham->gia; ?>" class="form-control" placeholder="Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>MIÊU TẢ TÓM TẮT</label>
                                            <textarea class="form-control" name="mo_ta_tom_tat" id="ckeditor" placeholder="Phone" ><?php echo $san_pham->mo_ta_tom_tat; ?></textarea>
                                            <script>CKEDITOR.replace( 'ckeditor' );</script>
                                        </div>
                                        <div class="form-group">
                                            <label>MÔ TẢ CHI TIẾT</label>
                                            <textarea class="form-control" name="mo_ta_chi_tiet" id="ckeditor1"  placeholder="Disabled Field Value"><?php echo $san_pham->mo_ta_chi_tiet; ?></textarea>
                                            <script>CKEDITOR.replace( 'ckeditor1' );</script>
                                        </div>
                                        <div class="form-group">
                                            <label>HÌNH SẢN PHẨM</label>
                                            <input type="hidden" name="ten_hinh" value="<?php echo $san_pham->hinh; ?>">
                                            <input type="file" name="hinh" id="hinh" />
                                            <div class="image-holder" id="image-holder"></div>
                                        </div>
                                        <div class="form-group" align="center">
                                        <input type="submit" class="btn btn-primary" name="btnCapNhatSP" value="CẬP NHẬT SẢN PHẨM">
                                        <button class="btn btn-default"><a herf="index.php"> QUAY LẠI </a></button>
                                        </div>
                                    </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>