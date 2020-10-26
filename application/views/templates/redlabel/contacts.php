<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Main Container  -->
<div class="main-container container">
            <ul class="breadcrumb">
                <li><a href="<?= LANG_URL ?>"><i class="fa fa-home"></i></a></li>
                <li><a href="<?= LANG_URL . '/contacts' ?>">Liên hệ</a></li>
            </ul>

            <div class="row">
                <div id="content" class="col-sm-12">
                    <div class="page-title">
                        <h2>Sơ đồ</h2>
                    </div>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d232.7125080254628!2d105.8046794765272!3d21.05667529266263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab2022b01ce1%3A0x17ba0dbcdf09ae5d!2zNjggVsO1IENow60gQ8O0bmcsIFh1w6JuIExhLCBUw6J5IEjhu5MsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1601811433513!5m2!1svi!2s" 
                        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen></iframe>                    
                    <div class="info-contact clearfix">
                        <div class="col-lg-4 col-sm-4 col-xs-12 info-store">
                            <div class="row">
                                <div class="name-store">
                                    <h3>Ắc quy Gia Phong</h3>
                                </div>
                                <address>
								<div class="address clearfix form-group">
									<div class="icon">
										<i class="fa fa-home"></i>
									</div>
									<div class="text"><?= $footerContactAddr ?></div>
								</div>
								<div class="phone form-group">
									<div class="icon">
										<i class="fa fa-phone"></i>
									</div>
									<div class="text"><?= $footerContactPhone ?></div>
								</div>
								<div class="comment">             
								❤️❤️❤️ CHỮ TÍN QUÝ HƠN VÀNG❤️❤️❤️
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;↘️↘️↘️↘️↘️↙️↙️↙️↙️↙️<br>
                                                  🏠ẮC QUY GIA PHONG
                                    CAM KẾT CHẤT LƯỢNG - GIÁ CẢ PHÙ HỢP<br>
                                                                ===============<br>
                                👍 Cửa hàng: 68 Võ Chí Công, Nghĩa Đô, Cầu Giấy, HN<br>
                                👍 VPGD . Số nhà 29 ngõ 208 Trần Cung , Bắc Từ Liêm , HN
								</div>
							</address>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-8 col-xs-12 contact-form">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <fieldset>
                                    <legend>Liên hệ</legend>
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="input-name">Tên khách hàng</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" value="" id="input-name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="email" value="" id="input-email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="input-enquiry">Nội dung</label>
                                        <div class="col-sm-10">
                                            <textarea name="enquiry" rows="10" id="input-enquiry" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="buttons">
                                    <div class="pull-right">
                                        <button class="btn btn-default buttonGray" type="submit">
										<span>Gửi</span>
									</button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <!-- //Main Container -->