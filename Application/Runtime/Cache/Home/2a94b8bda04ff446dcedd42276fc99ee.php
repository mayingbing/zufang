<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>租房</title>
    <meta name="viewport"
          content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;"/>
    <meta http-equiv="Content-Type"  charset=utf-8" />
    <link href="/Public/Home/css/index.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/Public/Home/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/index.js"></script>
</head>
    <body>

    <div class="head">
        <div  class="zuke">
            <div id="zuke" class="select">
                <p>租客</p>
            </div>
        </div>
        <div  class="fangdong">
            <div id="fangdong" class="unselect">
                <p>房东</p>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div>
        <p id="msg" class="tool_msg"> <?php echo "$msg" ?></p>
        <div class="login">
            <form name="loginform" method="post" action="index.php/home/zuke/zk_shouye" >
                <input name="type" type="hidden" id="type" value="0"/>

                <div>
                    <input id="tel" name="tel" type="tel" placeholder="请输入手机号或用户名"/>
                </div>
                <div>
                    <input id="code" name="code" type="number" placeholder="请输入验证码"/>
                    <input id="sendcode"  type="button" value="获取验证码" class="sendcode" onclick="sendSmsCode()"/>
                </div>
                <div>
                    <input id="privacyPolicy" name="privacyPolicy" type="checkbox" checked="checked"/>
                    <p>我已经阅读并同意 <span>《隐私条款》</p></span>
                </div>
                <input type="submit" value="登陆" />
>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        var inWaiting =false;
        var endtime = 60;
        var now =0

        function ValidateNumber(e, pnumber)
        {
            if (!/^\d+[.]?\d*$/.test(pnumber))
            {
                e.value = /^\d+[.]?\d*/.exec(e.value);
            }
            return false;
        }

        function daoJiShi()
        {
                now+=1;
                var ofs= endtime -now;
                $('#sendcode').val(ofs+ ' 秒');
                if(ofs<0) {
                    $('#sendcode').val('获取验证码');
                    $('#sendcode').removeAttr('disabled');
                    return;
                };
                setTimeout('daoJiShi()',1000);
        }

        function sendSmsCode() {

                $('#sendcode').attr('disabled','disabled');
                $.ajax({
                    url: "<?php echo 'index.php/home/index/sendsms' ?>",
                    type: "post",
                    data: "tel=" + $('#tel').val()+"&type="+$('#type').val(),


                    success: function (data) {
                        $obj = $.parseJSON(data);
                        alert($obj.msg);
                        if($obj.code==1){
                            daoJiShi();
                            //倒计时
                        }else {
                            $('#sendcode').removeAttr('disabled');
                        }
                    }
                });

        }

        window.onload= initAjaxListener;
        function initAjaxListener(){
            $('#tel').on('change',function() {
                var par= {};
                par.phonenum= $('#tel').val();
                $.ajax({
                    type: 'post',
                    url: "<?php echo '#';?>",
                    data: par
                }).done(function (data) {
                    if(data == 1){
                        $('#verify-status').html("此电话号码已经存在");
                    }else{
                        $('#verify-status').html("");
                    }
                });
            });

        };
    </script>
    </body>
    </html>