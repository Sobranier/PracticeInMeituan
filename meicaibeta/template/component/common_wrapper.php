<?php
    echo '<div class = "siteface sub-', $title, '">';
?>
    <div class = "container">
        <div class = "row">
            <div class = "span10 offset1">
                <h2 class = "siteface-title">中国最大、最专业的生鲜服务商<h2>
                <ul class = "siteface-nav">
                    <li>我们致力打通农场品的供应链</li>
                    <li>让农场品真正实现从田间直达餐桌</li>
                    <li>从地头直达终端消费者</li>
                </ul>
            </div>
        </div>
    </div>

    <div class = "subcol-nav">
        <div class = "subcol-nav-bg"></div>
        <div class = "container">
            <ul id = "myTab">
                <li class = "active">
                    <a href = "#about" data-toggle = "tab">关于我们</a>
                </li>
                <li>
                    <a href = "#contact" data-toggle = "tab">联系我们</a>
                </li>           
                <!--
                <li>
                    <a href = "#team" data-toggle = "tab">管理团队</a>
                </li>
                <li>
                    <a href = "#law" data-toggle = "tab">法律信息</a>
                </li>
                -->
            </ul>
        </div>
    </div>
</div>





<div class = "content-wrapper">
      
<?php
    switch ($title) {
        case hire:
            include_once ("../component/wrapper/hire_wrapper.php");
            break;
        case about:
            include_once ("../component/wrapper/about_wrapper.php");
            break;
        case jobs:
            include_once ("../component/wrapper/jobs_wrapper.php");
            break;
        default:
    }
?>
</div>
