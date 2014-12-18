<div class = "header">
    <div class = "container">
        <h1 class = "logo fl cf">
            <a href = "home.php" title = "美菜网" class = "fl"></a>
        </h1>
        <button class = "navbar-btn" id = "J-navbar-btn"></button>
        <ul class = "navbar-nav" id = "J-navbar-nav">
<?php
$headerList = array("hire" => "加入我们",
                    "about"    => "关于我们");
if ($title != "home") {
    echo '<li><a href = "home.php">首页</a></li>';
}
foreach ($headerList as $key => $value) {
    $className = ($key == "about") ? "lastone" : "";
    $className = ($key == $title) ? "active" : $className;
    echo '<li class = "' , $className, '"><a href = "', $key, '.php">', $value, '</a></li>';
}
?>
        </ul>
    </div>
</div>
