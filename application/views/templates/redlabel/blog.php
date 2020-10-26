<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
        <div class="main-container container">
            <ul class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i></a></li>
                <li><a href="#">Blog</a></li>

            </ul>

            <div class="row">
                <!--Left Part Start -->
                <aside class="col-md-3 col-sm-4 col-xs-12 content-aside left_column " id="column-left">
                    <div class="module blog-category titleLine">
                        <h3 class="modtitle">Lưu trữ</h3>
                        <div class="modcontent">
                            <ul class="list-group ">
                                <?= $archives ?>    
                            </ul>
                            <div id="search-input-blog">
                                <div class="input-group col-md-12">
                                    <form method="GET" action="">
                                        <input type="text" class="search-query form-control" value="<?= isset($_GET['find']) ? htmlspecialchars($_GET['find']) : '' ?>" name="find" placeholder="<?= lang('search') ?>" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-danger" type="submit">
                                                <span><i class="fas fa-search"></i></span>
                                            </button>
                                        </span>
                                    </form>
                                </div>
                            </div>                                                
                        </div>
                    </div>
                </aside>
                <!--Left Part End -->

                <!--Middle Part Start-->
                <div id="content" class="col-md-9 col-sm-8">
                    <div class="blog-header">
                        <h3>Bài viết</h3>

                    </div>
                    <div class="blog-category clearfix">
                        <div class="blog-listitem row">
                            <?php
                            if (!empty($posts)) {
                                foreach ($posts as $post) {
                                    ?>
                                    <div class="blog-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="blog-item-inner clearfix">
                                            <div class="itemBlogImg clearfix">
                                                <div class="article-image">
                                                    <div>
                                                        <a class="popup-gallery" href="<?= base_url('blog/'. $post['url']) ?>">
                                                            <img src="<?= base_url('attachments/blog_images/' . $post['image']) ?>" alt="<?= $post['title'] ?>" />
                                                        </a>
                                                    </div>
                                                    <div class="article-date">
                                                        <div class="date"> <span class="article-date">
                                                        <b><?= date('d', $post['time']) ?></b> <?= date('M', $post['time']) ?>
                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="itemBlogContent clearfix ">
                                                <div class="blog-content">
                                                    <div class="article-title font-title" style="height: 80px;">
                                                        <h4><a href="<?= base_url('blog/'. $post['url']) ?>"><?= character_limiter($post['title'], 85) ?></a></h4>
                                                    </div>
                                                    <div class="blog-meta"> <span class="author"><i class="fas fa-user-edit"></i> acquygiaphong</span>
                                                    </div>
                                                    <p class="article-description" style="height: 100px;"><?= character_limiter(strip_tags($post['description']), 100) ?></p>
                                                    <div class="readmore"> <a class="btn-readmore font-title" href="<?= base_url('blog/'. $post['url']) ?>"><i class="fa fa-caret-right"></i>Đọc thêm</a>
                                                    </div>
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
                        <?= $links_pagination ?>
                        <div class="product-filter product-filter-bottom filters-panel clearfix">
                            <div class="row">
                                <div class="col-md-12">
                                    <div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Middle Part End-->
        </div>
        <!-- //Main Container -->