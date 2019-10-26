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

                <div class="site-content col-sm-9"></div>
                    <aside class="sidebar-container col-sm-3 sidebar-right area-sidebar-1" role="complementary">
                    <div class="basel-close-sidebar-btn"><span>Close</span></div>
                    <div class="sidebar-inner basel-sidebar-scroll">
                        <div class="widget-area basel-sidebar-content">
                            <div id="categories-3" class="sidebar-widget widget_categories">
                                <h5 class="widget-title">Categories</h5>
                                <ul>
                                    <li class="cat-item cat-item-6"><a href="#">Creative</a></li>
                                    <li class="cat-item cat-item-7"><a href="#">Featured</a></li>
                                    <li class="cat-item cat-item-8"><a href="#">Hobbies</a></li>
                                    <li class="cat-item cat-item-9"><a href="#">International</a></li>
                                    <li class="cat-item cat-item-10"><a href="#">Lifestyle</a></li>
                                    <li class="cat-item cat-item-11"><a href="#">Travel</a></li>
                                </ul>
                            </div>
                            <div id="basel-recent-posts-2" class="sidebar-widget basel-recent-posts">
                                <h5 class="widget-title">Recent Posts</h5>
                                <ul class="basel-recent-posts-list">
                                    <li> <a class="recent-posts-thumbnail" href="#" rel="bookmark"> <img class="attachment-large wp-post-image " src="https://xtemos1.r.worldssl.net/basel/wp-content/uploads/2015/08/blog-new-17-70x70.jpg" width="70" height="70" alt="blog-new-17" title="blog-new-17"> </a>
                                        <div class="recent-posts-info">
                                            <h5 class="entry-title"><a href="#" title="Permalink to Venenatis veulum peus" rel="bookmark">Venenatis veulum peus</a></h5><time class="recent-posts-time" datetime="2015-08-08T11:55:46+00:00">August 8, 2015</time>
                                        </div>
                                    </li>
                                    <li> <a class="recent-posts-thumbnail" href="#" rel="bookmark"> <img class="attachment-large wp-post-image " src="https://xtemos2.r.worldssl.net/basel/wp-content/uploads/2015/08/blog-new-1-70x70.jpg" width="70" height="70" alt="blog-new-1" title="blog-new-1"> </a>
                                        <div class="recent-posts-info">
                                            <h5 class="entry-title"><a href="#" title="Permalink to Hac fames tempor" rel="bookmark">Hac fames tempor</a></h5><time class="recent-posts-time" datetime="2015-08-08T11:49:17+00:00">August 8, 2015</time>
                                        </div>
                                    </li>
                                    <li> <a class="recent-posts-thumbnail" href="#" rel="bookmark"> <img class="attachment-large wp-post-image " src="https://xtemos3.r.worldssl.net/basel/wp-content/uploads/2015/08/blog-new-photo-1-70x70.jpg" width="70" height="70" alt="blog-new-photo-1" title="blog-new-photo-1"> </a>
                                        <div class="recent-posts-info">
                                            <h5 class="entry-title"><a href="#" title="Permalink to Urna ligula inceptos" rel="bookmark">Urna ligula inceptos</a></h5><time class="recent-posts-time" datetime="2015-08-08T11:46:28+00:00">August 8, 2015</time>
                                        </div>
                                    </li>
                                    <li> <a class="recent-posts-thumbnail" href="#" rel="bookmark"> <img class="attachment-large wp-post-image " src="https://xtemos3.r.worldssl.net/basel/wp-content/uploads/2015/08/blog12-1-70x70.jpg" width="70" height="70" alt="blog12-1" title="blog12-1"> </a>
                                        <div class="recent-posts-info">
                                            <h5 class="entry-title"><a href="#" title="Permalink to Dapibus a at gravida" rel="bookmark">Dapibus a at gravida</a></h5><time class="recent-posts-time" datetime="2015-08-08T11:35:37+00:00">August 8, 2015</time>
                                        </div>
                                    </li>
                                    <li> <a class="recent-posts-thumbnail" href="#" rel="bookmark"> <img class="attachment-large wp-post-image " src="https://xtemos3.r.worldssl.net/basel/wp-content/uploads/2015/08/blog-new-11-70x70.jpg" width="70" height="70" alt="blog-new-11" title="blog-new-11"> </a>
                                        <div class="recent-posts-info">
                                            <h5 class="entry-title"><a href="#" title="Permalink to Condintum intelger ridis" rel="bookmark">Condintum intelger ridis</a></h5><time class="recent-posts-time" datetime="2015-08-04T13:52:13+00:00">August 4, 2015</time>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>