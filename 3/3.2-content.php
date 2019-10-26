<?php

$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
    require_once($dir_block.'/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('less/type-3.less', 'css/type-3.css');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>3</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo $url_path ?>/css/type-3.css" rel="stylesheet" type="text/css" /> 
    <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div id="menu">
        <ul>
            <li><a href="3.php"><h4>Description</h4></a></li>
            <li><a href="3.1-content.php"><h4>Additional information</h4></a></li>
            <li><a href="./3.3-content.php"><h4>Reviews</h4></a></li>
            <li><a href="3.2-content.php"><h4>Shipping & Delivery</h4></a></li>
        </ul>
    </div>
    <div class="container">
       <div class="row">
           <div class="col-md-3">
               <img src="https://xtemos2.r.worldssl.net/basel/wp-content/uploads/2015/08/shipping.jpg" alt="#" class="img-responsive">
           </div>
           <div class="col-md-9">
               <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, nemo eius. Aliquam nam exercitationem sint officiis reprehenderit, atque quam. Officiis autem, quasi dolorum consectetur repellendus vel eaque quam doloribus voluptate.
                <br>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, nemo eius. Aliquam nam exercitationem sint officiis reprehenderit, atque quam. Officiis autem, quasi dolorum consectetur repellendus vel eaque quam doloribus voluptate.
                Aliquam nam exercitationem sint officiis reprehenderit, atque quam.
                <br>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, nemo eius. Aliquam nam exercitationem sint officiis reprehenderit, atque quam. Officiis autem, quasi dolorum consectetur repellendus vel eaque quam doloribus voluptate.
                Aliquam nam exercitationem sint officiis reprehenderit, atque quam.
               </p>
           </div>
       </div>
    </div>
</p>
</div>
</body>
</html>




