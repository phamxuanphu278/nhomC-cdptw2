<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<footer class="end-footer">
        <div>
          <a href="#"><img src="images/logo.png" alt="" class="img-responsive img-footerwid"></a>
        </div>
        <div class="footer-icon">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-skype"></i></a>
          <a href="#"><i class="fab fa-pinterest"></i></a>
          <a href="#"><i class="fas fa-envelope"></i></a>
        </div>
        <div class="container">
          <div class="row tag-container-tx">
            <div class="col-md-2 col-sm-6 col-xs-6">
              <h4 class="footer-start">OUR STORES</h4>
              <p class="footer-fora"><a href="#">New York</a></p>
              <p class="footer-fora"><a href="#">Paris</a></p>
              <p class="footer-fora"><a href="#">LonDon</a></p>
              <p class="footer-fora"><a href="#">Chicago</a></p>
              <p class="footer-fora"><a href="#">Hà Nội</a></p>
              <p class="footer-fora"><a href="#">Tp. Hồ Chí Minh</a></p>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6">
              <h4 class="footer-start">INFORMATION</h4>
              <p class="footer-fora"><a href="#">About Store</a></p>
              <p class="footer-fora"><a href="#">New Collection</a></p>
              <p class="footer-fora"><a href="#">Woman Dress</a></p>
              <p class="footer-fora"><a href="#">Contact Us</a></p>
              <p class="footer-fora"><a href="#">Hà Nội</a></p>
              <p class="footer-fora"><a href="#">Tp. Hồ Chí Minh</a></p>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6">
              <h4 class="footer-start">USEFUL LINKS</h4>
              <p class="footer-fora"><a href="#">New York</a></p>
              <p class="footer-fora"><a href="#">Paris</a></p>
              <p class="footer-fora"><a href="#">LonDon</a></p>
              <p class="footer-fora"><a href="#">Chicago</a></p>
              <p class="footer-fora"><a href="#">Hà Nội</a></p>
              <p class="footer-fora"><a href="#">Tp. Hồ Chí Minh</a></p>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6">
              <h4 class="footer-start">FOOTER MENU</h4>
              <p class="footer-fora"><a href="#">About Store</a></p>
              <p class="footer-fora"><a href="#">New Collection</a></p>
              <p class="footer-fora"><a href="#">Woman Dress</a></p>
              <p class="footer-fora"><a href="#">Contact Us</a></p>
              <p class="footer-fora"><a href="#">Hà Nội</a></p>
              <p class="footer-fora"><a href="#">Tp. Hồ Chí Minh</a></p>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
              <h4 class="footer-start">ABOUT THE STORE</h4>
              <p class="kc-footer">STORE - worldwide fashion store since 1978. We sell over 1000+ 
              branded products on our web-site.</p>
              <p><i class="fas fa-location-arrow"></i>53 Vo Van Ngan Street, Thu Duc, Ho Chi Minh</p>
              <p><i class="fas fa-mobile-alt"></i>Phone: (0123) 456.789</p>
              <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-2 col-footer-padding">
                  <img src="images/icon1.jpg" alt="" class="img-responsive">
                </div>
                 <div class="col-md-2 col-sm-2 col-xs-2 col-footer-padding">
                  <img src="images/master-icon.png" alt="" class="img-responsive">
                </div>
                 <div class="col-md-2 col-sm-2 col-xs-2 col-footer-padding">
                  <img src="images/pay-icon.png" alt="" class="img-responsive">
                </div>
                 <div class="col-md-2 col-sm-2 col-xs-2 col-footer-padding">
                  <img src="images/master.png" alt="" class="img-responsive">
                </div>
                 <div class="col-md-2 col-sm-2 col-xs-2 col-footer-padding">
                  <img src="images/vietcombank.png" alt="" class="img-responsive">
                </div>
                 <div class="col-md-2 col-sm-2 col-xs-2 col-footer-padding">
                  <img src="images/icon1.jpg" alt="" class="img-responsive">
                </div>
              </div>
            </div>
            <div class="designer-footer">
              <a href="#">DESIGN BY TEAMC</a>
            </div>
          </div>
          <div class="ft-footer">
             &copy; 2019 Created by <span class="team-footer"><a href="#">C-Team Studio</a></span>. Premium e-commerce solutions.
          </div>
        </div>
      </footer>