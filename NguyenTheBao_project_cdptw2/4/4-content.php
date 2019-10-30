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
                </header>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="site-content col-sm-12" role="main">
                    <article id="post-2" class="post-2 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_12 vc_row-no-padding vc_row-o-content-middle vc_row-flex">
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_center vc_custom_1">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper vc_box_border_grey"><img width="1000" height="1000" src="https://xtemos2.r.worldssl.net/basel/wp-content/uploads/2015/06/about-me-17.jpg" class="vc_single_image-img attachment-full" alt="" srcset="https://xtemos2.r.worldssl.net/basel/wp-content/uploads/2015/06/about-me-17.jpg 1000w, https://xtemos3.r.worldssl.net/basel/wp-content/uploads/2015/06/about-me-17-150x150.jpg 150w, https://xtemos1.r.worldssl.net/basel/wp-content/uploads/2015/06/about-me-17-300x300.jpg 300w, https://xtemos2.r.worldssl.net/basel/wp-content/uploads/2015/06/about-me-17-768x768.jpg 768w, https://xtemos3.r.worldssl.net/basel/wp-content/uploads/2015/06/about-me-17-270x270.jpg 270w, https://xtemos2.r.worldssl.net/basel/wp-content/uploads/2015/06/about-me-17-280x280.jpg 280w, https://xtemos2.r.worldssl.net/basel/wp-content/uploads/2015/06/about-me-17-263x263.jpg 263w, https://xtemos3.r.worldssl.net/basel/wp-content/uploads/2015/06/about-me-17-526x526.jpg 526w, https://xtemos2.r.worldssl.net/basel/wp-content/uploads/2015/06/about-me-17-45x45.jpg 45w" sizes="(max-width: 1000px) 100vw, 1000px"></div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6">
                                    <div class="vc_column-inner vc_custom_2">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element vc_custom_21">
                                                <div class="wpb_wrapper">
                                                    <h1 class="font-title" style="text-align: center; font-size: 42px; text-transform: capitalize;">Consectetur lobortis maecenas risus mi lacus <span style="border-bottom: 1px solid #BDBDBD; padding-bottom: 4px;">cond consequat.</span></h1>
                                                </div>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element vc_custom_22">
                                                <div class="wpb_wrapper">
                                                    <p style="text-align: center; line-height: 1.8;">Suspendisse leo sodales varius leo elementum vestibulum a elit at ultrices a mi a praesent enim libero ultrices a amet suscipit. A tempus iaculis habitasse suspendisse aenean parturient blandit a rutrum leo elementum&nbsp;purus a a et id non feugiat donec.</p>
                                                </div>
                                            </div>
                                            <div class="wpb_single_image wpb_content_element vc_align_center vc_custom_23">
                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="141" height="29" src="https://xtemos1.r.worldssl.net/basel/wp-content/uploads/2015/06/austen.jpg" class="vc_single_image-img attachment-full" alt=""></div>
                                                </figure>
                                            </div>
                                            <ul class="social-icons text-center icons-design-circle icons-size-default social-share ">
                                                <li class="social-facebook"><a rel="nofollow" href="#" target="_blank" class=""><i class="fa fa-facebook"></i><span class="basel-social-icon-name">Facebook</span></a></li>
                                                <li class="social-twitter"><a rel="nofollow" href="#" target="_blank" class=""><i class="fa fa-twitter"></i><span class="basel-social-icon-name">Twitter</span></a></li>
                                                <li class="social-email"><a rel="nofollow" href="#" target="_blank" class=""><i class="fa fa-envelope"></i><span class="basel-social-icon-name">Email</span></a></li>
                                                <li class="social-pinterest"><a rel="nofollow" href="#" target="_blank" class=""><i class="fa fa-pinterest"></i><span class="basel-social-icon-name">Pinterest</span></a></li>
                                                <li class="social-linkedin"><a rel="nofollow" href="#" target="_blank" class=""><i class="fa fa-linkedin"></i><span class="basel-social-icon-name">LinkedIn</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width vc_clearfix"></div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>