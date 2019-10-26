<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<!-- Swiper -->
<div class="container type16">
  <div class="line-product"> <span class="left-line"></span><h4 class="title">SẢN PHẨM NỔI BẬT<span class="title-separator"><span></span></span></h4> <span class="right-line"></span>
  </div>
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <a href="#"><img src="images/giay1.png" alt="" class="img-responsive img-mos"></a>
            </div>
            <div class="col-md-6">
              <div class="right-product"><a href="#">Adidas</a></div>
              <div class="right-product2"><a href="#">Adidas Petter Pharaoh</a></div>
            </div>
          </div>      
        </div>
      </div>
      <div class="swiper-slide">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <a href="#"><img src="images/giay2.jpg" alt="" class="img-responsive img-mos"></a>
            </div>
            <div class="col-md-6">
              <div class="right-product"><a href="#">Nike</a></div>
              <div class="right-product2"><a href="#">Nike Petter Pharaoh</a></div>
            </div>
          </div>      
        </div>
      </div>
      <div class="swiper-slide">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <a href="#"><img src="images/giay3.jpg" alt="" class="img-responsive img-mos"></a>
            </div>
            <div class="col-md-6">
              <div class="right-product"><a href="#">Adidas</a></div>
              <div class="right-product2"><a href="#">Adidas Zeco Toto</a></div>
            </div>
          </div>      
        </div>
      </div>
      <div class="swiper-slide">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <a href="#"><img src="images/giay4.jpg" alt="" class="img-responsive img-mos"></a>
            </div>
            <div class="col-md-6">
              <div class="right-product"><a href="#">Nike</a></div>
              <div class="right-product2"><a href="#">Nike Zeco Pharaoh</a></div>
            </div>
          </div>      
        </div>
      </div>
      <div class="swiper-slide">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <a href="#"><img src="images/giay5.jpg" alt="" class="img-responsive img-mos"></a>
            </div>
            <div class="col-md-6">
              <div class="right-product"><a href="#">Puma</a></div>
              <div class="right-product2"><a href="#">Puma Petter Pharaoh</a></div>
            </div>
          </div>      
        </div>
      </div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</div>