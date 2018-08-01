<div class="col-md-9">
                <div class="content-wrapper">
                    <div class="content-inner">
                        <div class="page-header">
                            <?php require_once("header.php");?>
                            <h1><i class="icon-bar-chart"></i> THÊM SẢN PHẨM</h1>
                        </div>
                        <div class="main-content">
                            <div class="row">
                                    <div class="widget">
                                                <form action="product.php" method="post" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>STT SẢN PHẨM</label>
                                                                <input type="text" name="ma_san_pham" class="form-control" value="<?php echo $san_pham->Max_sp+1; ?>" readonly="readonly" placeholder="STT User">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>LOẠI SẢN PHẨM</label>
                                                                <select class="form-control" name="ma_loai">
                                                                	<option value="0">Chosse</option>
                                                                 <?php foreach($loai_sp as $loai){ ?>
                                                                    <option value="<?php echo $loai->ma_loai ?>"><?php echo $loai->ten_loai; ?></option>
                                                                 <?php }?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>TÊN SẢN PHẨM</label>
                                                                <input type="text" name="ten_san_pham" class="form-control" placeholder="Nhập tên sản phẩm ...">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>GIÁ</label>
                                                                <input type="text" name="gia" class="form-control" placeholder="Nhập giá sản phẩm ...">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>MIÊU TẢ TÓM TẮT</label>
                                                        <textarea class="form-control" name="mo_ta_tom_tat" id="ckeditor"></textarea>
                                                        <script>CKEDITOR.replace( 'ckeditor' );</script>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>MIÊU TẢ CHI TIẾT</label>
                                                        <textarea class="form-control" name="mo_ta_chi_tiet" id="ckeditor1"></textarea>
                                                        <script>CKEDITOR.replace( 'ckeditor1' );</script>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>HÌNH SẢN PHẨM</label>
                                                        <input type="file" name="hinh" id="hinh" />
            											<div class="image-holder" id="image-holder"></div>
                                                    </div>
                                                    <div class="form-group" align="center">
                                                    <input type="submit" class="btn btn-primary" name="btnAddSP" value="THÊM SẢN PHẨM">
                                                    <button class="btn btn-default"><a herf="index.php"> QUAY LẠI </a></button>
                                                    </div>
                                                </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>