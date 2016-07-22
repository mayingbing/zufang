<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>编辑金额</title>
    <meta name="viewport"
          content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;"/>
    <meta http-equiv="Content-Type"  charset=utf-8" />
    <link href="/Public/Home/css/center_gy.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="top">租金</div>


<form method="post" action="<?php echo U("zjxq");?>">
    <div>
        <div class="querytitle">

            <div class="toolleft">
                <input class="name" type="text" placeholder="请填写租金"/>
            </div>
            <div class="toolright">
                元/月
            </div>
        </div>
    </div>
    <input class="subbtn" type="submit" value="完成"/>
</form>

    </body>
    </html>