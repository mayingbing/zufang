<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>交租</title>
    <meta name="viewport"
          content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;"/>
    <meta http-equiv="Content-Type"  charset=utf-8" />
    <link href="/Public/Home/css/header_footer.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Home/css/zzk_rent.css" rel="stylesheet" type="text/css" />
</head>


<body>

<header>
    <div class="rt-bk">
        <i class="bk"></i>
        <a href="<?php echo U("home/zuke/payrent");?>">
        <p>返回</p>
        </a>
    </div>
    <div class="top-name"><p>交租</p></div>
    <div class="top-ok"><p></p></div>
</header>

<div class="gongyu">
    <div>
        <div class="divb"></div>
        <img src="/Public/Home/images/fangdong/Living intention.png"/>
        <div class="centertxt">
            <p>蘑菇公寓</p>
            <p>用户名 | 尾号8900</p>
        </div>
        <div >

        </div>
        <div class="clear"></div>
    </div>

</div>

    <div class="query">
        <div class="querytitle">
         <div class="toolleft"> <a href="<?php echo U("home/zuke/");?>"> 查询房租详情</a></div>
         <div class="toolright"> > </div>
        </div>
        <div class="clear"></div>
        <div class="line"></div>


        <?php if (isset($errMsg)&&!empty($errMsg)) : ?>
            <p CLASS="err"><?= $errMsg['money'][0]?> </p>
        <?php else :?>
        <?php endif?>
        <form method="post" action="<?php echo U("home/zuke/payrent");?>">
        <div class="rent">
         房租金额 : <input name="money" type="number" placeholder="每笔不超15万元"/>
        </div>
            <input class="subbtn"  type="submit" value="确认交租" />
        </form>



        <div>
</body>
</html>