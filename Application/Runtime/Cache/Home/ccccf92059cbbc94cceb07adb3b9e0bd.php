<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>分散式</title>
    <meta name="viewport"
          content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;"/>
    <meta http-equiv="Content-Type"  charset=utf-8" />
    <link href="/Public/Home/css/header_footer.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Home/css/add_fy2.css" rel="stylesheet" type="text/css" />
</head>
<body id="content">
<header>
    <div class="rt-bk">
        <!--<i class="bk"></i>-->
       <a href="<?php echo U("fangtai");?>">
           <p>取消</p>
       </a>
    </div>
    <div class="top-name"><p>分散式</p></div>
    <div class="top-ok">
        <a href="<?php echo U("qtfeiyong");?>"><p>下一步</p></a>
    </div>
</header>


<div class="clear"></div>


<form action="<?php echo U("qtfeiyong");?>" method="post">
<div class="jumplist">
    <ul style="list-style-type:none;padding-left: 0;margin-top: 0;">
        <li>
            <!--<a style=" text-decoration:none; color:#9d9d9d" href="<?php echo U("huxing");?>">-->
            <div class="querytitle">
                <div class="toolleft">
                    详细地址
                </div>

                <div class="toolright">
                    <input class="input_xm" type="text" placeholder="请输入所在详细地址"/>
                </div>
            </div>
            <!--</a>-->
        </li>
        <li>
            <a style=" text-decoration:none; color:#9d9d9d" href="#">
                <div class="querytitle">
                    <div class="toolleft">
                        区域
                    </div>

                    <div class="toolright" style="padding-right: 5%">
                        >
                    </div>
                </div>
            </a>

        </li>
        <li>

            <div class="querytitle">
                <div class="toolleft">
                    公寓名
                </div>
                <div class="toolright">
                    <input class="input_xm" type="text" placeholder="请输入公寓名称"/>
                </div>

            </div>

        </li>
        <li>

            <div class="querytitle">
                <div class="toolleft">
                    楼层
                </div>
                <div class="toolright">
                    <input class="input_xm" type="text" placeholder="请输入要租的楼层"/>
                </div>

            </div>

        </li>
        <li>

            <div class="querytitle">
                <div class="toolleft">
                    房源数量
                </div>
                <div class="toolright">
                    <input class="input_xm" type="text" placeholder="请输入您的房源数量"/>
                </div>

            </div>

        </li>

        <li>
            <a style=" text-decoration:none; color:#9d9d9d" href="#">
                <div class="logotitle">
                    <div class="toolleft">
                        公寓头像
                    </div>

                    <div class="toolright_logo">
                        <div>+</div>
                        <div>上传公寓logo</div>
                    </div>
                </div>
            </a>

        </li>

    </ul>
</div>
<input class="subbtn" type="submit" value="提交"/>
</form>

</body>
</html>