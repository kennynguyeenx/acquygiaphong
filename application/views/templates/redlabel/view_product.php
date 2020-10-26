<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
        <!-- Main Container  -->
        <div class="main-container container">
            <ul class="breadcrumb">
                <li><a href="<?= base_url();?>"><i class="fa fa-home"></i></a></li>
                <!-- <li><a href="#"><?= $product['categorie_name'] ?></a></li> -->
                <li><a href="#"><?= $product['title'] ?></a></li>
            </ul>

            <div class="row">
                <!--Left Part Start -->
                <aside class="col-sm-4 col-md-3 content-aside" id="column-left">
                    <!-- <div class="module category-style">
                        <h3 class="modtitle">Danh mục</h3>
                        <div class="modcontent">
                            <div class="box-category">
                                <ul id="cat_accordion" class="list-group">
                                    <li class="hadchild"><a href="category.html" class="cutom-parent">Smartphone & Tablets</a> <span class="button-view  fas fa-angle-right"></span>
                                        <ul style="display: block;">
                                            <li><a href="category.html">Men's Watches</a></li>
                                            <li><a href="category.html">Women's Watches</a></li>
                                            <li><a href="category.html">Kids' Watches</a></li>
                                            <li><a href="category.html">Accessories</a></li>
                                        </ul>
                                    </li>
                                    <li class="hadchild"><a class="cutom-parent" href="category.html">Electronics</a> <span class="button-view  fas fa-angle-right"></span>
                                        <ul style="display: none;">
                                            <li><a href="category.html">Cycling</a></li>
                                            <li><a href="category.html">Running</a></li>
                                            <li><a href="category.html">Swimming</a></li>
                                            <li><a href="category.html">Football</a></li>
                                            <li><a href="category.html">Golf</a></li>
                                            <li><a href="category.html">Windsurfing</a></li>
                                        </ul>
                                    </li>
                                    <li class="hadchild"><a href="category.html" class="cutom-parent">Shoes</a> <span class="button-view  fas fa-angle-right"></span>
                                        <ul style="display: none;">
                                            <li><a href="category.html">Sub Categories</a></li>
                                            <li><a href="category.html">Sub Categories</a></li>
                                            <li><a href="category.html">Sub Categories</a></li>
                                            <li><a href="category.html">Sub Categories</a></li>
                                            <li><a href="category.html">Sub Categories</a></li>
                                        </ul>
                                    </li>
                                    <li class="hadchild"><a href="category.html" class="cutom-parent">Watches</a> <span class="button-view  fas fa-angle-right"></span>
                                        <ul style="display: none;">
                                            <li><a href="category.html">Men's Watches</a></li>
                                            <li><a href="category.html">Women's Watches</a></li>
                                            <li><a href="category.html">Kids' Watches</a></li>
                                            <li><a href="category.html">Accessories</a></li>
                                        </ul>
                                    </li>
                                    <li class="hadchild"><a href="category.html" class="cutom-parent">Jewellery</a> <span class="button-view  fas fa-angle-right"></span>
                                        <ul style="display: none;">
                                            <li><a href="category.html">Sub Categories</a></li>
                                            <li><a href="category.html">Sub Categories</a></li>
                                            <li><a href="category.html">Sub Categories</a></li>
                                            <li><a href="category.html">Sub Categories</a></li>
                                            <li><a href="category.html">Sub Categories</a></li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="category.html" class="cutom-parent">Health &amp; Beauty</a> <span class="dcjq-icon"></span></li>
                                    <li class=""><a href="category.html" class="cutom-parent">Kids &amp; Babies</a> <span class="dcjq-icon"></span></li>
                                    <li class=""><a href="category.html" class="cutom-parent">Sports</a> <span class="dcjq-icon"></span></li>
                                    <li class=""><a href="category.html" class="cutom-parent">Home &amp; Garden</a><span class="dcjq-icon"></span></li>
                                    <li class=""><a href="category.html" class="cutom-parent">Wines &amp; Spirits</a> <span class="dcjq-icon"></span></li>
                                </ul>
                            </div>


                        </div>
                    </div> -->
                    <div class="module product-simple">
                        <h3 class="modtitle">
                            <span>Sản phẩm tương tự</span>
                        </h3>
                        <div class="modcontent">
                            <div class="so-extraslider">
                                <!-- Begin extraslider-inner -->
                                <div class=" extraslider-inner">
                                <?php
                                    $i = 0;
                                    foreach ($sameCagegoryProducts as $same) {
                                        ?>
                                        <div class="item <?= $i == 0 ? 'active' : '' ?>">
                                            <div class="product-layout item-inner style1 ">
                                                <div class="item-image">
                                                    <div class="item-img-info">
                                                        <a href="<?= $same['url'] ?>" target="_self">
                                                        <img src="<?= base_url('attachments/shop_images/' . $same['image']) ?>" alt="<?= $same['title'] ?>">
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title" style="height: 30px;">
                                                        <a href="<?= $same['url'] ?>" target="_self"><?= $same['title'] ?></a>
                                                    </div>
                                                    <div class="content_price price" style="height: 20px;">
                                                        <span class="price-new product-price" style="font-size: 14px;"><?= $same['price'] ?>.000 &#8363;</span>&nbsp;&nbsp;
                                                        <?php if ($product['old_price'] != '') { ?>                                    
                                                            <span class="price-old" style="font-size: 14px;"><?= $same['old_price'] ?>.000 &#8363;</span>                                    
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <!-- End item-info -->
                                                <!-- End item-wrap-inner -->
                                            </div>
                                        </div>
                                        <?php
                                        $i++;
                                    }
                                    ?>                                    
                                </div>
                                <!--End extraslider-inner -->
                            </div>
                        </div>
                    </div>
                    <div class="module banner-left hidden-xs ">
                        <div class="banner-sidebar banners">
                            <div>
                                <a title="Banner Image" href="#"> 
                          <img src="<?php echo base_url()?>assets/image/catalog/banners/bn2.jpg" alt="Banner Image"> 
                        </a>
                            </div>
                        </div>
                    </div>
                </aside>
                <!--Left Part End -->

                <!--Middle Part Start-->
                <div id="content" class="col-md-9 col-sm-8">

                    <div class="product-view row">
                        <div class="left-content-product">
                            <div class="content-product-left class-honizol col-md-5 col-sm-12 col-xs-12">
                                <div class="large-image " <?= $product['folder'] != null ? 'style="margin-bottom:20px;"' : '' ?>>
                                    <img itemprop="image" class="product-image-zoom" src="<?= base_url('/attachments/shop_images/' . $product['image']) ?>" alt="<?= str_replace('"', "'", $product['title']) ?>">
                                </div>
                                <?php
                                if ($product['folder'] != null) {
                                    $dir = "attachments/shop_images/" . $product['folder'] . '/';
                                    ?>
                                    <div class="row">
                                        <?php
                                        if (is_dir($dir)) {
                                            if ($dh = opendir($dir)) {
                                                $i = 1;
                                                while (($file = readdir($dh)) !== false) {
                                                    if (is_file($dir . $file)) {
                                                        ?>
                                                        <div id="thumb-slider" class="yt-content-slider full_slider owl-drag" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column00="4" data-items_column0="4" data-items_column1="3" data-items_column2="4"
                                                            data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                                                            <img src="<?= base_url($dir . $file) ?>" data-num="<?= $i ?>" class="other-img-preview img-sl img-thumbnail the-image" alt="<?= str_replace('"', "'", $product['title']) ?>">
                                                        </div>
                                                        <div class="col-xs-4 col-sm-6 col-md-4 text-center">
                                                            <img src="<?= base_url($dir . $file) ?>" data-num="<?= $i ?>" class="other-img-preview img-sl img-thumbnail the-image" alt="<?= str_replace('"', "'", $product['title']) ?>">
                                                        </div>
                                                        <?php
                                                        $i++;
                                                    }
                                                }
                                                closedir($dh);
                                            }
                                        }
                                        ?>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>

                            <div class="content-product-right col-md-7 col-sm-12 col-xs-12">
                                <div class="title-product">
                                    <h1><?= $product['title'] ?></h1>
                                </div>
                                <div class="product-label form-group">
                                    <div class="product_page_price price">
                                        <span class="price-new" itemprop="price"><?= $product['price']?>.000 &#8363;</span>
                                        <?php if ($product['old_price'] != '') { ?>                                    
                                            <span class="price-old"><?= $product['old_price'] ?>.000 &#8363;</span>                                    
                                        <?php } ?>
                                    </div>                                    
                                    <div class="stock"><span>Tình trạng:</span> <span class="status-stock">Liên hệ</span></div>
                                </div>
                                <div class="product-box-desc">
                                    <div class="inner-box-desc">
                                        <div class="brand"><span>Danh mục: </span><a href="#"><?= $product['categorie_name'] ?></a> </div>
                                    </div>
                                </div>
                                
                                <div id="product">

                                    <div class="form-group box-info-product">
                                        <div class="option quantity">
                                            <div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
                                                <label>Số lượng</label>
                                                <input class="form-control" type="text" name="quantity" value="1">
                                                <input type="hidden" name="product_id" value="50">
                                                <span class="input-group-addon product_quantity_down">−</span>
                                                <span class="input-group-addon product_quantity_up">+</span>
                                            </div>
                                        </div>
                                        <div class="cart">
                                            <input type="button" data-toggle="tooltip" title="" value="Thêm vào giỏ" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" onclick="cart.add('42', '1');" data-original-title="Add to Cart">
                                        </div>
                                        <div class="add-to-links wish_comp">
                                            <ul class="blank list-inline">
                                                <li class="wishlist">
                                                    <a class="icon" data-toggle="tooltip" title="" onclick="wishlist.add('50');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i>
                                                </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>
                                <!-- end box info product -->

                            </div>

                        </div>
                    </div>
                    <!-- Product Tabs -->
                    <div class="producttab ">
                        <div class="tabsslider  vertical-tabs col-xs-12">
                            <ul class="nav nav-tabs col-lg-2 col-sm-3">
                                <li class="active"><a data-toggle="tab" href="#tab-1">Mô tả sản phẩm</a></li>
                                <li class="item_nonactive"><a data-toggle="tab" href="#tab-review">Đánh giá</a></li>
                            </ul>
                            <div class="tab-content col-lg-10 col-sm-9 col-xs-12">
                                <div id="tab-1" class="tab-pane fade active in">                                   
                                    <?= $product['description'] ?>
                                </div>
                                <div id="tab-review" class="tab-pane fade">
                                    <form>
                                        <div id="review">
                                            <table class="table table-striped table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 50%;"><strong>Administrator</strong></td>
                                                        <td class="text-right">10/10/2020</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <p>Sản phẩm tốt, giao hàng nhanh</p>
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="text-right"></div>
                                        </div>
                                        <h2 id="review-title">Write a review</h2>
                                        <div class="contacts-form">
                                            <div class="form-group"> <span class="icon icon-user"></span>
                                                <input type="text" name="name" class="form-control" value="Your Name" onblur="if (this.value == '') {this.value = 'Your Name';}" onfocus="if(this.value == 'Your Name') {this.value = '';}">
                                            </div>
                                            <div class="form-group"> <span class="icon icon-bubbles-2"></span>
                                                <textarea class="form-control" name="text" onblur="if (this.value == '') {this.value = 'Your Review';}" onfocus="if(this.value == 'Your Review') {this.value = '';}">Your Review</textarea>
                                            </div>

                                            <div class="form-group">
                                                <b>Rating</b> <span>Bad</span>&nbsp;
                                                <input type="radio" name="rating" value="1"> &nbsp;
                                                <input type="radio" name="rating" value="2"> &nbsp;
                                                <input type="radio" name="rating" value="3"> &nbsp;
                                                <input type="radio" name="rating" value="4"> &nbsp;
                                                <input type="radio" name="rating" value="5"> &nbsp;<span>Good</span>

                                            </div>
                                            <div class="buttons clearfix"><a id="button-review" class="btn buttonGray">Continue</a></div>
                                        </div>
                                    </form>
                                </div>                               
                            </div>
                        </div>
                    </div>
                    <!-- //Product Tabs -->

                    <!-- Comment -->
                    <div class="commenttab" style="padding-bottom: 10px;">                        
                        <div class="fb-comments" data-href="https://www.facebook.com/acquygiaphong/" data-numposts="5" data-width=""></div>                                           
                    </div>
                    <!-- //Comment -->
                    
                    <!-- Related Products -->
                    <div class="related titleLine products-list grid module ">
                        <h3 class="modtitle">Sản phẩm tương tự </h3>
                        <div class="releate-products yt-content-slider products-list" data-rtl="no" data-loop="yes" data-autoplay="no" data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="4" data-items_column0="4" data-items_column1="3"
                                        data-items_column2="2" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-hoverpause="yes">
                        <?php
                            if (!empty($sameCagegoryProducts)) {
                                foreach ($sameCagegoryProducts as $prod) {
                                    ?>                                    
                                        <div class="product-layout product-grid">
                                            <div class="product-item-container item--static">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img">
                                                        <a href="<?= $prod['url'] ?>" target="_self">
                                                            <img src="<?= base_url('attachments/shop_images/' . $prod['image']) ?>" class="img-1 img-responsive" alt="image1">
                                                            <img src="<?= base_url('attachments/shop_images/' . $prod['image']) ?>" class="img-2 img-responsive" alt="image2">
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
                                                    <h4><a href="<?= $prod['url'] ?>" target="_self"><?= $prod['title'];?></a></h4>
                                                    <div class="price">
                                                        <span class="price-new"><?= $prod['price']?>.000 &#8363;</span>
                                                        <?php if ($product['old_price'] != '') { ?>                                    
                                                            <span class="price-old"><?= $product['old_price'] ?>.000 &#8363;</span>                                    
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                }
                            } else {
                                ?>
                                <div class="alert alert-info"><?= lang('no_same_category_products') ?></div>
                                <?php
                            }
                            ?> 

                        </div>
                    </div>

                    <!-- end Related  Products-->
                </div>
            </div>
        </div>
        <!--Middle Part End-->
    </div>
    <!-- //Main Container -->

<div id="modalImagePreview" class="modal">
    <div class="image-preview-container">
        <div class="modal-content">
            <div class="inner-prev-container">
                <img id="img01" alt="">
                <span class="close">&times;</span>
                <span class="img-series"></span>
            </div>
        </div>
        <a href="javascript:void(0);" class="inner-next"></a>
        <a href="javascript:void(0);" class="inner-prev"></a>
    </div>
    <div id="caption"></div>
</div>
<script src="<?= base_url('assets/js/image-preveiw.js') ?>"></script>
