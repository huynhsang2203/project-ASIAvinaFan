<?php
/*
Template Name: News
 */
?>
<?php
get_header();
?>

<main class="content-promotion">

    <h2 class="title-style-1  theme-normal">
        <span class="content">Thông Tin Khuyến Mại</span>
    </h2>


    <section class="promotion-season mb-100">
        <div class="container">

            <h2 class="title-style-3 ">
                <span class="content ">Mùa khuyến mãi của ASIAVina</span>
            </h2>
            <div class="row row-cols-1 row-cols-lg-3 mt-50">
                <div class="col col-lg-3 mb-30">
                    <div class="promote-banner promote-banner-1">
                        <a href="" class="p-relative d-contents h-full">
                            <img src="https://quatvietnam.com.vn/wp-content/uploads/2021/07/promotion-1.jpg">
                            <button class="btn btn-outline-theme promote-banner-seemore-1">Xem thêm <i
                                    class="fas fa-arrow-right"></i></button>
                        </a>
                    </div>
                </div>

                <div class="col col-lg-6 mb-30">
                    <div class="promote-banner promote-banner-2">
                        <a href="" class="p-relative d-contents h-full">
                            <img src="https://quatvietnam.com.vn/wp-content/uploads/2021/07/promotion-2.jpg">
                            <button class="btn btn-outline-light promote-banner-seemore-2">Xem thêm <i
                                    class="fas fa-arrow-right"></i></button>
                        </a>
                    </div>
                </div>

                <div class="col col-lg-3 mb-30">
                    <div class="promote-banner promote-banner-3">
                        <a href=""><img src="https://quatvietnam.com.vn/wp-content/uploads/2021/01/Frame-190.png"></a>
                    </div>

                    <div class="promote-banner promote-banner-4">
                        <a href=""><img src="https://quatvietnam.com.vn/wp-content/uploads/2021/01/Frame-203.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="promotion-related">
        <div class="container">
        </div>
    </section>
</main>


<div id="contact-modal">
    <div class="btn btn-theme">
        <i class="far fa-comment-alt"></i>
        <span>Need help?</span>
    </div>

    <div class="modal">
        <h4 class="title">
            Xin để lại ý kiến của bạn <div class="close"><i class="fas fa-times"></i></div>
        </h4>

        <form method="post" action="/?api=contact-form">

            <div class="col-auto">
                <label class="sr-only" for="input-name">Họ tên</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>

                    <input type="text" name="name" class="form-control" id="input-name" placeholder="Họ tên" required>
                </div>
            </div>


            <div class="col-auto">
                <label class="sr-only" for="input-email">Email</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-envelope"></i>
                        </div>
                    </div>

                    <input type="email" name="email" class="form-control" id="input-email" placeholder="Email" required>
                </div>
            </div>


            <div class="col-auto">
                <label class="sr-only" for="input-content">Nội dung</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="far fa-comment-alt"></i>
                        </div>
                    </div>

                    <textarea class="form-control" id="input-content" name="content" placeholder="Nội dung"
                        required></textarea>
                </div>
            </div>


            <p class="ta-c">
                <button type="submit" class="btn btn-theme">Gửi</button>
            </p>
        </form>
    </div>

    <script>
    jQuery('#contact-modal .btn').click(function() {
        jQuery('#contact-modal .modal').stop().fadeIn(300);
    });

    jQuery('#contact-modal .close').click(function() {
        jQuery('#contact-modal .modal').stop().fadeOut(300);
    });
    </script>
</div>

<?php get_footer();?>

<div id="search-form">
    <div class="container">
        <div class="close-button fs-25 ta-r c-white mt-50 cs-pointer">
            <i class="fas fa-times"></i>
        </div>

        <h2 class="ta-c fs-35 mt-50 mb-50">Bạn đang tìm kiếm gì?</h2>

        <div class="row">
            <div class="col col-lg-8 offset-lg-2 va-m">
                <form action="https://quatvietnam.com.vn/vi/search/" method="get">
                    <div class="col-auto mb-20">
                        <label class="sr-only" for="input-search">Tìm kiếm trong Asiavina</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-search"></i>
                                </div>
                            </div>

                            <input type="text" name="s" class="form-control" id="input-search"
                                placeholder="Tìm kiếm trong Asiavina">
                        </div>
                    </div>

                    <div class="mt-10">

                        <a href="https://quatvietnam.com.vn/vi/product-category/quat-ban/"
                            class="btn btn-sm btn-outline-light ml-10 mb-10">Quạt bàn</a>


                        <a href="https://quatvietnam.com.vn/vi/product-category/quat-dung/"
                            class="btn btn-sm btn-outline-light ml-10 mb-10">Quạt đứng</a>


                        <a href="https://quatvietnam.com.vn/vi/product-category/quat-hop/"
                            class="btn btn-sm btn-outline-light ml-10 mb-10">Quạt hộp</a>


                        <a href="https://quatvietnam.com.vn/vi/product-category/quat-lung/"
                            class="btn btn-sm btn-outline-light ml-10 mb-10">Quạt lửng</a>


                        <a href="https://quatvietnam.com.vn/vi/product-category/quat-sac/"
                            class="btn btn-sm btn-outline-light ml-10 mb-10">Quạt sạc</a>


                        <a href="https://quatvietnam.com.vn/vi/product-category/quat-san/"
                            class="btn btn-sm btn-outline-light ml-10 mb-10">Quạt sàn</a>


                        <a href="https://quatvietnam.com.vn/vi/product-category/quat-thong-gio/"
                            class="btn btn-sm btn-outline-light ml-10 mb-10">Quạt thông gió</a>


                        <a href="https://quatvietnam.com.vn/vi/product-category/quat-tran/"
                            class="btn btn-sm btn-outline-light ml-10 mb-10">Quạt trần</a>


                        <a href="https://quatvietnam.com.vn/vi/product-category/quat-treo-tuong/"
                            class="btn btn-sm btn-outline-light ml-10 mb-10">Quạt treo tường</a>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
jQuery('#search-form .close-button').click(function() {
    jQuery('#search-form').fadeOut(300);
});
</script>

<script type="text/javascript">
(function() {
    var c = document.body.className;
    c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
    document.body.className = c;
})()
</script>
<script type='text/javascript'
    src='https://quatvietnam.com.vn/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'
    id='jquery-blockui-js'></script>
<script type='text/javascript' id='wc-add-to-cart-js-extra'>
/* <![CDATA[ */
var wc_add_to_cart_params = {
    "ajax_url": "\/wp-admin\/admin-ajax.php",
    "wc_ajax_url": "\/vi\/?wc-ajax=%%endpoint%%",
    "i18n_view_cart": "Xem gi\u1ecf h\u00e0ng",
    "cart_url": "https:\/\/quatvietnam.com.vn",
    "is_cart": "",
    "cart_redirect_after_add": "no"
};
/* ]]> */
</script>
<script type='text/javascript'
    src='https://quatvietnam.com.vn/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=4.8.0'
    id='wc-add-to-cart-js'></script>
<script type='text/javascript'
    src='https://quatvietnam.com.vn/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'
    id='js-cookie-js'></script>
<script type='text/javascript' id='woocommerce-js-extra'>
/* <![CDATA[ */
var woocommerce_params = {
    "ajax_url": "\/wp-admin\/admin-ajax.php",
    "wc_ajax_url": "\/vi\/?wc-ajax=%%endpoint%%"
};
/* ]]> */
</script>
<script type='text/javascript'
    src='https://quatvietnam.com.vn/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=4.8.0'
    id='woocommerce-js'></script>
<script type='text/javascript' id='wc-cart-fragments-js-extra'>
/* <![CDATA[ */
var wc_cart_fragments_params = {
    "ajax_url": "\/wp-admin\/admin-ajax.php",
    "wc_ajax_url": "\/vi\/?wc-ajax=%%endpoint%%",
    "cart_hash_key": "wc_cart_hash_ae6c55961a072dde02057ccee1b545c7",
    "fragment_name": "wc_fragments_ae6c55961a072dde02057ccee1b545c7",
    "request_timeout": "5000"
};
/* ]]> */
</script>
<script type='text/javascript'
    src='https://quatvietnam.com.vn/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=4.8.0'
    id='wc-cart-fragments-js'></script>
<script type='text/javascript'
    src='https://quatvietnam.com.vn/wp-content/themes/asiavina/assets/bootstrap/js/bootstrap.bundle.min.js?ver=1.0'
    id='asiavina-bootstrap-js'></script>
<script type='text/javascript'
    src='https://quatvietnam.com.vn/wp-content/themes/asiavina/assets/fontawesome/js/all.min.js?ver=1.0'
    id='asiavina-fa-js'></script>
<script type='text/javascript' src='https://quatvietnam.com.vn/wp-content/themes/asiavina/assets/js/theme.js?ver=1.0'
    id='asiavina-theme-js'></script>
<script type='text/javascript' src='https://quatvietnam.com.vn/wp-includes/js/underscore.min.js?ver=1.8.3'
    id='underscore-js'></script>
<script type='text/javascript' id='wp-util-js-extra'>
/* <![CDATA[ */
var _wpUtilSettings = {
    "ajax": {
        "url": "\/wp-admin\/admin-ajax.php"
    }
};
/* ]]> */
</script>
<script type='text/javascript' src='https://quatvietnam.com.vn/wp-includes/js/wp-util.min.js?ver=5.5.9' id='wp-util-js'>
</script>
<script type='text/javascript' id='woo-variation-swatches-js-extra'>
/* <![CDATA[ */
var woo_variation_swatches_options = {
    "is_product_page": "",
    "show_variation_label": "1"
};
/* ]]> */
</script>
<script type='text/javascript'
    src='https://quatvietnam.com.vn/wp-content/plugins/woo-variation-swatches/assets/js/frontend.min.js?ver=1.1.2'
    id='woo-variation-swatches-js'></script>
<script type='text/javascript' src='https://quatvietnam.com.vn/wp-includes/js/wp-embed.min.js?ver=5.5.9'
    id='wp-embed-js'></script>
<script type="text/javascript">
(function() {
    var expirationDate = new Date();
    expirationDate.setTime(expirationDate.getTime() + 31536000 * 1000);
    document.cookie = "pll_language=vi; expires=" + expirationDate.toUTCString() + "; path=/; secure; SameSite=Lax";
}());
</script>
</body>

</html>