<div class = "container page-wrap">
    <div class = "topnav cf">
<?php
    $headerList = array("home" => "首页", "homeDiscount" => "折扣", "homeSave" => "我的收藏");
    foreach ($headerList as $key => $value) {
        $className = ($title == $key) ? "active" : '';
        echo '<a href = "', $key, '.php" class = "', $className, '">', $value, '</a>';
    }
?>

    </div>
    <div class = "sort-wrapper">
        <ul class = "cf" id = "J-sort-wrapper"></ul>
    </div>
    <div class = "category-wrapper" id = "J-category-wrapper"></div>

</div>
