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
$less->compileFile('public/less/27.less', 'public/less/27.css');

?>


<!DOCTYPE html>
<html lang="en" class="platform-Windows">
    <head >
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="<?php echo $url_path ?>/public/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $url_path ?>/public/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $url_path ?>/public/less/27.css">
        <script src="<?php echo $url_path ?>/public/js/jquery-3.1.1.min.js"></script>
        <script src="<?php echo $url_path ?>/public/js/bootstrap.min.js"></script>
        <title>Modul 27</title>
    </head>

    <body class="wrapper-full-width">
        <?php include $dir_block . './27-content.php'; ?>
    </body>

</html>