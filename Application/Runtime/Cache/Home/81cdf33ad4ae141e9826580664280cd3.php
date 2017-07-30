<?php if (!defined('THINK_PATH')) exit();?><html>

<head>
    <meta charset="utf-8" />
    <title>API</title>
    <link rel="stylesheet" href="/php-exam/Public/css/bootstrap.min.css" />
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">文章管理</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/php-exam/index.php/Home/Index/index">首页</a></li>
                    <li><a href="/php-exam/index.php/Home/Index/api">API</a></li>
                </ul>
            </div>
        </div>
    </nav><!-- nav -->
    <div class="list container">
        <p class="lead">数据库说明</p>
        <p>
            数据库位于 ./db.db，表 article 字段：id, digest (摘要), content（正文）,status (状态，0=待发布, 1=已发布, 2=已删除)。
        </p>

        <p class="lead">API说明</p>
        <p>api地址：http://localhost/php-exam/index.php/api/ </p>
        <p>获取文章 [get]<br />
            所有文章：http://127.0.0.1/php-exam/index.php/api/getArticle/all <br/>
            指定ID获取文章：http://127.0.0.1/php-exam/index.php/api/getArticle/byId/id/1 <br />
        </p>
        <p>
            添加文章 [POST]<br>
            http://127.0.0.1/php-exam/index.php/api/add/addArtile <br />
            参数：digest (摘要)，content（正文）
        </p>

        <p>
            删除文章 [POST]<br>
            http://127.0.0.1/php-exam/index.php/api/delete/byId <br />
            参数：id
        </p>

        <p>
            通过发布文章 [POST]<br>
            http://127.0.0.1/php-exam/index.php/api/confirm/byId <br />
            参数：id
        </p>
    </div>
</body>

</html>