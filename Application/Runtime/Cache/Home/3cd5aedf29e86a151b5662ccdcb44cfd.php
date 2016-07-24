<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>租金贷</title>
    <meta name="viewport"
          content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;"/>
    <meta http-equiv="Content-Type"  charset=utf-8" />
    <link href="/Public/Home/css/header_footer.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Home/css/zzk_zujindai.css" rel="stylesheet" type="text/css" />
</head>


    <body>

    <header>
        <div class="rt-bk">
            <!--<i class="bk"></i>-->
            <!--<a href="<?php echo U("zk_shouye");?>">-->
            <p></p>
            <!--</a>-->
        </div>
        <div class="top-name"><p>首页</p></div>
        <div class="top-ok"><p></p></div>
    </header>


    <div class="header">
        <div> 租金贷</div>
        <div><img style="width: 1rem" src="/Public/Home/images/dun.jpg"></div>
        <div>填写信息,线上办理,最长3年,最高20万</div>
    </div>

    <form class="sub_data" method="post" action="">
        <table>
            <tr>
                <td></td>
                <td><div></div></td>
                <td>姓名</td>
                <td><input name="yname" type="text" placeholder="请填写真实姓名,提交后无法修改"></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td><div></div></td>
                <td>身份证</td>
                <td><input name="card" type="text" placeholder="请填写18位有效证件"></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td><div></div></td>
                <td>最高学历</td>
                <td>
                    <select name="eduback">
                        <option value="0">博士</option>
                        <option value="1">硕士</option>
                        <option value="2">研究生</option>
                        <option value="3">本科</option>
                        <option value="4">大专</option>
                        <option value="5">中专</option>
                        <option value="6">高中</option>
                        <option value="7">高中以下</option>
                    </select>
                </td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td><div></div></td>
                <td>是否毕业</td>
                <td>
                    <select name="isgraduation">
                        <option value="0">未毕业</option>
                        <option value="1">已毕业</option>
                    </select>
                </td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td><div></div></td>
                <td>有无工作</td>
                <td><select name="isjob">
                        <option value="0">无工作</option>
                        <option value="1">参加工作</option>
                    </select></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td><div></div></td>
                <td>月收入</td>
                <td>
                    <select name="income">
                        <option value="0">3500以下</option>
                        <option value="1">3500-5000</option>
                        <option value="2">5000-10000</option>
                        <option value="3">10000以上</option>
                    </select>
                </td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td><div></div></td>
                <td>月支出</td>
                <td>
                    <select name="pay">
                        <option value="0">3500以下</option>
                        <option value="1">3500-5000</option>
                        <option value="2">5000-10000</option>
                        <option value="3">10000以上</option>
                    </select>
                </td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td><div></div></td>
                <td>居住意向</td>
                <td>
                    <input name="area" type="text" placeholder="请输入省市">
                </td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td><div></div></td>
                <td>交租方式</td>
                <td><select name="hireway">
                        <option value="0">月付</option>
                        <option value="1">季付</option>
                        <option value="2">半年付</option>
                        <option value="3">年付</option>
                    </select></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td><div></div></td>
                <td>每月佣金</td>
                <td><input name="commission" type="number" placeholder="请输入金额"/> 元</td>
                <td></td>
            </tr>
            <tr class="checkdiv">
                <td></td>
                <td colspan="3">
                    <div style="font-size: 0.25rem;float: left;width: 80%;margin-left: 1rem;text-align: right">
                        我同意所有的隐私条款  <input style="margin-left: 10px" type="checkbox" checked="checked">
                    </div>
                </td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="3">
                    <input type="submit" value="提交"/>
                </td>
                <td></td>

            </tr>
        </table>
    </form>
    <div class="jg"></div>
    <footer>
        <a href="<?php echo U("zk_shouye");?>">
        <div class="mune">
            <img src="/Public/Home/images/fangdong/tabar1.jpg">
            <p>首页</p>
        </div>
        </a>
        <a href="<?php echo U("zujindai");?>">
        <div class="mune">
            <img src="/Public/Home/images/fangdong/rent.png">
            <p>租金贷</p>
        </div>
        </a>
        <a href="<?php echo U("zk_self");?>">
        <div class="mune">
            <img src="/Public/Home/images/fangdong/tabar3.jpg">
            <p>个人中心</p>
        </div>
        </a>
    </footer>

</body>
</html>