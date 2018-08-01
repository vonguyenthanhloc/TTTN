<?php 	@session_start();  ?>
<header class="header-style-4">
  <a class="brand-logo animsition-link" href="index.html">
    <img class="img-responsive" src="public/layout/images/logo.png" alt="logo" />
  </a>
  <div class="container">
    <div class="row">
      <div class="header-4-inner">
        <div class="widget widget-control-header widget-search-header">
          <a class="btn-open-search-form js-open-search-form-header" href="#">
            <span class="lnr lnr-magnifier"></span>
          </a>
          <div class="form-outer">
            <button class="btn-close-form-search-header js-close-search-form-header">
              <span class="lnr lnr-cross"></span>
            </button>
            <form>
              <input placeholder="Search" />
              <button class="search">
                <span class="lnr lnr-magnifier"></span>
              </button>
            </form>
          </div>
        </div>
        <nav>
          <ul class="menu hidden-xs">
            <li>
              <a href="index.php">TRANG CHỦ</a>

            </li>
            <li>
              <a href="product.php">GIỐNG CAO SU</a>

            </li>

            <?php if(!isset($_SESSION['ten_dang_nhap'])) {?>
            <li>
              <a href="register.php">ĐĂNG KÝ</a>
            </li>
            <li>
              <a href="login.php">ĐĂNG NHẬP</a>
            </li>
            <?php }else{ ?>
            <li>
              <a href="update_account.php">CẬP NHẬT TÀI KHOẢN</a>
            </li>
            <li>
              <a href="account.php?logout">LOGOUT</a>
            </li>
            <?php } ?>
          </ul>
        </nav>
        <aside class="right">
          <div class="widget widget-control-header widget-shop-cart js-widget-shop-cart">
            <a class="control" href="cart.php">
              <p class="counter">
                <?php if(isset($_SESSION['so_luong'])) echo $_SESSION['so_luong']; else echo 0;?>
              </p>
              <span class="lnr lnr-bag"></span>
            </a>
          </div>
          <div class="widget widget-control-header hidden-lg hidden-md hidden-sm">
            <a class="navbar-toggle js-offcanvas-has-events" type="button" href="#menu">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
          </div>
        </aside>
      </div>
    </div>
  </div>
</header>