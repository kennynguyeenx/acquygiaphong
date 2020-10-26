<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>       
    <script type="text/javascript">
                window.jssor_1_slider_init = function() {

                    var jssor_1_SlideoTransitions = [
                    [{b:500,d:1000,x:0,e:{x:6}}],
                    [{b:-1,d:1,x:100,p:{x:{d:1,dO:9}}},{b:0,d:2000,x:0,e:{x:6},p:{x:{dl:0.1}}}],
                    [{b:-1,d:1,x:200,p:{x:{d:1,dO:9}}},{b:0,d:2000,x:0,e:{x:6},p:{x:{dl:0.1}}}],
                    [{b:-1,d:1,rX:20,rY:90},{b:0,d:4000,rX:0,e:{rX:1}}],
                    [{b:-1,d:1,rY:-20},{b:0,d:4000,rY:-90,e:{rY:7}}],
                    [{b:-1,d:1,sX:2,sY:2},{b:1000,d:3000,sX:1,sY:1,e:{sX:1,sY:1}}],
                    [{b:-1,d:1,sX:2,sY:2},{b:1000,d:5000,sX:1,sY:1,e:{sX:3,sY:3}}],
                    [{b:-1,d:1,tZ:300},{b:0,d:2000,o:1},{b:3500,d:3500,tZ:0,e:{tZ:1}}],
                    [{b:-1,d:1,x:20,p:{x:{o:33,r:0.5}}},{b:0,d:1000,x:0,o:0.5,e:{x:3,o:1},p:{x:{dl:0.05,o:33},o:{dl:0.02,o:68,rd:2}}},{b:1000,d:1000,o:1,e:{o:1},p:{o:{dl:0.05,o:68,rd:2}}}],
                    [{b:-1,d:1,da:[0,700]},{b:0,d:600,da:[700,700],e:{da:1}}],
                    [{b:600,d:1000,o:0.4}],
                    [{b:-1,d:1,da:[0,400]},{b:200,d:600,da:[400,400],e:{da:1}}],
                    [{b:800,d:1000,o:0.4}],
                    [{b:-1,d:1,sX:1.1,sY:1.1},{b:0,d:1600,o:1},{b:1600,d:5000,sX:0.9,sY:0.9,e:{sX:1,sY:1}}],
                    [{b:0,d:1000,o:1,p:{o:{o:4}}}],
                    [{b:1000,d:1000,o:1,p:{o:{o:4}}}]
                    ];

                    var jssor_1_options = {
                    $AutoPlay: 1,
                    $CaptionSliderOptions: {
                        $Class: $JssorCaptionSlideo$,
                        $Transitions: jssor_1_SlideoTransitions
                    },
                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$
                    },
                    $BulletNavigatorOptions: {
                        $Class: $JssorBulletNavigator$,
                        $SpacingX: 16,
                        $SpacingY: 16
                    }
                    };

                    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                    /*#region responsive code begin*/

                    var MAX_WIDTH = 1170;

                    function ScaleSlider() {
                        var containerElement = jssor_1_slider.$Elmt.parentNode;
                        var containerWidth = containerElement.clientWidth;

                        if (containerWidth) {

                            var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                            jssor_1_slider.$ScaleWidth(expectedWidth);
                        }
                        else {
                            window.setTimeout(ScaleSlider, 30);
                        }
                    }

                    ScaleSlider();

                    $Jssor$.$AddEvent(window, "load", ScaleSlider);
                    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                    /*#endregion responsive code end*/
                };
            </script>
    <!-- Main Container  -->
    <div class="main-container">
        <div id="content">
            <!-- slider -->
            <div class="content-top-w container">
                <div class="box-content1">                    
                    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1170px;height:555px;overflow:hidden;visibility:hidden;">
                        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1170px;height:555px;overflow:hidden;">            
                            <div>
                                <img data-u="image" src="<?php echo base_url()?>assets/image/catalog/slideshow/slide1.jpg" />
                            </div>
                            <div>
                                <img data-u="image" src="<?php echo base_url()?>assets/image/catalog/slideshow/slide2.jpg" />
                            </div>            
                            <div>
                                <img data-u="image" src="<?php echo base_url()?>assets/image/catalog/slideshow/slide3.jpg" />
                            </div>
                        </div>
                    <!-- Bullet Navigator -->
                        <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:16px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                            <div data-u="prototype" class="i" style="width:13px;height:13px;">
                                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                                </svg>
                            </div>
                        </div>
                    <!-- Arrow Navigator -->
                        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                            </svg>
                        </div>
                        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                            </svg>
                        </div>
                    </div>
                    <script type="text/javascript">jssor_1_slider_init();
                    </script>
                </div>
            </div>
            
            <div class="content-main-w">
                <!-- Deals -->
                <div class="row-image deals-w">
                    <div class="container row-deals">
                        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                            <div class="module deals-layout1">
                                <h3 class="modtitle2"><span>Ắc quy giảm giá cực hot</span></h3>
                                <div class="modcontent">
                                    <div id="so_deal_11" class="so-deal">
                                        <div class="products-list yt-content-slider extraslider-inner" data-rtl="yes" data-pagination="no" data-arrows="no" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="1" data-items_column0="1" data-items_column1="1"
                                            data-items_column2="1" data-items_column3="1" data-items_column4="1" data-lazyload="yes" data-loop="yes" data-buttonpage="top">
                                            <?php foreach ($sliderProducts as $article) {?>
                                            <div class="item product-layout">
                                                <div class="product-thumb transition product-item-container">
                                                    <div class="col-lg-6 col-md-5 col-sm-6 col-xs-12 col-left">
                                                        <div class="left-block">
                                                            <div class="product-image-container second_img">
                                                                <a href="<?= $article['url'] ?>" target="_self">
                                                            <img src="<?= base_url('attachments/shop_images/' . $article['image']) ?>" class="img-1 img-responsive" alt="image1">
                                                            <img src="<?= base_url('attachments/shop_images/' . $article['image']) ?>" class="img-2 img-responsive" alt="image2">
                                                        </a>
                                                            </div>
                                                            <!-- <div class="so-quickview">
                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-search"></i><span>Quick view</span></a>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12 col-right">
                                                        <div class="right-block">
                                                            <h4><a href="<?= $article['url'] ?>" target="_self"><?= character_limiter($article['title'], 100) ?></a></h4>
                                                            <div class="rating"> 
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            </div>
                                                            <div class="price">
                                                                <span class="price-new"><?= $article['price']?>.000 &#8363;</span>
                                                                <span class="price-old"><?= $article['old_price']?>.000 &#8363;</span>
                                                            </div>
                                                            <p><?= character_limiter(strip_tags($article['basic_description']), 150) ?></p>
                                                            <div class="item-time">
                                                                <div class="item-timer">
                                                                    <div class="defaultCountdown-30"></div>
                                                                </div>
                                                            </div>
                                                            <div class="button-group">
                                                                <a href="tel:0947757583">
                                                                    <button type="button" class="addToCart" title="Add to cart" onclick="">
                                                                        <span>Liên hệ</span>   
                                                                    </button></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <?php                    
                                                }
                                                ?>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-style hidden-xs hidden-sm">
                            <div class="banners banners1">
                                <div>
                                    <a href="#"><img src="<?php echo base_url()?>assets/image/catalog/banners/bn2.jpg" alt="banner"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end Deals -->
                <!-- VARTA -->
                <div class="container" id="#VARTA">                    
                    <div class="module extra-layout1">
                        <div class="pre_text">
                            Ắc quy theo hãng
                        </div>
                        <h3 class="modtitle"><span>VARTA</span></h3>
                        <div class="modcontent">
                            <div id="so_extra_slider_11" class="so-extraslider button-type1">
                                <div class="products-list yt-content-slider extraslider-inner" data-rtl="yes" data-pagination="no" data-arrows="yes" data-autoplay="yes" data-delay="4" data-speed="0.8" data-margin="30" data-items_column00="4" data-items_column0="4" data-items_column1="3"
                                    data-items_column2="3" data-items_column3="2" data-items_column4="1" data-lazyload="yes" data-loop="yes" data-buttonpage="top">  
                                                                     
                                        <?php
                                            if (!empty($varta)) {
                                                foreach ($varta as $varta) {
                                        ?>
                                        <div class="item">
                                            <div class="product-layout product-grid">
                                                <div class="product-item-container item--static">
                                                    <div class="left-block">
                                                        <div class="product-image-container second_img">
                                                            <a href="<?= $varta['url'] ?>" target="_self">
                                                                <img src="<?= base_url('attachments/shop_images/' . $varta['image']) ?>" class="img-1 img-responsive" alt="image1">
                                                                <img src="<?= base_url('attachments/shop_images/' . $varta['image']) ?>" class="img-2 img-responsive" alt="image2">
                                                            </a>
                                                        </div>
                                                        <?php if($varta['old_price']===''){
                                                                ?>
                                                                <span class="label-product label-new">Mới </span>
                                                            <?php } else {?>
                                                                <span class="label-product label-sale"><?= round(($varta['price']-$varta['old_price'])/$varta['old_price']*100, 1)?>%</span>
                                                            <?php } ?>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="button-group cartinfo--static">

                                                            <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i></button>
                                                            <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                        <span>Add to cart </span>   
                                                    </button>
                                                            <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i></button>
                                                        </div>
                                                        <h4><a href="<?= $varta['url'] ?>" target="_self"><?= $varta['title'] ?></a></h4>
                                                        <div class="price">                                                            
                                                            <span class="price-new"><?= $varta['price']?>.000 &#8363;</span>
                                                            <?php if($varta['old_price']===''){
                                                                ?>
                                                            <?php } else {?>
                                                                <span class="price-old"><?= $varta['old_price']?>.000 &#8363;</span>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            }
                                        } else {
                                            ?>
                                            <script>
                                                $(document).ready(function () {
                                                    ShowNotificator('alert-info', '<?= lang('no_results') ?>');
                                                });
                                            </script>
                                            <?php
                                        }
                                        ?>

                                </div>
                            </div>
                        </div>
                    </div>                    
                </div><!-- VARTA -->

                <!-- GS -->
                <div class="container">
                    <div class="module extra-layout1">
                        <div class="pre_text">
                            Ắc quy theo hãng
                        </div>
                        <h3 class="modtitle"><span>GS </span></h3>
                        <div class="modcontent">
                            <div id="so_extra_slider_11" class="so-extraslider button-type1">
                                <div class="products-list yt-content-slider extraslider-inner" data-rtl="yes" data-pagination="no" data-arrows="yes" data-autoplay="yes" data-delay="4" data-speed="0.8" data-margin="30" data-items_column00="4" data-items_column0="4" data-items_column1="3"
                                    data-items_column2="3" data-items_column3="2" data-items_column4="1" data-lazyload="yes" data-loop="no" data-buttonpage="top">  
                                                                     
                                        <?php
                                            if (!empty($gs)) {
                                                foreach ($gs as $gs) {
                                        ?>
                                        <div class="item">
                                            <div class="product-layout product-grid">
                                                <div class="product-item-container item--static">
                                                    <div class="left-block">
                                                        <div class="product-image-container second_img">
                                                            <a href="<?= $gs['url'] ?>" target="_self">
                                                        <img src="<?= base_url('attachments/shop_images/' . $gs['image']) ?>" class="img-1 img-responsive" alt="image1">
                                                        <img src="<?= base_url('attachments/shop_images/' . $gs['image']) ?>" class="img-2 img-responsive" alt="image2">
                                                    </a>
                                                        </div>
                                                        <span class="label-product label-new">New </span>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="button-group cartinfo--static">

                                                            <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i></button>
                                                            <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                        <span>Add to cart </span>   
                                                    </button>
                                                            <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i></button>
                                                        </div>
                                                        <h4><a href="<?= $gs['url'] ?>" target="_self"><?= $gs['title'] ?></a></h4>
                                                        <div class="price">                                                            
                                                            <span class="price-new"><?= $gs['price']?>.000 &#8363;</span>
                                                            <?php if($gs['old_price']===''){
                                                                ?>
                                                            <?php } else {?>
                                                                <span class="price-old"><?= $gs['old_price']?>.000 &#8363;</span>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            }
                                        } else {
                                            ?>
                                            <script>
                                                $(document).ready(function () {
                                                    ShowNotificator('alert-info', '<?= lang('no_results') ?>');
                                                });
                                            </script>
                                            <?php
                                        }
                                        ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// GS -->   

            <!-- ATLAS -->
                <div class="container">
                    <div class="module extra-layout1">
                        <div class="pre_text">
                            Ắc quy theo hãng
                        </div>
                        <h3 class="modtitle"><span>ATLAS</span></h3>
                        <div class="modcontent">
                            <div id="so_extra_slider_11" class="so-extraslider button-type1">
                                <div class="products-list yt-content-slider extraslider-inner" data-rtl="yes" data-pagination="no" data-arrows="no" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="4" data-items_column0="4" data-items_column1="3"
                                    data-items_column2="3" data-items_column3="2" data-items_column4="1" data-lazyload="yes" data-loop="yes" data-buttonpage="top">
                                    <?php
                                            if (!empty($atlas)) {
                                                foreach ($atlas as $atlas) {
                                        ?>
                                        <div class="item">
                                            <div class="product-layout product-grid">
                                                <div class="product-item-container item--static">
                                                    <div class="left-block">
                                                        <div class="product-image-container second_img">
                                                            <a href="<?= $atlas['url'] ?>" target="_self">
                                                        <img src="<?= base_url('attachments/shop_images/' . $atlas['image']) ?>" class="img-1 img-responsive" alt="image1">
                                                        <img src="<?= base_url('attachments/shop_images/' . $atlas['image']) ?>" class="img-2 img-responsive" alt="image2">
                                                    </a>
                                                        </div>
                                                        <!--quickview-->
                                                        <!-- <div class="so-quickview">
                                                            <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-search"></i><span>Quick view</span></a>
                                                        </div> -->
                                                        <!--end quickview-->
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="button-group cartinfo--static">

                                                            <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i></button>
                                                            <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                        <span>Add to cart </span>   
                                                    </button>
                                                            <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i></button>
                                                        </div>
                                                        <h4><a href="<?= $atlas['url'] ?>" target="_self"><?= $atlas['title'] ?></a></h4>
                                                        <div class="price">
                                                        <span class="price-new"><?= $atlas['price']?>.000 &#8363;</span>
                                                            <?php if($atlas['old_price']===''){
                                                                ?>
                                                            <?php } else {?>
                                                                <span class="price-old"><?= $atlas['old_price']?>.000 &#8363;</span>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    <?php
                                            }
                                        } else {
                                            ?>
                                            <script>
                                                $(document).ready(function () {
                                                    ShowNotificator('alert-info', '<?= lang('no_results') ?>');
                                                });
                                            </script>
                                            <?php
                                        }
                                        ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bosch -->
                <div class="container">
                    <div class="module extra-layout1">
                        <div class="pre_text">
                            Ắc quy theo hãng
                        </div>
                        <h3 class="modtitle"><span>Bosch </span></h3>
                        <div class="modcontent">
                            <div id="so_extra_slider_11" class="so-extraslider button-type1">
                                <div class="products-list yt-content-slider extraslider-inner" data-rtl="yes" data-pagination="no" data-arrows="yes" data-autoplay="yes" data-delay="4" data-speed="0.8" data-margin="30" data-items_column00="4" data-items_column0="4" data-items_column1="3"
                                    data-items_column2="3" data-items_column3="2" data-items_column4="1" data-lazyload="yes" data-loop="no" data-buttonpage="top">  
                                                                     
                                        <?php
                                            if (!empty($bosch)) {
                                                foreach ($bosch as $bosch) {
                                        ?>
                                        <div class="item">
                                            <div class="product-layout product-grid">
                                                <div class="product-item-container item--static">
                                                    <div class="left-block">
                                                        <div class="product-image-container second_img">
                                                            <a href="<?= $bosch['url'] ?>" target="_self">
                                                        <img src="<?= base_url('attachments/shop_images/' . $bosch['image']) ?>" class="img-1 img-responsive" alt="image1">
                                                        <img src="<?= base_url('attachments/shop_images/' . $bosch['image']) ?>" class="img-2 img-responsive" alt="image2">
                                                    </a>
                                                        </div>
                                                        <span class="label-product label-new">New </span>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="button-group cartinfo--static">

                                                            <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i></button>
                                                            <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                        <span>Add to cart </span>   
                                                    </button>
                                                            <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i></button>
                                                        </div>
                                                        <h4><a href="<?= $bosch['url'] ?>" target="_self"><?= $bosch['title'] ?></a></h4>
                                                        <div class="price">                                                            
                                                            <span class="price-new"><?= $bosch['price']?>.000 &#8363;</span>
                                                            <?php if($bosch['old_price']===''){
                                                                ?>
                                                            <?php } else {?>
                                                                <span class="price-old"><?= $bosch['old_price']?>.000 &#8363;</span>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            }
                                        } else {
                                            ?>
                                            <script>
                                                $(document).ready(function () {
                                                    ShowNotificator('alert-info', '<?= lang('no_results') ?>');
                                                });
                                            </script>
                                            <?php
                                        }
                                        ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// Bosch -->

                <div class="container">
                    <div class="slider-brands module">
                        <div class="pre_text">Ắc quy gia phong</div>
                        <h3 class="modtitle"><span>Các hãng xe</span></h3>

                        <div class="yt-content-slider contentslider" data-rtl="no" data-loop="yes" data-autoplay="no" data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="6" data-items_column0="6" data-items_column1="5"
                            data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-hoverpause="yes">
                            <div class="item"><a href="#"><img src="<?php echo base_url()?>assets/image/catalog/brands/acura.png" alt="brand"></a></div>
                            <div class="item"><a href="#"><img src="<?php echo base_url()?>assets/image/catalog/brands/audi.png" alt="brand"></a></div>
                            <div class="item"><a href="#"><img src="<?php echo base_url()?>assets/image/catalog/brands/toyota.png" alt="brand"></a></div>
                            <div class="item"><a href="#"><img src="<?php echo base_url()?>assets/image/catalog/brands/bentley.jpg" alt="brand"></a></div>
                            <div class="item"><a href="#"><img src="<?php echo base_url()?>assets/image/catalog/brands/chevrolet.jpg" alt="brand"></a></div>
                            <div class="item"><a href="#"><img src="<?php echo base_url()?>assets/image/catalog/brands/bmw.png" alt="brand"></a></div>
                            <div class="item"><a href="#"><img src="<?php echo base_url()?>assets/image/catalog/brands/b3.jpg" alt="brand"></a></div>
                        </div>

                    </div>

                    <div class="module so-latest-blog blog-home">
                        <div class="pre_text">Ắc quy gia phong</div>
                        <h3 class="modtitle"><span>Tin tức</span></h3>
                        <div class="modcontent clearfix">
                            <div class="so-blog-external buttom-type1 button-type1">
                                <div class="blog-external yt-content-slider contentslider" data-rtl="no" data-loop="no" data-autoplay="no" data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="3" data-items_column0="3" data-items_column1="2"
                                    data-items_column2="2" data-items_column3="1" data-items_column4="1" data-arrows="no" data-pagination="no" data-lazyload="yes" data-hoverpause="yes">
                                    <?php
                                        if (!empty($lastBlogs)) {
                                            foreach ($lastBlogs as $post) {
                                                ?>
                                                <div class="media" >
                                                    <div class="item head-button">
                                                        <div class="media-left so-block">
                                                            <a class="imag" href="<?= base_url().'blog/' . $post['url'] ?>">
                                                                <img src="<?= base_url('attachments/blog_images/' . $post['image']) ?>" alt="<?= $post['title'] ?>" />
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="media-content so-block">
                                                                <div class="infos"><span class="media-date-added"> <?= date('d.m.Y', $post['time']) ?></span><i class="fas fa-user-edit"></i> <span class="media-author"> acquygiaphong</span></div>
                                                                <h4 class="media-heading font-title head-item" style="height: 30px;">
                                                                    <a href="<?= base_url().'blog/' . $post['url'] ?>"><?= character_limiter($post['title'], 85) ?></a>
                                                                </h4>
                                                                <div class="readmore font-title">
                                                                    <a href="<?= base_url().'blog/' . $post['url'] ?>"><span>Đọc thêm</span> </a>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                                
                                                <?php
                                            }
                                        } else {
                                            ?>
                                            <div class="alert alert-info"><?= lang('no_posts') ?></div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- //Main Container -->