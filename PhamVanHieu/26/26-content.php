	<?php
	$url_host = 'http://'.$_SERVER['HTTP_HOST'];
	$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
	$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

	preg_match_all($pattern_uri, __DIR__, $matches);
	$url_path = $url_host . $matches[1][0];
	$url_path = str_replace('\\', '/', $url_path);
	?>
	<!-- Code -->
	<div class="row">
		<div class="col-md-3">
		<a href="#" style="text-decoration: none;color: black">
                        <div class="boder"><img src="./images/portfolio-project-17.jpg" alt="#"
                                class="img-responsive"></div>
					</a>
					<a href="#" style="text-decoration: none;color: black">
                        <div class="boder"><img src="./images/portfolio-project-21.jpg" alt="#"
                                class="img-responsive"></div>
                    </a>			
		</div>
		<div class="col-md-3">
		<a href="#" style="text-decoration: none;color: black">
                        <div class="boder"><img src="./images/portfolio-project-24.jpg" alt="#"
                                class="img-responsive"></div>
					</a>
					<a href="#" style="text-decoration: none;color: black">
                        <div class="boder"><img src="./images/portfolio-project-29.jpg" alt="#"
                                class="img-responsive"></div>
                    </a>			
		</div>
		<div class="col-md-3">
		<a href="#" style="text-decoration: none;color: black">
                        <div class="boder"><img src="./images/portfolio-project-30.jpg" alt="#"
                                class="img-responsive"></div>
					</a>
					<a href="#" style="text-decoration: none;color: black">
                        <div class="boder"><img src="./images/portfolio-project-31.jpg" alt="#"
                                class="img-responsive"></div>
                    </a>			
		</div>
		<div class="col-md-3">
		<a href="#" style="text-decoration: none;color: black">
                        <div class="boder"><img src="./images/portfolio-project-32.jpg" alt="#"
                                class="img-responsive"></div>
					</a>
					<a href="#" style="text-decoration: none;color: black">
                        <div class="boder"><img src="./images/portfolio-project-33.jpg" alt="#"
                                class="img-responsive"></div>
                    </a>			
		</div>
	</div>