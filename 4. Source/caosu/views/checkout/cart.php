<?php $tien_san_pham = 0 ?>
<section class="sub-header shop-detail-1">
    <img class="rellax bg-overlay" src="public/layout/images/product/giong3.jpg" alt="">
    <div class="overlay-call-to-action"></div>
    <h3 class="heading-style-3">GIỎ HÀNG</h3>
</section>
<section class="boxed-sm" style="margin-top: 2em; margin-bottom: 2em">
    <div class="container">
        <?php if(isset($_SESSION['gio_hang_mon_an']) && isset($_SESSION['so_luong'])){ ?>
        <div class="woocommerce">

            <form class="woocommerce-cart-form">
                <table class="woocommerce-cart-table">
                    <thead>
                        <tr>
                            <th class="product-thumbnail">HÌNH</th>
                            <th class="product-name">GIỐNG CÂY</th>
                            <th class="product-quantity">SỐ LƯỢNG</th>
                            <th class="product-price">GIÁ</th>
                            <th class="product-remove">HÀNH ĐỘNG</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(isset($_SESSION['gio_hang_mon_an']) && isset($_SESSION['so_luong'])){foreach($_SESSION['gio_hang_mon_an'] as $san_pham_gh){ ?>
                        <tr>
                            <td class="product-thumbnail">
                                <img src="public/layout/images/product/<?php echo $san_pham_gh->hinh; ?>" width="100px" height="100px" alt="product-thumbnail">
                            </td>
                            <td class="product-name" data-title="Product">
                                <a class="product-name" href="product-detail.html">
                                    <?php echo $san_pham_gh->ten_san_pham; ?>
                                </a>
                            </td>
                            <td class="product-quantity" data-title="Quantity">
                                <input class="qty" step="1" min="0" max="" name="product-name" value="<?php echo $san_pham_gh->so_luong; ?>" id="soluonggiohang<?php echo $san_pham_gh->ma_san_pham ?>" title="Qty"
                                    size="4" pattern="[0-9]*" inputmode="numeric" type="number">
                            </td>
                            <td class="product-price" data-title="Price">
                                <?php echo number_format($san_pham_gh->gia); ?> VNĐ
                            </td>
                            <input type="hidden" id="dongiagiohang<?php echo $san_pham_gh->ma_san_pham; ?>" value="<?php echo $san_pham_gh->gia ?>" name="dongiagiohang<?php echo $san_pham_gh->ma_san_pham ?>"
                            />
                            <input type="hidden" value="<?php $tien_san_pham = $tien_san_pham + $san_pham_gh->so_luong*$san_pham_gh->gia ?>" />
                            <td class="product-remove">
                                <a class="remove btnxoa" href="javascript:void(0)" id="<?php echo $san_pham_gh->ma_san_pham;?>" aria-label="Remove this item">×</a>
                            </td>
                        </tr>
                        <?php }}else echo '<center>Bạn chưa chọn sản phẩm</center>';?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>
                                <div class="form-coupon">
                                    <div class="form-group">
                                        <a class="btn btn-brand-ghost pill btnCN" href="javascript:void(0)" id="<?php echo $san_pham_gh->ma_san_pham;?>">CẬP NHẬT GIỎ HÀNG</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </form>
            <?php } ?>
            <div class="cart_totals" style="margin-top: 2em;">
                <div class="row">
                    <div class="col-md-8">
                        <?php if(isset($_SESSION['gio_hang_mon_an']) && isset($_SESSION['so_luong'])){ $tien = number_format($tien_san_pham);?>
                        <table class="woocommerce-cart-subtotal">
                            <tbody>
                                <tr>
                                    <th>Thành tiền</th>
                                    <td data-title="Total">
                                        <?php echo $tien; ?> VNĐ
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="proceed-to-checkout" style="margin-top: 1em">
                            <a class="btn btn-brand pill" href="checkout.php">TIẾP TỤC</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }else { echo '<h3 class="container" style="text-align:center; margin-top: 5em; margin-bottom: 5em;">Bạn chưa chọn sản phẩm</h3>'; }?>
    </div>
</section>