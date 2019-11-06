<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<!-- CODE -->
<div class="contact-us">
        <div class="row">
            <div class="contact col-md-6 col-lg-6">
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7836.915227163078!2d106.7580184647422!3d10.852757018712333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752797e321f8e9%3A0xb3ff69197b10ec4f!2zVHLGsOG7nW5nIENhbyDEkOG6s25nIEPDtG5nIG5naOG7hyBUaOG7pyDEkOG7qWM!5e0!3m2!1svi!2s!4v1570668008144!5m2!1svi!2s"
                        width="100%" height="655" frameborder="0" style="border:0;" allowfullscreen="">
                    </iframe>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="contact-right">
                    <h1>CONTACT US</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="info-box">
                                <li class="box-icon">
                                    <i class="fa fa-envelope icon"></i>
                                </li>
                                <li class="box-content">
                                    <p>
                                        Tel: 877-45-44-33
                                        <br>
                                        E-Mail: shop@store.uk
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="info-box">
                                <li class="box-icon">
                                    <i class="fa fa-history icon"></i>
                                </li>
                                <li class="box-content">
                                    <p>
                                        Support fourm
                                        <br>
                                        for over 24h
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="info-box">
                                <li class="box-icon">
                                    <i class="fa fa-paper-plane icon"></i>
                                </li>
                                <li class="box-content">
                                    <p>
                                        Võ Văn Ngân, Quận Thủ Đức
                                        <br>
                                        Tp Hồ Chí Minh
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="info-box">
                                <li class="box-icon">
                                    <i class="fa fa-cart-arrow-down icon"></i>
                                </li>
                                <li class="box-content">
                                    <p>
                                        Free standard shipping
                                        <br>
                                        on all orders.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-contact">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group your-text">
                                    <label for="usr">Your Name (required)</label>
                                    <input type="text" class="form-control" id="usr">
                                </div>
                                <div class="form-group your-text">
                                    <label for="usr">Your Email (required)</label>
                                    <input type="email" class="form-control" id="usr">
                                </div>
                                <div class="form-group your-text">
                                    <label for="usr">Subject</label>
                                    <input type="text" class="form-control" id="pwd">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group your-message">
                                    <label for="comment">Your Message</label>
                                    <textarea class="form-control" rows="5" id="comment"></textarea>
                                </div>
                            </div>

                        </div>
                        <div class="send">
                            <input type="submit" value="SEND A MESSAGE">
                        </div>
                        <div class="icon-share">
                            <ul>
                                <a href="#">
                                    <li class="social-facebook"><i class="fab fa-facebook"></i></li>
                                </a>
                                <a href="#">
                                    <li class="social-twitter"><i class="fab fa-twitter"></i></li>
                                </a>
                                <a href="#">
                                    <li class="social-email"><i class="fas fa-envelope"></i></li>
                                </a>
                                <a href="#">
                                    <li class="social-in"><i class="fab fa-linkedin-in"></i></li>
                                </a>
                            </ul>
                        </div>


                    </div>


                </div>
            </div>
        </div>

    </div>
