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
$less->compileFile('less/type-13.less', 'css/type-13.css');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>13</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo $url_path ?>/css/type-13.css" rel="stylesheet" type="text/css" /> 
    <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
</head>
<body>
<?php include $dir_block.'/13-content.php'; ?>
    <script src="css/swiper.min.js"></script>
     <script type="text/javascript" src="svg-with-js/js/fontawesome-all.min.js"></script>
  <!-- Initialize Swiper -->
</body>
</html>




