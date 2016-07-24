<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>个人中心</title>
    <meta name="viewport"
          content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;"/>
    <meta http-equiv="Content-Type"  charset=utf-8" />
    <link href="/Public/Home/css/header_footer.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Home/css/self.css" rel="stylesheet" type="text/css" />

</head>

<body id="content">


<header>
    <div class="rt-bk">
        <i class="bk"></i>
       <a href="<?php echo U("fd_shouye");?>">
           <p>返回</p>
       </a>
    </div>
    <div class="top-name"><p>个人中心</p></div>
    <!--<div class="top-ok"><p></p></div>-->
</header>
<div class="clear"></div>
<div class="headimg">
    <div>
        房东
    </div>
</div>

<div class="clear"></div>

<div class="jumplist">
    <ul style="list-style-type:none;padding-left: 0;margin-top: 0;">
        <li>
            <a style=" text-decoration:none; color:#9d9d9d" href="<?php echo U("edit_name");?>">
            <div class="querytitle">
                <div class="toolleft">
                    姓名
                </div>
                <div class="toolmiddle">
                    张三
                </div>
                <div class="toolright">
                    >
                </div>

            </div>
            </a>
        </li>
        <li>
            <a style=" text-decoration:none; color:#9d9d9d" href="<?php echo U("edit_tel");?>">
            <div class="querytitle">
                <div class="toolleft">
                    手机号
                </div>
                <div class="toolmiddle">
                    13012349876
                </div>
                <div class="toolright">
                    >
                </div>
            </div>
            </a>
        </li>
        <li>
            <a style=" text-decoration:none; color:#9d9d9d" href="<?php echo U("fd_fys");?>">
            <div class="querytitle">
                <div class="toolleft">
                    房源
                </div>
                <div class="toolmiddle">
                    2套
                </div>
                <div class="toolright">
                    >
                </div>
            </div>
            </a>

        </li>
        <li>
            <a style=" text-decoration:none; color:#9d9d9d" href="<?php echo U("mywallet");?>">
            <div class="querytitle">
                <div class="toolleft">
                    我的钱包
                </div>
                <div class="toolmiddle">
                    10000元
                </div>
                <div class="toolright">
                    >
                </div>
            </div>
            </a>

        </li>

    </ul>
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