<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
 
    <div class="container">
      <div class="row">
        <div class="col-md-6">
                <h1 class="hookah">HOOKAH</h1>
    <h3 class="lounge"><i class="fa fa-star"></i>Lounge<i class="fa fa-star"></i></h3>
    <p class="txt-hookah"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam harum minima quo assumenda tempora hic quod expedita libero, beatae voluptatum, aperiam totam vitae sint fugiat, quibusdam. Amet, nam, rem! Impedit.</p>
      <div class="row">
        <div class="awesome-project-content">
          <div class="col-md-4 col-sm-6 col-xs-12 design development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="images/1.jpg" alt="" class="img-responsive img-hookah" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="images/1.jpg">
                      <span><i class="fa fa-check-circle"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 photo">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="images/2.jpg" alt="" class="img-responsive img-hookah"/></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="images/2.jpg">
                      <span><i class="fa fa-check-circle"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 design">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="images/3.jpg" alt="" class="img-responsive img-hookah"/></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="images/3.jpg">
                     <span><i class="fa fa-check-circle"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 photo development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="images/4.jpg" alt="" class="img-responsive img-hookah"/></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="images/4.jpg">
                     <span><i class="fa fa-check-circle"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="images/5.jpg" alt="" class="img-responsive img-hookah"/></a>
                <div class="add-actions text-center text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="images/5.jpg">
                     <span><i class="fa fa-check-circle"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 design photo">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="images/6.jpg" alt="" class="img-responsive img-hookah"/></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="images/6.jpg">
                      <span><i class="fa fa-check-circle"></i></span>
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
        <div class="col-md-6">
            <div class="title-pro">
        <h2>OUR WORKS</h2>
        <div class="line-product"> 
        <span class="left-line"></span>
        <h4 class="title">X<span class="title-separator"><span></span></span></h4> 
        <span class="right-line"></span>
    </div>
      </div>
      <div class="row">
        <!-- Start Portfolio -page -->
        <div class="tab-portfolio fix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="awesome-menu">
              <ul class="project-menu">
                <li>
                  <a href="#" class="active" data-filter="*">All</a>
                </li>
                <li>
                  <a href="#" data-filter=".shoe">Shoe</a>
                </li>
                <li>
                  <a href="#" data-filter=".jean">New Jean</a>
                </li>
                <li>
                  <a href="#" data-filter=".short">New Short</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="content">
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 shoe">
            <div class="protile">
              <div class="protile-img">
                <a href="#"><img src="images/1.jpg" alt="" class="img-responsive img-light"/></a>
                <div class="add-actions">
                  <div class="project-protile">
                    <a class="venobox" data-gall="myGallery" href="images/1.jpg">
                      <span>The most beautiful shoes</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12 jean">
            <div class="protile">
              <div class="protile-img">
                <a href="#"><img src="images/quan2.jpg" alt="" class="img-responsive img-light"/></a>
                <div class="add-actions">
                  <div class="project-protile">
                    <a class="venobox" data-gall="myGallery" href="images/quan2.jpg">
                      <span>The most beautiful jeans</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12 shoe">
            <div class="protile">
              <div class="protile-img">
                <a href="#"><img src="images/3.jpg" alt="" class="img-responsive img-light"/></a>
                <div class="add-actions">
                  <div class="project-protile">
                    <a class="venobox" data-gall="myGallery" href="images/3.jpg">
                      <span>The most beautiful shoes</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12 short">
            <div class="protile">
              <div class="protile-img">
                <a href="#"><img src="images/ao1.jpg" alt="" class="img-responsive img-light"/></a>
                <div class="add-actions">
                  <div class="project-protile">
                    <a class="venobox" data-gall="myGallery" href="images/ao1.jpg">
                      <span>Cheap shirt</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12 jean">
            <div class="protile">
              <div class="protile-img">
                <a href="#"><img src="images/quan3.jpg" alt="" class="img-responsive img-light" /></a>
                <div class="add-actions">
                  <div class="project-protile">
                    <a class="venobox" data-gall="myGallery" href="images/quan3.jpg">
                      <span>The most beautiful jeans</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12 short">
            <div class="protile">
              <div class="protile-img">
                <a href="#"><img src="images/ao3.jpg" alt="" class="img-responsive img-light" /></a>
                <div class="add-actions">
                  <div class="project-protile">
                    <a class="venobox" data-gall="myGallery" href="images/ao3.jpg">
                      <span>Cheap shirt</span>
                    </a>
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