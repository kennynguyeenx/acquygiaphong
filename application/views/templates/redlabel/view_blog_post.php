<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
        <div class="main-container container">
            <ul class="breadcrumb">
                <li><a href="<?= base_url();?>"><i class="fa fa-home"></i></a></li>
                <li><a href="<?= base_url('blog/') ?>">Blog</a></li>
                <li><a href="#"><?= $article['title'] ?></a></li>
            </ul>

            <div class="row">
                <!--Left Part Start -->
                <aside class="col-md-3 col-sm-4 col-xs-12 content-aside left_column " id="column-left">
                    <div class="module blog-category titleLine">
                        <h3 class="modtitle">Lưu trữ</h3>
                        <div class="modcontent">
                            <ul class="list-group ">                                
                                <li class="list-group-item"> <?= $archives ?></li>
                            </ul>

                        </div>
                    </div>                    
                </aside>
                <!--Left Part End -->

                <!--Middle Part Start-->
                <div id="content" class="col-md-9 col-sm-8">
                    <div class="article-info">
                        <div class="blog-header">
                            <h3><?= $article['title'] ?></h3>
                        </div>
                        <div class="article-sub-title">
                            <span class="article-author">Post by: <a href="#"> Admin</a></span>
                            <span class="article-date"><?= date('d.m.Y', $article['time']) ?></span>
                        </div>
                        <div class="form-group">
                            <a href="<?= base_url('attachments/blog_images/' . $article['image']) ?>" class="image-popup"><img src="<?= base_url('attachments/blog_images/' . $article['image']) ?>" alt="<?= $article['title'] ?>"></a>
                        </div>

                        <div class="article-description">
                            <p><?= $article['description'] ?></p>
                        </div>

                        <div class="panel panel-default related-comment">
                            <div class="panel-body">
                                <div class="form-group">
                                    <div id="comments" class="blog-comment-info">
                                        <!-- Comment -->
                                        <div class="commenttab" style="padding-bottom: 10px;">                        
                                            <div class="fb-comments" data-href="https://www.facebook.com/acquygiaphong/" data-numposts="5" data-width=""></div>                                           
                                        </div>
                                        <!-- //Comment -->                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
            <!--Middle Part End-->
        </div>
        <!-- //Main Container -->