<!DOCTYPE html>
<html>
<head lang="en">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="keywords" content="yunshanmeicai,meicai,云杉美菜,云杉信息,美菜网,饭店,原材料配送,生鲜,蔬菜,买菜,刘传军,徐薛胤,窝窝团">
    <meta name="description" content="美菜网 - 中国最早，口碑最好的农产品移动电商，自营涵盖：新鲜水果蔬菜、肉类、冻品、调料、熟食、饮品、日常用品等。专业配送和服务团队，让全国人民吃上放心菜！">
    <meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

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

<?php
    $rel = ($title == 'home') ? './' : '../../';
    $relink = '<link rel="shortcut icon" href="%scss/img/sitelogo_32X32.ico" type="image/x-icon">';
    echo sprintf ($relink, $rel);
    $link = '<link rel="stylesheet" href="%scss/partials/%s.css" media="%s">';
    echo sprintf ($link, $rel, 'bootstrap.min', 'screen');
    echo sprintf ($link, $rel, 'bootstrap-responsive.min', 'screen');
    if (isset($cssfile)) {
        foreach ($cssfile as $value) {
            echo sprintf ($link, $rel, $value, '');
        }
    }
    echo'<!--[if lte IE 6]>',
           '<link rel="stylesheet" type="text/css" href="', $rel, 'css/partials/hack_ie6.css" />',
        '<![endif]-->';
?>

