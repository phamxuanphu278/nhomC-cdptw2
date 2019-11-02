<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="main" style="background-image: url('images/shopreview1.jpg')">
  <div class="cover black"></div>
    <div class="container">
      <div class="content">
          <h4 class="motto">Customer reviews</h4>
      </div>
      <h2 class="cursive">
          CLIENTS ABOUT OUR HOOKAH
      </h2>
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
          <img src="images/1.jpg" alt="" class="img-responsive img-reviews">
          <h5 class="reviews"> Dis ac litora amet purus felis ullamcorper lectus venenatis a quisque consectetur rhoncus nec quam a odio cras lobortis leo varius quisque vestibulum in ultricies.</h5>
          <h5 class="reviews">
            <span>Congue praesent-</span><span class="color-reviews">Hilary</span>
          </h5>
           </div>
        <div class="swiper-slide">
          <img src="images/2.jpg" alt="" class="img-responsive img-reviews">
          <h5 class="reviews"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex dolorem blanditiis officiis fugit voluptatibus cumque atque delectus deserunt mollitia reprehenderit modi incidunt in.</h5>
          <h5 class="reviews">
            <span>Congue praesent-</span><span class="color-reviews">Kieran</span>
          </h5>
        </div>
          	
        <div class="swiper-slide">
          <img src="images/3.png" alt="" class="img-responsive img-reviews">
          <h5 class="reviews"> Dis ac litora amet purus felis ullamcorper lectus venenatis a quisque consectetur rhoncus nec quam a odio cras lobortis leo varius quisque vestibulum in ultricies.</h5>
          <h5 class="reviews">
          <span>Congue praesent-</span><span class="color-reviews">Gabriel</span>
          </h5>
        </div>    
        <div class="swiper-slide">
          <img src="images/4.jpg" alt="" class="img-responsive img-reviews">
          <h5 class="reviews"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex dolorem blanditiis officiis fugit voluptatibus cumque atque delectus deserunt mollitia reprehenderit modi incidunt in.</h5>
          <h5 class="reviews">
          <span>Congue praesent-</span><span class="color-reviews">Smothie</span>
          </h5>
        </div>  
        <div class="swiper-slide">
          <img src="images/5.jpg" alt="" class="img-responsive img-reviews">
          <h5 class="reviews"> Dis ac litora amet purus felis ullamcorper lectus venenatis a quisque consectetur rhoncus nec quam a odio cras lobortis leo varius quisque vestibulum in ultricies.</h5>
          <h5 class="reviews">
          <span>Congue praesent-</span><span class="color-reviews">Thanh Cong</span>
          </h5>
        </div>  
    </div>
    </div>
     <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
  </div>
</div>