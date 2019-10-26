<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
   <!--top menu-->
  <div class="container-build">
      <div class="top-header">
          <div class="row header-size">
              <div class="col-md-4 col-sm-6 col-xs-12">
                <ul>
                    <li>
                      <span class="ourphone">OUR PHONE NUMBER: +84(123) 456.789</span>
                    </li>
                </ul>
              </div>
              <div class="col-md-8 col-sm-6 col-xs-12">
                <ul class="item-info">
                  <li class="item">
                    <a href="#"><i class="fa fa-user"></i> My Account</a>
                  </li>
                  <li class="item">
                    <a href="#"><i class="fa fa-shopping-cart"></i>Cart</a>
                  </li>
                  <li class="item">
                    <a href="#"><i class="fa fa-location-arrow"></i>Shop Location</a>
                  </li>
                  <li class="item">
                    <a href="#"><i class="fa fa-users"></i>Contact Us</a>
                  </li>
                </ul>
              </div>
          </div>
      </div>
  </div>
    <!--menu-->
    <nav class="navbar navbar-default nav-menu-header" role="navigation">
        <div class="container-fluid fluid-menu">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand link-home" href="#"><img src="images/logo1.png" class="img-responsive img-logo-menu" alt=""></a>
            </div>
    
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav right-menu-float">
                    <li><a href="#">Home</a></li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop <b class="caret"></b></a>
                        <ul class="dropdown-menu dropdown-menu-shop">
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Clothes</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Blog</a></li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu dropdown-menu-pages">
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">About Me</a></li>
                            <li><a href="#">Our Shop</a></li>
                            <li><a href="#">Our Service</a></li>
                        </ul>
                    </li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Features <b class="caret"></b></a>
                        <ul class="dropdown-menu dropdown-menu-features">
                            <li><a href="#">Adidas</a></li>
                            <li><a href="#">Nike</a></li>
                            <li><a href="#">Puma</a></li>
                            <li><a href="#">Gucci</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right menu-icon">
                    <li><a href="#">Login / Register</a></li>
                    <li class="menu-icon-right">
                        <form action="" class="form-search">
                            <input type="search" class="search" placeholder="Search..." ,>
                            <i class="fa fa-search search-button"></i>
                        </form>
                    </li>
                    <li class="item-cart">
                        <a href="#" id="opennav"><i class="fa fa-shopping-cart cart-button"></i></a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    <!--cart-->
    <div id="mySidenav" class="product-cart">
        <div class="btn-close-cart">
            <h3 class="title-cart">Shopping Now</h3>
            <a href="#" class="closebtn">Close X</a>
        </div>
        <!-- item -->
        <div class="product-item">
            <ul>
                <li>
                    <a href="#">
                        <img src="images/giay3.jpg">
                        <span class="product-title">Adidas Confirm</span>
                    </a>
                    <span class="price">$750.00</span>
                </li>
                <li>
                    <a href="#">
                        <img src="images/giay2.jpg">
                        <span class="product-title">Nike Cond5463</span>
                    </a>
                    <span class="price">$650.00</span>
                </li>
                
            </ul>
        </div>
        <div class="total-cart">
            <div class="total">
                <h4><b>SUBTOTAL:</b></h4>
                <span>
                    <h4><b>$1,400.00</b></h4>
                </span>
            </div>
            <button class="btn-custom">VIEW CART</button>
            <button class="btn-custom">CHECKOUT</button>
        </div>
    </div>
    <div class="close-cart"></div>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti sequi aliquam est, neque modi tenetur itaque magnam dolore sunt! Aspernatur nostrum illum atque nesciunt voluptatem laboriosam eveniet labore quisquam aperiam.</p>