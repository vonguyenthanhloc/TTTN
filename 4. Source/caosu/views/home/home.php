<section class="boxed u-mb60">
    <div class="banner-slider-4 rev_slider" id="slider-4">
        <ul>
            <li data-transition="fade">
                <img src="public/layout/images/slide/2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                    data-bgparallax="10">
            </li>
        </ul>
    </div>
</section>
<section class="boxed" style="margin-bottom: 4em">
    <div class="heading-wrapper text-center">
        <div class="heading-style-4">
            <h3>CÁC LOẠI GIỐNG</h3>
            <img src="public/layout/images/icons/seperator.png" alt="seperator">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <?php for($i=0; $i<3; $i++){ ?>
                <div class="col-md-4">
                    <figure>
                        <div class="product product-style-5">
                            <div class="img-wrapper">
                                <a href="product_detail.php?ma_san_pham=<?php echo $san_pham[$i]->ma_san_pham; ?>">
                                    <img class="img-responsive" src="public/layout/images/product/<?php echo $san_pham[$i]->hinh; ?>" alt="product thumbnail">
                                </a>
                                <figcaption class="desc">
                                    <h3>
                                        <a class="product-name" href="product_detail.php?ma_san_pham=<?php echo $san_pham[$i]->ma_san_pham; ?>">
                                            <?php echo $san_pham[$i]->ten_san_pham; ?>
                                        </a>
                                    </h3>
                                    <span class="price">
                                        <?php echo number_format($san_pham[$i]->gia)." VNĐ"; ?>
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
<section class="boxed" style="margin-bottom: 5em;">
    <div class="row">
        <div class="col-md-12 promotion-video-1">
            <div class="call-to-action-style-1">
                <img class="rellax bg-overlay" src="public/layout/images/product/giong4.jpg" alt="">
                <div class="overlay-call-to-action"></div>
                <div class="container">
                    <div class="row">
                        <div class="video-wrapper js-set-bg-blog-thumb">
                            <img class="video-banner" src="public/layout/images/product/giong4.jpg" alt="Image">
                                <iframe width="860" height="415" src="https://www.youtube.com/embed/s4NMKQ-5YFM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                        <p class="sapo-video">Kinh nghiệm, kỹ thuật trồng và chăm sóc cây cao su theo công nghệ mới</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>