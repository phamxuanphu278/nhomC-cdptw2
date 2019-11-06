<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
 <div class="container">
        <div class="row content">
            <div class="col-md-3">
                <div class="externalframe">
                    <a href="" style="text-decoration: none;color: black">
                        <div class="boder"><img src="./images/1.jpg" alt="#" class="img-responsive"></div>
                        <p class="text">Sản phẩm số 1</p>
                        <p class="border"></p>
                        <p class="price">$25.00 - $30.00</p>
                        <p class="card">Add To Card</p>

                    </a>
                </div>    
            </div>
            <div class="col-md-3">
                <div class="externalframe">
                    <a href="" style="text-decoration: none;color: black">
                        <div class="boder"><img src="./images/2.jpg" alt="#" class="img-responsive"></div>
                        <p class="text">Sản phẩm số 2</p>
                        <p class="border"></p>
                        <p class="price">$25.00 - $30.00</p>
                        <p class="card">Add To Card</p>

                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="externalframe">
                    <a href="" style="text-decoration: none;color: black">
                        <div class="boder"><img src="./images/3.jpg" alt="#" class="img-responsive"></div>
                        <p class="text">Sản phẩm số 3</p>
                        <p class="border"></p>
                        <p class="price">$25.00 - $30.00</p>
                        <p class="card">Add To Card</p>

                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="externalframe">
                    <a href="" style="text-decoration: none;color: black">
                        <div class="boder"><img src="./images/4.jpg" alt="#" class="img-responsive"></div>
                        <p class="text">Sản phẩm số 4</p>
                        <p class="border"></p>
                        <p class="price">$25.00 - $30.00</p>
                        <p class="card">Add To Card</p>

                    </a>
                </div>
            </div>
        </div>
    </div>