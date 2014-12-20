<div class = "footer cf">
    <div class = "container">
        <div class = "row">
            <div class = "span4">
                <ul class = "footer-infoNav">
                    <h2>帮助与支持</h2>
                    <li>客服：400-106-1106</li>
                    <li>微信公众号：云杉美菜</li>
                </ul>
            </div>
            <div class = "span4">
                <ul class = "footer-infoNav">
                    <h2>关于我们</h2>
<?php
    $rel = ($title == 'home') ? 'template/main/' : '';
    echo'<li><a href = "', $rel, 'about.php">关于我们</a></li>',
        '<li><a href = "', $rel, 'hire.php">加入我们</a></li>',
        '<li><a href = "', $rel, 'about.php">联系商务合作</a></li>';
?>
                </ul>
            </div>
            <div class = "span4">
               <ul class = "footer-infoNav footer-infoNav--last">
                    <h2>云杉美菜</h2>
                    <li><a target="_blank" href="http://www.miibeian.gov.cn/">京ICP备14045665号-1</a></li>
                    <li>Copyright © 2014-2015</li>
                </ul>
            </div>
        </div>
    </div>
</div>
