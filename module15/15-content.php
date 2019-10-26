<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
      	<div class="container">
      		<div class="row headerh">
      			<div class="col-md-6">
      				<img src="images/giay1.jpg" alt="" class="img-responsive stone-img">
      			</div>
      			<div class="col-md-6"> 
      				<h2 class="fonts1">SHOP GIÀY ĐẸP</h2>
      				<h3 class="fonts2">
      					<span class="span-s1">KHALIL MAMOON</span> 
      					<span class="span-s2">MT-SHOP</span>
      				</h3>
      				<div class="bot-slide">
      				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore accusamus rem consequatur dolorum deserunt hic.</p>
      				<span>
      					<button type="button1" class="button-s">VIEW MORE</button>
      					<button type="button1" class="button-x">GO TO SHOP</button>
      				</span>
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
      <div class="swiper-slide">
      	<div class="container">
      		<div class="row headerh">
      			<div class="col-md-6">
      				<img src="images/giay2.jpg" alt="" class="img-responsive stone-img">
      			</div>
      			<div class="col-md-6">
      				<h2 class="fonts1">SHOP GIÀY ĐẸP</h2>
      				<h3 class="fonts2">
      					<span class="span-s1">KHALIL HUSSLA</span> 
      					<span class="span-s2">MT-SHOP</span>
      				</h3>
      				<div class="bot-slide">
      				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore accusamus rem consequatur dolorum deserunt hic.</p>
      				<span>
      					<button type="button1" class="button-s">VIEW MORE</button>
      					<button type="button1" class="button-x">GO TO SHOP</button>
      				</span>
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
      <div class="swiper-slide">
      	<div class="container">
      		<div class="row headerh">
      			<div class="col-md-6">
      				<img src="images/giay3.jpg" alt="" class="img-responsive stone-img">
      			</div>
      			<div class="col-md-6">
      				<h2 class="fonts1">SHOP GIÀY ĐẸP</h2>
      				<h3 class="fonts2">
      					<span class="span-s1">KHALIL CCOKE</span> 
      					<span class="span-s2">MT-SHOP</span>
      				</h3>
      				<div class="bot-slide">
      				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore accusamus rem consequatur dolorum deserunt hic.</p>
      				<span>
      					<button type="button1" class="button-s">VIEW MORE</button>
      					<button type="button1" class="button-x">GO TO SHOP</button>
      				</span>
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
	</div>