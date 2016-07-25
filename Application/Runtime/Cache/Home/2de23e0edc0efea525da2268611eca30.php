<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>个人中心</title>
    <meta name="viewport"
          content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;"/>
    <meta http-equiv="Content-Type"  charset=utf-8" />
    <link href="/Public/Home/css/header_footer.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Home/css/zzk_self.css" rel="stylesheet" type="text/css" />
</head>

<body>

<header>
    <div class="rt-bk">
        <!--<i class="bk"></i>-->
        <!--<a href="<?php echo U("fwxiangqing");?>">-->
        <p></p>
        <!--</a>-->
    </div>
    <div class="top-name"><p>个人中心</p></div>
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
        <ul>
            <li>
                <a href="<?php echo U("zk_name");?>">
                <div class="querytitle">
                    <div class="toolleft">
                        姓名
                    </div>
                    <div class="toolright">
                        >
                    </div>
                </div>
                </a>
            </li>
            <li>
                <a href="<?php echo U("zk_gym");?>">
                    <div class="querytitle">
                        <div class="toolleft">
                            公寓名
                        </div>
                        <div class="toolright">
                            >
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="<?php echo U("zk_tel");?>">
                    <div class="querytitle">
                        <div class="toolleft">
                            手机号
                        </div>
                        <div class="toolright">
                            >
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="<?php echo U("zk_wallet");?>">
                    <div class="querytitle">
                        <div class="toolleft">
                            我的钱包
                        </div>
                        <div class="toolright">
                            >
                        </div>
                    </div>
                </a>
            </li>
        </ul>


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