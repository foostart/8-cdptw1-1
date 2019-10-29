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
$less->compileFile('less/1721.less', 'css/1721.css');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>1721</title>
        <link rel="stylesheet" type="text/css" href="css/swiper.min.css">
        <link rel="stylesheet" type="text/css" href="css/1721.css">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="js/swiper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/1721.js"></script>
    </head>
    <body>
        <?php include '../1721/1721-content.php'; ?>
    </body>
</html>
