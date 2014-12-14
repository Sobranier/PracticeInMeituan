<?php
    $link = '<script src="../../js/%s.js"></script>';
    if (isset($jsfile)) {
        foreach ($jsfile as $value) {
            echo sprintf($link, $value);
        }
    }
?>
