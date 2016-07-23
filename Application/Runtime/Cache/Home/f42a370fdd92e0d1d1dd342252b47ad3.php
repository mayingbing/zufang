<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>房态</title>
    <meta name="viewport"
          content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;"/>
    <meta http-equiv="Content-Type"  charset=utf-8" />
    <link href="/Public/Home/css/header_footer.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Home/css/fangtai.css" rel="stylesheet" type="text/css" />

</head>

<body>

<div>
    <div class="head">
        <div class="souye">房态</div>
        <div class="zuke">
            <div>房租理财</div>
        </div>
        <div class="foot">
            <div>
                空置 2 间
            </div>
            <div>
                待清理 0 间
            </div>
        </div>
    </div>
    <div class="middle">
        <a href="<?php echo U("fwxinxi");?>">
                <div class="jiaozu">
                    <div>
                        <p>0</p>
                        <p>总计</p>
                    </div>
                </div>
        </a>
        <a href="<?php echo U("fwxinxi");?>">
                <div class="jiaozu">
                    <div>
                        <p>0</p>
                        <p>未租</p>
                    </div>
                </div>
        </a>
        <a href="<?php echo U("fwxinxi");?>">
                <div class="cuizu">
                    <div>
                        <p>0</p>
                        <p>已租</p>
                    </div>
                </div>
        </a>
        <a href="<?php echo U("fwxinxi");?>">
                <div class="cuizu">
                    <div>
                        <p>0</p>
                        <p>租客信息</p>
                    </div>
                </div>
        </a>

    </div>

    <div class="clear"></div>
    <div class="add"><a href="<?php echo U("index");?>"><img src="/Public/Home/images/fangdong/new.png" alt=""/></a></div>

</div>

<div class="jg"></div>

<footer>
    <a href="<?php echo U("fd_shouye");?>">
    <div class="mune">
        <img src="/Public/Home/images/fangdong/tabar1.jpg">
        <p>首页</p>
    </div>
    </a>
    <a href="<?php echo U("fangtai");?>">
    <div class="mune">
        <img src="/Public/Home/images/fangdong/tabar2.jpg">
        <p>房源</p>
    </div>
    </a>
    <a href="<?php echo U("self");?>">
    <div class="mune">
        <img src="/Public/Home/images/fangdong/tabar3.jpg">
        <p>个人中心</p>
    </div>
    </a>
</footer>

</body>
</html>