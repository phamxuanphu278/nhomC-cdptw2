<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-5">
    <div class="main-page-wrapper">
        <div class="page-title page-title-default title-size-small title-design-centered color-scheme-light title-blog">
            <div class="container">
                <header class="entry-header">
                </header>
            </div>
        </div>
        <section class="section sec_reason" id="section_GT">
            <div class="bg section-bg fill bg-fill  bg-loaded"></div>

            <div class="section-content relative">

                <div class="gap-element clearfix" style="display:block; height:auto; padding-top:50px"></div>
                <div class="row" id="row-GT">
                    <div class="col medium-6 small-12 large-6">
                        <div class="col-inner">

                            <div class="icon-box featured-box icon-box-left text-left">
                                <div class="icon-box-img" style="width: 50px">
                                    <div class="icon">
                                        <div class="icon-inner" style="color:rgb(195, 0, 5);">

                                            <i class="fas fa-truck"></i>


                                        </div>
                                    </div>
                                </div>
                                <div class="icon-box-text last-reset">

                                    <h3>Miễn phí giao hàng</h3>
                                    <p>Tại đây, mỗi một dòng chữ, mỗi chi tiết và hình ảnh đều là những bằng chứng mang dấu ấn lịch sử Converse 100 năm, và đang không ngừng phát triển lớn mạnh</p>
                                </div>
                            </div><!-- .icon-box -->


                        </div>
                    </div>
                    <div class="col medium-6 small-12 large-6">
                        <div class="col-inner">

                            <div class="icon-box featured-box icon-box-left text-left">
                                <div class="icon-box-img" style="width: 50px">
                                    <div class="icon">
                                        <div class="icon-inner" style="color:rgb(195, 0, 5);">
                                            <i class="fa fa-refresh" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-box-text last-reset">

                                    <h3>Đổi trả trong vòng 7 ngày</h3>
                                    <p>Tại đây, mỗi một dòng chữ, mỗi chi tiết và hình ảnh đều là những bằng chứng mang dấu ấn lịch sử Converse 100 năm, và đang không ngừng phát triển lớn mạnh</p>
                                </div>
                            </div><!-- .icon-box -->


                        </div>
                    </div>
                    <div class="col medium-6 small-12 large-6">
                        <div class="col-inner">

                            <div class="icon-box featured-box icon-box-left text-left">
                                <div class="icon-box-img" style="width: 50px">
                                    <div class="icon">
                                        <div class="icon-inner" style="color:rgb(195, 0, 5);">
                                            <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-box-text last-reset">

                                    <h3>Sản phẩm mới 100%</h3>
                                    <p>Tại đây, mỗi một dòng chữ, mỗi chi tiết và hình ảnh đều là những bằng chứng mang dấu ấn lịch sử Converse 100 năm, và đang không ngừng phát triển lớn mạnh</p>
                                </div>
                            </div><!-- .icon-box -->


                        </div>
                    </div>
                    <div class="col medium-6 small-12 large-6">
                        <div class="col-inner">

                            <div class="icon-box featured-box icon-box-left text-left">
                                <div class="icon-box-img" style="width: 50px">
                                    <div class="icon">
                                        <div class="icon-inner" style="color:rgb(195, 0, 5);">
                                            <i class="fas fa-comments"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-box-text last-reset">

                                    <h3>Chăm sóc khách hàng</h3>
                                    <p>Tại đây, mỗi một dòng chữ, mỗi chi tiết và hình ảnh đều là những bằng chứng mang dấu ấn lịch sử Converse 100 năm, và đang không ngừng phát triển lớn mạnh</p>
                                </div>
                            </div><!-- .icon-box -->


                        </div>
                    </div>
                    <div class="col medium-6 small-12 large-6">
                        <div class="col-inner">

                            <div class="icon-box featured-box icon-box-left text-left">
                                <div class="icon-box-img" style="width: 50px">
                                    <div class="icon">
                                        <div class="icon-inner" style="color:rgb(195, 0, 5);">
                                            <i class="fa fa-shield" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-box-text last-reset">

                                    <h3>Hàng chính hãng</h3>
                                    <p>Tại đây, mỗi một dòng chữ, mỗi chi tiết và hình ảnh đều là những bằng chứng mang dấu ấn lịch sử Converse 100 năm, và đang không ngừng phát triển lớn mạnh</p>
                                </div>
                            </div><!-- .icon-box -->


                        </div>
                    </div>
                    <div class="col medium-6 small-12 large-6">
                        <div class="col-inner">

                            <div class="icon-box featured-box icon-box-left text-left">
                                <div class="icon-box-img" style="width: 50px">
                                    <div class="icon">
                                        <div class="icon-inner" style="color:rgb(195, 0, 5);">
                                            <i class="fa fa-money" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-box-text last-reset">

                                    <h3>Thanh toán đa dạng</h3>
                                    <p>Tại đây, mỗi một dòng chữ, mỗi chi tiết và hình ảnh đều là những bằng chứng mang dấu ấn lịch sử Converse 100 năm, và đang không ngừng phát triển lớn mạnh</p>
                                </div>
                            </div><!-- .icon-box -->


                        </div>
                    </div>
                </div>
                <div class="gap-element clearfix" style="display:block; height:auto; padding-top:30px"></div>
            </div><!-- .section-content -->


            <style scope="scope">
                #section_327854674 {
                    padding-top: 0px;
                    padding-bottom: 0px;
                }
            </style>
        </section>
    </div>
</div>