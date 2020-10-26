<!DOCTYPE html>
<html lang="<?= MY_LANGUAGE_ABBR ?>">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 
        <meta name="description" content="<?= $description ?>" />
        <meta name="keywords" content="<?= $keywords ?>" />
        <meta property="og:title" content="<?= $title ?>" />
        <meta property="og:description" content="<?= $description ?>" />
        <meta property="og:url" content="<?= LANG_URL ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="" />
        <title><?= $title ?></title>
        <link rel="stylesheet" href="<?= base_url('assets/bootstrap-select-1.12.1/bootstrap-select.min.css') ?>" />
        <link href="<?= base_url('assets/css/bootstrap-datepicker.min.css') ?>" rel="stylesheet" />
        <link href="<?= base_url('templatecss/custom.css') ?>" rel="stylesheet" />
        <link href="<?= base_url('cssloader/theme.css') ?>" rel="stylesheet" />
        <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
        <script src="<?= base_url('loadlanguage/all.js') ?>"></script>
        <script src="<?= base_url('assets/js/jssor.slider-28.0.0.min.js') ?>" type="text/javascript"></script>

        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap/css/bootstrap.min.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome/css/font-awesome.min.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('assets/js/datetimepicker/bootstrap-datetimepicker.min.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('assets/js/owl-carousel/owl.carousel.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('assets/css/themecss/lib.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('assets/js/jquery-ui/jquery-ui.min.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('assets/js/minicolors/miniColors.css') ?>" />
        <!-- <link rel="stylesheet" href="<?= base_url('assets/js/pe-icon-7-stroke/css/pe-icon-7-stroke.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('assets/pe-icon-7-stroke/css/helper.css') ?>" /> -->
         
        <link rel="stylesheet" href="<?= base_url('assets/css/footer/footer1.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('assets/css/header/header1.css') ?>" />
        <link id="color_scheme" rel="stylesheet" href="<?= base_url('assets/css/theme.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css') ?>" />

        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <style type="text/css">
            body{font-family: 'Open Sans', sans-serif;}
        </style>

        <?php if ($cookieLaw != false) { ?>
            <script type="text/javascript">
                window.cookieconsent_options = {"message": "<?= $cookieLaw['message'] ?>", "dismiss": "<?= $cookieLaw['button_text'] ?>", "learnMore": "<?= $cookieLaw['learn_more'] ?>", "link": "<?= $cookieLaw['link'] ?>", "theme": "<?= $cookieLaw['theme'] ?>"};
            </script>
            <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
        <?php } ?>
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
    <body class="common-home res layout-1">
    <!-- fb sdk -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3"></script>
    <!--// fb sdk -->

<div id="wrapper" class="wrapper-fluid banners-effect-5">
    <!-- Header Container  -->
    <header id="header" class=" typeheader-1">
        
        <!-- Header Top -->        
        <div class="header-middle hidden-compact">
            <div class="container">
                <div class="row">           
                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <div class="logo">
                            <a href="<?= base_url()?>"><img src="<?= base_url('attachments/site_logo/' . $sitelogo) ?>" class="site-logo" alt="<?= $_SERVER['HTTP_HOST'] ?>"></a>
                        </div>
                        
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 middle-right">
                        <div class="search-header-w">
                            <div class="icon-search hidden-lg hidden-md"><i class="fa fa-search"></i></div>                                
                              
                            <div id="sosearchpro" class="sosearchpro-wrapper so-search ">
                                <form method="GET" action="#">
                                    <div id="search0" class="search input-group form-group">
                                        <input class="autosearch-input form-control" type="text" value="<?= isset($_GET['search_in_title']) ? $_GET['search_in_title'] : '' ?>" id="search_in_title" class="form-control" placeholder="<?= lang('search_by_keyword_title') ?>" size="50" autocomplete="off" placeholder="Nhập từ khóa tìm kiếm..." name="search">
                                
                                        <button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search" onclick="submitForm()"></i></button>
                                    
                                    </div>
                                    <input type="hidden" name="route" value="product/search" />
                                </form>
                            </div>
                        </div>

                        <div class="shopping_cart">
                            <div id="cart" class="btn-shopping-cart">

                                <a href="tel:<?= $footerContactPhone ?>" class="btn-group top_cart dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <div class="shopcart">
                                        <span class="icon-c">
                                            <i class="fas fa-phone"></i>
                                        </span>
                                        <div class="shopcart-inner">
                                            <span class="total-shopping-cart cart-total-full">
                                                <span class="items_carts"><?= $footerContactPhone ?></span>
                                            </span>
                                        </div>
                                    </div>
                                </a>                                
                            </div>
                        </div>
                        <div class="shopping_cart" style="padding-right: 10px;">
                            <div id="cart" class="btn-shopping-cart">

                                <a href="tel:<?= $footerContactPhone ?>" class="btn-group top_cart dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <div class="shopcart">
                                        <span class="icon-c">
                                            <i class="fas fa-mobile-alt"></i>
                                        </span>
                                        <div class="shopcart-inner">
                                            <span class="total-shopping-cart cart-total-full">
                                                <span class="items_carts"><?= $footerContactPhone ?></span>
                                            </span>
                                        </div>
                                    </div>
                                </a>                                
                            </div>
                        </div>
                        <!-- <div class="wishlist hidden-md hidden-sm hidden-xs"><a href="tel:0977079969" id="wishlist-total" class="top-link-wishlist" title="0977 079 969"><i class="fas fa-mobile-alt"></i></a></div>                                          -->
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom hidden-compact"> 
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="menu-vertical-w">   
                            <div class="responsive so-megamenu megamenu-style-dev ">
                                <div class="so-vertical-menu ">
                                    <nav class="navbar-default">    
                                        
                                        <div class="container-megamenu vertical">
                                            <div id="menuHeading">
                                                <div class="megamenuToogle-wrapper">
                                                    <div class="megamenuToogle-pattern">
                                                        <div class="container">
                                                            <div>
                                                                <span></span>
                                                                <span></span>
                                                                <span></span>
                                                            </div>
                                                            Tìm ắc quy cho xe                         
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                         
                                            <div class="navbar-header">
                                                <button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle">      
                                                    <i class="fa fa-bars"></i>
                                                    <span>  Tìm ắc quy cho xe     </span>
                                                </button>
                                            </div>
                                            <div class="vertical-wrapper" >
                                                <span id="remove-verticalmenu" class="fa fa-times"></span>
                                                <div class="megamenu-pattern">
                                                    <div class="container-mega">                                                        
                                                        <?php if (!empty($footerCategories)) { ?>
                                                            <ul class="megamenu">
                                                                <?php foreach ($footerCategories as $key => $categorie) { ?>
                                                                    <li class="item-vertical  style1 with-sub-menu hover">                                                                
                                                                        <p class="close-menu"></p>
                                                                        <a href="javascript:void(0);" class="clearfix" data-categorie-id="<?= $key ?>">
                                                                            <span class="label"></span>                                                                    
                                                                            <span><?= $categorie ?></span>                                                                     
                                                                            <b class="fa-angle-right"></b>
                                                                        </a>
                                                                        <div class="sub-menu" data-subwidth="30">
                                                                            <div class="content">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 static-menu">
                                                                                                <div class="menu">
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <a href="javascript:void(0);" class="main-menu"><?= $categorie ?></a>
                                                                                                            <ul>
                                                                                                                <li>
                                                                                                                    <a href="#">Sub 1</a>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                <?php } ?>
                                                            </ul>
                                                        <?php } else { ?>
                                                            <p><?= lang('no_categories') ?></p>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-6 col-xs-6">
                        <div class="main-menu-w">
                            <div class="responsive so-megamenu megamenu-style-dev">
                                <nav class="navbar-default">
                                    <div class=" container-megamenu  horizontal open ">
                                        <div class="navbar-header">
                                            <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div>
                                        
                                        <div class="megamenu-wrapper">
                                            <span id="remove-megamenu" class="fa fa-times"></span>
                                            <div class="megamenu-pattern">
                                                <div class="container-mega">
                                                    <ul class="megamenu" data-transition="slide" data-animationtime="250">
                                                        <li class="home hover">
                                                            <a href="<?= base_url()?>">Trang chủ</a>                                                            
                                                        </li>
                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="<?= base_url()?>ac-quy" class="clearfix">
                                                                <strong>Ắc quy</strong>                                                             
                                                      
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 100%; display: none;">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="row">
                                                                                <div class="col-md-3 img img1">
                                                                                    <a href="<?= base_url()?>"><img src="<?php echo base_url()?>assets/image/catalog/menu/megabanner/atlas.jpg" alt="banner1"></a>
                                                                                </div>
                                                                                <div class="col-md-3 img img2">
                                                                                    <a href="<?= base_url()?>#BOSCH"><img src="<?php echo base_url()?>assets/image/catalog/menu/megabanner/bosch.jpg" alt="banner2"></a>
                                                                                </div>
                                                                                <div class="col-md-3 img img3">
                                                                                    <a href="#"><img src="<?php echo base_url()?>assets/image/catalog/menu/megabanner/gs.jpg" alt="banner3"></a>
                                                                                </div>
                                                                                <div class="col-md-3 img img4">
                                                                                    <a href="#"><img src="<?php echo base_url()?>assets/image/catalog/menu/megabanner/varta.jpg" alt="banner4"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <?php if ($showBrands == 1) { ?>
                                                                        <div class="row">
                                                                            <?php foreach ($brands as $brand) { ?>
                                                                                <div class="col-md-3">
                                                                                    <a href="javascript:void(0);" data-brand-id="<?= $brand['id'] ?>" class="title-submenu" ><span><?= $brand['name'] ?></span></a>
                                                                                </div>
                                                                            <?php } ?>                                                                            
                                                                        </div>                                                                        
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong>Sản phẩm khác</strong>                                                                
                                                                <b class="caret"></b>
                                                            </a>                                                            
                                                        </li>
                                                        <li class="with-sub-menu hover" <?= uri_string() == 'contacts' || uri_string() == MY_LANGUAGE_ABBR . '/contacts' ? ' class="active"' : '' ?>>
                                                            <p class="close-menu"></p>
                                                            <a href="<?= base_url()?>contacts" class="clearfix">
                                                                <strong>Liên hệ</strong>
                                                                <b class="caret"></b>
                                                            </a>
                                                        </li>
                                                        <li class="">
                                                            <p class="close-menu"></p>
                                                            <a href="<?= base_url('blog/') ?>" class="clearfix">
                                                                <strong>Bài viết</strong>
                                                                <span class="label"></span>
                                                            </a>
                                                        </li>
                                                    </ul>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  

        </div>

    </header>
    <!-- //Header Container  -->
    