<?php
    $rel = ($title == 'home') ? '' : '../../';
    echo'<script src="', $rel, 'js/jquery-2.1.1.min.js"></script>',
        '<script src="', $rel, 'js/bootstrap.min.js"></script>';
    $link = '<script src="%sjs/%s.js"></script>';
    if (isset($jsfile)) {
        foreach ($jsfile as $value) {
            echo sprintf($link, $rel, $value);
        }
    }
?>
    <script>
    var _hmt = _hmt || [];
    (function() {
          var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?1070ae57619c8b3e7c1408375e217fc1";
            var s = document.getElementsByTagName("script")[0]; 
              s.parentNode.insertBefore(hm, s);
    })();
    </script>
