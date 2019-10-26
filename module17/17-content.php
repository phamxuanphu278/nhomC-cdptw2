<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="container type17">
    <div class="line-product"> 
        <span class="left-line"></span>
        <h4 class="title">SẢN PHẨM GIẢM GIÁ<span class="title-separator"><span></span></span></h4> 
        <span class="right-line"></span>
    </div>
    <div class="row line-range">
        <div class="col-md-3 col-sm-6">
            <div class="product-sale">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" alt="" src="images/adidas1.jpg">
                        <img class="pic-2" alt="" src="images/adidas2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="View Product"><i class="fa fa-mobile-alt"></i></a></li>
                        <li><a href="#" data-tip="Like Product"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#" data-tip="Add To Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Buy now</span>
                    <span class="product-discount-label">Giảm giá 10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Adidas White</a></h3>
                    <div class="price">$90.00
                    <span>$100.00</span>
                    </div>
                    <p class="product-tabnew"><a href="#" class="btn btn-view" data-toggle="modal" data-target="#myModal"><i class="fa fa-search"></i>View Product</a></p>
                </div>
            </div>
            <!-- The Modal -->
            <div class="modal" id="myModal" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="images/adidas1.jpg" alt="" class="img-responsive img-viewproduct">
                            </div>
                            <div class="col-md-6">
                                <div class="modal-header">
                                    <h4 class="productview-title">Giày thể thao</h4>
                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                </div>
                            <div class="modal-body">
                                <h4 class="productview-price">$60</h4>
                                <span>Thiết Kế Trẻ Trung, Luôn Cập Nhật Xu Hướng Thời Trang Mới Nhất, Bảo Hành Keo Vĩnh Viễn.</span><br><br>
                            <div class="quantity buttons_added">
                                <input type="button" value="-" class="minus">
                                <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
                                <input type="button" value="+" class="plus">
                            </div>
                            <div class="btn-giohang">
                                <button class="btn-cart">ADD TO CART</button>
                            </div>
                            <div class="viewproduct-bot">
                                <h5>Category:<span>Boots</span></h5>
                            </div>
                            <div>
                            </div>
                            <div class="share-product">
                                <h5>Share:<a href="#"><i class="fab fa-facebook-square fab-icon-view"></i></a>
                                <a href="#"><i class="fab fa-skype fab-icon-view"></i></a>
                                <a href="#"><i class="fab fa-twitter-square fab-icon-view"></i></a>
                                <a href="#"><i class="fab fa-google-plus-square fab-icon-view"></i></a>
                                </h5> 
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-sale">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" alt="" src="images/adidas3.jpg">
                        <img class="pic-2" alt="" src="images/adidas4.png">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="View Product"><i class="fa fa-mobile-alt"></i></a></li>
                        <li><a href="#" data-tip="Like Product"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#" data-tip="Add To Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Buy now</span>
                    <span class="product-discount-label">Giảm giá 10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Adidas White</a></h3>
                    <div class="price">$90.00
                    <span>$100.00</span>
                    </div>
                    <p class="product-tabnew"><a href="#" class="btn btn-view" data-toggle="modal" data-target="#myModal"><i class="fa fa-search"></i>View Product</a></p>
                </div>
            </div>
            <!-- The Modal -->
            <div class="modal" id="myModal" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="images/adidas1.jpg" alt="" class="img-responsive img-viewproduct">
                            </div>
                            <div class="col-md-6">
                                <div class="modal-header">
                                    <h4 class="productview-title">Giày thể thao</h4>
                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                </div>
                            <div class="modal-body">
                                <h4 class="productview-price">$60</h4>
                                <span>Thiết Kế Trẻ Trung, Luôn Cập Nhật Xu Hướng Thời Trang Mới Nhất, Bảo Hành Keo Vĩnh Viễn.</span><br><br>
                            <div class="quantity buttons_added">
                                <input type="button" value="-" class="minus">
                                <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
                                <input type="button" value="+" class="plus">
                            </div>
                            <div class="btn-giohang">
                                <button class="btn-cart">ADD TO CART</button>
                            </div>
                            <div class="viewproduct-bot">
                                <h5>Category:<span>Boots</span></h5>
                            </div>
                            <div>
                            </div>
                            <div class="share-product">
                                <h5>Share:<a href="#"><i class="fab fa-facebook-square fab-icon-view"></i></a>
                                <a href="#"><i class="fab fa-skype fab-icon-view"></i></a>
                                <a href="#"><i class="fab fa-twitter-square fab-icon-view"></i></a>
                                <a href="#"><i class="fab fa-google-plus-square fab-icon-view"></i></a>
                                </h5> 
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-sale">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" alt="" src="images/nike1.jpg">
                        <img class="pic-2" alt="" src="images/nike2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="View Product"><i class="fa fa-mobile-alt"></i></a></li>
                        <li><a href="#" data-tip="Like Product"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#" data-tip="Add To Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Buy now</span>
                    <span class="product-discount-label">Giảm giá 10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Adidas White</a></h3>
                    <div class="price">$90.00
                    <span>$100.00</span>
                    </div>
                    <p class="product-tabnew"><a href="#" class="btn btn-view" data-toggle="modal" data-target="#myModal"><i class="fa fa-search"></i>View Product</a></p>
                </div>
            </div>
            <!-- The Modal -->
            <div class="modal" id="myModal" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="images/adidas1.jpg" alt="" class="img-responsive img-viewproduct">
                            </div>
                            <div class="col-md-6">
                                <div class="modal-header">
                                    <h4 class="productview-title">Giày thể thao</h4>
                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                </div>
                            <div class="modal-body">
                                <h4 class="productview-price">$60</h4>
                                <span>Thiết Kế Trẻ Trung, Luôn Cập Nhật Xu Hướng Thời Trang Mới Nhất, Bảo Hành Keo Vĩnh Viễn.</span><br><br>
                            <div class="quantity buttons_added">
                                <input type="button" value="-" class="minus">
                                <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
                                <input type="button" value="+" class="plus">
                            </div>
                            <div class="btn-giohang">
                                <button class="btn-cart">ADD TO CART</button>
                            </div>
                            <div class="viewproduct-bot">
                                <h5>Category:<span>Boots</span></h5>
                            </div>
                            <div>
                            </div>
                            <div class="share-product">
                                <h5>Share:<a href="#"><i class="fab fa-facebook-square fab-icon-view"></i></a>
                                <a href="#"><i class="fab fa-skype fab-icon-view"></i></a>
                                <a href="#"><i class="fab fa-twitter-square fab-icon-view"></i></a>
                                <a href="#"><i class="fab fa-google-plus-square fab-icon-view"></i></a>
                                </h5> 
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-sale">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" alt="" src="images/giay1.jpg">
                        <img class="pic-2" alt="" src="images/giay2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="#" data-tip="View Product"><i class="fa fa-mobile-alt"></i></a></li>
                        <li><a href="#" data-tip="Like Product"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#" data-tip="Add To Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Buy now</span>
                    <span class="product-discount-label">Giảm giá 10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Adidas White</a></h3>
                    <div class="price">$90.00
                    <span>$100.00</span>
                    </div>
                    <p class="product-tabnew"><a href="#" class="btn btn-view" data-toggle="modal" data-target="#myModal"><i class="fa fa-search"></i>View Product</a></p>
                </div>
            </div>
            <!-- The Modal -->
            <div class="modal" id="myModal" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="images/adidas1.jpg" alt="" class="img-responsive img-viewproduct">
                            </div>
                            <div class="col-md-6">
                                <div class="modal-header">
                                    <h4 class="productview-title">Giày thể thao</h4>
                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                </div>
                            <div class="modal-body">
                                <h4 class="productview-price">$60</h4>
                                <span>Thiết Kế Trẻ Trung, Luôn Cập Nhật Xu Hướng Thời Trang Mới Nhất, Bảo Hành Keo Vĩnh Viễn.</span><br><br>
                            <div class="quantity buttons_added">
                                <input type="button" value="-" class="minus">
                                <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
                                <input type="button" value="+" class="plus">
                            </div>
                            <div class="btn-giohang">
                                <button class="btn-cart">ADD TO CART</button>
                            </div>
                            <div class="viewproduct-bot">
                                <h5>Category:<span>Boots</span></h5>
                            </div>
                            <div>
                            </div>
                            <div class="share-product">
                                <h5>Share:<a href="#"><i class="fab fa-facebook-square fab-icon-view"></i></a>
                                <a href="#"><i class="fab fa-skype fab-icon-view"></i></a>
                                <a href="#"><i class="fab fa-twitter-square fab-icon-view"></i></a>
                                <a href="#"><i class="fab fa-google-plus-square fab-icon-view"></i></a>
                                </h5> 
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
        </div>
    </div>
</div>