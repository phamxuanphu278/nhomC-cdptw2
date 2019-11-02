<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

	<div class="container type21">
		<div class="blog-new">Our blog & news</div>
		<div class="line-product"> 
		    <span class="left-line"></span>
		    <h4 class="title">SMOKING MAGAZINE<span class="title-separator"><span></span></span></h4> 
		    <span class="right-line"></span>
		</div>
        <div class="row ourblog">
            <div class="col-md-4 col-sm-6 col-xs-12 wrap_border">
                <div class="thumbnail">
                    <img class="img-responsive" src="images/giay1.jpg" alt="blog1-responsive">
                    <div class="blog-new-label">
                    	<p class="day-label">09</p>
                    	<p class="month-label">Oct</p>
                    </div>
                    <div class="blog-creative-hobbies">
                    	<p class="crative-hobbies">
                    		<span class="creative"><a href="#">Creative</a></span>
                    		<span class="tab-hobbies">|</span>
                    		<span class="hobbies"><a href="#">Hobbies</a></span>
                    	</p>
                    </div>
                </div>
                <div class="font-name">
                    <h1><a href="#">News Product</a></h1>
                    <p class="ourlog-a"><a href="#">Leave a comment</a></p>
                    <h2>We offer the best quality products, products from EU,....</h2>
                </div>
                <h5><a class="btn btnReadMore"> <strong>Read More</strong></a></h5>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 wrap_border">
                <div class="thumbnail">
                    <img src="images/giay2.jpg" alt="blog2-responsive">
                    <div class="blog-new-label">
                    	<p class="day-label">15</p>
                    	<p class="month-label">Sep</p>
                    </div>
                    <div class="blog-creative-hobbies">
                    	<p class="crative-hobbies">
                    		<span class="creative"><a href="#">Creative</a></span>
                    		<span class="tab-hobbies">|</span>
                    		<span class="hobbies"><a href="#">Hobbies</a></span>
                    	</p>
                    </div>
                </div>
                <div class="font-name">
                    <h1><a href="#">News Product</a></h1>
                     <p class="ourlog-a"><a href="#">Leave a comment</a></p>
                    <h2>We offer the best quality products, products from EU,....</h2>
                </div>
                <h5><a class="btn btnReadMore"> <strong>Read More</strong></a></h5>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 wrap_border">
                <div class="thumbnail">
                    <img src="images/2.jpg" alt="blog3-responsive">
                    <div class="blog-new-label">
                    	<p class="day-label">10</p>
                    	<p class="month-label">May</p>
                    </div>
                    <div class="blog-creative-hobbies">
                    	<p class="crative-hobbies">
                    		<span class="creative"><a href="#">Creative</a></span>
                    		<span class="tab-hobbies">|</span>
                    		<span class="hobbies"><a href="#">Hobbies</a></span>
                    	</p>
                    </div>
                </div>
                <div class="font-name">
                    <h1><a href="#">Blog Members</a></h1>
                     <p class="ourlog-a"><a href="#">Leave a comment</a></p>
                    <h2>We can help you solve any problem because we provide only...</h2>
                </div>
                <h5><a class="btn btnReadMore"> <strong>Read More</strong></a></h5>
            </div>
        </div>
    </div>
