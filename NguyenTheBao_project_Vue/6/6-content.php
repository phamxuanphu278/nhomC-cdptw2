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
                        <header class="emtry-header">
                            <figure id="hinh-1" class="entry-thumbnail" data-owl-carousel="" data-hide_pagination_control="yes" data-desktop="1" data-desktop_small="1" data-tablet="1" data-mobile="1">
                                <div class="post-img-wrapp">
                                    <img data-thumb="original" original-height="853" original-width="1280" src="public/images/vans_supreme.jpg">
                                </div>
                            </figure>
                            <div class="post-date" onclick="">
                                <span class="post-date-day"> 9 </span>
                                <span class="post-date-month"> September </span>
                            </div>
                            <div class="post-mask">
                                <h1 class="entry-title-sp">VANS VÀ SUPREME</h1>
                            </div>
                        </header>
                        <div class="entry-content">
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element">
                                                <div class="wpb_wrapper">
                                                    <p class="font-title" style="font-family: Arial,Helvetica,sans-serif; font-size: 18px; color: #131313;">
                                                        Chỉ sau một vài tuần từ khi công bố bộ sưu tập lấy cảm hứng
                                                        từ Harry Porter, tháng 5
                                                        – 2019 vừa qua, fans của Vans lại có dịp chào đón sản phẩm
                                                        hợp tác Xuân – Hè của 2
                                                        thương hiệu lớn Supreme và Vans , bộ sưu tập Diamond Plate
                                                        rực rỡ “kim cương”.
                                                        Diamond Plate được thiết kế dựa trên bộ đôi Vans Sk8-Hi Pro
                                                        và Slip-On Pro rất được
                                                        yêu thích hiện nay. Đây cũng là tiền đề cho sự hợp tác trực
                                                        tiếp tiếp theo của
                                                        Supreme và Sekintani La Norihiro cho bộ sưu tập trang phục
                                                        SS19.</br>

                                                        Cả 2 mẫu giày Vans thuộc Diamond Plate đều có thiết kế tấm
                                                        kim cương ở mặt trên. Họa
                                                        tiết này cũng xuất hiện nhiều trong sản phẩm Supreme trước
                                                        đó. Tính năng cao cấp của
                                                        sản phẩm nằm ở tấm da lộn và mũ vải tạo độ bền. Trong khi
                                                        đó, lớp lót bằng da sẽ
                                                        tăng thêm tính đẳng cấp của sản phẩm, xứng đáng với cái tên
                                                        “Pro”.</br>

                                                        Phiên bản Slip-On Pro của Diamond Plate được thiết kế phần
                                                        vải phía trên hoàn toàn.
                                                        Bên trong sản phảm có bọc da êm và toàn bộ sản phẩm được in
                                                        tấm kim cương. Phần đế
                                                        màu trắng phù hợp với các chi tiết như sọc Vans hay thẻ
                                                        thương hiệu.</br>

                                                        Cách tư duy màu sắc trong các thiết kế của Diamond Plate vô
                                                        cùng thông minh. Mỗi đôi
                                                        Slip-On được bao phủ hoàn toàn bằng biến thể màu vàng, màu
                                                        đỏ hoặc màu bạc. Trong
                                                        khi đó, các đôi Sk8-Hi lại được tạo điểm nhấn bằng lớp da
                                                        phủ có màu nâu, màu xanh
                                                        biển hoặc màu đen tương ứng. Như vậy, bạn có thể tìm được ở
                                                        mỗi phiên bản 3 màu sắc:
                                                        Sk8-Hi: bản navy – đỏ, bản xám – đen và bảng vàng –
                                                        nâu.</br>
                                                        Slip-On: bản vàng, đỏ và xám.

                                                        Tất cả chúng đều là những gam màu cá tính nhưng không quá
                                                        nổi bật, chói lọi. Vì vậy,
                                                        bạn có thể mix Diamond Plate với các loại trang phục khác,
                                                        tạo nên phong cách hiện
                                                        đại và khác biệt cho bản thân.</p>
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
</div>