<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Main Container  -->
<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <?php if (!empty($parentCategory)) { ?>
            <li><a href="/xe/<?= $parentCategory['name'] ?>"><?= $parentCategory['name'] ?></i></a></li>
        <?php } ?>
        <?php if (!empty($category)) { ?>
            <li><a href="/xe/<?= $category['name'] ?>"><?= $category['name'] ?></a></li>
        <?php } ?>
    </ul>

    <div class="row">
        <!--Filter -->
        <aside class="col-sm-4 col-md-3 content-aside" id="column-left">

            <div class="module">
                <h3 class="modtitle">Bộ Lọc </h3>
                <div class="modcontent ">
                    <form class="type_2">

                        <div class="table_layout filter-shopby">
                            <div class="table_row">
                                <!-- - - - - - - - - - - - - - Category filter - - - - - - - - - - - - - - - - -->
                                <div class="table_cell" style="z-index: 103;">
                                    <legend>Search</legend>
                                    <input class="form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search" name="search">
                                </div>
                            </div>
                            <footer class="bottom_box">
                                <div class="buttons_row">
                                    <button type="submit" class="button_grey button_submit">Search</button>
                                    <button type="reset" class="button_grey filter_reset">Reset</button>
                                </div>
                                <!--Back To Top-->
                                <div class="back-to-top"><i class="fa fa-angle-up"></i></div>
                            </footer>
                        </div>
                    </form>
                </div>
            </div>

            <div class="module product-simple">
                <h3 class="modtitle">
                    <span>Ắc quy mới</span>
                </h3>
                <div class="modcontent">
                    <div id="so_extra_slider_1" class="so-extraslider">
                        <!-- Begin extraslider-inner -->
                        <div class="extraslider-inner">
                            <?php
                            $i = 0;
                            foreach ($newProducts as $product) {
                                ?>
                                <div class="item <?= $i == 0 ? 'active' : '' ?>">
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                                <a href="<?= $product['url'] ?>">
                                                    <img src="<?= base_url('attachments/shop_images/' . $product['image']) ?>">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title" style="height: 30px;">
                                                <a href="<?= $product['url'] ?>"><?= $product['title'] ?></a>
                                            </div>
                                            <div class="content_price price" style="height: 20px;">
                                                <span class="price-new product-price" style="font-size: 13px;"><?= $product['price'] ?>.000 &#8363;</span>&nbsp;&nbsp;
                                                <?php if($product['old_price']===''){
                                                        ?>
                                                    <?php } else {?>
                                                        <span class="price-old" style="font-size: 13px;"><?= $product['old_price']?>.000 &#8363;</span>
                                                    <?php } ?>
                                            </div>
                                        </div>
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
        </aside>
        <!--//Filter -->

        <!--List product-->
        <div id="content" class="col-md-9 col-sm-8">
            <div class="products-category">
                <div class="category-desc">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="banners">
                                <div>
                                    <a href="#"><img src="<?= base_url()?>assets/image/catalog/demo/category/vaarta-banner-vietnam.jpg" alt="img cate"><br></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Filters -->
                <div class="product-filter product-filter-top filters-panel">
                    <div class="row">
                        <div class="col-md-5 col-sm-3 col-xs-12 view-mode">

                            <div class="list-view">
                                <button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip" data-original-title="Grid"><i class="fa fa-th"></i></button>
                                <button class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
                            </div>

                        </div>
                        <div class="short-by-show form-inline text-right col-md-7 col-sm-9 col-xs-12">
                            <div class="form-group short-by">
                                <label class="control-label" for="input-sort">Sort By:</label>
                                <select id="input-sort" class="form-control" onchange="location = this.value;">
                                <option value="" selected="selected">Default</option>
                                <option value="">Name (A - Z)</option>
                                <option value="">Name (Z - A)</option>
                                <option value="">Price (Low &gt; High)</option>
                                <option value="">Price (High &gt; Low)</option>
                                <option value="">Rating (Highest)</option>
                                <option value="">Rating (Lowest)</option>
                                <option value="">Model (A - Z)</option>
                                <option value="">Model (Z - A)</option>
                            </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="input-limit">Show:</label>
                                <select id="input-limit" class="form-control" onchange="location = this.value;">
                                <option value="" selected="selected">15</option>
                                <option value="">25</option>
                                <option value="">50</option>
                                <option value="">75</option>
                                <option value="">100</option>
                            </select>
                            </div>
                        </div>
                        <!-- <div class="box-pagination col-md-3 col-sm-4 col-xs-12 text-right">
                        <ul class="pagination">
                            <li class="active"><span>1</span></li>
                            <li><a href="">2</a></li><li><a href="">&gt;</a></li>
                            <li><a href="">&gt;|</a></li>
                        </ul>
                    </div> -->
                    </div>
                </div>
                <!-- //end Filters -->
                <!--changed listings-->
                <div class="products-list row nopadding-xs so-filter-gird">
                <?php
                        if (!empty($products)) {
                            foreach ($products as $product) {
                                ?>
                                <div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="product-item-container item--static">
                                        <div class="left-block">
                                            <div class="product-image-container second_img">
                                                <a href="<?= LANG_URL . '/' . $product['url'] ?>">
                                                <img src="<?= base_url('attachments/shop_images/' . $product['image']) ?>" class="img-1 img-responsive" >
                                                <img src="<?= base_url('attachments/shop_images/' . $product['image']) ?>" class="img-2 img-responsive" >
                                            </a>
                                            </div>
                                            <span class="label-product label-new">New</span>
                                        </div>
                                        <div class="right-block">
                                            <div class="button-group cartinfo--static">

                                                <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i></button>
                                                <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                <span>Add to cart </span>
                                            </button>
                                                <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i></button>
                                            </div>
                                            <h4><a href="<?= $product['url'] ?>" ><?= $product['title'] ?></a></h4>
                                            <div class="price" style="height: 50px;">
                                                    <span class="price-new"><?= $product['price']?>.000 &#8363;</span>
                                                    <?php if($product['old_price']===''){
                                                        ?>
                                                    <?php } else {?>
                                                        <span class="price-old"><?= $product['old_price']?>.000 &#8363;</span>
                                                    <?php } ?>
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
                <!--// End Changed listings-->

                <!-- Filters -->
                <div class="product-filter product-filter-bottom filters-panel">
                    <div class="row">
                        <div class="col-sm-6 text-left"></div>
                        <div class="col-sm-6 text-right">Showing 1 to 12 of 12 (1 Pages)</div>
                    </div>
                </div>
                <!-- //end Filters -->
            </div>
        </div>
        <!--//List product-->
    </div>
    <!--Middle Part End-->
</div>
<!-- //Main Container -->