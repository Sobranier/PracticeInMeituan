<!DOCTYPE html>
<html>
<head lang="en">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="keywords" content="yunshanmeicai,meicai,云杉美菜,美菜网">

    <title>
<?php
    if (isset($fullTitle)) {
        echo $fullTitle;
    } else if (isset($title)) {
        echo '美菜网 | ', $title;
    } else {
        echo '美菜网';
    }
?>
    </title>

    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link rel="shortcut icon" href="../../i/sitelogo_32X32.ico" type="image/x-icon">
<?php
    $link = '<link rel="stylesheet" href="%s/css/partials/%s.css">';
    $rel = '../..';
    echo sprintf ($link, $rel, 'base');
    if (isset($cssfile)) {
        foreach ($cssfile as $value) {
            echo sprintf ($link, $rel, $value);
        }
    }
?>
    <script src="../../bootstrap/jquery-2.1.1.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
