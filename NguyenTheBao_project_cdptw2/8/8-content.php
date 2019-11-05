<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-8">
    <div class="main-page-wrapper">
        <div class="page-title page-title-default title-size-small title-design-centered color-scheme-light title-blog">
            <div class="container">
                <header class="entry-header">
                    <h3 class="entry-title">
                        <span>Blog</span>
                    </h3>
                    <div class="breadcrumbs">
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
                                            <div id="bm-1" class="vc_carousel_container">
                                                <div class="swiper-container">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <div class="product-item owl-carousel-item">
                                                                <div class="owl-carousel-item-inner">
                                                                    <div class="product-grid-item basel-hover-alt " data-loop="1" data-id="1">
                                                                        <div class="product-element-top">
                                                                            <a href="#">
                                                                                <div class="product-labels labels-rounded">
                                                                                    <span class="onsale product-label">-18%</span>
                                                                                </div>
                                                                                <img width="273" height="348" src="public/images/sp-1.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="public/images/sp-1.jpg 870w, public/images/sp-1.jpg 235w, public/images/sp-1.jpg 768w, public/images/sp-1.jpg 803w, public/images/sp-1.jpg 266w, public/images/sp-1.jpg 219w, public/images/sp-1.jpg 263w, public/images/sp-1.jpg 526w" sizes="(max-width: 197px) 100vw, 197px">
                                                                            </a>
                                                                            <div class="hover-img">
                                                                                <a href="#">
                                                                                    <img width="273" height="348" src="public/images/sp-1_1.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="public/images/sp-1_1.jpg 870w, public/images/sp-1_1.jpg 235w, public/images/sp-1_1.jpg 768w, public/images/sp-1_1.jpg 803w, public/images/sp-1_1.jpg 266w, public/images/sp-1_1.jpg 219w, public/images/sp-1_1.jpg 263w, public/images/sp-1_1.jpg 526w" sizes="(max-width: 273px) 100vw, 273px">
                                                                                </a>
                                                                            </div>

                                                                            <div class="buttons">
                                                                                <div class="wishlist-btn"> 
                                                                                    <a class="button basel-tooltip" href="#"><span class="basel-tooltip-label">Add to wishlist</span>Add to wishlist</a>
                                                                                </div>
                                                                                <div class="compare-btn">
                                                                                    <a class="button basel-tooltip" href="#"><span class="basel-tooltip-label">Compare</span>Compare</a>
                                                                                </div>
                                                                                <div class="quick-view"> 
                                                                                    <a class="button quick-view" href="#"><span class="basel-tooltip-label">Quick View</span>Quick View</a>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <h3 class="product-title"><a href="#">Rentre zipper cloth coat</a></h3>
                                                                        <div class="wrap-price">
                                                                            <div class="wrapp-swap">
                                                                                <div class="swap-elements"> 
                                                                                    <span class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>560.00</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>460.00</span></ins></span>
                                                                                    <div class="btn-add"> <a href="#" data-quantity="1" class="button product_type_variable add_to_cart_button basel-tooltip" data-product_id="19592" data-product_sku="" aria-label="Select options for “Rentre zipper cloth coat”" rel="nofollow"><span class="basel-tooltip-label">Select options</span>Select options</a></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="swatches-on-grid">
                                                                                <div class="swatch-on-grid" style="background-color:#0c0c0c;">
                                                                                    <span class="basel-tooltip-label">Black</span>Black
                                                                                </div>
                                                                                <div class="swatch-on-grid" style="background-color:#aa6927;">
                                                                                    <span class="basel-tooltip-label">Brown</span>Brown
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="product-item owl-carousel-item">
                                                                <div class="owl-carousel-item-inner">
                                                                    <div class="product-grid-item basel-hover-alt" data-loop="2" data-id="2">
                                                                        <div class="product-element-top">
                                                                            <a href="#">
                                                                                <img width="273" height="348" src="public/images/sp-2.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="public/images/sp-2.jpg 870w, public/images/sp-2.jpg 235w, public/images/sp-2.jpg 768w, public/images/sp-2.jpg 803w, public/images/sp-2.jpg 266w, public/images/sp-2.jpg 219w, public/images/sp-2.jpg 263w, public/images/sp-2.jpg 526w" sizes="(max-width: 197px) 100vw, 197px">
                                                                            </a>
                                                                            <div class="hover-img">
                                                                                <a href="#">
                                                                                    <img width="273" height="348" src="public/images/sp-2_2.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="public/images/sp-2_2.jpg 870w, public/images/sp-2_2.jpg 235w, public/images/sp-2_2.jpg 768w, public/images/sp-2_2.jpg 803w, public/images/sp-2_2.jpg 266w, public/images/sp-2_2.jpg 219w, public/images/sp-2_2.jpg 263w, public/images/sp-2_2.jpg 526w" sizes="(max-width: 197px) 100vw, 197px">
                                                                                </a>
                                                                            </div>

                                                                            <div class="buttons">
                                                                                <div class="wishlist-btn"> 
                                                                                    <a class="button basel-tooltip" href="#"><span class="basel-tooltip-label">Add to wishlist</span>Add to wishlist</a>
                                                                                </div>
                                                                                <div class="compare-btn">
                                                                                    <a class="button basel-tooltip" href="#"><span class="basel-tooltip-label">Compare</span>Compare</a>
                                                                                </div>
                                                                                <div class="quick-view"> 
                                                                                    <a class="button quick-view" href="#"><span class="basel-tooltip-label">Quick View</span>Quick View</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <h3 class="product-title"><a href="#">Vessage and print t-shirt</a></h3>
                                                                        <div class="wrap-price">
                                                                            <div class="wrapp-swap">
                                                                                <div class="swap-elements"> 
                                                                                    <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>399.00</span></span>
                                                                                    <div class="btn-add"> 
                                                                                        <a href="#" class="button add_to_cart_button ajax_add_to_cart basel-tooltip" data-product_id="2" data-product_sku="" aria-label="Add “Vessage and print t-shirt” to your cart" rel="nofollow"><span class="basel-tooltip-label">Add to cart</span>Add to cart</a></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="product-item owl-carousel-item">
                                                                <div class="owl-carousel-item-inner">
                                                                    <div class="product-grid-item basel-hover-alt product product-in-carousel type-product post-19563 status-publish instock product_cat-man product_tag-new product_tag-t-shirt has-post-thumbnail shipping-taxable purchasable product-type-variable" data-loop="3" data-id="19563">
                                                                        <div class="product-element-top">
                                                                            <a href="#">
                                                                                <img width="273" height="348" src="public/images/sp-3.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="public/images/sp-3.jpg 870w, public/images/sp-3.jpg 235w, public/images/sp-3.jpg 768w, public/images/sp-3.jpg 803w, public/images/sp-3.jpg 266w, public/images/sp-3.jpg 219w, public/images/sp-3.jpg 263w, public/images/sp-3.jpg 526w" sizes="(max-width: 197px) 100vw, 197px">
                                                                            </a>
                                                                            <div class="hover-img">
                                                                                <a href="#">
                                                                                    <img width="273" height="348" src="public/images/sp-3_3.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="public/images/sp-3_3.jpg 870w, public/images/sp-3_3.jpg 235w, public/images/sp-3_3.jpg 768w, public/images/sp-3_3.jpg 803w, public/images/sp-3_3.jpg 266w, public/images/sp-3_3.jpg 219w, public/images/sp-3_3.jpg 263w, public/images/sp-3_3.jpg 526w" sizes="(max-width: 197px) 100vw, 197px">
                                                                                </a>
                                                                            </div>
                                                                            <div class="buttons">
                                                                                <div class="wishlist-btn"> 
                                                                                    <a class="button basel-tooltip" href="#"><span class="basel-tooltip-label">Add to wishlist</span>Add to wishlist</a>
                                                                                </div>
                                                                                <div class="compare-btn">
                                                                                    <a class="button basel-tooltip" href="#"><span class="basel-tooltip-label">Compare</span>Compare</a>
                                                                                </div>
                                                                                <div class="quick-view"> 
                                                                                    <a class="button quick-view" href="#"><span class="basel-tooltip-label">Quick View</span>Quick View</a>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <h3 class="product-title"><a href="#">New t-shirt with side</a></h3>
                                                                        <div class="wrap-price">
                                                                            <div class="wrapp-swap">
                                                                                <div class="swap-elements"> <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>412.00</span></span>
                                                                                    <div class="btn-add"> <a href="#" data-quantity="1" class="button product_type_variable add_to_cart_button basel-tooltip" data-product_id="19592" data-product_sku="" aria-label="Select options for “Rentre zipper cloth coat”" rel="nofollow"><span class="basel-tooltip-label">Select options</span>Select options</a></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="swatches-on-grid">
                                                                                <div class="swatch-on-grid" style="background-color:#db4332;"><span class="basel-tooltip-label">Red</span>Red</div>
                                                                                <div class="swatch-on-grid" style="background-color:#539b2d;"><span class="basel-tooltip-label">Green</span>Green</div>
                                                                                <div class="swatch-on-grid" style="background-color:#1c9bb5;"><span class="basel-tooltip-label">Blue</span>Blue</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="product-item owl-carousel-item">
                                                                <div class="owl-carousel-item-inner">
                                                                    <div class="product-grid-item basel-hover-alt product product-in-carousel type-product post-19554 status-publish last instock product_cat-man product_tag-new product_tag-polo has-post-thumbnail shipping-taxable purchasable product-type-simple" data-loop="4" data-id="19554">
                                                                        <div class="product-element-top">
                                                                            <a href="#">
                                                                                <img width="197" height="251" src="public/images/sp-4.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="public/images/sp-4.jpg 870w, public/images/sp-4.jpg 235w, public/images/sp-4.jpg 768w, public/images/sp-4.jpg 803w, public/images/sp-4.jpg 266w, public/images/sp-4.jpg 219w, public/images/sp-4.jpg 263w, public/images/sp-4.jpg 526w" sizes="(max-width: 197px) 100vw, 197px">
                                                                            </a>
                                                                            <div class="hover-img">
                                                                                <a href="#">
                                                                                    <img width="273" height="348" src="public/images/sp-4_4.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="public/images/sp-4_4.jpg 870w, public/images/sp-4_4.jpg 235w, public/images/sp-4_4.jpg 768w, public/images/sp-4_4.jpg 803w, public/images/sp-4_4.jpg 266w, public/images/sp-4_4.jpg 219w, public/images/sp-4_4.jpg 263w, public/images/sp-4_4.jpg 526w" sizes="(max-width: 197px) 100vw, 197px">
                                                                                </a>
                                                                            </div>

                                                                            <div class="buttons">
                                                                                <div class="wishlist-btn"> 
                                                                                    <a class="button basel-tooltip" href="#"><span class="basel-tooltip-label">Add to wishlist</span>Add to wishlist</a>
                                                                                </div>
                                                                                <div class="compare-btn">
                                                                                    <a class="button basel-tooltip" href="#"><span class="basel-tooltip-label">Compare</span>Compare</a>
                                                                                </div>
                                                                                <div class="quick-view"> 
                                                                                    <a class="button quick-view" href="#"><span class="basel-tooltip-label">Quick View</span>Quick View</a>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <h3 class="product-title"><a href="#">Gleev checked shirt</a></h3>
                                                                        <div class="wrap-price">
                                                                            <div class="wrapp-swap">
                                                                                <div class="swap-elements"> <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>357.00</span></span>
                                                                                    <div class="btn-add"> <a href="#" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart basel-tooltip" data-product_id="19554" data-product_sku="" aria-label="Add “Gleev checked shirt” to your cart" rel="nofollow"><span class="basel-tooltip-label">Add to cart</span>Add to cart</a></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="product-item owl-carousel-item">
                                                                <div class="owl-carousel-item-inner">
                                                                    <div class="product-grid-item basel-hover-alt product product-in-carousel type-product post-19553 status-publish first instock product_cat-man product_tag-basic product_tag-shirt has-post-thumbnail shipping-taxable purchasable product-type-simple" data-loop="5" data-id="19553">
                                                                        <div class="product-element-top">
                                                                            <img width="197" height="251" src="public/images/sp-5.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="public/images/sp-5.jpg 870w, public/images/sp-5.jpg 235w, public/images/sp-5.jpg 768w, public/images/sp-5.jpg 803w, public/images/sp-5.jpg 266w, public/images/sp-5.jpg 219w, public/images/sp-5.jpg 263w, public/images/sp-5.jpg 526w" sizes="(max-width: 197px) 100vw, 197px">
                                                                            </a>
                                                                            <div class="hover-img">
                                                                                <a href="#">
                                                                                    <img width="273" height="348" src="public/images/sp-5_5.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="public/images/sp-5_5.jpg 870w, public/images/sp-5_5.jpg 235w, public/images/sp-5_5.jpg 768w, public/images/sp-5_5.jpg 803w, public/images/sp-5_5.jpg 266w, public/images/sp-5_5.jpg 219w, public/images/sp-5_5.jpg 263w, public/images/sp-5_5.jpg 526w" sizes="(max-width: 197px) 100vw, 197px">
                                                                                </a>
                                                                            </div>
                                                                            <div class="buttons">
                                                                                <div class="wishlist-btn"> 
                                                                                    <a class="button basel-tooltip" href="#"><span class="basel-tooltip-label">Add to wishlist</span>Add to wishlist</a>
                                                                                </div>
                                                                                <div class="compare-btn">
                                                                                    <a class="button basel-tooltip" href="#"><span class="basel-tooltip-label">Compare</span>Compare</a>
                                                                                </div>
                                                                                <div class="quick-view"> 
                                                                                    <a class="button quick-view" href="#"><span class="basel-tooltip-label">Quick View</span>Quick View</a>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <h3 class="product-title"><a href="#">Coloured jacket basic</a></h3>
                                                                        <div class="wrap-price">
                                                                            <div class="wrapp-swap">
                                                                                <div class="swap-elements"> <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>269.00</span></span>
                                                                                    <div class="btn-add"> <a href="/basel/posuere-at-mi-a-sem/?add-to-cart=19553" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart basel-tooltip" data-product_id="19553" data-product_sku="" aria-label="Add “Coloured jacket basic” to your cart" rel="nofollow"><span class="basel-tooltip-label">Add to cart</span>Add to cart</a></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Add Pagination -->
                                                    <div class="swiper-button-next"></div>
                                                    <div class="swiper-button-prev"></div>
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