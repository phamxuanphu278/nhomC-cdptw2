<!DOCTYPE html>
<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/22.less', 'css/22.css');
?>
<html lang="en">
    <head>
        <title>Module 21</title>
        <meta charset="utf-8">
        <meta name="msapplication-tap-highlight" content="no" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Basic usage demo">
        <meta name="author" content="David Deutsch">
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/rotating-card.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/22.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/hes-gallery.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo $url_path ?>/js/hes-gallery.js" type="text/javascript"></script>
        <script src="<?php echo $url_path ?>/js/22.js" type="text/javascript"></script>
    </head>
    <body>
        <?php include './22-content.php'; ?>
    </body>
</html>