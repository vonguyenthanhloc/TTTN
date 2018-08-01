<section class="sub-header shop-detail-1">
    <img class="rellax bg-overlay" src="public/layout/images/product/giong3.jpg" alt="">
    <div class="overlay-call-to-action"></div>
    <h3 class="heading-style-3">Checkout</h3>
</section>
<section class="boxed-sm">
    <div class="container">
        <div class="woocommerce">
            <div class="woocommerce-info-wrapper" style="margin-top: 2em; margin-bottom: 2em;">
                <div class="row">
                    <?php if(!isset($_SESSION["ten_dang_nhap"])){ ?>
                    <div class="woocommerce-info">
                        <i class="fa fa-check"></i>Nếu bạn đã có tài khoản?
                        <a href="login.php">Click vào đăng nhập ngay</a>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <div class="row">
                <form action="checkout.php" method="post">
                    <?php if(!isset($_SESSION["ten_dang_nhap"])){ ?>
                    <h4 style="margin-bottom: 1em">Thông tin giao hàng</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group organic-form no-radius">
                                <label>Tên *</label>
                                <input class="form-control" type="text" name="name" require>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group organic-form no-radius">
                                <label>Số điện thoại *</label>
                                <input class="form-control" type="phone" name="phone" require>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group organic-form no-radius">
                                <label>Địa chỉ * </label>
                                <input class="form-control" type="text" name="address" require>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group organic-form no-radius">
                                <label>Email * </label>
                                <input class="form-control" type="email" name="email" require>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-inline" style="margin-top: 3em">
                                <label>Nam </label>
                                <input style="margin-right: 3em" class="form-control" type="radio" name="gender" value="0" checked required>
                                <label>Nữ </label>
                                <input class="form-control" type="radio" name="gender" value="1" required>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="woocommerce-checkout-review-order">
                        <h4 style="margin-top: 2em; margin-bottom: 2em">Giỏ hàng của bạn</h4>
                        <table class="woocommerce-checkout-review-order-table">
                            <thead>
                                <tr>
                                    <th class="product-name">Giống cây</th>
                                    <th class="product-total">Tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(isset($_SESSION['gio_hang_mon_an']) && isset($_SESSION['so_luong'])){foreach($_SESSION['gio_hang_mon_an'] as $san_pham_gh){ ?>
                                <tr class="cart_item">
                                    <td class="product-name"><?php echo $san_pham_gh->ten_san_pham; ?>
                                        <span class="product-quantity">× <?php echo $san_pham_gh->so_luong ?></span>
                                    </td>
                                    <td class="product-total">
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol"><?php echo number_format($san_pham_gh->gia); ?> VNĐ</span>
                                    </td>
                                </tr>
                                <?php }}?>
                            </tbody>
                            <tfoot>
                                <tr class="cart-shipping">
                                    <th>Shipping</th>
                                    <td>
                                        <strong>
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol"></span>Free Ship</span>
                                        </strong>
                                    </td>
                                </tr>
                                <tr class="order-total">
                                    <th>Thành tiền</th>
                                    <td>
                                        <strong>
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol"></span><?php echo number_format($_SESSION['thanh_tien']); ?> VNĐ</span>
                                        </strong>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="woocommerce-checkout-payment" style="margin-top: 2em; margin-bottom: 2em">
                        <div class="form-place-order">
                            <button class="place_order btn btn-brand pill" name="order" data-value="Place order"
                                type="submit">THANH TOÁN</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>