<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>房东贷</title>
    <meta name="viewport"
          content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;"/>
    <meta http-equiv="Content-Type"  charset=utf-8" />
    <link href="/Public/Home/css/fddai.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="head">
        <div class="top">房东贷</div>
        <div class="middle"><img src="/Public/Home/images/dun.jpg" /></div>
        <div class="foot">填写信息，线上办理，最长3年，最高20万</div>
    </div>

    <div>
    <form method="post" action="<?php echo U("zjxq");?>">
        <table class="xingming">

            <tr >
                <td>
                    <img src="/Public/Home/images/fangdong/qiandai.jpg" alt=""/>
                    <div>姓名</div>
                </td>
                <td>
                    <div><input class="input_xm" type="text" name="fd_name" placeholder="请填写真实姓名，提交后无法修改"/></div>
                </td>

            </tr >
              <tr class="xingming">
                <td>
                    <img src="/Public/Home/images/fangdong/qiandai.jpg" alt=""/>
                    <div>身份证</div>
                </td>
                <td>
                    <div><input class="input_xm" type="text" name="fd_sfz" placeholder="请填写18位有效证件号"/></div>
                </td>
            </tr>
            <div class="clear"></div>
        </table>
        <table class="xueli">
            <tr >
                <td>
                    <img src="/Public/Home/images/fangdong/qiandai.jpg" alt=""/>
                    <div>姓名</div>
                </td>
                <td>
                    <div>本科</div>
                </td>
                <td>
                    <div>V</div>
                </td>
            </tr>
            <tr >
                <td>
                    <img src="/Public/Home/images/fangdong/qiandai.jpg" alt=""/>
                    <div>姓名</div>
                </td>
                <td>
                    <div>本科</div>
                </td>
                <td>
                    <div>V</div>
                </td>
            </tr>
            <tr >
                <td>
                    <img src="/Public/Home/images/fangdong/qiandai.jpg" alt=""/>
                    <div>姓名</div>
                </td>
                <td>
                    <div>本科</div>
                </td>
                <td>
                    <div>V</div>
                </td>
            </tr>
            <tr >
                <td>
                    <img src="/Public/Home/images/fangdong/qiandai.jpg" alt=""/>
                    <div>姓名</div>
                </td>
                <td>
                    <div>本科</div>
                </td>
                <td>
                    <div>V</div>
                </td>
            </tr>
            <tr >
                <td>
                    <img src="/Public/Home/images/fangdong/qiandai.jpg" alt=""/>
                    <div>姓名</div>
                </td>
                <td>
                    <div>本科</div>
                </td>
                <td>
                    <div>V</div>
                </td>
            </tr>
             <tr >
                <td>
                    <img src="/Public/Home/images/fangdong/qiandai.jpg" alt=""/>
                    <div>姓名</div>
                </td>
                <td>
                    <div>本科</div>
                </td>
                <td>
                    <div>V</div>
                </td>
            </tr>
            <tr >
                <td>
                    <img src="/Public/Home/images/fangdong/qiandai.jpg" alt=""/>
                    <div>居住意向</div>
                </td>
                <td>
                    <div>市</div>
                </td>
                <td>
                    <div>区</div>
                </td>
            </tr>
            <tr >
                <td>
                    <img src="/Public/Home/images/fangdong/qiandai.jpg" alt=""/>
                    <div>每月租金</div>
                </td>
                <td>
                    <div><input type="text" name="fd_name" placeholder=""/></div>
                </td>
                <td>
                    <div >元</div>
                </td>
            </tr>

            <div class="clear"></div>
        </table>
        <input class="subbtn" type="submit" value="提交"/>
    </form>
    </div>

    <div class="jg"></div>
    <footer>
        <a href="<?php echo U("index");?>">
        <div class="mune">
            <img src="/Public/Home/images/fangdong/tabar1.jpg">
            <p>首页</p>
        </div>
        </a>
        <a href="<?php echo U("fangtai");?>">
        <div class="mune">
            <img src="/Public/Home/images/fangdong/tabar2.jpg">
            <p>商家</p>
        </div>
        </a>
        <a href="<?php echo U("index");?>">
        <div class="mune">
            <img src="/Public/Home/images/fangdong/tabar3.jpg">
            <p>个人中心</p>
        </div>
        </a>
    </footer>

</body>
</html>