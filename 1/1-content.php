<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
$image = 1;
if(isset($_GET['hinh1'])){
    $image = 1;
}else if(isset($_GET['hinh2'])){
    $image = 2;
}else if(isset($_GET['hinh3'])){
    $image = 3;
} else if(isset($_GET['hinh4'])){
    $image = 4;
} else{
    $image = 1;
}

?>
<div class="type-1">
    <div class="container">
        <div class="row">   

            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">

                <div style="height: 500px;">
                    <div class="swiper-container gallery-top">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="background-image:url(./images/51.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(./images/52.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(./images/53.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(./images/54.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(./images/55.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(./images/56.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(./images/57.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(./images/58.jpg)"></div>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next swiper-button-white"></div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                    <div class="swiper-container gallery-thumbs">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="background-image:url(./images/51.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(./images/52.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(./images/53.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(./images/54.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(./images/55.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(./images/56.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(./images/57.jpg)"></div>
                            <div class="swiper-slide" style="background-image:url(./images/58.jpg)"></div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
                <h1>Basic contrast sneakers</h1>
                <div class="star-rating">
                    <i class="fa fa-star start" aria-hidden="true"></i>
                    <i class="fa fa-star start" aria-hidden="true"></i>
                    <i class="fa fa-star start" aria-hidden="true"></i>
                    <i class="fa fa-star start" aria-hidden="true"></i>
                    <i class="fa fa-star start" aria-hidden="true"></i>


                    <div class="price">
                        <p>£10.00</p>
                    </div>
                    <div class="content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut
                            labore
                            et dolore magna aliqua. Inmensae subtilitatis, obscuris et malesuada fames. Morbi
                            fringilla
                            convallis sapien, id pulvinar odio volutpat.
                            Ut enim ad minim veniam, quis nostrud exercitation. Quisque placerat facilisis egestas
                            cillum
                            dolore.
                        </p>
                    </div>

                    <div class="cart">
                        <input class="form-control text-center" value="1">
                        <button type="button" class="btn btn-danger">ADD TO CART</button>
                    </div>

                    <div class="clearfix"></div>
                    <span class="posted_in">
                       <p> <i class="far fa-heart"></i>Add To Wishlist </p>
                       <p>SKU:<span>N/A</span></p>
                       <p>Category:<span>No Options</span></p>
                       <div>Share:
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="far fa-envelope"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                       </div>
                    </span>

                </div>
            </div>
        </div>
    </div>
</div>