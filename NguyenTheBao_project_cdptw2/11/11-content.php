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
                                            <div class="wrapp-pics"> <img src="//instagram.fdnk1-1.fna.fbcdn.net/vp/2b465709375209468ecc146ac632ff34/5E2E1AEE/t51.2885-15/e35/c0.169.1349.1349a/s150x150/70270883_2427060954197605_6801046033586419197_n.jpg?_nc_ht=instagram.fdnk1-1.fna.fbcdn.net&amp;_nc_cat=101">
                                                <div class="hover-mask"></div>
                                            </div>
                                        </li>
                                        <li style="background-image: url();"> <a href="#" target="_blank"></a>
                                            <div class="wrapp-pics"> <img src="//instagram.fdnk1-1.fna.fbcdn.net/vp/5763b365c1a76467e5dda1e30cb0ae64/5E33A2E8/t51.2885-15/e35/c0.169.1349.1349a/s150x150/69900864_2365534446898618_192140620773672175_n.jpg?_nc_ht=instagram.fdnk1-1.fna.fbcdn.net&amp;_nc_cat=110">
                                                <div class="hover-mask"></div>
                                            </div>
                                        </li>
                                        <li style="background-image: url();"> <a href="#" target="_blank"></a>
                                            <div class="wrapp-pics"> <img src="//instagram.fdnk1-1.fna.fbcdn.net/vp/bf47231f90cdd7be6b5bf762e6310d95/5E0302CE/t51.2885-15/e35/c0.180.1440.1440a/s150x150/69265308_525459361545522_6151250926756652029_n.jpg?_nc_ht=instagram.fdnk1-1.fna.fbcdn.net&amp;_nc_cat=106">
                                                <div class="hover-mask"></div>
                                            </div>
                                        </li>
                                        <li style="background-image: url();"> <a href="#" target="_blank"></a>
                                            <div class="wrapp-pics"> <img src="//instagram.fdnk1-1.fna.fbcdn.net/vp/0044761fe695ac9da82f41f0301ae066/5E01FC6B/t51.2885-15/e35/c0.180.1440.1440a/s150x150/69115919_937883466572224_6068788677357002485_n.jpg?_nc_ht=instagram.fdnk1-1.fna.fbcdn.net&amp;_nc_cat=104">
                                                <div class="hover-mask"></div>
                                            </div>
                                        </li>
                                        <li style="background-image: url();"> <a href="#" target="_blank"></a>
                                            <div class="wrapp-pics"> <img src="//instagram.fdnk1-1.fna.fbcdn.net/vp/63b734e21750711e329605e37096f5e9/5E3CB300/t51.2885-15/e35/c0.169.1349.1349a/s150x150/70050168_765431303913531_6277249989194097693_n.jpg?_nc_ht=instagram.fdnk1-1.fna.fbcdn.net&amp;_nc_cat=103">
                                                <div class="hover-mask"></div>
                                            </div>
                                        </li>
                                        <li style="background-image: url();"> <a href="#" target="_blank"></a>
                                            <div class="wrapp-pics"> <img src="//instagram.fdnk1-1.fna.fbcdn.net/vp/e93b73818c51bcc02509799c7ac14632/5E1F336E/t51.2885-15/e35/c0.169.1349.1349a/s150x150/69490179_2353612818193098_978856644105606958_n.jpg?_nc_ht=instagram.fdnk1-1.fna.fbcdn.net&amp;_nc_cat=106">
                                                <div class="hover-mask"></div>
                                            </div>
                                        </li>
                                        <li style="background-image: url();"> <a href="#" target="_blank"></a>
                                            <div class="wrapp-pics"> <img src="//instagram.fdnk1-1.fna.fbcdn.net/vp/928216f2421fb93e4b1a9fd7ac4c8d01/5E338197/t51.2885-15/e35/c0.180.1440.1440a/s150x150/69666080_131056121536693_7434174066561386769_n.jpg?_nc_ht=instagram.fdnk1-1.fna.fbcdn.net&amp;_nc_cat=101">
                                                <div class="hover-mask"></div>
                                            </div>
                                        </li>
                                        <li style="background-image: url();"> <a href="#" target="_blank"></a>
                                            <div class="wrapp-pics"> <img src="//instagram.fdnk1-1.fna.fbcdn.net/vp/1c3612f846f6dd5434d7b3ca2c235cfa/5E263634/t51.2885-15/e35/c0.169.1349.1349a/s150x150/69377746_514742039291861_5163799389665740440_n.jpg?_nc_ht=instagram.fdnk1-1.fna.fbcdn.net&amp;_nc_cat=105">
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
                                    <li class="recentcomments"><span class="comment-author-link">Edward Norton</span> on <a href="https://demo.xtemos.com/basel/shop/shoes/hrim-sports-shoes/#comment-70190">Cen’s dress shoes</a></li>
                                    <li class="recentcomments"><span class="comment-author-link">Edward Norton</span> on <a href="https://demo.xtemos.com/basel/shop/man/hooded-jacquard-jumper/#comment-31373">Basic Korean-style coat</a></li>
                                    <li class="recentcomments"><span class="comment-author-link">Edward Norton</span> on <a href="https://demo.xtemos.com/basel/shop/man/gleev-checked-shirt/#comment-31372">Letter and floral</a></li>
                                    <li class="recentcomments"><span class="comment-author-link">Eric Watson</span> on <a href="https://demo.xtemos.com/basel/shop/man/gleev-checked-shirt/#comment-31370">Letter and floral</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>