<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="container type18">
            <div class="row">
                  <div class="col-md-6 col-xs-12">
                    <div class="swiper-container slider-swip-3">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                              <img src="images/quan4.jpg" alt="" class="img-responsive img-slider-jean">
                        </div>
                        <div class="swiper-slide"> 
                              <img src="images/quan2.jpg" alt="" class="img-responsive img-slider-jean">
                        </div>
                        <div class="swiper-slide"> 
                              <img src="images/quan3.jpg" alt="" class="img-responsive img-slider-jean">
                        </div>
                      </div>
                      <!-- Add Arrows -->
                      <div class="swiper-button-next next3"></div>
                      <div class="swiper-button-prev prev3"></div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xs-12">
                        <div class="charac-jean">Main characteristics</div>
                        <div class="line-product"> <span class="left-line"></span><h4 class="title">Quần Jean Cao Cấp<span class="title-separator"><span></span></span></h4> <span class="right-line"></span>
                        </div>
                        <div class="row row-jean">
                              <div class="col-md-3 col-xs-3">
                                    <img id="img-default" src="images/icon1.jpg" alt="" class="img-responsive img-icon">
                              </div>
                              <div class="col-md-9 col-xs-9">
                                    <div class="jean-maincharacter">All Jean hookahs Made in The US</div>
                                    <div>As the inventors of the world’s first, we are pioneers in our industry, setting the standards and trends for the rest to follow.
                                    </div>
                              </div>
                        </div>
                        <div class="row row-jean">
                              <div class="col-md-3 col-xs-3">
                                    <img id="img-custom" src="images/icon2.png" alt="" class="img-responsive img-icon">
                              </div>
                              <div class="col-md-9 col-xs-9">
                                    <div class="jean-maincharacter">Incredibly smooth smoke</div>
                                    <div>As the inventors of the world’s first, we are pioneers in our industry, setting the standards and trends for the rest to follow.
                                    </div>
                              </div>
                        </div>
                        <div class="row row-jean">
                              <div class="col-md-3 col-xs-3">
                                    <img id="img-central" src="images/icon3.jpg" alt="" class="img-responsive img-icon">
                              </div>
                              <div class="col-md-9 col-xs-9">
                                    <div class="jean-maincharacter">High performance and artful design</div>
                                    <div>As the inventors of the world’s first, we are pioneers in our industry, setting the standards and trends for the rest to follow.
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
          <div class="btn-jean"><button class="btn-goto"> Go to Shop</button></div>
          <div class="share-jean">
            <div class="line-product"> <span class="left-line"></span><h4 class="title">Share<span class="title-separator"><span></span></span></h4> <span class="right-line"></span>
            </div>
            <ul>
              <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
          </div>
      </div>