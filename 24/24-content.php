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
			<div class="col-md-6">
			  <img src="./images/hookahs-logo-160x74.png" alt="#">
			  <p class="text">
					Magnis posuere dolor a at diam parturient eu suspendisse consectetur vitae congue praesent arcu cursus faucibus euismod a integer a sociis a a suspendisse. Fringilla aenean scelerisque praesent arcu vestibulum nibh parturient eu suspendisse.
			  </p>
			  <div class="row">
				  <div class="col-md-4">
				  <img src="./images/hookahs-parts.jpg" alt="#" class="img-responsive">
				  <img src="./images/hookahs-parts-9.jpg" alt="#" class="img-responsive">
				  </div>
				  <div class="col-md-4">
				  <img src="./images/hookahs-parts-8-2.jpg" alt="#" class="img-responsive">
				  <img src="./images/hookahs-parts-6-2.jpg" alt="#" class="img-responsive">
				  </div>
				  <div class="col-md-4">
				  <img src="./images/hookahs-parts-4-2-1.jpg" alt="#" class="img-responsive">
				  <img src="./images/hookahs-parts-2-2.jpg" alt="#" class="img-responsive">
				  </div>
			  </div>
			  <div class="shop-now">
				 <a href="">Shop Now</a>
			  </div>
			</div>
			<div class="col-md-6">
			 <ul class="threed-view-images" style="display:block;">
			  <li class="hook"><img src="./images/hook360-5.jpg" alt="#" class="current-image"></li>
			  <li class="hook"><img src="./images/hook360-7.jpg" alt="#"class="current-image"></li>
			  <li class="hook"><img src="./images/hook360-9.jpg" alt="#"class="current-image"></li>
			  <li class="hook"><img src="./images/hook360-11.jpg" alt="#"class="current-image"></li>
			  <li class="hook"><img src="./images/hook360-13.jpg" alt="#"class="current-image"></li>
			  <li class="hook"><img src="./images/hook360-15.jpg" alt="#"class="current-image"></li>
			  <li class="hook"><img src="./images/hook360-17.jpg" alt="#"class="current-image"></li>
			  <li class="hook"><img src="./images/hook360-19.jpg" alt="#"class="current-image"></li>
			  <li class="hook"><img src="./images/hook360-21.jpg" alt="#"class="current-image"></li>
			  <li class="hook"><img src="./images/hook360-23.jpg" alt="#"class="current-image"></li>
			  <li class="hook"><img src="./images/hook360-25.jpg" alt="#"class="current-image"></li>
			  <li class="hook"><img src="./images/hook360-27.jpg" alt="#"class="current-image"></li>
			  <li class="hook"><img src="./images/hook360-29.jpg" alt="#"class="current-image"></li>
			  <li class="hook"><img src="./images/hook360-31.jpg" alt="#"class="current-image"></li>
			  <li class="hook"><img src="./images/hook360-33.jpg" alt="#"class="current-image"></li>
			  <li class="hook"><img src="./images/hook360-35.jpg" alt="#"class="current-image"></li>
			  <li class="hook"><img src="./images/hook360-1.jpg" alt="#"class="current-image"></li>
			  <li class="hook"><img src="./images/hook360-3.jpg" alt="#"class="current-image"></li>
			 </ul>
			</div>
		</div>
	</div>