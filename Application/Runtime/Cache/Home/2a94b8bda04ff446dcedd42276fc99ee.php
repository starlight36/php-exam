<?php if (!defined('THINK_PATH')) exit();?><html>

<head>
    <meta charset="utf-8" />
    <title>首页</title>
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
        <?php if(is_array($allArticle)): $i = 0; $__LIST__ = $allArticle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?><div class="panel panel-default">
                <div class="panel-heading">id : <?php echo ($article["id"]); ?> , title : <?php echo ($article["title"]); ?></div>
                <div class="panel-body">
                    digest : <?php echo ($article["digest"]); ?> <br />
                    content : <?php echo ($article["content"]); ?> <br />
                    status : <?php echo ($article["status"]); ?>
                </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</body>

</html>