<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <title>首页</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link href="/Public/Home/css/header_footer.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Home/css/fd_shouye.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div>
    <div class="head">
        <div class="souye">首页</div>
        <div class="zuke">
            <div>
                <p>已收租</p>
                <p>50万元</p>
                <p>房租理财</p>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="middle">
        <a href="<?php echo U("shouzu");?>">
            <div class="jiaozu">
                <img src="/Public/Home/images/fangdong/rent.png">
                <div>
                    <p>收租</p>
                    <p>打印，到账记录</p>
                </div>
            </div>
        </a>
        <div>
            <a  href="<?php echo U("cuizu");?>">
                <div class="cuizu">
                    <img src="/Public/Home/images/fangdong/cuizu.jpg">
                    <div>
                        <p>催租</p>
                        <p>发送短信提醒</p>
                    </div>
                </div>
            </a>
            <a href="<?php echo U("fddai");?>">
                <div class="cuizu">
                    <img src="/Public/Home/images/fangdong/landlord borrowed.png">
                    <div>
                        <p>房东贷</p>
                        <p>申请可获得租客全年房租</p>
                    </div>
                </div>
            </a>

        </div>

        <div class="clear"></div>
    </div>
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
    <a href="<?php echo U("myself");?>">
    <div class="mune">
        <img src="/Public/Home/images/fangdong/tabar3.jpg">
        <p>个人中心</p>
    </div>
    </a>
</footer>

    </body>
    </html>