<?php
    switch ($title) {
        case hire:
            $pageClass = "pg-hire";
            break;
        default:
            $pageClass = "ceshi";
    }

    echo '<div class = "tbsite-header ', $pageClass, '">';
?>
    <div class = "container text-center">
        <h1 class = "title">敢想 敢爱 敢做</h1>
        <p class = "decs">占位占位占位占位占位占位占位打造中国餐饮原材料服务第一品打造中国餐饮原材料服务第一品打造中国餐饮原材料服务第一品</p>
    
    </div>
    <div class = "subcol-nav">
        <div class = "subcol-nav-bg"></div>
        <div class = "container">
            <ul >
                <li>
                    <a href = "#">新闻与活动</a>
                </li>
                <li>
                    <a href = "#">管理团队</a>
                </li>           
                <li class = "active">
                    <a href = "#">加入我们</a>
                </li>
                <li>
                    <a href = "#">合作伙伴</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class = "content-wrapper">
      
<?php
    include_once ("../component/wrapper/hire_wrapper.php");
?>
</div>
