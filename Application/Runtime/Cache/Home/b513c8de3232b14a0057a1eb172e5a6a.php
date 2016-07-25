<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>房屋详情</title>
    <meta name="viewport"
          content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;"/>
    <meta http-equiv="Content-Type"  charset=utf-8" />
    <link href="/Public/Home/css/header_footer.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Home/css/feiyong.css" rel="stylesheet" type="text/css" />
</head>
<body id="content">
<header>
    <div class="rt-bk">
        <!--<i class="bk"></i>-->
       <a href="<?php echo U("add_fy");?>">
           <p>上一步</p>
       </a>
    </div>
    <div class="top-name"><p>费用</p></div>
    <div class="top-ok"><p>下一步</p></div>
</header>


<div class="clear"></div>
<form action="<?php echo U("#");?>" method="post">
<div class="jumplist">
    <ul style="list-style-type:none;padding-left: 0;margin-top: 0;">

        <li>

            <div class="querytitle">
                <div class="toolleft">
                    水费
                </div>
                <div class="toolmiddle">
                    <input class="input_xm" type="text" placeholder=""/>
                </div>
                <div class="toolright">
                    元/吨
                </div>
            </div>

        </li>
        <li>

            <div class="querytitle">
                <div class="toolleft">
                    电费
                </div>
                <div class="toolmiddle">
                    <input class="input_xm" type="text" placeholder=""/>
                </div>
                <div class="toolright">
                    元/度
                </div>
            </div>

        </li>

    </ul>
</div>
    <!--<input class="subbtn" type="submit" value="提交"/>-->
</form>

<div class="subbtn" style="text-align: center;line-height: 0.8rem">
    +添加费用  按钮
</div>

</body>
</html>