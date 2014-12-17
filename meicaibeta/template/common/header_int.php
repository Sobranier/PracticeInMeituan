<div class = "header">
    <h1 class = "logo fl cf">
        <a href = "index.php" title = "美菜网" class = "fl"></a>
        <span class = "fl">有美菜 只做菜 不买菜</span>
    </h1>
    <button class = "navbar-btn" id = "J-navbar-btn"></button>
    <ul class = "navbar-nav" id = "J-navbar-nav">
<?php
$headerList = array("workflow" => "定菜流程",
                    "product"  => "我们的产品",
                    "partener" => "合作伙伴",
                    "report"   => "媒体报道",
                    "about"    => "关于我们");
foreach ($headerList as $key => $value) {
    $className = ($key == "about") ? "lastone" : "";
    echo '<li class = "' , $className, '"><a href = "', $key, '.php">', $value, '</a></li>';
}
?>
    </ul>
</div>
