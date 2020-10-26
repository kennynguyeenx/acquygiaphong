<!-- Footer Container -->
<footer class="footer-container typefooter-1">
    <!-- Footer Top Container -->
    <div class="row-top">
        <div class="block-services container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-margin1">
                    <div class="icon-service">
                        <div class="icon"><i class="fas fa-cog"></i></div>
                            <div class="text">
                                <h6>Lắp đặt </h6>
                                    <p class="no-margin">Miễn phí tại Hà Nội</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-margin1">
                        <div class="icon-service">
                            <div class="icon"><i class="fas fa-thumbs-up"></i></div>
                            <div class="text">
                                <h6>Chất lượng</h6>
                                <p class="no-margin">Chính hãng, đảm bảo</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-margin">
                        <div class="icon-service">
                            <div class="icon"><i class="fas fa-award"></i></div>
                                <div class="text">
                                    <h6>Giá cả<br></h6>
                                    <p class="no-margin">Phù hợp, đúng giá</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="icon-service">
                                <div class="icon"><i class="fas fa-headset"></i></div>
                                <div class="text">
                                    <h6>Hỗ trợ khách hàng</h6>
                                    <p class="no-margin">24/7 cả T7, CN và nghỉ lễ</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /Footer Top Container -->

            <!-- Footer middle Container -->
            <div class="container">
                <div class="row footer-middle">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-style">
                        <div class="box-footer box-infos">
                            <div class="module">
                                <h3 class="modtitle">Liên hệ</h3>
                                <div class="modcontent">
                                    <ul class="list-icon">
                                    <?php if ($footerContactAddr != '') { ?>
                                        <li><span class="icon"><i class="fas fa-map-marker-alt"></i></span><?= $footerContactAddr ?></li>
                                    <?php }if ($footerContactPhone != '') { ?>
                                        <li><span class="icon"><i class="fas fa-phone"></i></span><a href="tel:<?= $footerContactPhone ?>"> <?= $footerContactPhone ?></a></li>
                                    <?php } if ($footerContactEmail != '') { ?>
                                        <li><span class="icon"><i class="fas fa-envelope"></i></span><a href="mailto:<?= $footerContactEmail ?>"><?= $footerContactEmail ?></a></li>
                                    <?php } ?>
                                        <li><span class="icon"><i class="fas fa-stopwatch"></i></span>Thời gian lắp đặt từ 6h - 22h</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-style">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-style">
                                <div class="box-information box-footer">
                                    <div class="module clearfix">
                                        <h3 class="modtitle">Facebook</h3>
                                        <div class="fb-page" data-href="https://www.facebook.com/acquygiaphong/" data-tabs="timeline" data-width="" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
                                    </div>
                                </div>
                            </div>                           

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-clear">
                                <div class="box-service box-footer">
                                    <div class="module clearfix">
                                        <h3 class="modtitle">Bản đồ</h3>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d232.7125080254628!2d105.8046794765272!3d21.05667529266263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab2022b01ce1%3A0x17ba0dbcdf09ae5d!2zNjggVsO1IENow60gQ8O0bmcsIFh1w6JuIExhLCBUw6J5IEjhu5MsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1601811433513!5m2!1svi!2s" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Footer middle Container -->
            <!-- Footer Bottom Container -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="copyright col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <p><?= $footercopyright ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Footer Bottom Container -->
            <!--Back To Top-->
            <div class="back-to-top"><i class="fa fa-angle-up"></i></div>
        </footer>
        <!-- //end Footer Container -->
    </div>
</div>
<div class='quick-call-button'></div>
    <div class='call-now-button'>
        <div>
            <p class='call-text'> &nbsp;<?= $footerContactPhone ?></p>
            <a href='tel:<?= $footerContactPhone ?>' title='Gọi ngay' >
                <div class='quick-alo-ph-circle active'></div>
                <div class='quick-alo-ph-circle-fill active'></div>
                <div class='quick-alo-ph-img-circle shake'></div>
            </a>
        </div>
    </div>
<div id="notificator" class="alert"></div>
<script src="<?= base_url('assets/js/jquery-2.2.4.min.js') ?>"></script>
<script src="<?= base_url('assets/js/owl-carousel/owl.carousel.js') ?>"></script>
<script src="<?= base_url('assets/js/slick-slider/slick.js') ?>"></script>
<script src="<?= base_url('assets/js/themejs/libs.js') ?>"></script>
<script src="<?= base_url('assets/js/unveil/jquery.unveil.js') ?>"></script>
<script src="<?= base_url('assets/js/countdown/jquery.countdown.min.js') ?>"></script>
<script src="<?= base_url('assets/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js') ?>"></script>
<script src="<?= base_url('assets/js/datetimepicker/moment.js') ?>"></script>
<script src="<?= base_url('assets/js/datetimepicker/bootstrap-datetimepicker.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery-ui/jquery-ui.min.js') ?>"></script>
<script src="<?= base_url('assets/js/modernizr/modernizr-2.6.2.min.js') ?>"></script>
<script src="<?= base_url('assets/js/minicolors/jquery.miniColors.min.js') ?>"></script>
<script src="<?= base_url('assets/js/lightslider/lightslider.js') ?>"></script>
<script src="<?= base_url('assets/js/themejs/application.js') ?>"></script>
<script src="<?= base_url('assets/js/themejs/homepage.js') ?>"></script>
<script src="<?= base_url('assets/js/themejs/toppanel.js') ?>"></script>
<script src="<?= base_url('assets/js/themejs/so_megamenu.js') ?>"></script>
<script src="<?= base_url('assets/js/themejs/addtocart.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.cookie.js') ?>"></script>

<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap-confirmation.min.js') ?>"></script>
<script src="<?= base_url('assets/bootstrap-select-1.12.1/js/bootstrap-select.min.js') ?>"></script>
<script src="<?= base_url('assets/js/placeholders.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap-datepicker.min.js') ?>"></script>

<script src="<?= base_url('assets/js/system.js') ?>"></script>
<script src="<?= base_url('templatejs/mine.js') ?>"></script>

</body>
</html>
