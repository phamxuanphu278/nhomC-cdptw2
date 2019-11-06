<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>


<div class="container type28">
	<div class="row">
		<div class="col-md-6 size-service">
			<div class="our-service">
				<h3>WE ARE A PASSIONATE FROM <span class="color-team">X-TEMOS</span> STUDIO.</h3>
			</div>
			<p>We are an experienced web development team that love to deliver impressive and well-designed WordPress themes. All our themes is easy to install and customize, so you can start your own web-site just in a few minutes. Our dedicated support will provide you with fast useful answers if you have any questions concerning theme setup or configuration.</p>
			<div class="our-service">
				<h3>DO BEAUTIFUL AND EASY-TO-USE DIGITAL USE.</h3>
			</div>
			<p>Aliquam pulvinar pellentesque purus, nec condimentum nibh. Aenean dapibus iaculis odio id vestibulum. Nam at justo ante. Maecenas eros mi, lacinia eu ultricies vel, elementum et justo.</p>
		</div>
		<div class="hes-gallery">
			<div class="col-md-6 light-box">
				<div class="team">
					<h3 class="our-service team-support">Team Support</h3>
				</div>
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img src="./public/images/1.jpg" alt="image1" data-fullsize="./public/images/1.jpg" data-subtext='Support1 Emplooyee' class="img-responsive img-service">
						</div>
						<div class="swiper-slide">
							<img src="./public/images/2.jpg" alt="" class="img-responsive img-service" data-subtext='Support2 Emplooyee'>
						</div>
						<div class="swiper-slide">
							<img src="./public/images/3.png" alt="" class="img-responsive img-service" data-subtext='Support3 Emplooyee'>
						</div>
					</div>
					<!-- Add Pagination -->
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>

			</div>
		</div>
	</div>
</div>