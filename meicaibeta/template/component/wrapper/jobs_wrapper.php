
<div class = "container">
    <div class = "content-info">
        <div class = "row">

            <div class = "tab-content span8">
<?php
    $jobNow = $_GET['w'];
    $jobList = array(
                '1' => array (
                    'name' => '中高级JS前端开发工程师',
                    'money' => '15K ~ 30K',
                    'des' => '北京 | 经验不限 | 本科及以上 | 全职',
                    'long' => '
岗位职责：

1、商城PCWeb研发

2、商城移动Web研发

3、销售管理平台PC、移动Web研发

4、官方网站PC、移动Web研发

5、运营管理PC、移动Web研发

6、物流管理PC、移动Web研发

 

任职要求：

1，2年以上js开发经验，有清晰的思维逻辑，能处理复杂的交互场景

2，掌握原生Javascript的语法特性和运行机制，比如词法作用域、闭包、基于原型的对象化Javascript编程和DOM对象的Javascript编程等；掌握Javascript常用的模式和设计模式，能够使用Javascript实现复杂的功能和界面效果。

3，掌握jQuery框架，掌握其运行机制，掌握对Javascript的常用调试方法及工具。

4，掌握HTML、XML、CSS等语言，熟悉HTML5和CSS3

5，熟悉一至两门后端语言，如JAVA、PHP等优先

6，熟悉MySQL数据库优先 

7，有良好的编码风格和面向对象的编程思想。

8，有良好的文字书写表达能力，掌握相关开发文档的写作技巧，如，熟练使用UML等
                    '
                ),
                '2' => array (
                    'name' => '中高级PHP开发工程师',
                    'money' => '15K ~ 30K',
                    'des' => '北京 | 经验不限 | 本科及以上 | 全职',
                    'long' => '
岗位职责：

1.  配合主管在业务功能及程序思路方面能提出较好的解决方案

2. 参与大型网站后端代码的架构设计，后台服务程序的研发

3. 按照项目计划，按时提交高质量代码，完成开发任务

 

任职要求：
1、计算机及相关专业，本科及以上学历。
2、2年以上PHP开发经验，有大型电商项目开发经验优先！
3、ThinkPHP的开发经验，或者是Discuz/Ecshop/Supesite/EmpireCMS/DedeCMS或其他
开源项目的二次开发经验。
4、熟悉Oracle或是Mysql数据库。

目前项目

1、电子商城平台研发

2、销售管理系统(CRM)研发

3、运营管理系统(OMS)研发

4、移动端后台研发

5、物流管理系统(LMS)研发

6、仓储管理系统(WMS)研发

7、采购管理系统(PMS)研发

8、分拣加工中心研发

9、内部通信系统研发

10、内部管理系统研发
                    '
                ),
                '3' => array (
                    'name' => '中高级Android开发工程师',
                    'money' => '13K ~ 26K',
                    'des' => '北京 | 经验不限 | 本科及以上 | 全职',
                    'long' => '
相关产品 Android 客户端的设计、开发与改进。

1. 本科或以上学历，一年以上Android开发经验；

2. 有扎实的Java语言基础，熟悉Android SDK及相关开发、调试、优化工具；

3. 开发基础良好，对手机软件性能优化有一定了解；

4. 对软件产品有强烈的责任心，具备良好的沟通能力和优秀的团队协作能力；

5. 参与过开源项目者优先；有个人的技术Blog者优先。

6. 能独立开发App，有成功发布App者优先（最好附带作品演示）。
                    '
                ),
                '4' => array (
                    'name' => '数据分析师',
                    'money' => '10K ~ 20K',
                    'des' => '北京 | 经验1-3年 | 本科及以上 | 全职',
                    'long' => '
岗位职责：

1、负责业务数据逻辑整理抽象
2、负责业务数据校验分析
3、负责运营数据支持
4、对业务数据需求整理抽象
5、建设数据监控、管理、分析平台

任职要求：

1、统计学、计算机、应用数学等相关专业本科及以上学历；
2、2年以上相关工作经验，熟悉SQL/HQL语句。工作经历有SQL server /My SQl /hive等的优先；
3、熟练操作excel，ppt等办公软件,熟悉SPSS、SAS、weka或R等统计分析软件者优先；
4、有相关互联网数据分析师的工作经验；
5、良好的逻辑思维与表达能力，善于用简单语言表述复杂结论；
6、有强烈的进取心，善于团队合作与管理；
7、良好的数据敏感度，能从海量数据提炼核心结果。
                    '
                ),
                '5' => array (
                    'name' => '产品经理',
                    'money' => '15K ~ 30K',
                    'des' => '北京 | 经验3-5年 | 本科及以上 | 全职',
                    'long' => '
岗位职责：

-负责整体产品设计和优化工作，根据用户对接能力和业务场景，提出合理的解决方案 
-负责和相关联部门合作，保证产品稳定，维护和更新需求和设计 
-负责对运营支持共性问题进行总结和跟踪，优化服务支持流程，组织并完善相关示例

 

任职要求

1、全日制本科以上学历；

2、3年以上相关工作经验，有大型电商网站产品和运营经验者优先；

3、了解互联网产品发展趋势及主流应用，熟悉互联网产品的设计开发流程；

4、优秀的文档撰写能力，以及严密的逻辑能力，能结合各方需求整理设计产品，熟练掌握网站原型设计工具（Visio、Axure等）；

5、良好的沟通、协调和执行能力。
                    '
                )
            );
    foreach ($jobList as $key => $job) {
        $className = ($key == $jobNow) ? 'active' : '';
        echo'<div class = "tab-pane ', $className, '" id = "job-', $key, '">',
                '<div class = "job-content">',
                    '<h4>', $job['name'], '</h4>',
                    '<h5>', $job['money'], '</h5>',
                    '<h5>', $job['des'], '</h5>',
                '</div>',
                '<pre>',
                $job['long'],
                '</pre>',
            '</div>';
    }
    echo'</div>',
        '<div class = "span4">',
            '<ul class = "job-select" id = "jobTab">';
    foreach ($jobList as $key => $job) {
        $className = ($key == $jobNow) ? 'active' : '';
        echo'<li class = "', $className, '">',
                '<a href = "#job-', $key, '" data-toggle = "tab">', $job['name'], '</a>',
            '</li>';
    }
?>
                </ul>
            </div>
        </div>
    </div>
</div>
