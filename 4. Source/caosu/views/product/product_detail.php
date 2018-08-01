<section class="sub-header shop-detail-1">
    <img class="rellax bg-overlay" src="public/layout/images/product/giong3.jpg " alt="">
    <div class="overlay-call-to-action"></div>
    <h3 class="heading-style-3">THÔNG TIN GIỐNG CAO SU</h3>
</section>
<section class="boxed-sm" style="margin-top: 2em">
    <div class="container">
        <div class="row product-detail">
            <div class="row main">
                <div class="col-md-6">
                    <div class="woocommerce-product-gallery">
                        <div class="main-carousel" style="margin-bottom: 2em">
                            <div class="item">
                                <img class="img-responsive" src="public/layout/images/product/<?php echo $san_pham->hinh; ?>" alt="product thumbnail">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="summary">
                        <div class="desc">
                            <div class="header-desc">
                                <h2 class="product-title">
                                    <?php echo $san_pham->ten_san_pham; ?>
                                </h2>
                                <p class="price" style="margin-top: 1em; margin-bottom: 1em">
                                    <?php echo number_format($san_pham->gia); ?> VNĐ</p>
                            </div>
                            <div class="body-desc">
                                <div class="woocommerce-product-details-short-description">
                                    <p style="margin-top: 1em; margin-bottom: 1em">
                                        <?php echo $san_pham->mo_ta_tom_tat; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="footer-desc">
                                <form class="cart" style="margin-top: 1em;">
                                    <input type="hidden" id="dongia<?php echo $san_pham->ma_san_pham;?>" value="<?php echo $san_pham->gia;?>" />
                                    <input type="hidden" value="1" id="soluong<?php echo $san_pham->ma_san_pham;?>" />
                                    <button class="btn btn-brand no-radius mua" href="javascript:void(0)" id="<?php echo $san_pham->ma_san_pham; ?>">THÊM GIỎ HÀNG</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="woocommerce-tabs">
            <div class="row">
                <div class="col-md-6">
                    <div class="tab-content tab-content-style-1">
                        <div class="tab-pane fade in active" id="Description" role="tabpanel">
                            <h3 class="title-tab">Mô tả chi tiết</h3>
                            <ul class="arrow">
                                <?php echo $san_pham->mo_ta_chi_tiet; ?>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="Additional-Information" role="tabpanel">
                            <h3 class="title-tab">Kích thước cây giống</h3>
                            <table class="shop_attributes table table-striped table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Country</th>
                                        <td>
                                            <p>England, London</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Weight</th>
                                        <td>
                                            <p>3.5 Kg</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Next Day Delivery Available</th>
                                        <td>
                                            <p>Yes</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="Review" role="tabpanel">
                            <h3 class="title-tab">
                                <?php echo count($comment); ?> Nhận xét</h3>
                            <ol class="comment-list">
                                <?php foreach ($comment as $comm) {?>
                                <li>
                                    <div class="the-comment">
                                        <div class="avatar">
                                            <img class="avatar" width="100" height="100" alt="avatar" src="public/layout/images/comment/<?php echo ($m_tan_khoan->get_Thong_Tin_Nguoi_Dung($comm->ma_nguoi_dung)->gioi_tinh == 0)?'man.png':'woman.png' ?>">
                                        </div>
                                        <div class="comment-box">
                                            <div class="comment-author meta">
                                                <p class="author">
                                                    <?php echo $m_tan_khoan->get_Thong_Tin_Nguoi_Dung($comm->ma_nguoi_dung)->ten ?>
                                                </p>
                                                <p class="time">
                                                    <?php echo $comm->ngay_dang; ?>
                                                </p>
                                            </div>
                                            <div class="comment-text">
                                                <p>
                                                    <?php echo $comm->noi_dung ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php } ?>
                            </ol>
                            <?php if(isset($_SESSION['ten_dang_nhap'])){ ?>
                            <ol class="comment-list">
                                <li>
                                    <div class="the-comment">
                                        <div class="comment-box">
                                            <form action="product_detail.php" method="post">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <textarea name="message" rows="5" cols="50" name="noi_dung" required></textarea>
                                                    </div>
                                                    <input type="hidden" name="ma_san_pham" value="<?php echo $san_pham->ma_san_pham; ?>">
                                                    <input type="hidden" name="ma_nguoi_dung" value="<?php echo $m_tan_khoan->Kiem_tra_ten_dang_nhap($_SESSION['ten_dang_nhap'])->ma_nguoi_dung; ?>">
                                                    <div class="col-md-4">
                                                        <button type="submit" class="btn btn-success" name="binhLuan">BÌNH LUẬN</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="tabs tab-style-1" role="tablist">
                        <li class="active" role="presentation">
                            <a href="#Description" aria-controls="Description" role="tab" data-toggle="tab">Mô tả chi tiết
                                <i class="more-less fa fa-angle-down"></i>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#Additional-Information" aria-controls="Additional-Information" role="tab" data-toggle="tab">Kích thước cây giống
                                <i class="more-less fa fa-angle-down"></i>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#Review" aria-controls="Review" role="tab" data-toggle="tab">Nhận xét (<?php echo count($comment); ?>)
                                <i class="more-less fa fa-angle-down"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-bottom: 3em">
        <div class="relate-product">
            <div class="heading-wrapper text-center">
                <h3 class="heading">CÁC CÂY GIỐNG CÙNG LOẠI</h3>
            </div>
            <div class="row">
                <div class="carousel-product">
                    <?php foreach($san_pham_theo_loai as $sp) {?>
                    <div class="item">
                        <figure class="item">
                            <div class="product product-style-1">
                                <div class="img-wrapper">
                                    <a href="product_detail.php?ma_san_pham=<?php echo $sp->ma_san_pham; ?>">
                                        <img class="img-responsive" src="public/layout/images/product/<?php echo $sp->hinh ?>" alt="product thumbnail">
                                    </a>
                                </div>
                                <figcaption class="desc text-center">
                                    <h3>
                                        <a class="product-name" href="product_detail.php?ma_san_pham=<?php echo $sp->ma_san_pham; ?>">
                                            <?php echo $sp->ten_san_pham; ?>
                                        </a>
                                    </h3>
                                    <span class="price">
                                        <?php echo number_format($sp->gia); ?> VNĐ
                                    </span>
                                </figcaption>
                            </div>
                        </figure>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>