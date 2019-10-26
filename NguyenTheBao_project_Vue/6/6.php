<?php

$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/public/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('public/less/6.less', 'public/less/6.css');

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="<?php echo $url_path ?>/public/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $url_path ?>/public/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $url_path ?>/public/less/6.css">
        <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js"></script> -->
        <script src="<?php echo $url_path ?>/public/js/jquery-3.1.1.min.js"></script>
        <script src="<?php echo $url_path ?>/public/js/bootstrap.min.js"></script>
        <title>Modul 6</title>
    </head>

    <body>
        <?php include $dir_block . './6-content.php'; ?>
    </body>

</html>