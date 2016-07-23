<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>收租</title>
    <meta name="viewport"
          content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;"/>
    <meta http-equiv="Content-Type"  charset=utf-8" />
    <link href="/Public/home/css/shouzu.css" rel="stylesheet" type="text/css" />
    <link href="/Public/home/css/header_footer.css" rel="stylesheet" type="text/css" />

</head>
<body>
<header>
    <div class="rt-bk">
        <i class="bk"></i>
       <a href="fd_shouye.html"><p>返回</p></a>
    </div>
    <div class="top-name"><p>收租</p></div>

</header>

    <table class="tiaojian">
            <tr>
                <td width="24.5%">
                    <p>公寓类别：</p>
                </td>
                <td>
                    <select name="cat_id">
                        <option >选择类别 ▼</option>
                        <option >分散式</option>
                        <option >住宅式</option>
                        <option >别墅式</option>
                    </select>
                </td>
                <td width="24.5%">
                    <p ><font color="#00bfff">未收租(1)</font></p>
                </td>

                <td width="24.5%">
                    <p ><font color="#00bfff">已收租(2)</font></p>
                </td>
            </tr>
    </table>

    <table class="liebiao">
        <tr>
            <td>
                <p ><font color="#D3D3D3">房源</font></p>
            </td>
            <td >
                <p ><font color="#D3D3D3">上次房租</font></p>
            </td>
            <td >
                <p ><font color="#D3D3D3">本次房租</font></p>
            </td>
        </tr>
    </table>

    <div class="show_tool_head">小区（合租）</div>

    <a  href="<?php echo U("fyxq");?>" >

        <table  class="liebiao" >
            <tr id="t1">
                <td>
                    <p ><font color="#575757" >主卧</font></p>
                    <p ><font color="#D3D3D3">张三</font></p>
                </td>
                <td >
                    <p ><font color="#575757">¥1000.00</font></p>
                    <p ><font color="#D3D3D3">---</font></p>
                </td>
                <td >
                    <p ><font color="red">¥2000.00</font></p>
                    <p ><font color="#D3D3D3">待收</font></p>
                </td>
                <!--<img src="/Public/Home/images/fangdong/qiandai.jpg">-->
            </tr>

        </table>

    </a>

    </body>
</html>