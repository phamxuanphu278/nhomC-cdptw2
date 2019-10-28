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
    <p class="txt-hookah"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam harum minima quo assumenda tempora hic quod expedita libero, beatae voluptatum, aperiam totam vitae sint fugiat, quibusdam. Amet, nam, rem! Impedit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam harum minima quo assumenda tempora</p>
      <div class="row">
        <div class="awesome-project-content">
          <div class="col-md-4 col-sm-4 col-xs-12 design development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="images/1.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="images/1.jpg">
                      <h4>Aididas White Veno</h4>
                      <span>MT-Store</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12 photo">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="images/2.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="images/2.jpg">
                      <h4>Adidas White Sea</h4>
                      <span>MT-Store</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12 design">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="images/3.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="images/3.jpg">
                      <h4>Shoe Beautiful Girl</h4>
                      <span>MT-Store</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12 photo development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="images/4.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="images/4.jpg">
                      <h4>Nike White Turtl</h4>
                      <span>MT-Store</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12 development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="images/5.jpg" alt="" /></a>
                <div class="add-actions text-center text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="images/5.jpg">
                      <h4>Puma Clevetu</h4>
                      <span>MT-Store</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12 design photo">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="images/6.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="images/6.jpg">
                      <h4>Puma Night Hit</h4>
                      <span>MT-Store</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="btn-button"><a href="#"><button class="button-shop">Shop Now</button></a></div>
    </div>