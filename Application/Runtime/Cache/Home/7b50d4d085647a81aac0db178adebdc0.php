<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>催租</title>
    <meta name="viewport"
          content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;"/>
    <meta http-equiv="Content-Type"  charset=utf-8" />
    <link href="/Public/Home/css/cuizu.css" rel="stylesheet" type="text/css" />

</head>

<body  id="content">

    <div class="top">
        <div><a style=" text-decoration:none; color:white" href="index.html">取消</a></div>
        <div>催租</div>
        <div>发送</div>
    </div>
    <div>

       <table class="middle">
           <tr>
               <td>发送类型</td>
               <td>房租费用</td>
           </tr>
           <tr>
               <td>通知租客</td>
               <td>王五</td>
           </tr>
           <tr>
               <td>通知方式</td>
               <td id="duanxin">短信</td>
               <td>微信</td>
           </tr>
       </table>

    </div>
    <div class="place"></div>

    <div >

        <table class="middle">
            <tr>
                <td>发送内容</td>
                <td></td>
            </tr>
            <tr>
                <td id="message">您好！您本次房租为2000.00元，请及时缴清，费用详情请<a href="#">登录租客版</a></td>
            </tr>

        </table>
    </div>


</body>
</html>