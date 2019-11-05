<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-11">
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
                <aside class="sidebar-container col-sm-3 sidebar-right area-sidebar-1">
                    <div class="basel-close-sidebar-btn"><span>Close</span></div>
                    <div class="sidebar-inner basel-sidebar-scroll">
                        <div class="widget-area basel-sidebar-content">
                            <div id="basel-instagram-5" class="sidebar-widget basel-instagram">
                                <h5 class="widget-title">Our Instagram</h5>
                                <div id="carousel-insta" class="instagram-widget data-source-scrape instagram-per-row-" data-atts="{&quot;title&quot;:&quot;&quot;,&quot;username&quot;:&quot;mikutas&quot;,&quot;number&quot;:&quot;9&quot;,&quot;size&quot;:&quot;thumbnail&quot;,&quot;target&quot;:&quot;_blank&quot;,&quot;link&quot;:&quot;View profile&quot;,&quot;design&quot;:&quot;&quot;,&quot;spacing&quot;:&quot;&quot;,&quot;rounded&quot;:&quot;&quot;,&quot;per_row&quot;:&quot;&quot;,&quot;content&quot;:&quot;&quot;,&quot;data_source&quot;:&quot;scrape&quot;}" data-username="mikutas">
                                    <ul class="instagram-pics ">
                                        <li style="background-image: url();"> <a href="#" target="_blank"></a>
                                            <div class="wrapp-pics"> <img src="//instagram.fdnk1-1.fna.fbcdn.net/vp/03a9b6562d5b8ffea4ac5e0270c9e6c7/5E24FEB2/t51.2885-15/e35/c0.180.1440.1440a/s150x150/71102529_1402173669959257_7686222594640129030_n.jpg?_nc_ht=instagram.fdnk1-1.fna.fbcdn.net&amp;_nc_cat=1">
                                                <div class="hover-mask"></div>
                                            </div>
                                        </li>
                                        <li style="background-image: url();"> <a href="#" target="_blank"></a>
                                            <div class="wrapp-pics"> <img src="//instagram.fdnk1-1.fna.fbcdn.net/vp/03a9b6562d5b8ffea4ac5e0270c9e6c7/5E24FEB2/t51.2885-15/e35/c0.180.1440.1440a/s150x150/71102529_1402173669959257_7686222594640129030_n.jpg?_nc_ht=instagram.fdnk1-1.fna.fbcdn.net&amp;_nc_cat=1">
                                                <div class="hover-mask"></div>
                                            </div>
                                        </li>
                                        <li style="background-image: url();"> <a href="#" target="_blank"></a>
                                            <div class="wrapp-pics"> <img src="//instagram.fdnk1-1.fna.fbcdn.net/vp/03a9b6562d5b8ffea4ac5e0270c9e6c7/5E24FEB2/t51.2885-15/e35/c0.180.1440.1440a/s150x150/71102529_1402173669959257_7686222594640129030_n.jpg?_nc_ht=instagram.fdnk1-1.fna.fbcdn.net&amp;_nc_cat=1">
                                                <div class="hover-mask"></div>
                                            </div>
                                        </li>
                                        <li style="background-image: url();"> <a href="#" target="_blank"></a>
                                            <div class="wrapp-pics"> <img src="//instagram.fdnk1-1.fna.fbcdn.net/vp/03a9b6562d5b8ffea4ac5e0270c9e6c7/5E24FEB2/t51.2885-15/e35/c0.180.1440.1440a/s150x150/71102529_1402173669959257_7686222594640129030_n.jpg?_nc_ht=instagram.fdnk1-1.fna.fbcdn.net&amp;_nc_cat=1">
                                                <div class="hover-mask"></div>
                                            </div>
                                        </li>
                                        <li style="background-image: url();"> <a href="#" target="_blank"></a>
                                            <div class="wrapp-pics"> <img src="//instagram.fdnk1-1.fna.fbcdn.net/vp/03a9b6562d5b8ffea4ac5e0270c9e6c7/5E24FEB2/t51.2885-15/e35/c0.180.1440.1440a/s150x150/71102529_1402173669959257_7686222594640129030_n.jpg?_nc_ht=instagram.fdnk1-1.fna.fbcdn.net&amp;_nc_cat=1">
                                                <div class="hover-mask"></div>
                                            </div>
                                        </li>
                                        <li style="background-image: url();"> <a href="#" target="_blank"></a>
                                            <div class="wrapp-pics"> <img src="//instagram.fdnk1-1.fna.fbcdn.net/vp/03a9b6562d5b8ffea4ac5e0270c9e6c7/5E24FEB2/t51.2885-15/e35/c0.180.1440.1440a/s150x150/71102529_1402173669959257_7686222594640129030_n.jpg?_nc_ht=instagram.fdnk1-1.fna.fbcdn.net&amp;_nc_cat=1">
                                                <div class="hover-mask"></div>
                                            </div>
                                        </li>
                                        <li style="background-image: url();"> <a href="#" target="_blank"></a>
                                            <div class="wrapp-pics"> <img src="//instagram.fdnk1-1.fna.fbcdn.net/vp/03a9b6562d5b8ffea4ac5e0270c9e6c7/5E24FEB2/t51.2885-15/e35/c0.180.1440.1440a/s150x150/71102529_1402173669959257_7686222594640129030_n.jpg?_nc_ht=instagram.fdnk1-1.fna.fbcdn.net&amp;_nc_cat=1">
                                                <div class="hover-mask"></div>
                                            </div>
                                        </li>
                                        <li style="background-image: url();"> <a href="#" target="_blank"></a>
                                            <div class="wrapp-pics"> <img src="//instagram.fdnk1-1.fna.fbcdn.net/vp/03a9b6562d5b8ffea4ac5e0270c9e6c7/5E24FEB2/t51.2885-15/e35/c0.180.1440.1440a/s150x150/71102529_1402173669959257_7686222594640129030_n.jpg?_nc_ht=instagram.fdnk1-1.fna.fbcdn.net&amp;_nc_cat=1">
                                                <div class="hover-mask"></div>
                                            </div>
                                        </li>
                                        <li style="background-image: url();"> <a href="#" target="_blank"></a>
                                            <div class="wrapp-pics"> <img src="//instagram.fdnk1-1.fna.fbcdn.net/vp/03a9b6562d5b8ffea4ac5e0270c9e6c7/5E24FEB2/t51.2885-15/e35/c0.180.1440.1440a/s150x150/71102529_1402173669959257_7686222594640129030_n.jpg?_nc_ht=instagram.fdnk1-1.fna.fbcdn.net&amp;_nc_cat=1">
                                                <div class="hover-mask"></div>
                                            </div>
                                        </li>
                                    </ul>
                                    <p class="clear"><a href="#" rel="me" target="_blank">View profile</a></p>
                                </div>
                            </div>
                            <div id="recent-comments-6" class="sidebar-widget widget_recent_comments">
                                <h5 class="widget-title">Recent Comments</h5>
                                <ul id="recentcomments">
                                    <li class="recentcomments"><span class="comment-author-link">Edward Norton</span> on <a href="#">Cen’s dress shoes</a></li>
                                    <li class="recentcomments"><span class="comment-author-link">Edward Norton</span> on <a href="#">Basic Korean-style coat</a></li>
                                    <li class="recentcomments"><span class="comment-author-link">Edward Norton</span> on <a href="#">Letter and floral</a></li>
                                    <li class="recentcomments"><span class="comment-author-link">Eric Watson</span> on <a href="#">Letter and floral</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>

<div class="basel-toolbar icons-design-line basel-toolbar-label-show">
    <div class="basel-toolbar-shop basel-toolbar-item"> 
        <a href="#"> 
            <span class="basel-toolbar-label"> Shop </span> 
        </a>
    </div> 
    <a href="#" class="basel-sticky-sidebar-opener sticky-toolbar" id="mySidebar"> 
        <span class="basel-sidebar-opener-label basel-toolbar-label"> Sidebar </span> 
    </a>
    <div class="wishlist-info-widget" title="My wishlist"> 
        <a href="#"> 
            <span class="wishlist-count"> 0 </span> 
            <span class="basel-toolbar-label"> Wishlist </span> 
        </a>
    </div>
    <div class="shopping-cart basel-cart-design-3  cart-widget-opener" title="My cart"> 
        <a href="#"> <span class="basel-cart-totals"> 
            <span class="basel-cart-number">0</span>
            </span> <span class="basel-toolbar-label"> Cart </span> 
        </a>
    </div>
    <div class="basel-toolbar-account basel-toolbar-item login-side-opener"> 
        <a href="#"> <span class="basel-toolbar-label"> My account </span> </a>
    </div>
</div>