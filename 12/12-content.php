<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<!-- CODE -->
<div class="container">
    <div class="row">
       <div class="col-md-9">
           
       </div>
       <div class="col-md-3">
        <h4 class="title">OUR INSTAGRAM</h4>
        <p class="border"></p>
        <div class="col-md-4">
            <img src="images/51.jpg" alt="#" class="img-responsive"><br>
            <img src="images/54.jpg" alt="#" class="img-responsive"><br>
            <img src="images/57.jpg" alt="#" class="img-responsive"><br>

        </div>
        <div class="col-md-4">
             <img src="images/52.jpg" alt="#" class="img-responsive"><br>
             <img src="images/55.jpg" alt="#" class="img-responsive"><br>
             <img src="images/58.jpg" alt="#" class="img-responsive"><br>
        </div>
        <div class="col-md-4">
             <img src="images/53.jpg" alt="#" class="img-responsive"><br>
             <img src="images/56.jpg" alt="#" class="img-responsive"><br>
             <img src="images/59.jpg" alt="#" class="img-responsive"><br>
        </div>
        <div style="padding-left: 15px;"><i class="fab fa-instagram" style="font-size: 1.3em;"></i><span style="margin-left:10px;">view profile</span></div>
        <h4 class="title" style="padding-top:20px;">RECENT COMMENTS</h4>
        <p class="border"></p>
        <div class="recent-comments">
            <p><i class="far fa-comments" style="font-size:1.3em;"></i><span style="margin-left: 5px;font-weight: bold;">Edward Norton on </span><span>Cen’s dress shoes</span></p>

            <p><i class="far fa-comments" style="font-size:1.3em;"></i><span style="margin-left: 5px;font-weight: bold;">Edward Norton on </span><span>Basic Korean-style coat</span></p>

            <p><i class="far fa-comments" style="font-size:1.3em;"></i><span style="margin-left: 5px;font-weight: bold;">Edward Norton on </span><span> Letter and floral</span></p>

            <p><i class="far fa-comments" style="font-size:1.3em;"></i><span style="margin-left: 5px;font-weight: bold;">Edward Norton on </span><span> Letter and floral</span></p>
        </div>
       </div>
    </div>
    </div>