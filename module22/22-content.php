<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="container">
    <h1 class="hookah">HOOKAH</h1>
    <h3 class="lounge"><i class="fa fa-star"></i>Lounge<i class="fa fa-star"></i></h3>
	<div class="row">
		<div class="col-md-6">
			<div class="hookah-txt">Magnis posuere dolor a at diam parturient eu suspendisse consectetur vitae congue praesent arcu cursus faucibus euismod a integer a sociis a a suspendisse. Fringilla aenean scelerisque praesent arcu vestibulum nibh parturient eu suspendisse.
			</div>
			<div class="hes-gallery">
	            <div class="row light-box">
	                <div class="col-md-4">
	                    <img src="images/1.jpg" alt="image1" data-fullsize="images/1.jpg" data-subtext='Giay 1'>
	                </div>
	                <div class="col-md-4">
	                    <img src="images/2.jpg" alt="image2" data-subtext="Giay 2">
	                </div>
	                <div class="col-md-4">
	                    <img src="images/3.jpg" alt="image3" data-subtext="Giay 3">
	                </div>
	                <div class="col-md-4">
	                     <img src="images/4.jpg" alt="image4" data-subtext="Giay 4" >
	                </div>
	                <div class="col-md-4">
	                    <img src="images/5.jpg" alt="image5" data-subtext="Giay 5">
	                </div>
	                <div class="col-md-4">
	                    <img src="images/6.jpg" alt="image6" data-subtext="Giay 6">
	                </div>
	            </div>
        	</div>
			<div class="btn-hookah"><a href="#"><button class="btn-shop">Shop Now</button></a></div>
		</div>
		<div class="col-md-6">
			<div class="card-container">
			<div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="images/1.jpg"/>
                        </div>
                        <div class="user">
                            <img class="img-circle" src="images/1.jpg"/>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name">John Marvel</h3>
                                <p class="profession">CEO</p>
                                <p class="text-center">"I'm the new Sinatra, and since I made it here I can make it anywhere, yeah, they love me everywhere"</p>
                            </div>
                            <div class="footer">
                                <i class="fa fa-mail-forward"></i> Auto Rotation
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class="back">
                        <div class="header">
                            <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h4 class="text-center">Job Description</h4>
                                <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                                <div class="stats-container">
                                    <div class="stats">
                                        <h4>235</h4>
                                        <p>
                                            Followers
                                        </p>
                                    </div>
                                    <div class="stats">
                                        <h4>114</h4>
                                        <p>
                                            Following
                                        </p>
                                    </div>
                                    <div class="stats">
                                        <h4>35</h4>
                                        <p>
                                            Projects
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="footer">
                            <div class="social-links text-center">
                                <a href="https://creative-tim.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                <a href="https://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                <a href="https://creative-tim.com" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                            </div>
                        </div>
                    </div> 
                </div> 
                 </div>
		</div>
	</div>
</div>