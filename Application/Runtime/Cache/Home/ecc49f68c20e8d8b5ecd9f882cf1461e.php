<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>费用详情</title>
    <meta name="viewport"
          content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;"/>
    <meta http-equiv="Content-Type"  charset=utf-8" />
    <link href="/Public/Home/css/header_footer.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Home/css/fyxq.css" rel="stylesheet" type="text/css" />


</head>

<body>

<header>
    <div class="rt-bk">
        <i class="bk"></i>
        <a href="shouzu.html"><p>返回</p></a>
    </div>
    <div class="top-name">
        <p>费用详情</p>
    </div>
    <div class="top-ok"><p>收租</p></div>
</header>

    <div class="centertxt">
        <p>合计（元）</p>
        <p>2000.00</p>
    </div>

    <div class="clear"></div>
    <div class="total">

        <div>实际金额</div>
        <div>2000元</div>

    </div>
    <div class="place"></div>
    <div class="list">

        <div>费用详情</div>
        <div>+添加收费</div>

    </div>
   <div class="acount_date">

        <div>账单日期</div>
        <div>2016-06-12 - 2016-07-12</div>

    </div>
    <div class="show">
    <a  href="<?php echo U("edit_price");?>" >
    <table  class="liebiao" >
        <tr class="t1">
            <td>
                <img src="/Public/Home/images/fangdong/chosen.png" alt=""/>
            </td>
            <td id="td1">
                <p ><font color="#575757">租金</font></p>
                <p>2000.00元/月</p>

            </td>
            <!--<a  href="<?php echo U("home/fangdong/edit_price");?>" >-->
                <td id="td2" style="cursor:hand">

                    <div> > </div>

                    <div><font color="#575757">2000.00</font></div>
                </td>
            <!--</a>-->
        </tr>
    </table>
    </a>
  <a  href="<?php echo U("edit_price");?>" >
    <table  class="liebiao" >
        <tr class="t1">
            <td>
                <img src="/Public/Home/images/fangdong/chosen.png" alt=""/>
            </td>
            <td id="td1">
                <p ><font color="#575757">押金</font></p>
                <p>2000.00元/月</p>

            </td>
            <!--<a  href="<?php echo U("home/fangdong/edit_price");?>" >-->
                <td id="td2" style="cursor:hand">

                    <div> > </div>

                    <div><font color="#575757">2000.00</font></div>
                </td>
            <!--</a>-->
        </tr>
    </table>
    </a>
  <a  href="<?php echo U("edit_price");?>" >
    <table  class="liebiao" >
        <tr class="t1">
            <td>
                <img src="/Public/Home/images/fangdong/chosen.png" alt=""/>
            </td>
            <td id="td1">
                <p ><font color="#575757">水电费</font></p>
                <p>2000.00元/月</p>

            </td>
            <!--<a  href="<?php echo U("home/fangdong/edit_price");?>" >-->
                <td id="td2" style="cursor:hand">

                    <div> > </div>

                    <div><font color="#575757">2000.00</font></div>
                </td>
            <!--</a>-->
        </tr>
    </table>
    </a>
    </div>
    </body>
    </html>