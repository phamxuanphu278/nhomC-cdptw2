<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-7">
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
                                            <div class="vc_row wpb_row">
                                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-12 vc_col-xs-12">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div id="best-man" class="basel-images-gallery">
                                                                <div class="gallery-images ">
                                                                    <div class="basel-gallery-item">
                                                                        <img class="basel-gallery-image image-1 " src="public/images/blog-man-fashion1.jpg" width="600" height="670" alt="blog-man-fashion1" title="blog-man-fashion1"> </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-12 vc_col-xs-12">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column wpb_content_element">
                                                                <div class="wpb_wrapper">
                                                                    <h2>
                                                                        <strong><span style="color: #0787a3;">1. </span>Best
                                                                            men’s clothing</strong>
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                            <div class="wpb_text_column wpb_content_element">
                                                                <div class="wpb_wrapper">
                                                                    <ul>
                                                                        <li>Aliquam tincidunt mauris eu risus.</li>
                                                                        <li>Vestibulum auctor dapibus neque.</li>
                                                                        <li>Nunc dignissim risus id metus.</li>
                                                                        <li>Cras ornare tristique elit.</li>
                                                                        <li>Vivamus vestibulum nulla nec ante.</li>
                                                                        <li>Praesent placerat risus quis eros.</li>
                                                                    </ul>
                                                                    <p>Nisi a euismod vestibulum adipiscing velit.
                                                                        Eget urna parturient bibendum vestibulum cum
                                                                        feugiat morbi tellus vestibulum adipiscing
                                                                        vivamus a a natoque arcu ultrices
                                                                        condimentum. Vel amet adipiscing facilisi
                                                                        taciti parturient suspendisse a penatibus
                                                                        ultricies tincidunt suspendisse condimentum
                                                                        ullamcorper parturient condimentum litora
                                                                        morbi pulvinar bibendum a adipiscing odio
                                                                        elementum.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element">
                                                <div class="wpb_wrapper">
                                                    <p>Cras vestibulum nec scelerisque mauris id nisi consectetur mi
                                                        id ipsum justo ad a fringilla a parturient.Ante a vel
                                                        cubilia ut dignissim a adipiscing nisl mus eleifend volutpat
                                                        vestibulum suspendisse a.Adipiscing vivamus venenatis
                                                        eleifend tellus parturient ullamcorper felis lobortis
                                                        hendrerit ipsum nisl ut lobortis ipsum scelerisque
                                                        parturient.Condimentum accumsan augue id a magnis a
                                                        condimentum hac himenaeos ac malesuada nibh eros ipsum
                                                        suspendisse integer.</p>
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