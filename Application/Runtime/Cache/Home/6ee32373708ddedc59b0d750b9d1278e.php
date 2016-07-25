<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>费用详情</title>
    <meta name="viewport"
          content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;"/>
    <meta http-equiv="Content-Type"  charset=utf-8" />
    <link href="/Public/Home/css/header_footer.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Home/css/my_wallet.css" rel="stylesheet" type="text/css" />


</head>

<body>

<header>
    <div class="rt-bk">
        <!--<i class="bk"></i>-->
        <a href="<?php echo U("chongzi");?>"><p>充值</p></a>
    </div>
    <div class="top-name">
        <p>我的钱包</p>
    </div>
    <div class="top-ok">
        <a href="<?php echo U("tixian");?>"><p>提现</p></a>
    </div>
</header>


<div class="total">

        <div> * 请在72小时之内进行实名认证</div>
        <div></div>

</div>


<div class="acount_date">

        <div>账户信息</div>

</div>

<div class="jumplist">
    <ul style="list-style-type:none;padding-left: 0;margin-top: 0;">

        <li>

            <div class="querytitle">
                <div class="toolleft">
                    账户余额
                </div>

                <div class="toolright">

                    <p >元</p>
                    <p >0</p>
                </div>
            </div>

        </li>
        <li>

            <div class="querytitle">
                <div class="toolleft">
                    可提现金额
                </div>

                <div class="toolright">
                    <p >元</p>
                    <p >0</p>
                </div>
            </div>

        </li>
<li>

            <div class="querytitle">
                <div class="toolleft">
                    托管金额
                </div>

                <div class="toolright">
                    <p >元</p>
                    <p >0</p>
                </div>
            </div>

        </li>

    </ul>
</div>

    </body>
    </html>