<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="container type23">
    <div class="row">
        <div class="col-md-3 col-sm-3">
            <img src="images/hoa.jpg" alt="" class="img-responsive img-hoa">
        </div>
        <div class="col-md-9 col-sm-9">
            <div class="signup-email">Sign up to receive notifications</div>
            <div class="line-product"> <span class="left-line"></span><h4 class="title">JOIN CHAT WITH US <span class="title-separator"><span></span></span></h4> <span class="right-line"></span></div>
            <p class="signup-text">Dis ac litora amet purus felis ullamcorper lectus venenatis a quisque consectetur rhoncus nec quam a odio cras lobortis leo varius quisque vestibulum in ultricies condimentum. Sociosqu potenti condimentum libero.</p>
             <div class="form-eamil">
                <form action="">
                    <div class="form-filed">
                        <p class="input-icon">
                            <input type="email" name="EMAIL" placeholder="Your email address..." required=""
                                class="input-field">
                        </p>
                        <p>
                            <input type="submit" value="Sign up" class="button-sb">
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>