<?php
    $title = "home";
    $fullTitle = "美菜网 - 中国最大的生鲜网站";
    $cssfile = array("int");
    $jsfile = array("tool", "hire");
    include_once ("template/common/head.php");
?>
<body class = "pg-int pg-home">
<?php
    include_once ("template/common/header_int.php");
    include_once ("template/component/face.php");
    include_once ("template/common/footer_int.php");
    include_once ("template/common/foot.php");
?>
    <script>
        (function(){
            switchShow("#J-navbar-btn-home", "#J-navbar-nav-home"); 
        })();
    </script>
</body>
</html>
