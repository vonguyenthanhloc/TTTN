<section class="sub-header shop-layout-1">
    <img class="rellax bg-overlay" src="public/layout/images/product/giong3.jpg" alt="">
    <div class="overlay-call-to-action"></div>
    <h3 class="heading-style-3">CẬP NHẬT THÔNG TIN TÀI KHOẢN</h3>
</section>
<section class="boxed-sm">
    <div class="container">
        <div class="login-wrapper" style="margin-top: 2em">
            <div class="row">
                <form action="account.php" method="post">
                    <div class="form-group organic-form-2">
                        <label>Tên đăng nhập: </label>
                        <input class="form-control" name="username" type="text" value="<?php echo $tai_khoan->ten_dang_nhap; ?>" readonly required>
                    </div>
                    <div class="form-group organic-form-2">
                        <label>Mật khẩu: </label>
                        <input class="form-control" name="password" value="<?php echo $tai_khoan->mat_khau; ?>" type="Password" required>
                    </div>
                    <div class="form-group organic-form-2">
                        <label>Tên</label>
                        <input class="form-control" name="name" type="text" value="<?php echo $tai_khoan->ten; ?>" type="Password" required>
                    </div>
                    <div class="form-group organic-form-2">
                        <label>Địa chỉ</label>
                        <input class="form-control" name="address" type="text" value="<?php echo $tai_khoan->dia_chi; ?>" type="Password" required>
                    </div>
                    <div class="form-group organic-form-2">
                        <label>Email: </label>
                        <input class="form-control" name="email" type="Email" value="<?php echo $tai_khoan->email; ?>" type="Password" required>
                    </div>
                    <div class="form-group organic-form-2">
                        <label>Số điện thoại: </label>
                        <input class="form-control" name="phone" type="phone" value="<?php echo $tai_khoan->so_dien_thoai; ?>" type="Password" required>
                    </div>
                    <div class="form-group organic-form-2">
                        <label>Ngày sinh: </label>
                        <input class="form-control" name="date" type="date" value="<?php echo $tai_khoan->date; ?>" required>
                    </div>
                    <div class="form-group organic-form-2">
                        <label>Nam: </label>
                        <input type="radio" name="gender" value="0" <?php if($tai_khoan->gioi_tinh == 0) echo "checked";?> required>
                        <label for="">Nữ</label>
                        <input type="radio" name="gender" value="1" <?php if($tai_khoan->gioi_tinh == 1) echo "checked";?> required>
                    </div>
                    <div class="form-group footer-form">
                        <button class="btn btn-brand pill" value="CẬP NHẬT THÔNG TIN TÀI KHOẢN" name="update_account" type="submit">CẬP NHẬT THÔNG TIN TÀI KHOẢN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>