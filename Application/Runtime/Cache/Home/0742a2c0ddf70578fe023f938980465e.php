<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>房东贷</title>
    <meta name="viewport"
          content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;"/>
    <meta http-equiv="Content-Type"  charset=utf-8" />
    <link href="/Public/Home/css/fddai.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Home/css/header_footer.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="head">
        <header >
            <div class="rt-bk">
                <i class="bk"></i>
                <a href="fd_shouye.html"><p>返回</p></a>
            </div>
            <div class="top-name"><p>房东贷</p></div>

        </header>
        <div class="middle"><img src="/Public/Home/images/dun.jpg" /></div>
        <div class="foot">填写信息，线上办理，最长3年，最高20万</div>
    </div>

    <div>
    <form method="post" action="<?php echo U("fd_shouye");?>">
        <table class="xingming">

            <tr >
                <td>
                    <img src="/Public/Home/images/fangdong/name.png" alt=""/>
                    <div>姓名:</div>
                </td>
                <td>
                    <div><input class="input_xm" type="text" name="fd_name" placeholder="请填写真实姓名，提交后无法修改"/></div>
                </td>

            </tr >
              <tr class="xingming">
                <td>
                    <img src="/Public/Home/images/fangdong/Id card.png" alt=""/>
                    <div>身份证:</div>
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
                    <img src="/Public/Home/images/fangdong/education background.png" alt=""/>
                    <div>学历</div>
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
                    <img src="/Public/Home/images/fangdong/graduation.png" alt=""/>
                    <div>是否毕业</div>
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
                    <img src="/Public/Home/images/fangdong/work.png" alt=""/>
                    <div>有无工作</div>
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
                    <img src="/Public/Home/images/fangdong/rent.png" alt=""/>
                    <div>月收入</div>
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
                    <img src="/Public/Home/images/fangdong/rent.png" alt=""/>
                    <div>月支出</div>
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
                    <img src="/Public/Home/images/fangdong/Living intention.png" alt=""/>
                    <div>居住意向</div>
                </td>
                <td>
                    <div class="city">
                        <input type="text" name="city" placeholder="北京市"/>
                        <div>市</div>
                    </div>
                </td>
                <td>
                    <div class="city">
                        <input type="text" name="towns" placeholder="海淀区"/>
                        <div>区</div>
                    </div>
                </td>
            </tr>
            <tr >
                <td>
                    <img src="/Public/Home/images/fangdong/monthly rent.png" alt=""/>
                    <div>每月租金</div>
                </td>
                <td>
                    <div class="price"><input type="text" name="fd_name" placeholder=""/></div>
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
        <a href="<?php echo U("fd_shouye");?>">
        <div class="mune">
            <img src="/Public/Home/images/fangdong/tabar1.jpg">
            <p>首页</p>
        </div>
        </a>
        <a href="<?php echo U("fangtai");?>">
        <div class="mune">
            <img src="/Public/Home/images/fangdong/tabar2.jpg">
            <p>房源</p>
        </div>
        </a>
        <a href="<?php echo U("self");?>">
        <div class="mune">
            <img src="/Public/Home/images/fangdong/tabar3.jpg">
            <p>个人中心</p>
        </div>
        </a>
    </footer>

</body>
</html>