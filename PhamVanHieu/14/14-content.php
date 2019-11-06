	<?php
	$url_host = 'http://'.$_SERVER['HTTP_HOST'];
	$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
	$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

	preg_match_all($pattern_uri, __DIR__, $matches);
	$url_path = $url_host . $matches[1][0];
	$url_path = str_replace('\\', '/', $url_path);
	?>
	<!-- Code -->
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h2 style="text-align: right;">
					<strong>OUR CLIENTS SAYS:</strong>
				</h2>
				<br>
				<p class="our-clinets">
					Read client’s opinions about posuere.
					<br>
					congue aliquet dis penatibus netus tempor a
					congue aliquet dis penatibus netus tempor lorem.

				</p>
			</div>
			<div class="col-md-8">
            <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
	  <div class="card" style="width: 50rem;">
  <img class="card-img-top" src="./images/client1-100x100.png" alt="Card image cap" style="border-radius:90px;">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
	  </div>
      <div class="swiper-slide">
	  <div class="card" style="width: 50rem;">
  <img class="card-img-top" src="./images/client2-100x100.png" alt="Card image cap" style="border-radius:90px;">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
	</div>
      <div class="swiper-slide">
	  <div class="card" style="width: 50rem;">
  <img class="card-img-top" src="./images/client3-100x100.png" alt="Card image cap" style="border-radius:90px;">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
	</div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
			</div>
		</div>
	</div>