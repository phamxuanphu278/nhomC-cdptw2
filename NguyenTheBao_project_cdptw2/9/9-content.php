<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="website-wrapper">
    <div class="main-page-wrapper">
        <div class="page-title page-title-default title-size-small title-design-centered color-scheme-light title-blog">
            <div class="container">
                <header class="entry-header">
                    <h3 class="entry-title">
                        <span>Blog</span>
                    </h3>
                    <div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
                        <a href="#" rel="v:url" property="v:title">Home</a>
                        <span class="current">News</span></div>
                </header>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="site-content col-sm-9" role="main">
                    <article id="post-1" class="item">
                        <div class="entry-content">
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1484124985852">
                                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-12 vc_col-xs-12">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column wpb_content_element vc_custom_1484138203937">
                                                                <div class="wpb_wrapper">
                                                                    <h2><strong><span style="color: #1daaa3;">2.</span> Best women’s clothing</strong></h2>
                                                                </div>
                                                            </div>
                                                            <div class="wpb_text_column wpb_content_element vc_custom_1484129453229">
                                                                <div class="wpb_wrapper">
                                                                    <ul>
                                                                        <li>Aliquam tincidunt mauris eu risus.</li>
                                                                        <li>Vestibulum auctor dapibus neque.</li>
                                                                        <li>Nunc dignissim risus id metus.</li>
                                                                        <li>Cras ornare tristique elit.</li>
                                                                        <li>Vivamus vestibulum nulla nec ante.</li>
                                                                        <li>Praesent placerat risus quis eros.</li>
                                                                    </ul>
                                                                    <p>Nisi a euismod vestibulum adipiscing velit. Eget urna parturient bibendum vestibulum cum feugiat morbi tellus vestibulum adipiscing vivamus a a natoque arcu ultrices condimentum. Vel amet adipiscing facilisi taciti parturient suspendisse a penatibus ultricies tincidunt suspendisse condimentum ullamcorper parturient condimentum litora morbi pulvinar bibendum a adipiscing odio elementum.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-12 vc_col-xs-12">
                                                    <div class="vc_column-inner vc_custom_1484125033216">
                                                        <div class="wpb_wrapper">
                                                            <div id="gallery_589" class="basel-images-gallery  spacing-30 columns-1 view-grid photoswipe-images">
                                                                <div class="gallery-images ">
                                                                    <div class="basel-gallery-item"> <a href="https://xtemos3.r.worldssl.net/basel/wp-content/uploads/2015/08/blog-woman-fashion1.jpg" data-index="1" data-width="600" data-height="800"> <img class="basel-gallery-image image-1 " src="https://xtemos3.r.worldssl.net/basel/wp-content/uploads/2015/08/blog-woman-fashion1-600x670.jpg" width="600" height="670" alt="blog-woman-fashion1" title="blog-woman-fashion1"> </a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element">
                                                <div class="wpb_wrapper">
                                                    <p>Cras vestibulum nec scelerisque mauris id nisi consectetur mi id ipsum justo ad a fringilla a parturient.Ante a vel cubilia ut dignissim a adipiscing nisl mus eleifend volutpat vestibulum suspendisse a.Adipiscing vivamus venenatis eleifend tellus parturient ullamcorper felis lobortis hendrerit ipsum nisl ut lobortis ipsum scelerisque parturient.Condimentum accumsan augue id a magnis a condimentum hac himenaeos ac malesuada nibh eros ipsum suspendisse integer.</p>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </article>
            </div>
        </div>
    </div>
</div>