<?php
namespace Admin\Model;
use Think\Model;
class SmsModel extends Model
{
    public function ip_address()
    {
        if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
            $ip_address = $_SERVER["HTTP_CLIENT_IP"];
        } else if (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
            $ip_address = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
        } else if (!empty($_SERVER["REMOTE_ADDR"])) {
            $ip_address = $_SERVER["REMOTE_ADDR"];
        } else {
            $ip_address = '';
        }
        return $ip_address;
    }

    public function testSMS()
    {
        $http = 'http://www.smswst.com:80/api/httpapi.aspx';        //短信接口
        $uid = 'wangzel';                            //用户账号
        $pwd = '91toufang';                            //密码
        $phone = '13011827890';    //号码
        $AddSing = 'N';
        $action = 'send';
        $content = '验证码:121212。请不要把验证码泄露给任何人。【地产大亨网】';        //内容
        //即时发送
        $res = self::SendSMS_Common($http, $uid, $pwd, $phone, $content, $AddSing, $action);
        //$res = 'test 测试，【地产大亨】';
        //var_dump($res);
        //die;
        return $res;
    }

    public function SendSMS($data)
    {
        $url = 'http://www.smswst.com:80/api/httpapi.aspx?wangzel?91toufang';
        $sms_url = explode("?", $url);
        $http = $sms_url[0];
        $uid = $sms_url[1];
        $pwd = $sms_url[2];
//        if ($data['phone'] == "" && $data['user_id'] > 0) {
//            $sql = "select phone,phone_status from yyd_users_info where user_id='{$data['user_id']}'";
//            $result = $this->db_fetch_array($sql);
//            if ($result['phone_status'] == 1) {
//                $data['phone'] = $result['phone'];
//            }
//        }
        $phone = $data['phone'];
        $data['contents'] = $data['contents'];//.$_G['system']['con_sms_text'];
        $content = $data['contents'];
        $AddSing = 'N';
        $action = 'send';
        $result = self::SendSMS_Common($http, $uid, $pwd, $phone, $content, $AddSing, $action); //$result= self::postSMS($data['phone'],$data['contents']);		//POST方式提交
        //$data['contents'] = iconv('GB2312', 'UTF-8', $data['contents']);
        $toolsms = new ToolSms();
        $toolsms->userid = $data['userid'];
        $toolsms->phone = $data['phone'];
        $toolsms->status = $data['status'];
        $toolsms->contents = $data['contents'];
        $toolsms->code = $data['code'];
        $toolsms->code_status = 0;
        $toolsms->addtime = time();
        $toolsms->addip = $this->ip_address();
        $toolsms->save();
//        $sql = "insert into yyd_approve_smslog set `addtime` = '" . time() . "',`addip` = '" . $this->ip_address() . "',user_id='{$data['user_id']}',status='{$result}',`phone`='{$data['phone']}',`type`='{$data['type']}',`code`='{$data['code']}',`contents`='{$data['contents']}'";
//// echo $sql;
//        $this->db->query($sql);
        return $result;
    }


    public function SendSMS_Common($http, $uid, $pwd, $phone, $content, $AddSing, $action)
    {
        $data = array
        (
            'account' => $uid,                    //用户账号
            'password' => $pwd,            //MD5位32密码,密码和用户名拼接字符
            'mobile' => $phone,                //号码
            'AddSing' => $AddSing,
            'action' => $action,
            //'content' => $content //Encoding::toUTF8($content) //mb_convert_encoding($content,"UTF-8",mb_detect_encoding($content)),			//内容
            'content'=>mb_convert_encoding($content,"GBK","UTF-8"),
        );
        //return $data['content'];
        //return mb_detect_encoding($data['content']);
        //echo "-----dfd---------";
        //var_dump($data);

        $re = self::postSMS_Common($http, $data);            //POST方式提交
        //$re = mb_convert_encoding($re,'UTF-8','ASCII');//mb_detect_encoding($re);

        $xml = simplexml_load_string($re);
        //echo "-----dfd---------";
//        var_dump($xml);
//        object(SimpleXMLElement)#68 (3) {
//        ["taskID"]=>
//         string(7) "2031320"
//        ["remainpoint"]=>
//         string(3) "219"
//        ["successCounts"]=>
//         string(1) "1"
//}
        if ($xml->errorstatus->error[0] . PHP_EOL > 0) {
            return "发送失败! 状态：";//.$xml->errorstatus->remark[0].PHP_EOL;
        } else {
            if ($xml->successCounts[0] . PHP_EOL > 0) {
                return 1;//"发送成功!";
            } else {
                if ($xml->taskID != null) {
                    return "发送失败! taskID:";//.$xml->taskID[0].PHP_EOL;
                }
            }
        }

        return "发送失败!";//+","+$data['password']+","+$data['mobile']+","+$data['content'];

    }

    public static function postSMS_Common($url, $data = '')
    {
        $row = parse_url($url);
        $host = $row['host'];
        $port = $row['port'] ? $row['port'] : 80;
        $file = $row['path'];
        $post = '';
        while (list($k, $v) = each($data)) {
            $post .= rawurlencode($k) . "=" . rawurlencode($v) . "&";    //转URL标准码
        }
        $post = substr($post, 0, -1);
        $len = strlen($post);
        $fp = @fsockopen($host, $port, $errno, $errstr, 10);
        if (!$fp) {
            return "$errstr ($errno)\n";
        } else {
            $receive = '';
            $out = "POST $file HTTP/1.1\r\n";
            $out .= "Host: $host\r\n";
            $out .= "Content-type: application/x-www-form-urlencoded;charset=gb2312\r\n";
            $out .= "Connection: Close\r\n";
            $out .= "Content-Length: $len\r\n\r\n";
            $out .= $post;//mb_convert_encoding($post,'UTF-8');

            //echo "--------------------";
            //var_dump($out);
            fwrite($fp, $out); //fwrite($fp, mb_convert_encoding($out,'UTF-8','ASCII'));
            while (!feof($fp)) {
                $receive .= fgets($fp);
            }
            fclose($fp);
            //return $receive;

            $receive = explode("\r\n\r\n", $receive);
            //echo "-----------111---------";
            //var_dump($receive);
            unset($receive[0]);
            //$xml=simplexml_load_string($receive[1]);
            //return count(exploade("",$receive));
            return implode("", $receive);

        }
    }


    public function check_phonenum($phonenum)
    {
        //判断手机是否正确
        if (!preg_match("/^1[3|4|5|7|8]\d{9}$/", $phonenum)) {
            return FALSE;
        } else {
            return TRUE;
        }

    }

    public function register($data)
    {


    }
}












