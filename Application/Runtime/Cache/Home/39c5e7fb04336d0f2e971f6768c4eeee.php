<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>房屋信息</title>
    <meta name="viewport"
          content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;"/>
    <meta http-equiv="Content-Type"  charset=utf-8" />
    <link href="/Public/Home/css/fwxinxi.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="top">房屋信息</div>
    <form>
        <div class="search">
            <table>
                <tr>
                    <td>
                        <img  src="/Public/Home/images/search.png"/>
                        <input type="text" placeholder="搜索"/>
                    </td>
                </tr>
            </table>


        </div>

        <table class="tiaojian">
            <tr>
                <td><select>
                        <option>全部公寓</option>
                        <option>蘑菇公寓</option>
                        <option>其他公寓</option>
                    </select></td>
                <td><select>
                        <option>合租</option>
                        <option>整租</option>
                        <option>隔断</option>
                    </select>
                </td></td>
                <td><select>
                        <option>全部</option>
                        <option>已租</option>
                        <option>未租</option>
                    </select>

            </tr>
        </table>
    </form>
    <div class="listhead">蘑菇公寓</div>

    <div class="jumplist">
        <ul style="list-style-type:none;padding-left: 0;margin-top: 0;">
            <li>
                <a style=" text-decoration:none; color:#9d9d9d" href="<?php echo U("fwxiangqing");?>">
                    <div class="querytitle">
                        <div class="toolleft">
                            1001
                        </div>
                        <div class="toolright">
                            已租
                        </div>
                    </div>
                </a>
                <a style=" text-decoration:none; color:#9d9d9d" href="<?php echo U("fwxiangqing");?>">
                    <div class="querytitle">
                        <div class="toolleft">
                            1002
                        </div>
                        <div class="toolright">
                            已租
                        </div>
                    </div>
                </a>
                <a style=" text-decoration:none; color:#9d9d9d" href="<?php echo U("fwxiangqing");?>">
                    <div class="querytitle">
                        <div class="toolleft">
                            1003
                        </div>
                        <div class="toolright">
                            已租
                        </div>
                    </div>
                </a>

            </li>
        </ul>
    </div>

    </body>
    </html>