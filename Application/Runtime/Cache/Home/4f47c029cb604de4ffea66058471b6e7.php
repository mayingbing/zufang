<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>首页</title>
    <meta name="viewport"
          content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;"/>
    <meta http-equiv="Content-Type"  charset=utf-8" />
    <link href="/Public/Home/css/header_footer.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Home/css/zzk_shouye.css" rel="stylesheet" type="text/css" />
</head>

    <body>


    <header>
        <div class="rt-bk">
            <!--<i class="bk"></i>-->
            <!--<a href="<?php echo U("fwxiangqing");?>">-->
            <p></p>
            <!--</a>-->
        </div>
        <div class="top-name"><p>首页</p></div>
        <div class="top-ok"><p></p></div>
    </header>

    <div class="head">
        <div class="zuke">
            <div>
                租客
            </div>
        </div>
    </div>
    <div class="middle">
        <a href="<?php echo U("home/zuke/payrent");?>">
            <div class="jiaozu">
                <img src="/Public/Home/images/fangdong/rent.png">
                <div>
                    <p>交租</p>
                    <p>19天后交租</p>
                </div>
            </div>
        </a>
        <a href="<?php echo U("home/zuke/query");?>">
            <div class="jiaozu zhangdan">
                <img src="/Public/Home/images/fangdong/monthly rent.png">
                <div>
                    <p>账单</p>
                    <p>查看交租账单</p>
                </div>
            </div>
        </a>
        <div class="clear"></div>
    </div>

    <div class="jg"></div>
    <footer>
        <a href="<?php echo U("zk_shouye");?>">
        <div class="mune">
            <img src="/Public/Home/images/fangdong/tabar1.jpg">
            <p>首页</p>
        </div>
        </a>
        <a href="<?php echo U("zujindai");?>">
        <div class="mune">
            <img src="/Public/Home/images/fangdong/rent.png">
            <p>租金贷</p>
        </div>
        </a>
        <a href="<?php echo U("zk_self");?>">
        <div class="mune">
            <img src="/Public/Home/images/fangdong/tabar3.jpg">
            <p>个人中心</p>
        </div>
        </a>
    </footer>

    </body>
</html>