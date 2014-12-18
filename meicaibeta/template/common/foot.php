<?php
    $rel = ($title == 'home') ? './' : '../../';
    $link = '<script src="%sjs/%s.js"></script>';
    if (isset($jsfile)) {
        foreach ($jsfile as $value) {
            echo sprintf($link, $rel, $value);
        }
    }
?>
