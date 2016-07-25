<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>充值</title>
    <meta name="viewport"
          content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;"/>
    <meta http-equiv="Content-Type"  charset=utf-8" />
    <link href="/Public/Home/css/header_footer.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Home/css/chongzi.css" rel="stylesheet" type="text/css" />
</head>
<body id="content">
<header>
    <div class="rt-bk">
        <!--<i class="bk"></i>-->
       <!--<a href="<?php echo U("fwxiangqing");?>">-->
           <p></p>
       <!--</a>-->
    </div>
    <div class="top-name"><p>充值</p></div>
    <div class="top-ok"><p>完成</p></div>
</header>


<div class="clear"></div>
<form action="<?php echo U("fd_shouye");?>" method="post">
    <div class="jumplist">
        <ul style="list-style-type:none;padding-left: 0;margin-top: 0;">
            <li style="margin: 0.2rem auto">
                <div class="querytitle">
                    <div class="toolleft">
                        充值金额
                    </div>
                    <div class="toolmiddle">
                        <input class="input_cz" type="text" placeholder="请输入金额"/>
                    </div>
                    <div class="toolright">
                        元
                    </div>
                </div>
            </li>
            <a href="#">
                <li>
                    <div class="querytitle">
                        <div class="toolleft">
                            开户行
                        </div>
                        <div >
                            <p style="float: left;width: 50%;margin-left: 1%;font-size: 0.25rem;color: darkgray;margin-top: 0.05rem;text-align: right">请选择开户行 </p>
                        </div>
                        <div class="toolright">
                            <p style="margin-top: 0.06rem"> > </p>
                        </div>
                    </div>
                </li>
            </a>
            <li>

                <div class="querytitle">
                    <div class="toolleft">
                        银行卡号
                    </div>
                    <div class="toolmiddle">
                        <input class="input_cz" type="text" placeholder="请填写银行卡号"/>
                    </div>
                    <div class="toolright">

                    </div>
                </div>

            </li>
            <li>
                <div class="querytitle">
                    <div class="toolleft">
                        开户人姓名
                    </div>
                    <div class="toolmiddle">
                        <input class="input_cz" type="text" placeholder="请填写开户人的姓名"/>
                    </div>
                    <div class="toolright">

                    </div>
                </div>
            </li>
            <li>
                <div class="querytitle">
                    <div class="toolleft">
                        身份证号
                    </div>
                    <div class="toolmiddle">
                        <input class="input_cz" type="text" placeholder="请输入您的身份证号"/>
                    </div>
                    <div class="toolright">

                    </div>
                </div>
                </a>
            </li>
            <li>
                <div class="querytitle">
                    <div class="toolleft">
                        银行预留手机号
                    </div>
                    <div class="toolmiddle">
                        <input class="input_cz" type="text" placeholder=""/>
                    </div>
                    <div class="toolright">

                    </div>
                </div>
            </li>
            <li>
                <div style="width: 100%;background: white;border: 0.1px solid#D3D3D3 ;height: 0.9rem;line-height: 0.9rem;border-left: none;border-right: none;margin: 0.2rem auto ;">

                    <div style="float: left;width: 60%;margin-left: 1px ;margin-top:0.05rem;margin-left: 10%">
                        <input class="input_xm" type="text" placeholder="请输入短信验证码"/>
                    </div>
                    <div style="float: left;width: 29%;font-size: 0.35rem;">
                        <p style="width: 90%;height: 0.7rem;border-radius: 5px;text-align: center;background-color: #00aacc;margin-top: 0.1rem;line-height: 0.7rem;font-size: 0.3rem;"> 获取验证码</p>
                    </div>
                </div>
            </li>
    </ul>
</div>
    <input class="subbtn" type="submit" value="提交"/>
</form>
</body>
</html>