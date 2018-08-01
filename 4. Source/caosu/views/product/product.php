<section class="sub-header shop-layout-1">
    <img class="rellax bg-overlay" src="public/layout/images/product/giong3.jpg" alt="">
    <div class="overlay-call-to-action"></div>
    <h3 class="heading-style-3">GIỐNG CAO SU</h3>
</section>
<div class="woocommerce-top-control">
    <section class="boxed-sm">
        <div class="container">
        </div>
    </section>
</div>
<section class="box-sm">
    <div class="container">
        <div class="row main">
            <div class="row product-grid-equal-height-wrapper product-equal-height-4-columns flex multi-row">
            <?php foreach($san_pham as $sp){ ?>
                <figure class="item">
                    <div class="product product-style-1">
                        <div class="img-wrapper">
                            <a href="product_detail.php?ma_san_pham=<?php echo $sp->ma_san_pham; ?>">
                                <img class="img-responsive" src="public/layout/images/product/<?php echo $sp->hinh ?>" alt="product thumbnail" />
                            </a>
                        </div>
                        <figcaption class="desc text-center">
                            <h3>
                                <a class="product-name" href="product-detail.html"><?php echo $sp->ten_san_pham ?></a>
                            </h3>
                            <span class="price"><?php echo number_format($sp->gia) ?> VNĐ</span>
                        </figcaption>
                    </div>
                </figure>
            <?php } ?>
            </div>
        </div>
    </div>
</section>