<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>编辑金额</title>
    <meta name="viewport"
          content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;"/>
    <meta http-equiv="Content-Type"  charset=utf-8" />
    <link href="/Public/Home/css/edit_fdname.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Home/css/header_footer.css" rel="stylesheet" type="text/css" />

</head>

<body>

<header>
    <div class="rt-bk">
        <i class="bk"></i>
        <a href="myself.html"><p>返回</p></a>
    </div>
    <div class="top-name"><p>姓名</p></div>
    <div class="top-ok">
        <p>完成</p>
    </div>
</header>



<form method="post" action="<?php echo U("myself");?>">
    <div>
        <div class="querytitle">

            <div class="toolleft">
                <input class="input_xm" type="text" placeholder="请填写真实姓名"/>
            </div>

        </div>
    </div>
    <input class="subbtn" type="submit" value="完成"/>
</form>

    </body>
    </html>