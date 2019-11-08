<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
 
    <div class="container">
        <div class="title-name">XTEMOS ELEMENTS</div>
         <div class="line-product"> 
          <span class="left-line"></span>
          <h4 class="title">PRODUCT GRID WITH AJAX ARROW <span class="title-separator"><span></span></span></h4> 
          <span class="right-line"></span>
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
          <div class="col-md-3 col-sm-4 col-xs-6 shoe">
            <div class="protile">
              <div class="protile-img">
                <a href="#"><img src="images/1.jpg" alt="" class="img-responsive img-light"/></a>
                <div class="add-actions">
                  <div class="project-protile">
                    <a class="venobox" data-gall="myGallery" href="images/1.jpg">
                      <p class="project-txt">The most beautiful shoes</p>
                      <p><i class="fa fa-check-circle"></i></p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-4 col-xs-6 jean">
            <div class="protile">
              <div class="protile-img">
                <a href="#"><img src="images/quan2.jpg" alt="" class="img-responsive img-light"/></a>
                <div class="add-actions">
                  <div class="project-protile">
                    <a class="venobox" data-gall="myGallery" href="images/quan2.jpg">
                      <p class="project-txt">The most beautiful jeans</p>
                      <p><i class="fa fa-check-circle"></i></p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-4 col-xs-6 shoe">
            <div class="protile">
              <div class="protile-img">
                <a href="#"><img src="images/3.jpg" alt="" class="img-responsive img-light"/></a>
                <div class="add-actions">
                  <div class="project-protile">
                    <a class="venobox" data-gall="myGallery" href="images/3.jpg">
                      <p class="project-txt">The most beautiful shoes</p>
                      <p><i class="fa fa-check-circle"></i></p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-4 col-xs-6 short">
            <div class="protile">
              <div class="protile-img">
                <a href="#"><img src="images/ao1.jpg" alt="" class="img-responsive img-light"/></a>
                <div class="add-actions">
                  <div class="project-protile">
                    <a class="venobox" data-gall="myGallery" href="images/ao1.jpg">
                      <p class="project-txt">Cheap shirt</p>
                      <p><i class="fa fa-check-circle"></i></p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-4 col-xs-6 jean">
            <div class="protile">
              <div class="protile-img">
                <a href="#"><img src="images/quan3.jpg" alt="" class="img-responsive img-light" /></a>
                <div class="add-actions">
                  <div class="project-protile">
                    <a class="venobox" data-gall="myGallery" href="images/quan3.jpg">
                       <p class="project-txt">The most beautiful jeans</p>
                      <p><i class="fa fa-check-circle"></i></p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-4 col-xs-6 short">
            <div class="protile">
              <div class="protile-img">
                <a href="#"><img src="images/ao3.jpg" alt="" class="img-responsive img-light" /></a>
                <div class="add-actions">
                  <div class="project-protile">
                    <a class="venobox" data-gall="myGallery" href="images/ao3.jpg">
                     <p class="project-txt">Cheap shirt</p>
                      <p><i class="fa fa-check-circle"></i></p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-4 col-xs-6 short">
            <div class="protile">
              <div class="protile-img">
                <a href="#"><img src="images/ao6.png" alt="" class="img-responsive img-light" /></a>
                <div class="add-actions">
                  <div class="project-protile">
                    <a class="venobox" data-gall="myGallery" href="images/ao6.png">
                      <p class="project-txt">Cheap shirt</p>
                      <p><i class="fa fa-check-circle"></i></p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-4 col-xs-6 shoe">
            <div class="protile">
              <div class="protile-img">
                <a href="#"><img src="images/10.jpg" alt="" class="img-responsive img-light" /></a>
                <div class="add-actions">
                  <div class="project-protile">
                    <a class="venobox" data-gall="myGallery" href="images/10.jpg">
                      <p class="project-txt">The most beautiful shoes</p>
                      <p><i class="fa fa-check-circle"></i></p>
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